@extends('site/templates/suporte_template')

@section('title',"Atendimento")

@section('content')
    <p>Atendimento</p>
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
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nome}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->msg}}</td>
                <!-- adicionando a rota de atendimento passando para a rota o id do usuario -->
                <td><a href="{{route('suporte.atendimento',['suporte'=>$item->id])}}" class="btn btn-success" role="button">Atender</a></td>            
          </tr>
        </tbody>
      </table>
@endsection