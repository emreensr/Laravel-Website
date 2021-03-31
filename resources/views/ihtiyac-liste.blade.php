@extends('welcome')
@include('header')
@section('content')

<div class="card">
      <div class="card-body">
      <div class="text-right">
      <a href="{{route('blogekle')}}" class="btn btn-sm btn-secondary">Blog Ekle</a>
      </div><br>
      <h5 class="text-right" style="color:black;">İhtiyaç
      </h5>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Adı</th>
      <th scope="col">Bağışı</th>
      <th scope="col">Açıklama</th>
      <th scope="col">Görsel</th>
      <th scope="col">İşlemler</th>
    </tr>

  </thead>
    <tbody>
    @foreach($ihtiyaclist as $ihlist)

    <tr>
      <th scope="row">#</th>
      <td>{{$ihlist->name}}</td>
      <td>{{$ihlist->donate}}</td>
      <td>{{$ihlist->description}}</td>
     <td> @if($ihlist->image)
      <a href="{{url('storage/images/'.$ihlist->image)}}" target="_blank" class="btn btn-sm btn-secondary">Görüntüle</a></td>
      @endif
     </td>
      <td>
      <a href="{{route('ihtiyacsil', $ihlist->id)}}" class="btn btn-sm-danger">Sil</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>



</div>
</div>

<div class="card">
      <div class="card-body">
      <h5 class="text-right" style="color:black;">Ders

      </h5>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Adı</th>
      <th scope="col">E-Posta</th>
      <th scope="col">Bağışı</th>
      <th scope="col">Görsel</th>
      <th scope="col">İşlemler</th>


    </tr>
  </thead>
    <tbody>
    @foreach($derslist as $ders)

    <tr>
      <th scope="row">#</th>
      <td>{{$ders->name}}</td>
      <td>{{$ders->lesson}}</td>
      <td>{{$ders->time}}</td>
     <td> @if($ders->image)
      <a href="{{url('storage/images/'.$ders->image)}}" target="_blank" class="btn btn-sm btn-secondary">Görüntüle</a></td>
      @endif
     </td>
      <td>
      <a href="{{route('derssil', $ders->id)}}" class="btn btn-sm-danger">Sil</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>



</div>
</div>


<div class="card">
      <div class="card-body">
      <h5 class="text-right" style="color:black;">Blog

      </h5>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Adı</th>
      <th scope="col">İçerik</th>
      <th scope="col">Görsel</th>
      <th scope="col">İşlemler</th>


    </tr>
  </thead>
    <tbody>
    @foreach($bloglist as $blog)

    <tr>
      <th scope="row">#</th>
      <td>{{$blog->name}}</td>
      <td>{!! \Illuminate\Support\Str::words($blog->content, 100,'...')  !!}</td>
     <td> @if($blog->image)
      <a href="{{url('storage/images/'.$blog->image)}}" target="_blank" class="btn btn-sm btn-secondary">Görüntüle</a></td>
      @endif
     </td>
      <td>
      <a href="{{route('blogsil', $blog->id)}}" class="btn btn-sm-danger">Sil</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>



</div>
</div>


@endsection
@include('footer')
