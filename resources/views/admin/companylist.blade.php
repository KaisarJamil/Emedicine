@extends('layouts.backend.app')
@section('title','Company List')



@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Company List</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('admin.add.company') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Company</a>
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
                                <th>Serial No.</th>
                                <th>Company Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($companies as $key=>$company)
                               <tr>
                                   <td>{{ $key+1 }}</td>
                                   <td>{{ $company->name }}</td>
                                   <td><a href="{{ route('admin.delete.company',$company->id) }}">Delete</a></td>
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

