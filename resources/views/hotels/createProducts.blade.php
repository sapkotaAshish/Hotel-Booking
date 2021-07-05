@extends('adminHome')
    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Create Products</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Products</li>
                                <li><i class="fa fa-file-text-o"></i>Create Products</li>
                        </ol>
                    </div>
                </div>
                    <form action="{{route('productCreate')}}" enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
                    @csrf 

                    <div class="row">
                    <div class="col-sm-4">
                    <select class="form-control" name="id" id="">
                                    <option value="">----------------------Please select your Seller here..!!!!!!------------------------------</option>
                                    @foreach($user as $key => $h)
                                    <option value="{{ $h->id }}">{{$h->name}}</option>
                                @endforeach
                                </select>                       
                    </div>	
                    <div class="col-sm-8">
                
                    <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                                        <i class="icon-remove"></i>
                                    </button>
                    Please select <strong>Seller</strong> user before creating <strong>Product...!!!</strong>
                    </div>
                

                    </div>
                    </div>
                    <br>

            <div class="row">       
                <div class="col-lg-12">
                    <section class="panel panel-default">
                    <header class="panel-heading">
                    Create Product
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
                                                <label for="type">Product type</label>
                                            <div class="input-group">
                                                            <select class="form-control" name="type" id="type">
                                                            <option value="">Select Product type</option>
                                                                <option value="Food">Food</option>
                                                                <option value="Beverage">Beverage</option>
                                                                <option value="Others">Other</option>
                                                                                              
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
                                                    <input type="text" name="description" id="description" class="form-control" placeholder="Description" minlength="50" maxlength="100">

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
                                                <button type="submit" class="btn btn-default btn-sm">Create Product</button>
                                            </div>
                                
        

            </section>
                </div>
            </div>
            </form>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               All  Products
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
                    <th>user id</th>
                   
                   
                   
                  </tr>
                
                  @foreach($products as $key => $z)

                  <tr>
                    <td>{{$z->product_id}}</td>
                    <td>{{$z->name}}</td>
                    <td>{{$z->type}}</td>
                    <td>{{$z->price}}</td>
                    <td>{{$z->description}}</td>
                    <td><img src="/storage/{{$z->images}}" width="250" height="250"></td>
                    <td>{{$z->id}}</td>
                    
                    
                  </tr>
                @endforeach
                  </tbody>
              </table>
            </section>
          </div>
        </div>

       


       
    @endsection
   