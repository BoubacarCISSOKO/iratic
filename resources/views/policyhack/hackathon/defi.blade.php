@extends('base')

@section('content')
@include('front.utils')
<style>
.border2{
    border-radius: 8px !important;
  border-bottom: 10px solid #1d242d !important;
}
</style>
    <div class="px-4 px-lg-5 onglet" style="margin-top: 115px;">
        <section id="about">
            <div class="card my-3 py-2 text-center border2 reveal fade-right">
            <div class="card-body">
                <div class="row">
                        <h2 class="h5 mt-2 text-center">Policy Hack / Défi</h2>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 pb-2">
                                    <div class="h-100 p-5 services-icon-wap shadow" style="text-align: justify !important;">
                                        <p class="h5 m-2" style="text-align: justify;">
                                        <span style="font-weight: bold; margin-top:2px">Soumettez votre proposition en remplissant le formulaire ci- après</span> <br>
                                        </p>

                                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                                            <!--Grid row-->
                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">

                                                        <label for="name" class="">Prénom & Nom</label>
                                                        <input type="text" id="name" name="name" class="form-control">
                                                        
                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">

                                                        <label for="email" class="">Votre e-mail</label>
                                                        <input type="text" id="email" name="email" class="form-control">
                                                        
                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">

                                                        <label for="subject" class="">Votre subjet</label>
                                                        <input type="text" id="subject" name="subject" class="form-control">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-12">

                                                    <div class="md-form">

                                                        <label for="message">Votre message</label>
                                                        <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            <!--Grid row-->

                                            </form>

                                            <div class="d-grid gap-2 mt-3">
                                                <a class="btn text-white btn-sm testlog" style="background:#1d242d"  href="#">
                                                    Soumettre
                                                </a>
                                            </div>
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
