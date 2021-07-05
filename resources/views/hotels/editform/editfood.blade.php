@extends('adminHome')
    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Edit Foods</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Foods</li>
                                <li><i class="fa fa-file-text-o"></i>Edit Foods</li>
                        </ol>
                    </div>
                </div>
                <form action="{{route('updateFood')}}" enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
                @csrf 

        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Edit Food
                </header>
               

            <div class="panel-body">
            <div class="form-group">
            <input type="hidden" name="hotel_id" id="hotel_id" class="form-control" placeholder="hotel_id" value="<?php echo $foods[0]->hotel_id; ?>">
            <input type="hidden" name="address_id" id="address_id" class="form-control" placeholder="address_id" value="<?php echo $foods[0]->food_id; ?>">


            <div class="col-sm-4">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $foods[0]->name; ?>" minlength="5" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

                    
                                        <div class="col-sm-4">
                                            <label for="type">Food type</label>
                                        <div class="input-group">
                                                        <select class="form-control" name="type" id="type">
                                                        <option value="<?php echo $foods[0]->type; ?>"><?php echo $foods[0]->type; ?></option>
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
                                        <input type="text" name="price" id="price" class="form-control" placeholder="Price"value="<?php echo $foods[0]->price; ?>" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                      


                        
                

                                        <div class="col-sm-4">
                                                <label for="description">Description</label>
                                            <div class="input-group">
                                                <input type="text" name="description" id="description" class="form-control" placeholder="Description" value="<?php echo $foods[0]->description; ?>" minlength="50" maxlength="100" required>

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
                                            <button type="submit" class="btn btn-default btn-sm">Update Food</button>
                                        </div>
                            
       

        </section>
            </div>
        </div>
        </form>
@endsection