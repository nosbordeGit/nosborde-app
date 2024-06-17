@extends('site/templates/suporte_template')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Mensagem</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($result as $item)
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nome}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->msg}}</td>
            <!-- adicionando a rota de atendimento passando para a rota o id do usuario -->
            <td><a href="{{route('suporte.atendimento',['suporte'=>$item->id])}}" class="btn btn-primary" role="button">{{$item->atendimento}}</a></td>
            <td><a href="{{route('suporte.delete',['suporte'=>$item->id])}}" class="btn btn-danger" role="button" onclick="return confirm('Tem dereza que deseja apagar registro?')">Deletar</a></td>            
      </tr>
      @endforeach 
    </tbody>
  </table>
@endsection