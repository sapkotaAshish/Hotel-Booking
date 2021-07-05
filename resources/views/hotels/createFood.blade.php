@extends('adminHome')
    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Create Foods</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Foods</li>
                                <li><i class="fa fa-file-text-o"></i>Create Foods</li>
                        </ol>
                    </div>
                </div>
                <form action="{{route('foodCreate')}}"enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
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
                  Please select <strong>HOTEL</strong> before creating <strong>Food...!!!</strong>
                </div>
              

				</div>
                </div>
                <br>

        <div class="row">       
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Create Food
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
                                            <label for="type">Food type</label>
                                        <div class="input-group">
                                                        <select class="form-control" name="type" id="type">
                                                        <option value="">Select Food type</option>
                                                            <option value="fast_food">Fast Food</option>
                                                            <option value="dining">Casual Dining</option>
                                                            <option value="drinks">Drinks</option>
                                                            <option value="bakery">Bakery</option> 
                                                            <option value="starter">Starter</option> 
                                                            <option value="dessert">Dessert</option>                                
                                                        </select>
                                                        <div class="input-group-addon" id="">
                                                        </div>
                                        </div>
                                        </div>
                                        
                                
                                <div class="col-sm-4">
                                        <label for="price">Price</label>
                                        <div class="input-group">
                                        <input type="text" name="price" id="price" class="form-control" placeholder="Price" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                      


                        
                    <br>
                

                                        <div class="col-sm-4">
                                                <label for="description">Description</label>
                                            <div class="input-group">
                                                <input type="text" name="description" id="description" class="form-control" placeholder="Description" minlength="50" required>

                                                    <div class="input-group-addon">
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                        <label for="image">Images</label>
                                        <div class="input-group">
                                        <input type="file" name="images" id="images" class="form-control" placeholder="Image">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                    


                                        </div>
                                        </div> 

                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Create Food</button>
                                        </div>
                            
       

        </section>
            </div>
        </div>
        </form>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               All  Foods
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                  <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Hotel id</th>
                   
                   
                   
                  </tr>
                
                  @foreach($foods as $key => $z)

                  <tr>
                    <td>{{$z->food_id}}</td>
                    <td>{{$z->name}}</td>
                    <td>{{$z->type}}</td>
                    <td>{{$z->price}}</td>
                    <td>{{$z->description}}</td>
                    <td><img src="/storage/{{$z->images}}" width="250" height="250"></td>
                    <td>{{$z->hotel_id}}</td>
                    
                    
                  </tr>
                @endforeach
                  </tbody>
              </table>
            </section>
          </div>
        </div>

       


       
    @endsection
   