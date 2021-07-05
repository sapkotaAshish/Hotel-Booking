<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

  <style type="text/css">
    
  </style>
    <title>Booking Hotels</title>
  </head>
<body>
	@include('userlayout.nav')
<div class="container-fluid" style="font-family:'Nunito', sans-serif;">
<div class="row">
  <h1 style="color: #f28350; margin-left: 5%;"> A Good Place to Stay....!!!!</h1>
  <div class="col-sm-12">
  <hr>
<div class="row">
<?php $i = 0;?>
@foreach ($hotel as $item)

<?php $i = $i +1; ?>
 @if($i % 2 == 0 )
      <div class="container-md mt-5" >
        <div class="row" style="border-bottom:1px solid #ccc;">
          <div class="col-md-4 offset-md-1  col-sm-4 text-left justify-content-center" >
              <div class=" text-uppercase fine-text">{{$item->name}}</div>
              <div class="card-body">
                <h3 class="card-title fine-text e" style="color: #f28350;">{{$item->name}}</h3>
                                                 <p class="card-text" style="color: #ffdf00; "> {{$item->ratings}}</p>
              <p class="card-text">Contact: {{$item->mobile}}| Phone: {{$item->phone}}
                </p>
                

                <p class="card-text">Email: {{$item->email}}
                </p>
                 <p class="card-text">{{$item->description}}
                </p>
                <a  href="bookingInfo/{{$item->hotel_id}}">View Rooms</a>
              </div>
          </div>
          <div class="col-md-4 offset-md-2  col-sm-4 text-left justify-content-center">
              <div class="card-body">
              <img src="/storage/{{$item->imagea}}" class="rounded" width="100%"  alt="">
            </div>
          </div>
        </div>
    </div>
  @endif
  @if($i % 2 != 0 )
    <div class="container mt-5">
        <div class="row" style="border-bottom:1px solid #ccc;">
          <div class="col-md-4 offset-md-1 col-sm-4 text-left justify-content-center">
              <div class="card-body">      
                <img src="/storage/{{$item->imagea}}" class="rounded" width="100%"  alt="">
             </div>
          </div>
       
          <div class="col-md-4 offset-md-2 col-sm-4 text-left justify-content-center">
              <div class=" text-uppercase fine-text">{{$item->name}}</div>
              <div class="card-body">
                <h3 class="card-title fine-text" style="color: #f28350;">{{$item->name}}</h3>
                                 <p class="card-text" style="color: #ffdf00;"> {{$item->ratings}}</p>


                 <p class="card-text">Contact: {{$item->mobile}}| Phone: {{$item->phone}}
                </p>
                <p class="card-text">Email: {{$item->email}}
                </p>
                <p class="card-text">{{$item->description}}
                </p>
                <a href="bookingInfo/{{$item->hotel_id}}" >View Rooms </a>
              </div>
          </div>
      </div>
    </div>
    @endif

@endforeach

</div>
</div>
</div>



<!--  -->
</div>
<br>


<div class="container" style="font-family:'Nunito', sans-serif;>


<div class="row">
  
  <div class="col-sm-12">
<div class="container">
  <h1 style="color: #f28350">Rooms</h1>
  <hr>
<div class="row">
  <?php $count = 0; ?>

    @foreach($room as $z)
    <?php if($count == 6 ) break; ?>

<div class=" col-sm-4 mt-5">
  <div class="content-body">
 <div class="card text-dark bg-light">
  <div class="card-header text-uppercase" ><h6 align="center">{{$z->type}}</h6></div>
  <img src="/storage/{{$z->pic}}" width="150px" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="color: #f28350">Price: <mark>Nrs.{{$z->price}}/- </mark></h5>
    <p class="card-text">For:<b> {{$z->type}}</b> </p>

    <p class="card-text">About: {{$z->description}}</p>

    <a href="bookingInfo/{{$z->hotel_id}}" class="btn btn-primary">Book This Room</a>
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