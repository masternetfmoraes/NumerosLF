<strong>Os nomes são:</strong><br>
       @foreach($items as $key=>$valor)
        <div class="p">
        <p class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900">Nome:{{ $valor->nome }}</p>
        <p>Sobrenome: {{ $valor->sobrenome }}</p>
        <p>Idade: {{ $valor->idade }}</p>
        </div>
       @endforeach
           <div class="container">
           <p class="h1">A data atual {{ date('d/m/Y',strtotime(now())) }}</p>
           </div>