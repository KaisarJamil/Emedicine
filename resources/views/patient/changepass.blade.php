@extends('layouts.frontend.patientprofile.app')
@section('title','Change Password')



@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Change Password</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="post" action="#">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label>Old Password</label>
                            <input class="form-control" type="password" name="oldpass">
                        </div>

                        <div class="form-group">
                                <label>New Password</label>
                            <input class="form-control" type="password" name="newpass">
                        </div>

                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input class="form-control" type="password" name="confirmpass">
                        </div>

                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

