@extends('layouts.main.dashboard-layout')

@section('content')
<div class="menu-al mt-2 mb-5">
    <div class="row mx-auto " >
        <div class="col-md-4 mt-2 mb-3 text-center">
            <div class="card p-3" style="background-color: #ADD5A6;">
                <div class="card-img">
                    <img src="{{ asset('img/add_to_photos.svg') }}" alt="" style="color: #70B663; padding: 20px" width="150">
                </div>
                <div class="card-header-pills">
                    <a href="{{ route('admin.add') }}" class="btn h-auto btn-success w-75" style="color: #d6ead2; background-color: #349721; font-size: 24px">Add Product</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-2 mb-3 text-center">
            <div class="card p-3" style="background-color: #ADD5A6;">
                <div class="card-img-top">
                    <img src="{{ asset('img/local_mall.svg') }}" alt="" style="color: #70B663; padding: 20px" width="150">
                </div>
                <div class="card-header-pills">
                    <a href="{{ route('admin.update') }}" class="btn h-auto btn-success w-75" style="color: #d6ead2; background-color: #349721; font-size: 24px">Update Product</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-2 mb-3 text-center">
            <div class="card p-3" style="background-color: #ADD5A6;">
                <div class="card-img-top">
                    <img src="{{ asset('img/remove_red_eye.svg') }}" alt="" style=" padding: 20px; " width="150">
                </div>
                <div class="card-header-pills">
                    <a href="{{route('admin.view') }}" class="h-auto  btn w-75" style="color: #d6ead2; background-color: #349721; font-size: 24px">View Product</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection