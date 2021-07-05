@extends('adminHome')
 @section('content')

    <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Manage Info</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Infos</li>
                                <li><i class="fa fa-file-text-o"></i>View Infos</li>
                        </ol>
                    </div>
                </div>



                <form action="{{route('findHotelinfo')}}" class="form-horizontal" id="" method="post"> 
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
                <button type="submit" class="btn btn-default btn-sm">Find Hotel Information</button>

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
                  <strong>Please</strong> Select <strong>Hotel</strong> to view <strong>Info</strong>
                </div>

				</div>
                </div>
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
                        <a class="btn btn-primary" href="/hotelinfoEdit/{{$z->hotel_id}}"><i class="icon_pencil"></i></a>
                        <a class="btn btn-danger" href="/hotelinfoDelete/{{$z->hotel_id}}"><i class="icon_close_alt2"></i></a>
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
