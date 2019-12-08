@extends('layouts.app')

@section('content')
  <pagina tamanho="12">
    <painel titulo="Lista de Usuários">



      <tabela-lista
      v-bind:titulos="['#','Nome','CPF','DATA DE NASCIMENTO', 'Email','Telefone','Endereço','CEP','Cidade','Estado']"
      v-bind:itens="{{$listaUsuarios}}"
      ordem="desc" ordemcol="1"
      criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="7887522323"
      modal="sim"

      ></tabela-lista>

    </painel>

  </pagina>
  <div id="adc">
  <modal id="adicionar" nome="adicionar" titulo="Adicionar">
    <formulario id="formAdicionar" css="" action="#" method="put" enctype="multipart/form-data" token="12345">

      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" >
      </div>

      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf">
      </div>

      <div class="form-group">
        <label for="date_nasc">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nasc" name="data_nasc" >
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" >
      </div>

      <div class="form-group">
        <label for="cel">Telefone</label>
        <input type="text" class="form-control" id="cel" name="cel" >
      </div>

      <div class="form-group">
      <label for="cep">Cep </label>
      <input maxlength="8" type="text" class="form-control"id="cep" name="cep" >
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
    <formulario id="formEditar" css="" action="#" method="put" enctype="multipart/form-data" token="12345">

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome"  >
      </div>
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf"  >
      </div>
      <div class="form-group">
        <label for="date_nasc">Data Nascimento</label>
        <input type="text" class="form-control" id="date_nasc" name="date_nasc" >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email"  >
      </div>
      <div class="form-group">
        <label for="cel">Telefone</label>
        <input type="text" class="form-control" id="cel" name="cel"  >
      </div>
      <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep"  >
      </div>
      <div class="form-group">
        <label for="end">Endereço</label>
        <input type="text" class="form-control" id="end" name="end"  >
      </div>
      <div class="form-group">
        <label for="cid">Cidade</label>
        <input type="text" class="form-control" id="cid" name="cid"  >
      </div>
      <div class="form-group">
        <label for="est">Estado</label>
        <input type="text" class="form-control" id="est" name="est"  >
      </div>

    </formulario>
    <span slot="botoes">
      <button form="formEditar" class="btn btn-info">Atualizar</button>
    </span>
  </modal>
  <modal nome="detalhe">
  </modal>
@endsection
