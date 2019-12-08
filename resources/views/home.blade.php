@extends('layouts.app')

@section('content')

  <pagina tamanho="16" >
    <painel titulo="Dashboard">

      <div class="row">
        <div class="col-md-6">
          <caixa titulo="Usuários" url="{{route('usuarios.index')}}" cor="#1E90FF" ></caixa>
        </div> 
      </div>
    </painel>

  </pagina>
@endsection
