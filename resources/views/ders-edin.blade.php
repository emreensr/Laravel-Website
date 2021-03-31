@extends('welcome')
@include('header')
@section('content')

@if($errors->any())
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </div>
    @endif
<div class="card">
      <div class="card-body">
    <form action="{{route('dersedinpost')}}"   method="POST" enctype='multipart/form-data'>
    @csrf 
    <div class="form-row">
  <div class="form-group col-md-12">
      <label for="inputEmail4">Adınız *</label>
      <input type="text" name="name" class="form-control" id="inputEmail4"  placeholder="Adınız">
    </div>
  <div class="form-group col-md-12">
      <label for="inputPassword4">Hangi dersi almak istersiniz? *</label>
      <input type="text" name="lesson" class="form-control" id="name" placeholder="Örn: Fizik">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Hangi saatler arasında zaman ayırabilirsiniz? *</label>
      <input type="text" name="time" class="form-control" id="inputEmail4"  placeholder="09:00-11.00">
    </div>
    
    <div class="form-group col-md-12">
      <label for="inputPassword4">İletişim</label>
      <input type="text" name="contact" class="form-control" id="image"  placeholder="İletişim">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Mesaj *</label>
      <input type="textarea" name="message" class="form-control" id="inputEmail4" placeholder="İletişim">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Bize Nasıl Ulaştınız? *</label>
      <input type="text" name="howcontact" class="form-control" id="inputEmail4" >
    </div>
   
  <button type="submit" class="btn btn-success btn-sm btn-block">Gönder</button>
</form>
</div>
</div>


@endsection
@include('footer')