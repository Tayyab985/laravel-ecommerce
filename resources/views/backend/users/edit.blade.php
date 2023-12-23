@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit WholeSaler</h5>
    <div class="card-body">
      <form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Name</label>
        <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$user->name}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-form-label">Email</label>
          <input id="inputEmail" type="email" name="email" placeholder="Enter email"  value="{{$user->email}}" class="form-control">
          @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        {{-- <div class="form-group">
            <label for="inputPassword" class="col-form-label">Password</label>
          <input id="inputPassword" type="password" name="password" placeholder="Enter password"  value="{{$user->password}}" class="form-control">
          @error('password')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div> --}}

        <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Photo</label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$user->photo}}">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        @php 
        $roles=DB::table('users')->select('role')->where('id',$user->id)->get();
        @endphp
        <div class="form-group">
            <label for="role" class="col-form-label">Role</label>
            <select name="role" class="form-control">
                <option value="">-----Select Role-----</option>
                @foreach($roles as $role)
                    <option value="{{$role->role}}" {{(($role->role=='admin') ? 'selected' : '')}}>Admin</option>
                    <option value="{{$role->role}}" {{(($role->role=='user') ? 'selected' : '')}}>WholeSaler</option>
                @endforeach
            </select>
          @error('role')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="role" class="col-form-label">Upload Documents</label>
          <p>
          @if ($user->document && $user->document->ein)
            Current Document: <a href="{{ asset('storage/files/' . $user->document->ein) }}" download>View Document</a>
          @else
            No Document Uploaded
          @endif
        </p>
          <input name="ein" type="file" id="ein" class="form-control">
          @error('ein')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Phone</label>
          <input id="inputTitle" type="number" name="phone" placeholder="Enter Phone"  value="{{$user->phone}}" class="form-control">
          @error('phone')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Company</label>
          <input id="inputTitle" type="text" name="company" placeholder="Enter Company"  value="{{$user->company}}" class="form-control">
          @error('company')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Tax Id</label>
          <input id="inputTitle" type="text" name="tax_id" placeholder="Enter Tax Id"  value="{{$user->tax_id}}" class="form-control">
          @error('tax_id')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Billing Address</label>
          <input id="inputTitle" type="text" name="address" placeholder="Enter Billing Address"  value="{{$user->address}}" class="form-control">
          @error('address')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Apartment</label>
          <input id="inputTitle" type="text" name="apartment" placeholder="Enter Apartment"  value="{{$user->apartment}}" class="form-control">
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">City</label>
          <input id="inputTitle" type="text" name="city" placeholder="Enter City"  value="{{$user->city}}" class="form-control">
          @error('city')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">State</label>
          <input id="inputTitle" type="text" name="state" placeholder="Enter State"  value="{{$user->state}}" class="form-control">
          @error('state')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Country</label>
          <input id="inputTitle" type="text" name="country" placeholder="Enter Country"  value="{{$user->country}}" class="form-control">
          @error('country')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Zip</label>
          <input id="inputTitle" type="text" name="zip" placeholder="Enter Zip"  value="{{$user->zip}}" class="form-control">
          @error('zip')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Comments</label>
          <input id="inputTitle" type="text" name="comments" placeholder="Enter Comments"  value="{{$user->comments}}" class="form-control">
          @error('comments')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Shipping Address</label>
          <input id="inputTitle" type="text" name="shipping_address" placeholder="Enter Shipping Address"  value="{{$user->shipping_address}}" class="form-control">
          @error('shipping_address')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

          <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <select name="status" class="form-control">
                <option value="active" {{(($user->status=='active') ? 'selected' : '')}}>Active</option>
                <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Inactive</option>
            </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush