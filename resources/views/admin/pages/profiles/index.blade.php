@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">All Members Information</h4>
                    <a href="{{route('profiles.create')}}" class="btn btn-info btn-sm"><i class="fa fa"></i> Add New
                        Profile</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <table class="table table-hover display" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="avatar">Image</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>DOB</th>
                                    <th>Blood Group</th>
                                    <th>Divison</th>
                                    <th>District</th>
                                    <th>Upazilla</th>
                                    <th>Post Office</th>
                                    <th>Village</th>
                                    <th>Last Donate Date</th>
                                    <th>Donation Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($profiles as $profile)
                                <tr>
                                    <td class="serial">1</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <img class="rounded-circle"
                                                src="{{ asset('storage/images/' . $profile->image) }}" alt=""
                                                width="30px" height="30px">
                                        </div>
                                    </td>
                                    <td>{{$profile->user->name}}</td>
                                    <td>{{$profile->gender}}</td>
                                    <td>{{$profile->age}}</td>
                                    <td>{{$profile->dob}}</td>
                                    <td>{{$profile->groups->group}}</td>
                                    <td>{{$profile->divisons->name ?? 'none'}}</td>
                                    <td>{{$profile->districts->name ?? 'none'}}</td>
                                    <td>{{$profile->upazillas->name ?? 'none'}}</td>
                                    <td>{{$profile->postOffices->name ?? 'none'}}</td>
                                    <td>{{$profile->village}}</td>
                                    <td>{{$profile->last_donate}}</td>
                                    <td>{{$profile->donation_count}}</td>
                                    <td>
                                        <a href="{{route('profiles.edit', ['profile' => $profile->id])}}"
                                            class="btn btn-sm btn-primary">Edit</a>

                                        <a href="{{route('profiles.show', ['profile' => $profile->id])}}"
                                            class="btn btn-sm btn-info">Show</a>
                                        {{-- @can('delete-profile') --}}
                                        <form action="{{route('profiles.destroy', ['profile' => $profile->id])}}"
                                            method="POST" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                        {{-- @endcan --}}
                                    </td>
                                </tr>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection