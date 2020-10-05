@extends('layouts.backend.app')
@section('title','Add Medicine')



@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add New Medicine</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success')  }}
                        </div>
                    @endif
                    <form action="{{ route('admin.store.medicine') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Company</label>
                                    <select class="select @error('company') is-invalid @enderror" name="company">
                                        @error('company')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <option value="#">Select one</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control @error('price') is-invalid @enderror" type="number" min="1" name="price">
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Upload Image</label>
                            <div>
                                <input class="form-control" type="file" name="image">
                                <small class="form-text text-muted">Max. file size: 5 MB. Allowed images: jpg, gif, png.</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Medicine Description</label>
                            <textarea cols="30" rows="6" class="form-control @error('description') is-invalid @enderror" type="text" min="1" name="description"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
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

