@extends('base')

@section('content')
@include('front.utils2')
<style>
.border2{
    border-radius: 8px !important;
  border-bottom: 10px solid #0358c0 !important;
}
</style>
    <div class="px-4 px-lg-5 onglet" style="margin-top: 115px;">
        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal">
            <div class="card-body">
                   
                    <div class="row">
                        <div class="col-12 mb-3">
                            <img class="img-fluid" src="{{url('_assets/dispositif.png')}}" alt="Image">
                        </div> 
                    </div>
                </div>
            </div>
        </section>


        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal">
            <div class="card-body">
                <div class="row">
                        <h2 class="h5 mt-2 text-center">Policy Hack / Partenaires</h2>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 pb-2">
                                    <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                        <p class="h5 m-2" style="text-align: justify;">
                                        <ul style="text-align: justify;">
                                            <li><span style="font-weight: bold;">Appel à partenariat</span> </li>
                                        </ul> 
                                        <ul style="text-align: justify;">
                                            <li><span style="font-weight: bold;">Devenir un partenaire</span> </li>
                                        </ul>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>

                </div>
            </div>
        </section>
    
    </div>

@endsection
