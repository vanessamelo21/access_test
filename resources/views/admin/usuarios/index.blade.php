@extends('layouts.app')

@section('content')
  <pagina tamanho="12">

  @if($errors->all())
      <div class="alert alert-danger alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        @foreach ($errors->all() as $key => $value)
          <li><strong>{{$value}}</strong></li>
        @endforeach
      </div>
    @endif

    <painel titulo="Lista de Usuários">

      <tabela-lista
      v-bind:titulos="['#','Nome','Data Nasc', 'Email','Telefone','CEP','Endereço','Cidade','Estado']"
      v-bind:itens="{{($listaUsuarios)}}"
      ordem="desc" ordemcol="1"
      criar="#criar" detalhe="/admin/usuarios/" editar="/admin/usuarios/" deletar="/admin/usuarios/" token="{{ csrf_token() }}"
      modal="sim"

      ></tabela-lista>

    </painel>

  </pagina>
  <div id="adc">
  <modal id="adicionar" nome="adicionar" titulo="Adicionar">
    <formulario id="formAdicionar" css="" action="{{route('usuarios.store')}}" method="post" enctype="" token="{{ csrf_token() }}">

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" >
      </div>

      <div class="form-group">
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nasc" name="data_nasc" >
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" >
      </div>

      <div class="form-group">
        <label for="cel">Telefone</label>
        <input type="text" class="form-control" id="cel" name="cel" >
      </div>

      <div class="form-group">
      <label for="cep">Cep </label>
      <input maxlength="8" type="text" class="form-control" id="cep" name="cep"  name="cep" >
      </div>
      
      <div class="form-group">
        <label for="end">Endereço</label>
        <input type="text" class="form-control" id="end" name="end" >
      </div>

      <div class="form-group">
        <label for="cid">Cidade</label>
        <input type="text" class="form-control" id="cid" name="cid" >
      </div>

      <div class="form-group">
        <label for="est">Estado</label>
        <input type="text" class="form-control" id="est" name="est"  >
      </div>

   

    </formulario>
    <span slot="botoes">
      <button form="formAdicionar" class="btn btn-info">Adicionar</button>
    </span>
</div>

  </modal>
  <modal nome="editar" titulo="Editar">
    <formulario id="formEditar" v-bind:action="'/admin/usuarios/' + $store.state.item.id" method="put" enctype="" token="{{ csrf_token() }}">

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" v-model="$store.state.item.nome" >
      </div>
      <div class="form-group">
        <label for="data_nasc">Data Nasc</label>
        <input type="date" class="form-control" id="data_nasc" name="data_nasc" v-model="$store.state.item.data_nasc" >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" v-model="$store.state.item.email" >
      </div>

      <div class="form-group">
        <label for="cel">Telefone</label>
        <input type="text" class="form-control" id="cel" name="cel" v-model="$store.state.item.cel">
      </div>

      <div class="form-group">
        <label for="cep">Cep</label>
        <input type="text" class="form-control" id="cep" name="cep" v-model="$store.state.item.cep">
      </div>

      <div class="form-group">
        <label for="end">Endereço</label>
        <input type="text" class="form-control" id="end" name="end" v-model="$store.state.item.end">
      </div>

      <div class="form-group">
        <label for="cid">Cidade</label>
        <input type="text" class="form-control" id="cid" name="cid" v-model="$store.state.item.end">
      </div>

      <div class="form-group">
        <label for="est">Estado</label>
        <input type="text" class="form-control" id="est" name="est" v-model="$store.state.item.est">
      </div>
    </formulario>
    <span slot="botoes">
      <button form="formEditar" class="btn btn-info">Atualizar</button>
    </span>
  </modal>
  <modal nome="detalhe" v-bind:titulo="$store.state.item.titulo">
    <p>Informações detalhe</p>
    <p>Nome: @{{$store.state.item.nome}}</p>
    <p>Data Nascimento: @{{$store.state.item.data_nasc}}</p>
    <p>Email: @{{$store.state.item.email}}</p>
    <p>Telefone: @{{$store.state.item.cel}}</p>
    <p>Cep: @{{$store.state.item.cep}}</p>
    <p>Endereço: @{{$store.state.item.end}}</p>
    <p>Cidade: @{{$store.state.item.cid}}</p>
    <p>Estado: @{{$store.state.item.est}}</p>


  </modal>
@endsection
