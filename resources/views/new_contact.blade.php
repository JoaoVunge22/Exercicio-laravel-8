@extends('main')
@section('title','view contact')

@section('conteud')
    <div class="row">
        <div class="col-12 my-2">
            <div class="d-flex justify-content-between border-bottom py-1">
                <h3>Cadastrar novos contacotos</h3>
                <div>
                    <a class="btn btn-success float-end" href="/"><i class="fas fa-eye"></i> Ver contacto</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row row-cols-1 gy-2">
                    <div class="col">
                        <label for="Nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" id="Nome" placeholder="Inserir o Nome">
                    </div>
                    <div class="col">
                        <label for="Contato" class="form-label">Contato</label>
                        <input type="number" name="contacto" class="form-control" id="Contato" placeholder="Inserir o Contato">
                    </div>
                    <div class="col">
                        <label for="endereço" class="form-label">endereço</label>
                        <input type="text" name="endereco" class="form-control" id="endereço" placeholder="Inserir o endereço">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
