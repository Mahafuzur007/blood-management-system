@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Add New Post Office</h4>
                    <a href="{{route('pso.index')}}" class="btn btn-info btn-sm"><i class="fa fa-bars"></i>
                        Post Offices
                        List</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <div class="col-8 offset-2">
                            <form action="{{route('pso.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="blood">Divison</label>
                                    <select class="form-control form-control-sm" name="divison" id="divison">
                                        @foreach ($divisons as $divison)
                                        <option value="{{ $divison->id }}">{{$divison->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="blood">District</label>
                                    <select class="form-control form-control-sm" name="district" id="district">
                                        @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="blood">Upazilla</label>
                                    <select class="form-control form-control-sm" name="upazilla" id="district">
                                        @foreach ($upazillas as $upazilla)
                                        <option value="{{ $upazilla->id }}">{{$upazilla->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Post Office</label>
                                    <input type="Text" name="name" class="form-control form-control-sm" id="name"
                                        placeholder="Enter Upazilla Name">
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