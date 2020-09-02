<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CARNET</title>
        <link rel="icon" type="imagenes" href="{{asset('img/fish.png')}}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <!-- Styles -->
</head>
<body>
<div class="row">
  <!-- Content Column -->
    <div class="col-lg-6 mb-4 text-center">
  <!-- Project Card Example -->
     <div class="card shadow mb-6">
            <div class="card-header ">
                <h6 class="m-0 font-weight-bold text-primary">CARNET DE IDENTIFICACION</h6>
            </div>
            <!-- DATOS DEL USUARIO --> 
           <div class="mx-auto" style="width: 550px;">       
              <div class="card-body">
                  <div class="card mb-6" >
                    <div class="row no-gutters">
                     <div class="col-md-4">
              </div>
            <!-- DATOS DEL USUARIO -->     
             <div class="col-md-8 text-center">
                <div class="card-body">
                  <h1 class="card-text ">{{ Auth::user()->name}}</h1>
                  <h3 class="card-text">{{ Auth::user()->email}}</h3>
                  <img src="{{asset('img/trabaja_RK.png')}}" class="" height="150px" width="150px" alt="CODIGO QR">
                  <p class="card-text"><small class="text-muted">FECHA DE INGRESO:</small></p>
                  <p class="card-text"><small class="text-muted">{{ Auth::user()->created_at}}</small></p> 
                 </div>
                 </div>
                </div>
              </div>     
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>