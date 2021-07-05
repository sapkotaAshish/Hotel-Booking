    @extends('adminHome')
    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Create Rooms</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Rooms</li>
                                <li><i class="fa fa-file-text-o"></i>Manage Room</li>
                        </ol>
                    </div>
                </div>
                <form action="{{route('roomCreate')}}" enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
                @csrf 

                <div class="row">
				<div class="col-sm-4">
                <select class="form-control" name="hotel_id" id="">
                                <option value="">----------------------Please select your hotel here..!!!!!!------------------------------</option>
                                @foreach($hotels as $key => $h)
                                <option value="{{ $h->hotel_id }}">{{$h->name}}</option>
                            @endforeach
                            </select>                       
				</div>	
                <div class="col-sm-8">
               
                <div class="alert alert-block alert-danger fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                  Please select <strong>HOTEL</strong> before creating <strong>ROOM...!!!</strong>
                </div>
              

				</div>
                </div>
                <br>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Create Room
                </header>
               

            <div class="panel-body">
            <div class="form-group">

                    
                                        <div class="col-sm-4">
                                            <label for="room">Room type</label>
                                        <div class="input-group">
                                                        <select class="form-control" name="type" id="type">
                                                        <option value="">Select Room type</option>
                                                            <option value="single">Single</option>
                                                            <option value="double">Double</option>
                                                            <option value="couple">Couple</option>
                                                            <option value="family">Family</option>                                 
                                                        </select>
                                                        <div class="input-group-addon" id="">
                                                        </div>
                                        </div>
                                        </div>
                                        
                                
                                <div class="col-sm-4">
                                        <label for="price">Price<span class="required">*</span></label>
                                        <div class="input-group">
                                        <input type="text" name="price" id="price" class="form-control" placeholder="Price" required="">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                                <div class="col-sm-4">
                                        <label for="no_of_bed">No_of_beds</label>
                                        <div class="input-group">
                                        <input type="text" name="no_of_bed" id="no_of_bed" class="form-control" placeholder="Number of Bed">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                    
                    <br>



                                <div class="col-sm-4">
                                        <label for="booking_open">Booking Open</label>
                                        <div class="input-group">
                                        <input type="date" name="booking_open" id="booking_open" class="form-control" placeholder="Booking Open">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                



                                <div class="col-sm-4">
                                        <label for="booking_close">Booking Closed</label>
                                        <div class="input-group">
                                        <input type="date" name="booking_close" id="booking_close" class="form-control" placeholder="Booking Close">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                    

                            <div class="col-sm-4">
                                    <label for="television">Television</label>
                                    <div class="input-group">
                                        <select class="form-control" name="television" id="television">
                                        <option value="">Television</option>
                                            <option value="1">Available</option>
                                            <option value="0">Unavailable</option>                               
                                        </select>
                                        <div class="input-group-addon" id="">
                                        </div>
                                    </div>
                                </div>
                 <br>           
                    
                
                            <div class="col-sm-4">
                                    <label for="AC">AC</label>
                                    <div class="input-group">
                                        <select class="form-control" name="AC" id="AC">
                                        <option value="">AC</option>
                                            <option value="1">Available</option>
                                            <option value="0">Unavailable</option>                              
                                        </select>
                                        <div class="input-group-addon" id="">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                        <label for="bathroom">Bathroom</label>
                                        <div class="input-group">
                                            <select class="form-control" name="bathroom" id="bathroom">
                                            <option value="">Select Bathroom type</option>
                                                <option value="1">Attached</option>
                                                <option value="0">Shared</option>                           
                                            </select>
                                            <div class="input-group-addon" id="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                            <label for="railing">Railing</label>
                                            <div class="input-group">
                                                <select class="form-control" name="railing" id="railing">
                                                <option value="">Railing</option>
                                                    <option value="1">Available</option>
                                                    <option value="0">Unavailable</option>                               
                                                </select>
                                                <div class="input-group-addon" id="">
                                                </div>
                                            </div>
                                        </div>
                    <br>
                

                                        <div class="col-sm-4">
                                                <label for="description">Description</label>
                                            <div class="input-group">
                                                <input type="text" name="description" id="description" class="form-control" placeholder="Description" minlength="50"required>

                                                    <div class="input-group-addon">
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                        <label for="pic">Images</label>
                                        <div class="input-group">
                                        <input type="file" name="pic" id="pic" class="form-control" placeholder="Image">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                    


                                        </div>
                                        </div> 

                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Create Room</button>
                                        </div>
                            
       

        </section>
            </div>
        </div>
        </form>
        
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
                
                    
                  </tr>
                @endforeach
                  </tbody>
              </table>
            </section>
          </div>
        </div>

       
    @endsection
   