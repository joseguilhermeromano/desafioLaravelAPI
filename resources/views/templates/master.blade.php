<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Penso Tecnologia - @yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- favicon --> 
        <link rel="shortcut icon" href="<?= asset('images/favicon.png') ?>">

        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('bootstrap/3.3.7/css/bootstrap.min.css') }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="{{ asset('bootstrap/3.3.7/css/bootstrap-theme.min.css') }}" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="{{ asset('js/jquery-2.2.4.js') }}"></script>
        <script src="{{ asset('bootstrap/3.3.7/js/bootstrap.min.js') }}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class = "principal">
                    <div class="container-fluid">
                        <section>
                            <div class="topnav" id="myTopnav">
                                <a href="{{ URL::to('/') }}"> <img src="<?= asset('images/logo_penso.png') ?>" width="75%" height="50%" alt="logo"> </a>
                                <div class="direita" style="padding-top:20px">
                                    <a href="{{ URL::to('/') }}">Vendedores</a>
                                    <a href="{{ URL::to('/') }}/produtos">Produtos</a>
                                </div>
                                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </section>
                        @yield('conteudo')
                    </div>
                </div>
                <div class= "footer flex-center">
                    <p>designed by <span class="author">José Romano</span></p>
                </div>
            </div>
        </div>
    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive ";
            } else {
                x.className = "topnav";
            }
        }
        $(document).ready(function(){
            $('a[href="#home"]').tab('show');
        });
    </script>
    </body>
</html>