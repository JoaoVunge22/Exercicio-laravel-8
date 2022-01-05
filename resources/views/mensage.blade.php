

@if (empty(session('rgister')))
    <div class="m-4" style="position: absolute; bottom: 0; right: 0; width: 26em; z-index: 9999;">
        @if ($errors->any())
            <div class="col-12 p-2 rounded bg-success text-white">
            @foreach ($errors->all() as $erro)
                    <span>{{ $erro }}</span>
                @endforeach
            </div>
        @endif

        @if (@session('msg'))
            <div class="col-12 p-2 rounded bg-success text-white">
                {{ session('msg') }}
            </div>
        @endif

    </div>
    @else
    <div class="row mesage-model invisivel" style="position: fixed; top: 0 ; bottom: 0; right: 0; left: 0; z-index: 999;background: #0000006e">
        <div class="col-4 py-5 mx-auto align-self-center shadow-lg bg-white text-center">
            <h1 class="text-success"><i class="far fa-check-circle " style="font-size: 5.000rem"></i></h1>
            <span style="font-size: 1.000rem">Produto adicionado com sucesso ao teu <br>carrinho de compras</span>
        </div>
    </div>

@endif
