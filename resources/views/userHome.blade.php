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
  <body>
    
 @include('userlayout.nav')
 <div class="alert alert-danger alert-dismissible bg-light" role="alert" style="font-family:'Nunito', sans-serif;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h2 style="color: grey">
    <strong>Hurry Up...!!!! &nbsp;&nbsp;&nbsp;&nbsp;</strong></h2>&nbsp;&nbsp;&nbsp;&nbsp;<h4><b> BOOK NOW  </b>and <b>GRAB</b> exclusive <b>OFFERS</b> of <mark><b>20% off :) ..!!</b></h4></mark>
</div>
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
      <img src="/img/h2.jpg" width="100%" height="900px" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="/img/r2.jpg" width="100%" height="900px" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="/img/r3.jpg" width="100%" height="900px" alt="New York">
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
<div class="container-fluid">
<h1 style="font-family:'Nunito', sans-serif; color: #f0ac37;margin-left: 30%;">ThIs Is A hOtEl BoOkInG wEbSiTe.........!!!!!!!</h1>
<hr>
<div class="row">
  <div class="col-sm-2 bg-light">
<form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
    aria-label="Search">
</form>
        

  
  </div>
  <div class="col-sm-8">
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

    <a href="{{route('userHotel')}}" class="btn btn-info">Buy</a>
  </div>
</div>
</div>
</div>
    <?php $count++; ?>

@endforeach

</div>
</div>
</div>
 <div class="col-sm-2" style=" font-family:'Nunito', sans-serif;background-color: rgb(32,161,241)">

 </div>
</div>


<br>



<div class="row">
  <div class="col-sm-2" style="background-color: rgb(32,161,241)">
   
  </div>
  <div class="col-sm-8">
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

    <a href="{{route('userProduct')}}" class="btn btn-info">Buy</a>
  </div>
</div>
</div>
</div>
    <?php $count++; ?>

@endforeach

</div>
</div>
</div>
 <div class="col-sm-2 bg-light">
  </div>
</div>
<br>

<!--  -->

<div class="row">
  <div class="col-sm-2 bg-light">
   <div class="row">
      <h4 style="color: black">Recents</h4>
      <p>Find out more about the best places to stay and visit. Follow us by watching the video and don't forget to Subcsribe. </p>
      <iframe  width="200px" height="200px" class="embed-responsive-item ml-3" src="https://www.youtube.com/embed/O1Rc9S8dmiI"> 
                           </iframe>
                           <iframe  width="200px" height="200px" class="embed-responsive-item ml-3 mt-5" src="https://www.youtube.com/embed/Viwfx0DtjHE"> 
                           </iframe>
                         </div>
  </div>
  <div class="col-sm-8">
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

    <a href="{{route('userFood')}}" class="btn btn-info">Buy</a>
  </div>
</div>
</div>
</div>
    <?php $count++; ?>

@endforeach

</div>
</div>
</div>
 <div class="col-sm-2" style="background-color:rgb(32,161,241)">
  </div>
</div>
<br>
<!--  -->

<div class="row">

  <div class="col-sm-2" style="background-color: rgb(32,161,241)">
    
   
  </div>

  <div class="col-sm-8">
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

    <a href="{{route('userEvent')}}" class="btn btn-info">Book</a>
  </div>
</div>
</div>
</div>
    <?php $count++; ?>

@endforeach

</div>
</div>
</div>
 <div class="col-sm-2 bg-light">
  <h4>Find Us on Map</h4>
  <p>Please do not hesitate to visit us, you can simply find the location of our office pinned below and the contact information on the footer area.</p>
  <div style="width: 100%"><iframe class="mt-5" width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=nepal+(My%20Business%20Name)&amp;ie=UTF8&amp;t=p&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.gps.ie/">Find GPS coordinates</a></iframe></div><br />
  </div>
</div>
<hr>


<!--  -->
</div>


<!-- Footer -->
@include('userlayout.footer')
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  

</body>
</html>
