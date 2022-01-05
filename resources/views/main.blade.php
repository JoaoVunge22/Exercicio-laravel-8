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

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>@yield('title','Lista de contacto!')</title>

        <!-- fontawesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </head>

    <body>
        <div class="container-fluid">
            <div class="row justify-content-center bg-dark text-white">
                <header class="col-10 p-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="navbar p-2">
                            <nav class="nav nav-bottom ">
                                <a class="nav-link border me-2 active" aria-current="page" href="/"><i class="fas fa-users"></i> Contatos existentes</a>
                                <a class="nav-link border " aria-current="page" href="{{ route('novo_contacto') }}"><i class="fas fa-cash-register"></i> Adicionar novos contatos</a>
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
</html>
