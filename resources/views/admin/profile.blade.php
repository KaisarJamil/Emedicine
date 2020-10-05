@extends('layouts.backend.app')

@section('title','Admin Profile')


@push('css')
@endpush


@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-7 col-6">
                    <h4 class="page-title">My Profile</h4>
                </div>
            </div>
            <div class="card-box profile-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="profile-img-wrap">
                                <div class="profile-img">
                                    <a href="#"><img class="avatar" src="{{ asset('assets/img/34.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">Kaisar Jamil</h3>
                                            <div class="staff-msg"><a href="#" class="btn btn-primary">Edit Profile</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <span class="title">Phone:</span>
                                                <span class="text"><a href="">+880 1234567891</a></span>
                                            </li>
                                            <li>
                                                <span class="title">Email:</span>
                                                <span class="text"><a href=""><span class="__cf_email__" data-cfemail="e98a9b809a9d8087888e9b869f8c9aa98c91888499858cc78a8684">akjamil2009@gmail.com</span></a></span>
                                            </li>
                                            <li>
                                                <span class="title">Address:</span>
                                                <span class="text">Senpara Parbata,s Road-Mirpur 10, Dhaka City,Bangladesh</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('js')
@endpush
