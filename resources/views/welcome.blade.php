
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <style type="text/css">

        .center {
              position: absolute;
              top: 50%;
              left: 50%;
              width: 400px;
              margin-left:-200px;
              height: 300px;
              margin-top: -150px;
              font-weight: bold;
              font-size: 20px;
              width: 400px;
              border: solid 4px darkslategray  ;
              background-color: lightslategrey ;
        }
        .color {
            background-color: teal  ;
        }
        .borde{
           border: solid 5px darkslategray  ;
           color: white; 
           font-family: Georgia, 'Times New Roman',serif;
           font-size: 72px; 
           color:white; 
           background-color: darkslategray;
        }
        

    </style>
    <body class="color">
      <div class="borde">
            Sedes
      </div>        
        <div class="center">
             <div style="font-size:24px" id="app">
                  @{{$data}}
             </div>
        </div>    
        <script src="{{asset('js/app.js')}}"></script>
    </body>
    
</html>
