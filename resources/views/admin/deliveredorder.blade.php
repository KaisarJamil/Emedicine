@extends('layouts.backend.app')
@section('title','Delivered Orders')



@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Delivered Orders</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>User Id</th>
                                <th>User Name</th>
                                <th>Medicine Id</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>11</td>
                                <td>EST1</td>
                                <td><img width="28" height="28" src="{{ asset('assets/img/user.jpg') }}" class="rounded-circle m-r-5" alt=""> Shakhawat Hossain</td>
                                <td>35</td>
                                <td><span class="custom-badge status-green">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ESB1</td>
                                <td><img width="28" height="28" src="{{ asset('assets/img/user.jpg') }}" class="rounded-circle m-r-5" alt=""> Kariam </td>
                                <td>1212</td>
                                <td><span class="custom-badge status-green">Delivered</span></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

