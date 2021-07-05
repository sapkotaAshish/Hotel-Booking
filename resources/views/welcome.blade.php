<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Booking Hotels</title>
  </head>
  <body style=" font-family:'Nunito', sans-serif;">
    
 @include('userlayout.nav')

 <div class="container-fluid bg-light" style="font-family:'Nunito', sans-serif;">
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/h2.jpg" width="100%" height="700px" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="/img/r2.jpg" width="100%" height="700px" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="/img/r3.jpg" width="100%" height="700px" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon bg-dark"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon bg-dark"></span>
  </a>

</div>
</div>
<!-- Hotel Start -->
<div class="container">
<h1 style="font-family:'Nunito', sans-serif; color: grey;margin-left: 15%;"><b>!!!!!!!.........Book Your Hotel Here.........!!!!!!!</b></h1>
<hr>
<div class="row">
 
  
  <div class="col-sm-12">
    <div class="container">
      <h1 class="text-uppercase" style="font-family:'Nunito', sans-serif; color: #f0ac37;">Hotels</h1>
      <hr>
    <div class="row">
         <?php $count = 0; ?>

      @foreach($room as $z)
        <?php if($count == 3) break; ?>

          <div class=" col-sm-4 mt-5">
            <div class="content-body">
          <div class="card text-dark bg-light">
            <div class="card-header text-uppercase text-dark">Room for: {{$z->type}}</div>
        <img src="/storage/{{$z->pic}}" width="150px" height="200px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-uppercase" style="font-family:'Nunito', sans-serif; color: #f0ac37;">Price: <mark> {{$z->price}}/-nrs.  </mark></h5>


          <p class="card-text">{{$z->description}}</p>

          <a href="{{route('userHotel')}}" class="btn btn-primary">Book</a>
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
<br>



<div class="row">
 
  <div class="col-sm-12">
<div class="container">
  <h1 class="text-uppercase" style="font-family:'Nunito', sans-serif; color: #f0ac37;">Products</h1>
  <hr>
<div class="row">
  <?php $count = 0; ?>

    @foreach($product as $z)
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

    <a href="{{route('userProduct')}}" class="btn btn-primary">Buy</a>
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
<br>

<!--  -->

<div class="row">
 
  <div class="col-sm-12">
<div class="container">
  <h1 class="text-uppercase" style="font-family:'Nunito', sans-serif; color: #f0ac37;">Foods</h1>
  <hr>
<div class="row">
  <?php $count = 0; ?>

    @foreach($food as $z)
    <?php if($count == 3 ) break; ?>

<div class=" col-sm-4 mt-5">
  <div class="content-body">
 <div class="card text-dark bg-light">
  <div class="card-header text-uppercase">{{$z->type}}</div>
  <img src="/storage/{{$z->images}}" width="150px" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
<h5 class="card-title text-uppercase" style="font-family:'Nunito', sans-serif; color: #f0ac37;">Price: <mark> {{$z->price}}/-nrs. </mark></h5>
    <p class="card-text">{{$z->name}}</p>

    <p class="card-text">{{$z->description}}</p>

    <a href="{{route('userFood')}}" class="btn btn-primary">Buy</a>
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
<br>
<!--  -->

<div class="row">

  
  <div class="col-sm-12">
<div class="container">
  <h1 class="text-uppercase" style="font-family:'Nunito', sans-serif; color: #f0ac37;">Events</h1>
  <hr>
<div class="row">
  <?php $count = 0; ?>

    @foreach($event as $z)
    <?php if($count == 3 ) break; ?>

<div class=" col-sm-4 mt-5">
  <div class="content-body">
 <div class="card text-dark bg-light">
  <div class="card-header text-uppercase" >{{$z->name}}</div>
  <img src="/storage/{{$z->imagea}}" width="150px" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-uppercase" style="font-family:'Nunito', sans-serif; color: #f0ac37;">{{$z->type}} </h5>
    <p class="card-text">Starts: {{$z->start_date}}</p>
        <p class="card-text">Ends: {{$z->end_date}}</p>


    <p class="card-text">{{$z->description}}</p>

    <a href="{{route('userEvent')}}" class="btn btn-primary">Book</a>
  </div>
</div>
</div>
</div>
    <?php $count++; ?>

@endforeach

</div>
</div>
</div>

<hr>


<!--  -->
</div>

</div>
</div>  
<!-- Footer -->
@include('userlayout.footer')
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  

</body>
</html>
