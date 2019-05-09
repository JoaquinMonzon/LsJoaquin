<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <style type="text/css">
        .cuadro {
            background-color: black;
            color: white;
            margin: 20px;
            padding: 20px; 
        },
        .centro{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            margin-left:-200px;
            height: 300px;
            margin-top: -150px;
            border: 1px solid #;    
            padding: 5px;
        }

    </style>
    <body>
        <div class="cuadro">
            <div class="centro" id="app">
                @{{$data}}
            </div>
        </div>    
        <script src="{{asset('js/app.js')}}"></script>
    </body>
    
</html>
