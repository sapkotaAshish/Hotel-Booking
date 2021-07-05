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
  <h2 style="color: #f28350; margin-left: 5%;">Where ???   You can Have your Favourite Food....!!!!</h2>
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
@foreach($food as $z)

 
    <div class="container mt-5">
        <div class="row" style="border-bottom:1px solid #ccc;">
          <div class="col-md-4 offset-md-1 col-sm-4 text-left justify-content-center">
              <div class="card-body">      
                <img src="/storage/{{$z->images}}" class="rounded" width="100%"  alt="">
             </div>
          </div>
       
          <div class="col-md-4 offset-md-2 col-sm-4 text-left justify-content-center">
              <div class=" text-uppercase fine-text">{{$z->type}}</div>
             <div class="card-body">
                <h3 class="card-title fine-text text-uppercase" style="color: #f28350;">{{$z->name}}</h3>
                <p class="card-text">Price: Nrs.{{$z->price}}/-
                </p>
                 <p class="card-text">{{$z->description}}
                </p>
                <a href="/bookingInfo/{{$z->hotel_id}}" >Find more </a>
              </div>
          </div>
      </div>
    </div>
   


@endforeach
</div>
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