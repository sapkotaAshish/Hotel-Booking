@extends('adminHome')
 @section('content')

    <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Manage Products</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Products</li>
                                <li><i class="fa fa-file-text-o"></i>View Products</li>
                        </ol>
                    </div>
                </div>



                <form action="{{route('findProduct')}}" class="form-horizontal" id="" method="post"> 
                @csrf 

                <div class="row">
				<div class="col-sm-4">
                <select class="form-control" name="abc" id="">
                                <option value="">----------------------Please select your hotel here..!!!!!!------------------------------</option>
                                @foreach($user as $key => $h)
                                <option value="{{ $h->id }}">{{$h->name}}</option>
                            @endforeach 
                            </select>  
                                       
                                           
				</div>
                <div class="col-sm-1">
                <button type="submit" class="btn btn-default btn-sm">Find Products</button>

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
                    <th>Seller id</th>
                    <th>Action</th>
                   
                   
                   
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
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" id="edit" href="editProduct/{{$z->product_id}}"><i class="icon_pencil"></i></a>
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
