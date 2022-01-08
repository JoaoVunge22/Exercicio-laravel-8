<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            .nav-bottom a {
                color: #ffffff;
            }
        </style>

        <script src="js/intlTelInput.js"></script>


        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>@yield('title','Lista de contacto!')</title>

        <!-- fontawesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- jquery/3.6.0/jquery.min.js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row justify-content-center bg-dark text-white">
                <header class="col-10 p-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="navbar p-2">
                            <nav class="nav nav-bottom ">
                                @auth
                                <span class="nav-link active border">Logado
                                <a class="" href="{{ route('logout_user') }}"> Sair</a>
                                </span>
                                @endauth



                                @guest

                                @endguest
                                <a class="nav-link active" aria-current="page" href="{{ route('pessoas') }}"><i class="fas fa-users"></i> Ver Pessoas</a>
                                <a class="nav-link" aria-current="page" href="{{ route('add_pessoas') }}"><i class="fas fa-users"></i> Adicionar Pessoas</a>
                            </nav>
                        </div>

                        <h3>
                            Exercicio de Laravel + PHP
                        </h3>
                    </div>
                </header>
            </div>

            @include('mensage')

            <div class="row mt-3 justify-content-center">
                <div class="col-10">
                    @yield('conteud')
                </div>
            </div>

            <div class="row fixed-bottom bg-dark p-2">
                <p class="text-center m-0 text-white">Exercício PHP + Laravel, Desenvolvido por Joao Vunge</p>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->

    </body>
    <script>
        const phoneInputField = document.querySelector("#Numero");
        const phoneInput = window.intlTelInput(phoneInputField, {
          utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>
</html>
