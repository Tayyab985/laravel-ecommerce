@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add User</h5>
    <div class="card-body">
      <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Name</label>
        <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{old('name')}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-form-label">Email</label>
          <input id="inputEmail" type="email" name="email" placeholder="Enter email"  value="{{old('email')}}" class="form-control">
          @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
            <label for="inputPassword" class="col-form-label">Password</label>
          <input id="inputPassword" type="password" name="password" placeholder="Enter password"  value="{{old('password')}}" class="form-control">
          @error('password')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Photo</label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
       
        <div class="form-group">
            <label for="role" class="col-form-label">Role</label>
            <select name="role" class="form-control">
                <option value="">-----Select Role-----</option>
                    <option value="user">WholeSaler</option>
                    <option value="admin">Admin</option>
            </select>
          @error('role')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <select name="status" class="form-control">
            <option value="">-----Select Status----</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="role" class="col-form-label">Upload Documents</label>
          <input name="ein" type="file" id="ein" class="form-control">
          @error('ein')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
          
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Phone</label>
          <input id="inputTitle" type="number" name="phone" placeholder="Enter Phone"  value="{{old('phone')}}" class="form-control">
          @error('phone')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Company</label>
          <input id="inputTitle" type="text" name="company" placeholder="Enter Company"  value="{{old('company')}}" class="form-control">
          @error('company')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Tax Id</label>
          <input id="inputTitle" type="text" name="tax_id" placeholder="Enter Tax Id"  value="{{old('tax_id')}}" class="form-control">
          @error('tax_id')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Billing Address</label>
          <input id="inputTitle" type="text" name="address" placeholder="Enter Billing Address"  value="{{old('address')}}" class="form-control">
          @error('address')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Apartment</label>
          <input id="inputTitle" type="text" name="apartment" placeholder="Enter Apartment"  value="{{old('apartment')}}" class="form-control">
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">City</label>
          <input id="inputTitle" type="text" name="city" placeholder="Enter City"  value="{{old('city')}}" class="form-control">
          @error('city')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">State</label>
          <input id="inputTitle" type="text" name="state" placeholder="Enter State"  value="{{old('state')}}" class="form-control">
          @error('state')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Country</label>
          <input id="inputTitle" type="text" name="country" placeholder="Enter Country"  value="{{old('country')}}" class="form-control">
          @error('country')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Zip</label>
          <input id="inputTitle" type="text" name="zip" placeholder="Enter Zip"  value="{{old('zip')}}" class="form-control">
          @error('zip')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Comments</label>
          <input id="inputTitle" type="text" name="comments" placeholder="Enter Comments"  value="{{old('comments')}}" class="form-control">
          @error('comments')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Shipping Address</label>
          <input id="inputTitle" type="text" name="shipping_address" placeholder="Enter Shipping Address"  value="{{old('shipping_address')}}" class="form-control">
          @error('shipping_address')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
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