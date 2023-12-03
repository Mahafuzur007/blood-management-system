@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Create Profile</h4>
                    <a href="{{route('profiles.index')}}" class="btn btn-info btn-sm"><i class="fa fa-bars"></i>Go
                        Back</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <div class="col-8 offset-2">
                            <form action="{{route('profiles.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="blood">Name</label>
                                    <select class="form-control form-control-sm" name="name" id="name"
                                        placeholder="Enter Name">
                                        @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Gender</label>
                                    <select class="form-control form-control-sm" name="gender" id="">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Age</label>
                                    <input type="text" name="age" class="form-control form-control-sm" id="">
                                </div>

                                <div class="form-group">
                                    <label for="name">DOB</label>
                                    <input type="date" name="dob" class="form-control form-control-sm" id="">
                                </div>

                                <div class="form-group">
                                    <label for="name">last Donate Date</label>
                                    <input type="date" name="last_donate" class="form-control form-control-sm" id="">
                                </div>

                                <div class="form-group">
                                    <label for="blood">Blood Group</label>
                                    <select class="form-control form-control-sm" name="group" id="">
                                        @foreach ($bloods as $blood)
                                        <option value="{{ $blood->id }}">{{$blood->group}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Total Donation</label>
                                    <input type="number" name="donation_count" class="form-control form-control-sm"
                                        id="">
                                </div>

                                <div class="form-group">
                                    <label for="blood">Divison</label>
                                    <select class="form-control form-control-sm" name="divison" id="">
                                        @foreach ($divisons as $divison)
                                        <option value="{{ $divison->id }}">{{$divison->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="blood">District</label>
                                    <select class="form-control form-control-sm" name="district" id="">
                                        @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="blood">Upazilla</label>
                                    <select class="form-control form-control-sm" name="upazilla" id="">
                                        @foreach ($upazillas as $upazilla)
                                        <option value="{{ $upazilla->id }}">{{$upazilla->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="blood">Post Office</label>
                                    <select class="form-control form-control-sm" name="post_office" id="">
                                        @foreach ($postOffices as $postOffice)
                                        <option value="{{ $postOffice->id }}">{{$postOffice->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Village Name</label>
                                    <input type="Text" name="village" class="form-control form-control-sm" id=""
                                        placeholder="Enter Village Name">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="file" name="image" accept="image/*" />
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection