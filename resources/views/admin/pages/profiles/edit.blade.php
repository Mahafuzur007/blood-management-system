@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Edit Profile</h4>
                    <a href="{{route('profiles.index')}}" class="btn btn-info btn-sm"><i class="fa fa-bars"></i>Go
                        Back</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <div class="col-8 offset-2">
                            <form action="{{route('profiles.update',['profile'=> $profile->id] )}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="blood">Name</label>
                                    <input type="Text" name="name" value="{{ old('name',$profile->user->name)}}"
                                        class="form-control form-control-sm" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="name">Gender</label>
                                    <input type="Text" name="gender" value="{{ old('name',$profile->gender)}}"
                                        class="form-control form-control-sm" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="name">Age</label>
                                    <input type="Text" name="age" value="{{ old('name',$profile->age)}}"
                                        class="form-control form-control-sm" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="name">DOB</label>
                                    <input type="date" name="dob" value="{{ old('name',$profile->dob)}}"
                                        class="form-control form-control-sm" id="dob">
                                </div>

                                <div class="form-group">
                                    <label for="name">last Donate Date</label>
                                    <input type="date" name="last_donate" value="{{ old('name',$profile->last_donate)}}"
                                        class="form-control form-control-sm" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="blood">Blood Group</label>
                                    <input type="Text" name="group" value="{{ old('name',$profile->groups->group)}}"
                                        class="form-control form-control-sm" id="group">
                                </div>

                                <div class="form-group">
                                    <label for="name">Total Donation</label>
                                    <input type="text" name="donation_count"
                                        value="{{ old('name',$profile->donation_count)}}"
                                        class="form-control form-control-sm" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="blood">Divison</label>
                                    <select class="form-control form-control-sm" name="divison" id="">

                                        <option value="">Select Divison</option>
                                        @foreach ($divisons as $divisonId => $divisonName)
                                        <option value="{{$divisonId}}" @if ($profile->division_id == $divisonId)
                                            selected
                                            @endif> {{$divisonName}} </option>
                                        @endforeach
                                    </select>
                                    @error('division_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="blood">District</label>
                                    <select class="form-control form-control-sm" name="district" id="">

                                        <option value="">Select district</option>
                                        @foreach ($districts as $districtId => $districtName)
                                        <option value="{{$districtId}}" @if ($profile->district_id == $districtId)
                                            selected
                                            @endif> {{$districtName}} </option>
                                        @endforeach
                                    </select>
                                    @error('district_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="blood">Upazilla</label>
                                    <select class="form-control form-control-sm" name="upazilla" id="">

                                        <option value="">Select upazilla</option>
                                        @foreach ($upazillas as $upazillaId => $upazillaName)
                                        <option value="{{$upazillaId}}" @if ($profile->upazillas_id == $upazillaId)
                                            selected
                                            @endif> {{$upazillaName}} </option>
                                        @endforeach
                                    </select>
                                    @error('upazillas_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="blood">Post Office</label>
                                    <select class="form-control form-control-sm" name="postOffice" id="">

                                        <option value="">Select Post Office</option>
                                        @foreach ($postOffices as $postOfficeId => $postOfficeName)
                                        <option value="{{$postOfficeId}}" @if ($profile->post_office_id ==
                                            $postOfficeId)
                                            selected
                                            @endif> {{$postOfficeName}} </option>
                                        @endforeach
                                    </select>
                                    @error('post_office_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Village Name</label>
                                    <input type="Text" name="village" value="{{ old('name',$profile->village)}}"
                                        class="form-control form-control-sm" id="name">
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