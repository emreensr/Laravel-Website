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
                            İhtiyaç sahibiyim ve ürün almak istiyorum.
                        </p> 
  
                        <a href="<?= url('ihtiyac-edin'); ?>" class="btn btn-primary">EDİN</a>
                    </div> 
                </div> 
            </div> 

            <div class="col-lg-4 mb-4"> 
                <div class="card"> 
  
                    <div class="card-body"> 
                        <h5 class="card-title">Kardeşim Ol!</h5> 
                        <p class="card-text"> 
                        Ders almak istiyorum.
                        </p> 
                        
                        <a href="<?= url('ders-edin'); ?>" class="btn btn-primary" >EDİN</a>

                    </div> 
                </div> 
            </div> 
        </div> 
    </div>
    </div> 
    </div>
@endsection
@include('footer')