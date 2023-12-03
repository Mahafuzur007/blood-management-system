@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Divisons</h4>
                    <a href="{{route('divisions.create')}}" class="btn btn-info btn-sm"><i class="fa fa"></i> Add New
                        Divison</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover display" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="serial">SL</th>
                                    <th>Divison</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($divisons as $divison)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$divison->name}}</td>
                                    <td>
                                        <form action="{{route('divisions.destroy', ['division' => $divison->id])}}"
                                            method="POST" style="display: inline">
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
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection