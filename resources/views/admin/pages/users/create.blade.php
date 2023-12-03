@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Add New Donor</h4>
                    <a href="{{route('users.index')}}" class="btn btn-info btn-sm"><i class="fa fa-bars"></i> Users
                        List</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <div class="col-8 offset-2">
                            <form action="{{route('users.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="Text" name="name" class="form-control form-control-sm" id="name"
                                        placeholder="Enter Name">
                                </div>

                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="Text" name="email" class="form-control form-control-sm" id="email"
                                        placeholder="Enter Email Address">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control form-control-sm" name="phone" id="phone"
                                        placeholder="Enter Phone">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Password</label>
                                    <input type="text" class="form-control form-control-sm" name="password" id="phone"
                                        placeholder="Password" value="password">
                                </div>

                                <div class="form-group">
                                    <label for="blood">Role</label>
                                    <select class="form-control form-control-sm" name="role" id="role">
                                        @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
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