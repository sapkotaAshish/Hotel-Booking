@extends('adminHome')
    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Create Address</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Address</li>
                                <li><i class="fa fa-file-text-o"></i>Create Address</li>
                        </ol>
                    </div>
                </div>
                <form action="{{route('addressCreate')}}"enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
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
                  Please select <strong>HOTEL</strong> before creating <strong>Address...!!!</strong>
                </div>
              

				</div>
                </div>
                <br>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Create Address
                </header>
               

            <div class="panel-body">
            <div class="form-group">

                    
            <div class="col-sm-4">
                                        <label for="country">Country</label>
                                        <div class="input-group">
                                        <input type="text" name="country" id="country" class="form-control" placeholder="Country" minlength="5" maxlength="20" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                        
                                
                                <div class="col-sm-4">
                                        <label for="state">State</label>
                                        <div class="input-group">
                                        <input type="text" name="state" id="state" class="form-control" placeholder="State" minlength="5" maxlength="20" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                                <div class="col-sm-4">
                                        <label for="district">District</label>
                                        <div class="input-group">
                                        <input type="text" name="district" id="district" class="form-control" placeholder="District" maxlength="15" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

      
                    <br>
                
                    <div class="col-sm-4">
                                        <label for="city">City</label>
                                        <div class="input-group">
                                        <input type="text" name="city" id="city" class="form-control" placeholder="City" minlength="5" maxlength="15" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="locality">Locality</label>
                                        <div class="input-group">
                                        <input type="text" name="locality" id="locality" class="form-control" placeholder="Locality" minlength="5" maxlength="15" required>

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

                         


                                        </div>
                                        </div> 

                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Create Address</button>
                                        </div>
                            
       

        </section>
            </div>
        </div>
        </form>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               All  Addresses
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
                    
                    
                  </tr>
                @endforeach
                  </tbody>
              </table>
            </section>
          </div>
        </div>

       

       
    @endsection
   