<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style type="text/css">
    
  </style>
    <title>Book Now</title>
  </head>
  <body>
  	@include('userlayout.nav')
<div class="container">


<div class="row">
  
  <div class="col-sm-12">
<div class="container">
  <h1 style="color: #f28350">Booked</h1>
  <hr>
<div class="row">
  <?php $count = 0; ?>

    @foreach($room as $z)
    <?php if($count == 4 ) break; ?>

<div class=" col-sm-3 mt-5">
  <div class="content-body">
 <div class="card text-dark bg-light">
  <div class="card-header text-uppercase" ><h6 align="center">{{$z->type}}</h6></div>
  <img src="/storage/{{$z->pic}}" width="150px" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price: Nrs.{{$z->price}}/- </h5>
    <p class="card-text">For: {{$z->type}} </p>

    <p class="card-text">About: {{$z->description}}</p>

  </div>
</div>
</div>
</div>
    <?php $count++; ?>

@endforeach

</div>
</div>
</div>
 
</div>



<div class="row">
  
  <div class="col-sm-12">
<div class="container">
  <h1 class="text-uppercase" style="font-family:'Nunito', sans-serif; color: #f0ac37;">Products</h1>
  <hr>
<div class="row">
  <?php $count = 0; ?>

    @foreach($bookings as $z)
    <?php if($count == 3 ) break; ?>

<div class=" col-sm-4 mt-5">
  <div class="content-body">
 <div class="card text-dark bg-light">
  <div class="card-header text-dark text-uppercase">{{$z->type}}</div>
  <img src="/storage/{{$z->images}}" width="150px" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
<h5 class="card-title text-uppercase" style="font-family:'Nunito', sans-serif; color: #f0ac37;">Price: <mark> {{$z->price}}/-nrs. </mark></h5>
    <p class="card-text">{{$z->name}}</p>

    <p class="card-text">{{$z->description}}</p>

  </div>
</div>
</div>
</div>
    <?php $count++; ?>

@endforeach

</div>
</div>
</div>

</div>
</div>
<hr>

  @include('userlayout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
</body>
</html>