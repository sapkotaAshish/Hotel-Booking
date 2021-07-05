@extends('adminHome')
    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Edit Hotel information</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Hotel information</li>
                                <li><i class="fa fa-file-text-o"></i>EDit Hotel information</li>
                        </ol>
                    </div>
                </div>
                <form action="#" enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
                @csrf 


        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Edit Hotelinfo
                </header>
               

            <div class="panel-body">
            <div class="form-group">

                    
            <input type="hidden" name="hotel_id" id="hotel_id" class="form-control" placeholder="hotel_id" value="<?php echo $hotelinfo[0]->hotel_id; ?>">
            <input type="hidden" name="hotelinfo_id" id="hotelinfo_id" class="form-control" placeholder="address_id" value="<?php echo $hotelinfo[0]->hotelinfo_id; ?>">


            <div class="col-sm-4">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control"  value="<?php echo $hotelinfo[0]->name; ?>" placeholder="Name" minlength="5" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
    
                                
                                <div class="col-sm-4">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                        <input type="email" name="email" id="email" class="form-control"  value="<?php echo $hotelinfo[0]->email; ?>" placeholder="Email" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                                <div class="col-sm-4">
                                        <label for="phone">Phone Number</label>
                                        <div class="input-group">
                                        <input type="Number" name="phone" id="phone" class="form-control"  value="<?php echo $hotelinfo[0]->phone; ?>" placeholder="Phone Number">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                    
                    <br>



                                <div class="col-sm-4">
                                        <label for="mobile">Mobile Number</label>
                                        <div class="input-group">
                                        <input type="Number" name="mobile" id="mobile" class="form-control"  value="<?php echo $hotelinfo[0]->mobile; ?>" placeholder="Mobile Number" minlength="10">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                

                                    <div class="col-sm-4">
                                                <label for="description">Description</label>
                                            <div class="input-group">
                                                <input type="text" name="description" id="description" class="form-control"  value="<?php echo $hotelinfo[0]->description; ?>" placeholder="Description" minlength="50" maxlength="100" required>

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
                                            <button type="submit" class="btn btn-default btn-sm">Update Info</button>
                                        </div>
                            
       

        </section>
            </div>
        </div>
        </form>
       

       
    @endsection
   