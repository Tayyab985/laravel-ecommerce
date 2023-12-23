<?php

namespace App\Http\Controllers;

use App\Models\ResellerDocument;
use App\Notifications\WholeSaleNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Notification;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(10);
        return view('backend.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'string|required|max:30',
            'email'=>'string|required|unique:users',
            'password'=>'string|required',
            'role'=>'required|in:admin,user',
            'status'=>'required|in:active,inactive',
            'photo'=>'nullable|string',
            'phone'=>'required',
            'company'=>'string|required',
            'tax_id'=>'required',
            //'address'=>'string|required',
            //'apartment'=>'string|required',
            'city'=>'string|required',
            'country'=>'string|required',
            'state'=>'string|required',
            'zip'=>'required',
            'comments'=>'string|required'
        ]);

        $data=$request->all();
        $data['password']=Hash::make($request->password);

        if (array_key_exists('ein', $data)) {
            unset($data['ein']);
        }

        $dataTwo = [];
        $status  = User::create($data);

        if ($request->hasFile('ein')) {
            $file = $request->file('ein');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('files', $file_name, 'public');
            // Get the URL of the stored file
            $dataTwo['ein'] = $file_name;
        }

        if(!empty($dataTwo)){
            $dataTwo['user_id'] = $status->id;
            $this->filesAdded($dataTwo);
        }
        
        if($status){
            request()->session()->flash('success','Successfully added user');
        }
        else{
            request()->session()->flash('error','Error occurred while adding user');
        }
        return redirect()->route('users.index');
    }
    
    public function filesAdded(array $data){
        return ResellerDocument::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('document')->where('id', $id)->orderBy('id', 'desc')->firstOrFail();
        return view('backend.users.edit')->with('user', $user);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
       $this->validate($request,
        [
            'name'=>'string|required|max:30',
            'email'=>'string|required|unique:users',
            'password'=>'string|required',
            'role'=>'required|in:admin,user',
            'status'=>'required|in:active,inactive',
            'photo'=>'nullable|string',
            'phone'=>'required',
            'company'=>'string|required',
            'tax_id'=>'required',
            //'address'=>'string|required',
            //'apartment'=>'string|required',
            'city'=>'string|required',
            'country'=>'string|required',
            'state'=>'string|required',
            'zip'=>'required',
            'comments'=>'string|required'
        ]);
        $data=$request->all();

        if($request->status == 'active'){
            Notification::send($user, new WholeSaleNotification('Your account has been activated.'));
        }
        $dataTwo = [];
        $status=$user->fill($data)->save();

        if (array_key_exists('ein', $data)) {
            unset($data['ein']);
        }

        if ($request->hasFile('ein')) {
            //dd('here');
            $file = $request->file('ein');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('files', $file_name, 'public');
            // Get the URL of the stored file
            $dataTwo['ein'] = $file_name;
        }

        if(!empty($dataTwo)){
            $dataTwo['user_id'] = $id;
            $this->filesUpdated($dataTwo);
        }
        
        if($status){
            request()->session()->flash('success','Successfully updated');
        }
        else{
            request()->session()->flash('error','Error occured while updating');
        }
        return redirect()->route('users.index');

    }

    public function filesUpdated(array $data){
        $resellerDocument = ResellerDocument::updateOrcreate(
            ['user_id' => $data['user_id']],
            $data
        );
        return $resellerDocument;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=User::findorFail($id);
        $status=$delete->delete();
        if($status){
            request()->session()->flash('success','User Successfully deleted');
        }
        else{
            request()->session()->flash('error','There is an error while deleting users');
        }
        return redirect()->route('users.index');
    }
}
