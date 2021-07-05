@extends('adminHome')
    @section('content')

<div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Manage Rooms</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Rooms</li>
                                <li><i class="fa fa-file-text-o"></i>View Rooms</li>
                        </ol>
                    </div>
                </div>



                <form action="{{route('findRoom')}}" class="form-horizontal" id="" method="post"> 
                @csrf 

                <div class="row">
				<div class="col-sm-4">
                <select class="form-control" name="abc" id="">
                                <option value="">----------------------Please select your hotel here..!!!!!!------------------------------</option>
                                @foreach($hotels as $key => $h)
                                <option value="{{ $h->hotel_id }}">{{$h->name}}</option>
                            @endforeach 
                            </select>  
                                       
                                           
				</div>
                <div class="col-sm-1">
                <button type="submit" class="btn btn-default btn-sm">Find Room</button>

                    </div>
                    </div>
                </form>

                    <br>
                    <div class="row">
                <div class="col-sm-12">
               
                <div class="alert alert-success fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                  <strong>Please</strong> Select <strong>Hotel</strong> to view <strong>Rooms</strong>
                </div>

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
                   
                    <th>
                    Actions
                    </th>
                   
                  </tr>
                
                  @foreach($rooms as $room => $z)

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
                    <td><img src="/storage/{{$z->pic}}" width="300" height="300"></td>
                    <td>{{$z->hotel_id}}                 
                
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="/editRoom/{{$z->room_id}}" id="edit"><i class="icon_pencil"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
              </table>
            </section>
          </div>
        </div>
        @endsection
