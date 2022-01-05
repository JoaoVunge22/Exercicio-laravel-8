@extends('main')
@section('title','view contact')

@section('conteud')
    <div class="row">
        <div class="col-12 my-2">
            <div class="d-flex justify-content-between border-bottom py-1">
                <h3>Contactos Existente</h3>
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
                    @foreach ( $contacto as $contactos )
                    <tr>
                        <td>{{ $contactos->id }}</td>
                        <td>{{ $contactos->nome }}</td>
                        <td>{{ $contactos->contacto }}</td>
                        <td>{{ $contactos->endereco }}</td>
                        <td>{{ $contactos->email }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="{{ route('detalhes','id='.$contactos->id) }}"><i class="fas fa-eye"></i> Ver detalhes</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
