@extends('base')

@section('content')
@include('front.utils')
<style>
.border2{
    border-radius: 8px !important;
  border-bottom: 10px solid #0358c0 !important;
}
</style>
    <div class="px-4 px-lg-5" style="margin-top: 115px;">
       

       <div class="card my-3 py-2 text-center border2">
           <div class="card-body">
               <div class="row">

                    <div class="col-12 mb-3 reveal fade-left">
                        <iframe style="margin-top: 3px;color: #3d4045;width: 100%; 	height: 250px;" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6512010.61060893!2d-16.1055917811394!3d11.679782147625358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xef3b5e1894322a7%3A0xd52a5de704439275!2s%C3%89cole%20de%20Verma!5e1!3m2!1sfr!2ssn!4v1618835418484!5m2!1sfr!2ssn" ></iframe>

                    </div>
                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5 reveal fade-left">
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
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->

                        </form>

                        <div class="d-grid gap-2 mt-3">
                            <button class="btn text-white testlog" type="button" style="background:#0358c0">Valider</button>
                        </div>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center reveal fade-right">
                        <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Dakar, Sénégal</p>
                            </li>

                            <li><i class="fas fa-phone"></i>
                                <p>33 840 09 39 / +221 77 455 34 82 / +221 78 187 49 11</p>
                            </li>
                            <li><i class="fas fa-envelope"></i>
                                <p>iratic@iratic.org / afpolab@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                        
                </div>

            </div>
        </div>

    </div>

@endsection