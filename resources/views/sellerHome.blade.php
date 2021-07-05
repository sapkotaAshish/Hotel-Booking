<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/bootstrap-theme.css" rel="stylesheet">
<!--   <link href="/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
 --> <link href="/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <title>Booking Hotels</title>
  </head>
  <body>
    @include('userlayout.nav')
          
                   
          <div class="container">      
            <div class="row">       
                <div class="col-lg-12">
                    <section class="panel panel-default">
                    <header class="panel-heading">
                    Create Product
                    </header>
                
  <form action="{{route('sellerProduct')}}" enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
                    @csrf 

                <div class="panel-body">
                <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" placeholder="id" value=" {{  Auth::user()->id }}">

                                              <div class="col-sm-4">
                                            <label for="name">Name</label>
                                            <div class="input-group">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">

                                                <div class="input-group-addon">
                                                </div>
                                            </div>
                                        </div>

                        
                                            <div class="col-sm-4">
                                                <label for="type">Product type</label>
                                            <div class="input-group">
                                                            <select class="form-control" name="type" id="type">
                                                            <option value="">Select Product type</option>
                                                                <option value="A">A A</option>
                                                                <option value="B">B b</option>
                                                                <option value="C">c</option>
                                                                <option value="D">D</option> 
                                                                <option value="E">E</option> 
                                                                <option value="F">F</option>                                
                                                            </select>
                                                            <div class="input-group-addon" id="">
                                                            </div>
                                            </div>
                                            </div>
                                            
                                    
                                    <div class="col-sm-4">
                                            <label for="price">Price</label>
                                            <div class="input-group">
                                            <input type="text" name="price" id="price" class="form-control" placeholder="Price">

                                                <div class="input-group-addon">
                                                </div>
                                            </div>
                                        </div>
                            
                        <br>
                                            <div class="col-sm-4">
                                                    <label for="description">Description</label>
                                                <div class="input-group">
                                                    <input type="text" name="description" id="description" class="form-control" placeholder="Description">

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
                                </form>
        

                            </section>
            </div>
</div>
                    

<!--  --></form>
<div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Manage Products</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Products</li>
                                <li><i class="fa fa-file-text-o"></i>View Products</li>
                        </ol>
                    </div>
            
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
                
                  @foreach($product as $key => $z)

                  <tr>
                    <td>{{$z->product_id}}</td>
                    <td>{{$z->name}}</td>
                    <td>{{$z->type}}</td>
                    <td>{{$z->price}}</td>
                    <td>{{$z->description}}</td>
                    <td><img src="/storage/{{$z->images}}" width="200" height="200"></td>
                    <td>{{$z->id}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" id="edit" href="#"><i class="icon_pencil"></i></a>
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
        </div>  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  

</body>
</html>

