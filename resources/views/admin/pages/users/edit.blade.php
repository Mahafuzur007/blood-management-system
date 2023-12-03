@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Dashboard</h4>
                    <a href="{{route('users.index')}}" class="btn btn-info btn-sm"><i class="fa fa-bars"></i> User
                        List</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <div class="col-8 offset-2">
                            <form action="{{route('users.update',['user'=> $user->id] )}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="Text" name="name" value="{{ old('name',$user->name)}}"
                                        class="form-control form-control-sm" id="name" placeholder="Enter Name">
                                </div>

                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="Text" name="email" value="{{ old('email',$user->email)}}"
                                        class="form-control form-control-sm" id="email"
                                        placeholder="Enter Email Address">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control form-control-sm" name="phone" id="phone"
                                        value="{{ old('mobile',$user->mobile)}}" placeholder="Enter Phone">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="phone">Password</label>
                                    <input type="text" class="form-control form-control-sm" name="password" id="phone"
                                        value="{{ old('password',$user->password)}}" placeholder="Password"
                                        value="password">
                                </div> --}}
                                <div class="form-group">

                                    <label for="role_id">Role</label>
                                    <select id="role_id" name="role" value="" class="form-control">
                                        <option value="">Select Role</option>
                                        @foreach ($roles as $roleId => $roleName)
                                        <option value="{{$roleId}}" @if ($user->role_id == $roleId) selected
                                            @endif> {{$roleName}} </option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="blood">Role</label>
                                    <select class="form-control form-control-sm" name="role">
                                        @foreach ($roles as $role)
                                        <option {{ old('role_id')==$role->id ? "selected" : "" }} value="{{ $role->id
                                            }}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div> <!-- /.table-stats -->
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection