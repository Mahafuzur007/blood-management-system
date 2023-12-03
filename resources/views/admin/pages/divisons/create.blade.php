@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Add New Divison</h4>
                    <a href="{{route('divisons.index')}}" class="btn btn-info btn-sm"><i class="fa fa-bars"></i> Divison
                        List</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <div class="col-8 offset-2">
                            <form action="{{route('divisons.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Divison Name</label>
                                    <input type="Text" name="name" class="form-control form-control-sm" id="name"
                                        placeholder="Enter Divison Name">
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