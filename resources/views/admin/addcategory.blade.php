@extends('layouts.backend.app')
@section('title','Add Company')



@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Category</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('admin.store.category') }}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                                <label>Category</label>
                            <input class="form-control" type="text" name="name">
                        </div>

                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

