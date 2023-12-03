@extends('admin.layout.master')

@section('content')
<div class="card mb-3">
    <h4>
        User Details
        <a href="{{route('users.index')}}" class="btn btn-primary btn-small">Go Back</a>
    </h4>
    <div class="row no-gutters">
        <div class="col-md-10">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$user->mobile}}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{$user->role->name ?? 'none'}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection