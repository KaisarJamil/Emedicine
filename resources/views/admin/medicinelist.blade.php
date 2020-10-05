@extends('layouts.backend.app')
@section('title','Medicine List')



@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Medicine List</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('admin.add.medicine') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Medicine</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table class="table table-border table-striped custom-table datatable mb-0">
                            <thead>
                            <tr>
                                <th width="10%">Medicine No.</th>
                                <th width="10%">Name</th>
                                <th width="10%">Company</th>
                                <th width="10%">Price</th>
                                <th width="15%">Description</th>
                                <th width="10%">Image</th>
                                <th width="5%" class="text-right">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($medicines as $key=>$medicine)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $medicine->name }}</td>
                                <td>{{ $medicine->company->name }}</td>
                                <td>{{ $medicine->price }}</td>
                                <td>{{ $medicine->description }}</td>
                                <td class="center">
                                    <img src="{{ asset('storage/medicine/'.$medicine->image) }}" width="50px;" height="50px;">
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('admin.edit.medicine',$medicine->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('admin.delete.medicine',$medicine->id) }}" data-toggle="modal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

