@extends('base')

@section('content')
@include('front.utils')
<style>
.border2{
    border-radius: 8px !important;
  border-bottom: 10px solid #0358c0 !important;
}
</style>
    <div class="px-4 px-lg-5 onglet" style="margin-top: 115px;">
        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal fade-left">
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
            <div class="card my-3 py-2 text-center border2 reveal fade-right">
                <div class="card-body">
                    <div class="row">
                        <h2 class="h5 mt-2 text-center">Policy Hack</h2>
                        <hr>
                        <div class="col-md-12 col-lg-3 pb-2">
                            <div class="h-100 p-5 services-icon-wap shadow">
                                <h3 class="h5 mt-2 text-center">Policy Hackathon </h3>
                                <p>MODULE DE FORMATION SUR LE HACKATHON DE POLITIQUES</p>
                                <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('policyaccademy.policyHackathon')}}">En savoir +</a>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-3 pb-2">
                            <div class="h-100 p-5 services-icon-wap shadow">
                                <h3 class="h5 mt-2 text-center">Design Thinking</h3>
                                <p>MODULE DE FORMATION SUR LE DESIGN THINKING</p>
                                <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('policyaccademy.designthinking')}}">En savoir +</a>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-3 pb-2">
                            <div class="h-100 p-5 services-icon-wap shadow">
                                <h3 class="h5 mt-2 text-center">Management Agile</h3>
                                <p>MODULE DE FORMATION SUR LE MANAGEMENT AGILE</p>
                                <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('policyaccademy.management')}}">En savoir +</a>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-3 pb-2">
                            <div class="h-100 p-5 services-icon-wap shadow">
                                <h3 class="h5 mt-2 text-center">Policy Design</h3>
                                <p>MODULE DE FORMATION SUR LE POLICY DESIGN</p>
                                <a class="btn text-white btn-sm test" style="background:#0358c0" href="{{route('policyhack.partenaire')}}">En savoir +</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    
    </div>

@endsection
