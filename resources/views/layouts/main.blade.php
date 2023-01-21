<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/script.js "></script>

        <!--Fonte do google-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--CSS Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--CSS da aplicação-->
    </head>
    <body class="">
       @yield('content')
        <footer classname="footer">
            <p>HDC EVENTS &copy; 2023</p><br>
            <p>Project made by Pedro H. Moreira based on <br>
            "Hora de Codar" channel on youtube to Laravel course</p>
        </footer>
    </body>
</html>
