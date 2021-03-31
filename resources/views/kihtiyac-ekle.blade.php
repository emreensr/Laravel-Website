@extends('welcome')
@include('header')
@section('content')


<div class="card">
      <div class="card-body">
    <form action="{{route('ihtiyacgonder')}}"   method="POST" enctype='multipart/form-data'>
    @csrf 
    <div class="form-row">
  <div class="form-group col-md-12">
      <label for="inputEmail4">Adı *</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" value="{{old('email')}}" placeholder="Adınız">
    </div>
  <div class="form-group col-md-12">
      <label for="inputPassword4">Bağış Türü</label>
      <input type="text" name="donate" class="form-control" id="name" value="{{old('name')}}" placeholder="Örn: Bilgisayar">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Görsel</label>
      <input type="file" name="image" class="form-control" id="image"  placeholder="Görseliniz">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Açıklama</label>
      <input type="textarea" name="description" class="form-control" id="inputEmail4" value="{{old('email')}}" placeholder="Açıklama">
    </div>
   
  <button type="submit" class="btn btn-success btn-sm btn-block">Gönder</button>
</form>
</div>
</div>


@endsection
@include('footer')