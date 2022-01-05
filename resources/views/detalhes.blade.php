@extends('main')
@section('title','detalhes contacto')

@section('conteud')
    <div class="row">
        <div class="col-12 my-2">
            <div class="d-flex justify-content-between border-bottom py-1">
                <h3>Detalhe do contacto -> {{ @$contacto->nome }}</h3>
                <div>
                    <a class="btn btn-success" href="{{ route('novo_contacto') }}"><i class="fas fa-user-plus"></i> Novo contacto</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Contato</th>
                        <th>endereço</th>
                        <th>e-mail.</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                   <tr>
                        <td>{{ $contacto->id }}</td>
                        <td>{{ $contacto->nome }}</td>
                        <td>{{ $contacto->contacto }}</td>
                        <td>{{ $contacto->endereco }}</td>
                        <td>{{ $contacto->email }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="{{ route('create_update','id='.$contacto->id) }}"><i class="fas fa-edit"></i> Editar</a>
                            <a class="btn btn-sm btn-primary" href="{{ route('delete','id='.$contacto->id) }}"><i class="fas fa-trash-alt"></i> Excluir</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
