@extends('adminHome')
    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Create Hotel information</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Hotel information</li>
                                <li><i class="fa fa-file-text-o"></i>Create Hotel information</li>
                        </ol>
                    </div>
                </div>
                <form action="{{route('hotelinfoCreate')}}"enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
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
                  Please select <strong>HOTEL</strong> before creating <strong>Hotel Informations...!!!</strong>
                </div>
              

				</div>
                </div>
                <br>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Create Hotelinfo
                </header>
               

            <div class="panel-body">
            <div class="form-group">

                    
            <div class="col-sm-4">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" minlength="5" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
    
                                
                                <div class="col-sm-4">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                                <div class="col-sm-4">
                                        <label for="phone">Phone Number</label>
                                        <div class="input-group">
                                        <input type="Number" name="phone" id="phone" class="form-control" placeholder="Phone Number">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                    
                    <br>



                                <div class="col-sm-4">
                                        <label for="mobile">Mobile Number</label>
                                        <div class="input-group">
                                        <input type="Number" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" minlength="10">

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
                  
                                    <div class="col-sm-4">
                                        <label for="imagec">Image C</label>
                                        <div class="input-group">
                                        <input type="file" name="imagec" id="imagec" class="form-control" placeholder="Image 3">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                  
                    
                    <br>
                                        </div>
                                        </div> 

                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Create Info</button>
                                        </div>
                            
       

        </section>
            </div>
        </div>
        </form>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               All  Info
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                  <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                    <th>Description</th>
                    <th>Image A</th>
                    <th>Image B</th>
                    <th>Image C</th>
                    <th>Hotel id</th>
                    <th>Action</th>
                   
                   
                   
                  </tr>
                
                  @foreach($hotelinfo as $key => $z)

                  <tr>
                    <td>{{$z->hotelinfo_id}}</td>
                    <td>{{$z->name}}</td>
                    <td>{{$z->email}}</td>
                    <td>{{$z->phone}}</td>
                    <td>{{$z->mobile}}</td>
                    <td>{{$z->description}}</td>
                    <td><img src="/storage/{{$z->imagea}}" width="250" height="250"></td>
                    <td><img src="/storage/{{$z->imageb}}" width="250" height="250"></td>
                    <td><img src="/storage/{{$z->imagec}}" width="250" height="250"></td>

                    <td>{{$z->hotel_id}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" id="edit"><i class="icon_pencil"></i></a>
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
   