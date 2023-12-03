@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Upazilla</h4>
                    <a href="{{route('upazillas.create')}}" class="btn btn-info btn-sm"><i class="fa fa"></i> Add New
                        Upazilla</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover display" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="serial">SL</th>
                                    <th>District</th>
                                    <th>Divison</th>
                                    <th>Upazilla</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($upazillas as $upazilla)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$upazilla->name}}</td>
                                    <td>{{$upazilla->district->name ?? 'none'}}</td>
                                    <td>{{$upazilla->divison->name ?? 'none'}}</td>
                                    <td>
                                        <form action="{{route('upazillas.destroy', ['upazilla' => $upazilla->id])}}"
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