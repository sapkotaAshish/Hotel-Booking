@extends('adminHome')
    @section('content')

<div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Manage Address</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Addresses</li>
                                <li><i class="fa fa-file-text-o"></i>View Address</li>
                        </ol>
                    </div>
                </div>



                <form action="{{route('findAddress')}}" class="form-horizontal" id="" method="post"> 
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
                    <th>Country</th>
                    <th>State</th>
                    <th>District</th>
                    <th>City</th>  
                    <th>Locality</th>
                    <th>Description</th>
                    <th>Hotel id</th>
                   
                    <th>
                    Actions
                    </th>
                   
                  </tr>
                
                  @foreach($address as $key => $z)

                  <tr>
                  <td>{{$z->address_id}}</td>
                    <td>{{$z->country}}</td>
                    <td>{{$z->state}}</td>
                    <td>{{$z->district}}</td>
                    <td>{{$z->city}}</td>
                    <td>{{$z->locality}}</td>
                    <td>{{$z->description}}</td>
                    <td>{{$z->hotel_id}}</td>                
                
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" id="edit" href="editAddress/{{$z->address_id}}"><i class="icon_pencil"></i></a>
                        <a class="btn btn-danger" href="/deleteAddress/{{$z->address_id}}"><i class="icon_close_alt2"></i></a>
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
        @section('script')
        
        @endsection
