@extends('site.templates.suporte_template')

@section('content') 
  <div class="container">
    <h2 class="mt-5">Formulário de Contato</h2>
    <form action="{{route('suporte.update')}}" method="POST">
      {{-- cria um toquem para validar o formulario eviando ataques do tipo csrf--}}
      @csrf()
      {{--insere o metodo PUT para receber os dados do formulario para alteração--}}
      @method('PUT')
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name='nome' placeholder="Nome" required value="{{$item->nome}}">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name='email' placeholder="Digite seu email" required>
      </div>
      <div class="form-group">
        <label for="message">Mensagem:</label>
        <textarea class="form-control" id="message" name='msg' rows="4" placeholder="Digite sua mensagem" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
@endsection