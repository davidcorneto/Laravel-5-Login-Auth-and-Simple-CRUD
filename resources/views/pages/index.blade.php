@extends('parts.template')

@section('title')
Home
@endsection


@section('content')

<div class="section">
  @foreach($datas as $data)
  <div class="row card-panel">
    <div class="col s12">
      <h5>{{ $data->judul}}</h5>
      <div class="divider"></div>
      <p>{{$data->isi}}</p>
      <a href="{{ url('todo/'.$data->id.'/edit') }}" class="btn btn-flat purple darken-4 waves-effect waves-light white-text col s4 m3 padding-8"> <i class="material-icons left">mode_edit</i> Edit </a>

      <form method="post" action="{{ url('todo/'.$data->id) }}">
           <input type="hidden" name="_method" value="delete" />
           {!! csrf_field() !!}
           <button onclick="return confirm('Anda yakin ingin menghapus?')"  class="btn btn-flat red darken-4 waves-effect waves-light white-text col s4 m3 padding-8"><i class="material-icons left">delete</i> Delete </button>
           </form>
    </div>

  </div>
  @endforeach
  <ul class="pagination">
    {{$datas->render()}}
 </ul>


</div>

<div class="fixed-action-btn horizontal" style="bottom: 40px;right:24px">
  <a href="{{url('todo/add')}}" class="btn-floating btn-large red"><i class="material-icons">add</i></a>

</div>

@endsection
