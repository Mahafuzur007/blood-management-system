@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Add New District</h4>
                    <a href="{{route('districts.index')}}" class="btn btn-info btn-sm"><i class="fa fa-bars"></i>
                        District
                        List</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <div class="col-8 offset-2">
                            <form action="{{route('districts.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">District Name</label>
                                    <input type="Text" name="name" class="form-control form-control-sm" id="name"
                                        placeholder="Enter District Name">
                                </div>
                                <div class="form-group">
                                    <label for="blood">Divison</label>
                                    <select class="form-control form-control-sm" name="divison" id="divison">
                                        @foreach ($divisons as $divison)
                                        <option value="{{ $divison->id }}">{{$divison->name}}</option>
                                        @endforeach
                                    </select>
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