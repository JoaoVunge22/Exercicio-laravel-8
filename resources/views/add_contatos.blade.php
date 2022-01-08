@extends('main')
@section('title','adicionar pessoas')

@section('conteud')
    <div class="row">
        <div class="col-12 my-2">
            <div class="d-flex justify-content-between border-bottom py-1">
                <h5>Registo de novos contactos</h5>
                <div>
                    <a class="btn btn-sm btn-success float-end" href="/"><i class="fas fa-eye"></i> Contacto existente</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <form action="{{ route('store_contatos') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row row-cols-1 gy-2">
                    {{--
                    <div class="col">
                        <div class="form-floating">
                            <input id="CountryCode" type="text" name="CountryCode" class="form-control form-control-sm rounded-0 " placeholder="CountryCode">
                            <label for="CountryCode" class="form-label">Inserir countryCode</label>
                        </div>
                    </div>
                    --}}
                    <div class="col">
                        <div class="form-floating">
                            <input id="Numero" type="text" name="Numero" class="form-control form-control-sm rounded-0 " placeholder="Numero">
                        </div>
                    </div>

                    <div class="col">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Registo de contatos</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
