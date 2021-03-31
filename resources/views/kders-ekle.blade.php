@extends('welcome')
@include('header')
@section('content')


<div class="card">
      <div class="card-body">
    <form action="{{route('dersgonder')}}"   method="POST" enctype='multipart/form-data'>
    @csrf 
    <div class="form-row">
  <div class="form-group col-md-12">
      <label for="inputEmail4">Adı *</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Adınız">
    </div>
  <div class="form-group col-md-12">
      <label for="inputPassword4">Ders</label>
      <input type="text" name="lesson" class="form-control" id="name" placeholder="Örn: Fizik">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Boş Saatleri</label>
      <input type="textarea" name="time" class="form-control" id="inputEmail4"  placeholder="16:00 - 18.00">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Görsel</label>
      <input type="file" name="image" class="form-control" id="image"  placeholder="Görseliniz">
    </div>
   
  <button type="submit" class="btn btn-success btn-sm btn-block">Gönder</button>
</form>
</div>
</div>
@endsection
@include('footer')