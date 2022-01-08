@extends('main')
@section('title','ver pessoas')

@section('conteud')
    <div class="row">
        <div class="col-12 my-2">
            <div class="d-flex justify-content-between border-bottom py-1">
                <h5>Pessoas Existente</h5>
                <div>
                    <a class="btn btn-sm btn-success" href="{{ route('add_pessoas') }}"><i class="fas fa-user-plus"></i> Novo</a>
                </div>
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
                    @foreach ( $Pessoa as $Pessoas )
                        <tr>
                            <td>{{ $Pessoas->id }}</td>
                            <td>{{ $Pessoas->nome }}</td>
                            <td>{{ $Pessoas->email }}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-success" href="{{ route('detalhes','id='.$Pessoas->id) }}"><i class="fas fa-edit"></i> Detalhes</a>
                                <a class="btn btn-sm btn-primary" href="{{ route('create_update_pessoa','id='.$Pessoas->id) }}"><i class="fas fa-edit"></i> Editar</a>
                                <a class="btn btn-sm btn-danger" href="{{ route('delete_pessoas','id='.$Pessoas->id) }}"><i class="fas fa-trash-alt"></i> Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
