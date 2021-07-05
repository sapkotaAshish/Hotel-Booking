  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style type="text/css">
    
  </style>
    <title>Book Now</title>
  </head>
<body  style="font-family:'Nunito', sans-serif;">
  @include('userlayout.nav')
	<div class="container">
<div class="row">
  <h2 class="text-uppercase" style="color: #f28350; margin-left: 5%;">Find A Room to Stay....!!!!</h2>
  <div class="col-sm-12">
  <hr>
<div class="row">
@foreach($hotel as $item)
      <div class="container-md mt-5" >
        <div class="row" style="border-bottom:1px solid #ccc;">
          <div class="col-md-4 offset-md-1  col-sm-4 text-left justify-content-center" >
              <div class="card-body">
                <h4 class="card-title fine-text text-uppercase" style="color: grey;">{{$item->name}}</h4>
                <p class="card-text" style="color: #ffdf00;"> {{$item->ratings}}
                </p>

                <p class="card-text">Contact: {{$item->mobile}}| Phone: {{$item->phone}}
                </p>
                 
                <p class="card-text">Email: {{$item->email}}
                </p>

                <p class="card-text">Location: {{$item->state}},{{$item->country}}
                </p>
                <p class="card-text">Adress: {{$item->locality}},{{$item->city}}
                </p>
                 <p class="card-text">{{$item->description}}
                </p>
<!--  -->              </div>
          </div>
          <div class="col-md-4 offset-md-2  col-sm-4 text-left justify-content-center">
              <div class="card-body">
              <img src="/storage/{{$item->imagea}}" class="rounded" width="100%"  alt="">
                    

            </div>
          </div>
        </div>
    </div>
    @endforeach
          <h4 class="ml-5 text-uppercase" style="color: grey">Available Rooms</h4>

@foreach($room as $z)

 
    <div class="container mt-5">
        <div class="row" style="border-bottom:1px solid #ccc;">
          <div class="col-md-4 offset-md-1 col-sm-4 text-left justify-content-center">
              <div class="card-body">      
                <img src="/storage/{{$z->pic}}" class="rounded" width="100%"  alt="">
             </div>
          </div>
       
          <div class="col-md-4 offset-md-2 col-sm-4 text-left justify-content-center">
              <div class="card-body">
                <h3 class="card-title fine-text" style="color: #f28350;">{{$z->type}}</h3>
                 <p class="card-text">Price: <b>{{$z->price}}nrs./-</b></p>
                   <p class="card-text">No of Bed: {{$z->no_of_bed}}</p>
                    @if($z->television == 1)
                     <p class="card-text">Television: Available</p>
                  @endif
                  @if($z->television == 0)
                     <p class="card-text">Television: Not Available</p>
                     @endif
                      @if($z->AC == 1)
                     <p class="card-text">AC: Available</p>
                  @endif
                  @if($z->AC == 0)
                     <p class="card-text">AC: Not Available</p>
                     @endif
                      @if($z->bathroom == 1)
                     <p class="card-text">Bathroom: Attached</p>
                  @endif
                  @if($z->bathroom == 0)
                     <p class="card-text">Bathroom: Shared</p>
                     @endif
                <p class="card-text">{{$z->description}}</p>



                <a href="/finalBooking/{{$z->room_id}}" >Book </a>
              </div>
          </div>
      </div>
    </div>
   

</div>
@endforeach
</div>
</div>



<!--  -->
</div>
@include('userlayout.footer')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
</body>
</html>