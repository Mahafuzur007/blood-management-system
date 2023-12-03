@extends('admin.layout.master')

@section('content')
<div class="request_area">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="box-title">Post Office</h4>
                    <a href="{{route('pso.create')}}" class="btn btn-info btn-sm"><i class="fa fa"></i> Add
                        Post Office</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover display" id="MyTable">
                            <thead>
                                <tr>
                                    <th class="serial">SL</th>
                                    <th>Divison</th>
                                    <th>District</th>
                                    <th>Upazilla</th>
                                    <th>PSO</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($postoffices as $postoffice)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$postoffice->divison->name ?? 'none'}}</td>
                                    <td>{{$postoffice->district->name ?? 'none'}}</td>
                                    <td>{{$postoffice->upazilla->name ?? 'none'}}</td>
                                    <td>{{$postoffice->name}}</td>
                                    <td>
                                        <form action="{{route('pso.destroy', ['pso' => $postoffice->id])}}"
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