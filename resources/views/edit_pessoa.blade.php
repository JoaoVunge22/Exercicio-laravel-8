@extends('main')
@section('title','editar contacto')

@section('conteud')
    <div class="row">
        <div class="col-12 my-2">
            <div class="d-flex justify-content-between border-bottom py-1">
                <h5>Editar -> {{ $Pessoa->nome }}</h5>
                <div>
                    <a class="btn btn-sm btn-success float-end" href="/"><i class="fas fa-eye"></i> pessoas existente</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <form action="{{ route('update_pessoa') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row row-cols-1 gy-2">
                    <input type="hidden" name="id" value="{{ $Pessoa->id }}">
                    <div class="col">
                        <div class="form-floating">
                            <input id="nomeComleto" value="{{ $Pessoa->nome }}" type="text" name="nome" class="form-control form-control-sm rounded-0 " placeholder="Nome completo">
                            <label for="nomeComleto" class="form-label">Inserir nome</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating">
                            <input id="email" value="{{ $Pessoa->email }}" type="text" name="email" class="form-control form-control-sm rounded-0 " placeholder="name@example.com">
                            <label for="email" class="form-label">Inserir endereço de email</label>
                        </div>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-spinner"></i> Atualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
