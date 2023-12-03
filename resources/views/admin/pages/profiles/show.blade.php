@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Profile Details</h4>
                    <a href="{{route('profiles.index')}}" class="btn btn-info btn-sm"><i class="fa fa"></i> Go Back</a>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-10">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <table class="table table-sm">
                                        <div class="card mb-3">
                                            <div class="row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="{{ asset('storage/images/' . $profile->image) }}"
                                                        class="card-img" alt="">
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <table class="table table-sm">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <td>{{$profile->user->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Gender</th>
                                                                            <td>{{$profile->gender}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Age</th>
                                                                            <td>{{$profile->age}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>DOB</th>
                                                                            <td>{{$profile->dob}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Blood Group</th>
                                                                            <td>{{$profile->groups->group}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <table class="table table-sm">
                                                                    <tbody>
                                                                        <tr>
                                                                        <tr>
                                                                            <th>Divison</th>
                                                                            <td>{{$profile->divisons->name ?? 'none'}}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>District</th>
                                                                            <td>{{$profile->districts->name ?? 'none'}}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Upazilla</th>
                                                                            <td>{{$profile->upazillas->name ?? 'none'}}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Post Office</th>
                                                                            <td>{{$profile->postOffices->name ??
                                                                                'none'}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Village</th>
                                                                            <td>{{$profile->village}}</td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <table class="table table-sm">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Last_donate</th>
                                                                            <td>{{$profile->last_donate}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Total Donation</th>
                                                                            <td>{{$profile->donation_count}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection