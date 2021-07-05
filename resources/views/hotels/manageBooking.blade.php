@extends('adminHome')
 @section('content')




    <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Manage Booking</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Bookings</li>
                                <li><i class="fa fa-file-text-o"></i>View Bookings</li>
                        </ol>
                    </div>
                </div>



                <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               All  Rooms
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                  <th>ID</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>No_of_beds</th>
                    <th>Status</th>  
                    <th>Booking open</th>
                    <th>Booking close</th>                 
                    <th>Television</th>
                    <th>AC</th>
                    <th>Bathroom</th>
                    <th>Railing</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Hotel id</th>
                   <th>Actions</th>
                   
                   
                  </tr>
                
                  @foreach($rooms as $room => $z)
                   @if($z->status == 1 )
                    <tr>
                    <td>{{$z->room_id}}</td>
                    <td>{{$z->type}}</td>
                    <td>{{$z->price}}</td>
                    <td>{{$z->no_of_bed}}</td>
                    <td>{{$z->status}}</td>
                    <td>{{$z->booking_open}}</td>
                    <td>{{$z->booking_close}}</td>
                    <td>{{$z->television}}</td>
                    <td>{{$z->AC}}</td>
                    <td>{{$z->bathroom}}</td>
                    <td>{{$z->railing}}</td>
                    <td>{{$z->description}}</td>
                    <td><img src="/storage/{{$z->pic}}" width="250" height="250"></td>
                    <td>{{$z->hotel_id}}</td>  
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger"  href="cancelBooking/{{$z->room_id}}"><i class="icon_close_alt2"></i>Unbook</a>
                      </div>
                    </td>  
                    </tr>
 

                   @else

                  <tr>
                    <td>{{$z->room_id}}</td>
                    <td>{{$z->type}}</td>
                    <td>{{$z->price}}</td>
                    <td>{{$z->no_of_bed}}</td>
                    <td>{{$z->status}}</td>
                    <td>{{$z->booking_open}}</td>
                    <td>{{$z->booking_close}}</td>
                    <td>{{$z->television}}</td>
                    <td>{{$z->AC}}</td>
                    <td>{{$z->bathroom}}</td>
                    <td>{{$z->railing}}</td>
                    <td>{{$z->description}}</td>
                    <td><img src="/storage/{{$z->pic}}" width="250" height="250"></td>
                    <td>{{$z->hotel_id}}</td>  
                    <td>
                      <div class="btn-group">
                      <a class="btn btn-primary" href="updateBooking/{{$z->room_id}}"><i class="icon_pencil"></i>Book</a>
                      </div>
                    </td>               

                    
                  </tr>
                  @endif
                @endforeach
                  </tbody>
              </table>
            </section>
          </div>
        </div>

   @endsection    
