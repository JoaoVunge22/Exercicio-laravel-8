@extends('main')
@section('title','adicionar pessoas')

@section('conteud')
    <div class="row">
        <div class="col-12 my-2">
            <div class="d-flex justify-content-between border-bottom py-1">
                <h5>Registo de novos pessoas</h5>
                <div>
                    <a class="btn btn-sm btn-success float-end" href="{{ route('pessoas') }}"><i class="fas fa-eye"></i> Pessoas existente</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <form action="{{ route('store_pessoas') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row row-cols-1 gy-2">
                    <div class="col">
                        <div class="form-floating">
                            <input id="nomeComleto" type="text" name="nome" class="form-control form-control-sm rounded-0 " placeholder="Nome completo">
                            <label for="nomeComleto" class="form-label">Inserir nome</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating">
                            <input id="email" type="text" name="email" class="form-control form-control-sm rounded-0 " placeholder="name@example.com">
                            <label for="email" class="form-label">Inserir endereço de email</label>
                        </div>
                    </div>
                    <input type="hidden" name="estado" value="activo">
                    <div class="col">
                        <button class="btn btn-primary w-100" type="submit"><i class="fas fa-save"></i> Registar pessoas</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
