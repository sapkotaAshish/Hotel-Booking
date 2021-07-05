@extends('adminHome')

    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Create Event</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Event</li>
                                <li><i class="fa fa-file-text-o"></i>Create Event</li>
                        </ol>
                    </div>
                </div>
                <form action="{{route('eventCreate')}}" enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
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
                  Please select <strong>HOTEL</strong> before creating <strong>Event...!!!</strong>
                </div>
              

				</div>
                </div>
                <br>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Create Event
                </header>
               

            <div class="panel-body">
            <div class="form-group">


                                             
            <div class="col-sm-4">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
    
                    
                                        <div class="col-sm-4">
                                            <label for="type">Event type</label>
                                        <div class="input-group">
                                                        <select class="form-control" name="type" id="type">
                                                        <option value="">Select Event type</option>
                                                            <option value="music">Musical</option>
                                                            <option value="dance">Dance</option>
                                                            <option value="pool_party">Pool Party</option>
                                                            <option value="conference">Conference</option>                                 
                                                        </select>
                                                        <div class="input-group-addon" id="">
                                                        </div>
                                        </div>
                                        </div>
                                        
                                
                                        <div class="col-sm-4">
                                        <label for="start_date">Start Date</label>
                                        <div class="input-group">
                                        <input type="date" name="start_date" id="start_date" class="form-control" placeholder="Start Date">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                

                                

                    
                    <br>



                                <div class="col-sm-4">
                                        <label for="end_date">End Date</label>
                                        <div class="input-group">
                                        <input type="date" name="end_date" id="end_date" class="form-control" placeholder="End Date">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                                <label for="description">Description</label>
                                            <div class="input-group">
                                                <input type="text" name="description" id="description" class="form-control" placeholder="Description" minlength="50" maxlength="100" required>

                                                    <div class="input-group-addon">
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                        <label for="imagea">Image A</label>
                                        <div class="input-group">
                                        <input type="file" name="imagea" id="imagea" class="form-control" placeholder="Image 1">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

                 <br>           
                    
                
                           
                                       
                 <div class="col-sm-4">
                                        <label for="imageb">Image B</label>
                                        <div class="input-group">
                                        <input type="file" name="imageb" id="imageb" class="form-control" placeholder="Image 2">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                    <br>
                



                                        </div>
                                        </div> 

                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Create Event</button>
                                        </div>
                            
       

        </section>
           
        </form>





        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               All  Events
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                  <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>  
                    <th>Description</th>
                    <th>Image A</th>

                    <th>Image B</th>
                    <th>Hotel id</th>
                   
                  
                   
                  </tr>
                
                  @foreach($events as $key => $z)

                  <tr>
                    <td>{{$z->event_id}}</td>
                    <td>{{$z->name}}</td>

                    <td>{{$z->type}}</td>
                    <td>{{$z->start_date}}</td>
                    <td>{{$z->end_date}}</td>
                    <td>{{$z->description}}</td>
                    <td><img src="/storage/{{$z->imagea}}" width="300" height="300"></td>
                    <td><img src="/storage/{{$z->imageb}}" width="300" height="300"></td>

                    <td>{{$z->hotel_id}}                 
                
                   
                  </tr>
                @endforeach
                  </tbody>
              </table>
            </section>
          </div>
        </div>
     
 @endsection
   