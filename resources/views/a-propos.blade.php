@extends('base')

@section('content')
@include('front.utils')
<style>
    .border2{
        border-radius: 8px !important;
    border-bottom: 10px solid #1d242d !important;
    }
    .img-fluid{
        width: 100%;
        height: 330px;
        margin-top:65px;
        
    }
    
     @media only screen and (max-width: 1000px) {
        .img-fluid{
        width: 100%;
        height: 130px !important;
        margin-top:85px !important;
        }

    };
    
</style>

    <div class="px-4 px-lg-5 onglet" style="margin-top: 115px;">
       <div class="card my-3 py-2 text-center border2">
           <div class="card-body">
               
               <div class="row">
                    <div class="col-12 mb-3 reveal fade-top">
                        <img class="img-fluid" src="{{url('_assets/10 (2).jpeg')}}" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <h2 class="h5 mt-2 text-center">A propos de DSD</h2>
                            <hr>
                            <div class="col-md-12 col-lg-6 pb-2 reveal fade-left">
                                <div class="h-100 p-5 services-icon-wap shadow">
                                    <p class="h5 m-2" style="text-align: justify;">
                                        Lorem Ipsum available,but the majority have suffered alteration in 
                                        some form,by injected humour,or randomised words which don't look 
                                        even slightly believable.but the majority have suffered alteration 
                                        in some form,by injected humour
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-6 pb-2 reveal fade-right">
                                <div class="h-100 p-5 services-icon-wap shadow">
                                    <p class="h5 m-2" style="text-align: justify;">
                                        Lorem Ipsum available,but the majority have suffered alteration in 
                                        some form,by injected humour,or randomised words which don't look 
                                        even slightly believable.but the majority have suffered alteration 
                                        in some form,by injected humour
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                        
                </div>

            </div>
        </div>

    </div>

@endsection

