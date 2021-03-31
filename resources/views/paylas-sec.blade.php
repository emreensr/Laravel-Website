@extends('welcome')
@include('header')
@section('content')
<div class="card" >
    <div class="card-body">
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-4 mb-4"> 
                <div class="card"> 
  
                    <div class="card-body"> 
                        <h5 class="card-title">Kardeşim Ol!</h5>  
                        <p class="card-text"> 
                            İhtiyaç sahiplerine ürün bağışlamak istiyorum.
                        </p> 
  
                        <a href="<?= url('ihtiyac-ekle'); ?>" class="btn btn-primary">Paylaş</a>
                    </div> 
                </div> 
            </div> 

            <div class="col-lg-4 mb-4"> 
                <div class="card"> 
  
                    <div class="card-body"> 
                        <h5 class="card-title">Kardeşim Ol!</h5> 
                        <p class="card-text"> 
                        Ders vermek istiyorum.
                        </p> 
                        
                        <a href="<?= url('ders-ekle'); ?>" class="btn btn-primary" >Paylaş</a>

                    </div> 
                </div> 
            </div> 
        </div> 
    </div>
    </div> 
    </div>
@endsection
@include('footer')