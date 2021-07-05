<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
 --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body style="font-family:'Nunito', sans-serif;">
  @include('userlayout.nav')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                         <th>Type</th>

                        <th class="text-center">Price</th>
                        <th> </th>
                    </tr>
                </thead>
                 @foreach($product as $z)
                                 <tbody>

                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                              <img src="/storage/{{$z->images}}" width="200px" height="250px" class="card-img-top" alt="...">

                            <div class="media-body">
                            
                            </div>
                        </div></td>
                        <td>{{$z->name}}</td>
                        <td>{{$z->type}}</td>

                        <td class="col-sm-1 col-md-1 text-center"><strong>Nrs.{{$z->price}}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                        
                    </tr>
                 
                      
               
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>Nrs.{{$z->price}}</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                       
                        <td>
                        <button type="submit" class="btn btn-success">
                          <a  class="text-white" href ="/confirmBooking/{{$z->product_id}}">
                            Confirm Booking</a> <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
                 @endforeach

            </table>
        </div>
    </div>
</div>
@include('userlayout.footer')
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>