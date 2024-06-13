@extends('site.templates.suporte_template')

@section('content') 
  <div class="container">
    <h2 class="mt-5">Formulário de Contato</h2>
    {{-- Linha alterada no formuulario para passar os dados do formulario utilizando o ID correto--}}
    <form action="{{route('suporte.update',['suporte' => $item->id])}}" method="POST">
      {{-- cria um toquem para validar o formulario eviando ataques do tipo csrf--}}
      @csrf()
      {{--insere o metodo PUT para receber os dados do formulario para alteração--}}
      @method('PUT')
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name='nome' placeholder="Nome"  value="{{$item->nome}}">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name='email' placeholder="Digite seu email"  value="{{$item->email}}">
      </div>
      <div class="form-group">
        <label for="message">Mensagem:</label>
        <textarea class="form-control" id="message" name='solucao' rows="4" placeholder="Digite sua mensagem"></textarea>
      </div>
      <div class="dropdown">
        <select name="atendimento" id="atendimento">
          <option value="Em Atendimento">Em Atendimento</option>
          <option value="Aguardando">Aguardando</option>
          <option value="Resolvido">Resolvido</option>
        </select> 
      </div>
      <hr>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
@endsection