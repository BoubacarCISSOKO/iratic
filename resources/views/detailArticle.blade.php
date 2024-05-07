@extends('base')

@section('title', 'La Cotisation')
@section('content')
@include('front.utils')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container border1 reveal fade-right" style="margin-top: 125px;">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Rounded Chair</h3>
            <h6 class="card-subtitle">globe type chair for rest</h6>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="https://www.bootdey.com/image/430x600/00CED1/000000" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5">Product description</h4>
                    <p>Lorem Ipsum available,but the majority have suffered alteration in some form,by injected humour,or randomised words which don't look even slightly believable.but the majority have suffered alteration in some form,by injected humour</p>
                   
                    <h3 class="box-title mt-5">Key Highlights</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
                        <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
                        <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful collectibles</li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="box-title mt-5">General Info</h3>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection