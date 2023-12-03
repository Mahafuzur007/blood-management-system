@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">All User Information</h4>
                    <a href="{{route('users.create')}}" class="btn btn-info btn-sm"><i class="fa fa"></i> Add New
                        User</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover display" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="serial">SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($users as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->role->name ?? 'none'}}</td>
                                    <td>
                                        <a href="{{route('users.edit', ['user' => $user->id])}}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{route('users.show', ['user' => $user->id])}}"
                                            class="btn btn-info btn-sm">Show</a>
                                        <form action="{{route('users.destroy', ['user' => $user->id])}}" method="POST"
                                            style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                        {{-- {{ $users->links() }} --}}
                    </div> <!-- /.table-stats -->
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection