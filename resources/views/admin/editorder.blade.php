@extends('layouts.backend.app')
@section('title','Pending Order')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Pending Orders</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <form>
                        <div class="form-group">
                                <label class="display-block">Appointment Status</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="product_active" value="option1" checked>
									<label class="form-check-label" for="product_active">
									Pending
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="product_inactive" value="option2">
									<label class="form-check-label" for="product_inactive">
									Delivered
									</label>
								</div>
                            </div>
                        
                        <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

