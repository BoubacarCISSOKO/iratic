@extends('base')

@section('title', 'La Cotisation')
@section('content')
@include('front.utils')

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<style>
    li,a{
        text-decoration: none;
        font-weight: 900;
    }
</style>

<div class="checkout-main-area reveal fade-right" style="margin-top:145px;">
    <div class="container">

            <form action="{{ route('cotisation.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="col-lg-12 mb-5">
                    <div class="billing-info-wrap mr-50">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-xl-12">

                                <div class="card border1" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h3 class="text-center">DÉTAILS DE LA COTISATION</h3>
                                    <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Nom & Prénom</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="nom" value="{{ Auth::user()->name }}" placeholder="Votre nom" required autocomplete="nom" autofocus class="form-control form-control-lg" />

                                    </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Email</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        @if (Route::has('login'))
                                            @auth
                                            <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ auth()->user()->email }}" placeholder="Votre adresse E-mail" required autocomplete="email">                                                
                                            @else
                                            <label>Email <abbr class="required" title="required">*</abbr></label>
                                            <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" placeholder="Votre adresse E-mail" required autocomplete="email">
                                            @endauth
                                        @endif
                                    </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Ville</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" name="city"  placeholder="Votre ville" required autocomplete="Ville" autofocus class="form-control form-control-lg" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Pays</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="country" placeholder="Votre pays" required autocomplete="pays" autofocus class="form-control form-control-lg" />

                                    </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Adresse</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" name="adress" placeholder="Votre adresse" required autocomplete="adress" autofocus class="form-control form-control-lg" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Téléphone</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" name="phone" placeholder="Votre numéro" required autocomplete="phone" autofocus class="form-control form-control-lg" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Montant</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="select" name="montant" placeholder="entrer montant" required autocomplete="montant" autofocus class="form-control form-control-lg" />

                                        </div>
                                    </div>


                                    <hr class="mx-n3">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <div id='show-me'>
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs btn-group-vertical" role="tablist">
                                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" style="color: #000;">Orange Money</a></li>
                                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="color: #000;">Wave</a></li>
                                                    <li role="presentation"><a href="#messagess" aria-controls="messagess" role="tab" data-toggle="tab" style="color: #000;">Virement</a></li>
                                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" style="color: #000;">Chèque</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-9 pe-5">

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                <input id='watch-me' name='test' type='radio' checked /> 
                                                    Payez simplement vos achats avec Orange Money. <br>
                                                    Vous devez pour cela obtenir un code de paiement: <br>
                                                    - Composez le #144#391# <br>
                                                    - Entrez votre code secret Orange Money <br>
                                                    - Vous recevez ensuite un SMS avec un code de paiement utilisable pendant 15 minutes. <br>
                                                    - Conservez ce code. Il vous sera demandé pour régler votre commande par la suite. <br>
                                                    - Cliquez pour revenir sur le site DSD une fois votre paiement terminé, dans le cas contraire, votre paiement ne sera pas enregistré.
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="profile">
                                                <input id='watch-me' name='test' type='radio' checked /> 
                                                        Wave <br>
                                                        Déposez et retirez gratuitement. <br>
                                                        Payez vos factures sans frais. <br>
                                                        Transferez de l’argent pour 1%.
                                                </div>

                                                <div role="tabpanel" class="tab-pane" id="messagess">
                                                    <input id='watch-me' name='test' type='radio' checked /> 
                                                    VIREMENT <br>
                                                    Au guichet : En vous présentant au guichet de votre banque avec votre pièce d’identité et les informations bancaires du débiteur et du bénéficiaire.
                                                </div>


                                                <div role="tabpanel" class="tab-pane" id="messages">
                                                    <input id='watch-me' name='test' type='radio' checked /> 
                                                    Chèque <br>
                                                    Pour pouvoir encaisser la somme du chèque, son bénéficiaire doit l'endosser, c'est-à-dire le signer au verso, et le remettre à une banque avant ce délai
                                                </div>
                                            </div>

                                        </div>
                                    </div>                     

                                    <div class="col">
                                        <div class="d-grid gap-3">
                                            <button class="btn text-white btn-sm services-icon-wap shadow" type="button" style="background:#1d242d">Faire ma cotisation</button>
                                        </div>
                                    </div>

                                </div>
                                </div>

                            </div>
                        </div>
                                    
                    </div>
                </div>
                
            </form>
    </div>
</div>
@endsection
