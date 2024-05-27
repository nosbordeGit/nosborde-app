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
             <td><button type="button" class="btn btn-primary">Atender</button></td>
      </tr>
      @endforeach 
    </tbody>
  </table>
@endsection