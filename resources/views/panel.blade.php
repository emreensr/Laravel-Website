@extends('welcome')
@include('header')
@section('content')

<div class="card">
      <div class="card-body">
      <h5 class="card-title">
      <div class="text-right">
      <a href="{{route('ihtiyacekleme')}}" class="btn btn-sm btn-primary">İhtiyaç Ekle</a>
      </div>
      </h5>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Adı</th>
      <th scope="col">Bağışı</th>
      <th scope="col">İletişim</th>
      <th scope="col">Model</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Görsel</th>
      <th scope="col">Ulaşma Yolu</th>


    </tr>
  </thead>
    <tbody>
    @foreach($ihtiyac as $ih)
    <tr>
      <th scope="row">#</th>
      <td>{{$ih->name}}</td>
      <td>{{$ih->donate}}</td>
      <td>{{$ih->contact}}</td>
      <td>{{$ih->model}}</td>
      <td>{{$ih->message}}</td>
      <td> @if($ih->image)
      <a href="{{url('storage/images/'.$ih->image)}}" target="_blank" class="btn btn-sm btn-secondary">Görüntüle</a></td>
      @endif
     </td>
      <td>{{$ih->howcontact}}</td>
      <td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$ihtiyac->links()}}
      </div>
</div>
</div>

<div class="card">
      <div class="card-body">
      <h5 class="card-title">
      <div class="text-right">
      <a href="{{route('dersekleme')}}" class="btn btn-sm btn-primary">Ders Ekle</a>
      </div>
      </h5>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Adı</th>
      <th scope="col">Ders</th>
      <th scope="col">Boş Saatleri</th>
      <th scope="col">İletişim</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Ulaşma Yolu</th>

    </tr>
  </thead>
    <tbody>
    @foreach($ders as $dersler)
    <tr>
      <th scope="row">#</th>
      <td>{{$dersler->name}}</td>
      <td>{{$dersler->lesson}}</td>
      <td>{{$dersler->time}}</td>
      <td>{{$dersler->contact}}</td>
      <td>{{$dersler->message}}</td>
      <td>{{$ih->howcontact}}</td>
      <td>
    </tr>
    @endforeach
    
  </tbody>
</table>
{{$ders->links()}}

      </div>
    
      
    
</div>
</div>


<div class="card">
      <div class="card-body">
      <h5 class="text-right" style="color:black;">
      İhtiyaç Edin
      </h5>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Adı</th>
      <th scope="col">Ürün</th>
      <th scope="col">İletişim</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Ulaşma Yolu</th>

    </tr>
  </thead>
    <tbody>
    @foreach($edin as $ihtiyacedin)
    <tr>
      <th scope="row">#</th>
      <td>{{$ihtiyacedin->name}}</td>
      <td>{{$ihtiyacedin->product}}</td>
      <td>{{$ihtiyacedin->contact}}</td>
      <td>{{$ihtiyacedin->message}}</td>
      <td>{{$ihtiyacedin->howcontact}}</td>

      <td>
    </tr>
    @endforeach
    
  </tbody>
</table>
{{$edin->links()}}

      </div>
    
      
    
</div>
</div>


<div class="card">
      <div class="card-body">
      <h5 class="text-right" style="color:black;">
      Ders Edin
      </h5>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Adı</th>
      <th scope="col">Ders</th>
      <th scope="col">Müsaitlik Durumu</th>
      <th scope="col">İletişim</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Ulaşma Yolu</th>

    </tr>
  </thead>
    <tbody>
    @foreach($dersedin as $edind)
    <tr>
      <th scope="row">#</th>
      <td>{{$edind->name}}</td>
      <td>{{$edind->lesson}}</td>
      <td>{{$edind->time}}</td>
      <td>{{$edind->contact}}</td>
      <td>{{$edind->message}}</td>
      <td>{{$edind->howcontact}}</td>

      <td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$dersedin->links()}}

      </div>
    
      
    
</div>
</div>

@endsection
@include('footer')