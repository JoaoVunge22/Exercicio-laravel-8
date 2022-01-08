@extends('main')
@section('title','detalhes contacto')

@section('conteud')
    <div class="row">
        <div class="col-12 my-2">
            <div class="d-flex justify-content-between border-bottom py-1">
                <h5>Detalhe do contacto -> {{ @$Pessoa->nome }}</h5>
            </div>
        </div>
        <div class="col-2">
            <div class="border">
                <img src="{{ $Pessoa->imagem }}" alt="img">
            </div>
        </div>
        <div class="col-12">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>e-mail.</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                   <tr>
                        <td>{{ $Pessoa->id }}</td>
                        <td>{{ $Pessoa->nome }}</td>
                       <td>{{ $Pessoa->email }}</td>
                       <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="{{ route('create_update_pessoa','id='.$Pessoa->id) }}"><i class="fas fa-edit"></i> Editar</a>
                            <a class="btn btn-sm btn-danger" href="{{ route('delete_pessoas','id='.$Pessoa->id) }}"><i class="fas fa-trash-alt"></i> Excluir</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="col-4">
            <a class="btn btn-sm btn-success" href="{{ route('add_contatos') }}"><i class="fas fa-edit"></i> Adicionar contatos</a>

            <table class="table table-sm mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Numero</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $contacto as $contactos )
                    <tr>
                        <td>{{ $contactos->id }}</td>
                        <td>{{ $contactos->Numero }}</td>
                        <td>
                            <a class="btn btn-sm btn-danger" href="{{ route('delete_contato','id='.$Pessoa->id) }}"><i class="fas fa-trash-alt"></i> Excluir</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
