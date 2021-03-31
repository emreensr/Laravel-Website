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
    <form action="{{route('ihtiyacstore')}}"   method="POST" enctype='multipart/form-data'>
    @csrf 
    <div class="form-row">
  <div class="form-group col-md-12">
      <label for="inputEmail4">Adınız *</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" value="{{old('email')}}" placeholder="Adınız">
    </div>
  <div class="form-group col-md-12">
      <label for="inputPassword4">Ne Bağışlamak İstersin? *</label>
      <input type="text" name="donate" class="form-control" id="name" value="{{old('name')}}" placeholder="Örn: Bilgisayar">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">İletişim *</label>
      <input type="text" name="contact" class="form-control" id="inputEmail4" value="{{old('email')}}" placeholder="İletişim">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Ürün Modeli-Türü Nedir? *</label>
      <input type="text" name="model" class="form-control" id="inputEmail4" value="{{old('email')}}" placeholder="Ürün Modeli">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Görsel</label>
      <input type="file" name="image" class="form-control" id="image"  placeholder="Görseliniz">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Mesaj *</label>
      <input type="textarea" name="message" class="form-control" id="inputEmail4" value="{{old('email')}}" placeholder="Mesajınız">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Bize Nasıl Ulaştınız? *</label>
      <input type="text" name="howcontact" class="form-control" id="inputEmail4" value="{{old('email')}}" >
    </div>
   
  <button type="submit" class="btn btn-success btn-sm btn-block">Gönder</button>
</form>
</div>
</div>


@endsection
@include('footer')