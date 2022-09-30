@extends('layout')
@section('title','Titulo')
@section('css')
@stop
@section('topo')
<x-topo />
@stop
@section('sidebar')
  <x-menuleft /> 
@stop 
@section('content')
<div class="content">
<p>A data atual {{ date('d/m/Y',strtotime(now())) }}</p>
<p class="titulo">
Titulo Aqui
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel enim nec lacus egestas vulputate. Morbi nulla mauris, laoreet sed nibh at, condimentum faucibus sem. Phasellus magna mauris, vestibulum in erat nec, convallis tempor ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum aliquet bibendum viverra. Maecenas congue felis dolor, sagittis dictum orci sagittis in. Etiam in tellus non massa condimentum laoreet. Quisque nec eros ultrices, iaculis eros quis, euismod ante. Donec vehicula, ante vel tempor aliquet, est mi consequat arcu, eu sollicitudin urna tellus vel turpis. Nullam convallis posuere ex, at commodo erat convallis et. Pellentesque tempor posuere odio at tincidunt. Duis vitae suscipit mi, nec dictum odio. Phasellus sagittis tempus magna interdum pellentesque. Sed vel egestas massa, at ultrices eros. Etiam finibus risus non risus dapibus accumsan.
</p>
<hr>
<strong><h1 class="titulo">Os nomes são:</h1></strong><br>
       @foreach($items as $key=>$valor)
        <div class="p">
        <p class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900">Nome:{{ $valor->nome }}</p>
        <p>Sobrenome: {{ $valor->sobrenome }}</p>
        <p>Idade: {{ $valor->idade }}</p>
        </div>
       @endforeach
           <div class="container">
           <p class="h1"></p>
           </div>
</div>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
@section('footer')
  Rodapé
@stop
@section('javascript')
@stop
@endsection