@extends('parts.template')

@section('title')

Edit Data

@endsection


@section('content')
  <div class="section">
    <div class="card-panel blue darken-1 white-text">
      Edit Data
    </div>

    <div class="section">
      <form class="" action="{{url('todo/'.$data->id)}}" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="_method"  value="put">

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="judul" value="{{$data->judul}}" class="validate" id="judul">
            <label for="judul">Judul</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea type="text" name="isi" class="materialize-textarea" id="isi">{{$data->isi}}</textarea>
            <label for="isi">Isi</label>
          </div>
        </div>

        <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Simpan<i class="material-icons right">send</i></button>

      </form>

    </div>
  </div>

@endsection
