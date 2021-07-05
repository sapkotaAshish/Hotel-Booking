    @extends('adminHome')
    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Edit Rooms</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Rooms</li>
                                <li><i class="fa fa-file-text-o"></i>Edit Room</li>
                        </ol>
                    </div>
                </div>
                <form action="#" enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
                @csrf 

        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Edit Room
                </header>
               

            <div class="panel-body">
            <div class="form-group">
<input type="hidden" name="hotel_id" id="hotel_id" class="form-control" placeholder="hotel_id" value="<?php echo $rooms[0]->hotel_id; ?>">
            <input type="hidden" name="room_id" id="room_id" class="form-control" placeholder="address_id" value="<?php echo $rooms[0]->room_id; ?>">

                    
                                        <div class="col-sm-4">
                                            <label for="room">Room type</label>
                                        <div class="input-group">
                                                        <select class="form-control" name="type" id="type">
                                                        <option value="<?php echo $rooms[0]->type; ?>"><?php echo $rooms[0]->type; ?></option>
                                                            <option value="single">Single</option>
                                                            <option value="double">Double</option>
                                                            <option value="couple">Couple</option>
                                                            <option value="family">Family</option>                                 
                                                        </select>
                                                        <div class="input-group-addon" id="">
                                                        </div>
                                        </div>
                                        </div>
                                        
                                
                                <div class="col-sm-4">
                                        <label for="price">Price<span class="required">*</span></label>
                                        <div class="input-group">
                                        <input type="text" name="price" id="price" class="form-control" placeholder="Price"  value="<?php echo $rooms[0]->price; ?>" required="">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                                <div class="col-sm-4">
                                        <label for="no_of_bed">No_of_beds</label>
                                        <div class="input-group">
                                        <input type="text" name="no_of_bed" id="no_of_bed" class="form-control"   value="<?php echo $rooms[0]->no_of_bed; ?>"placeholder="Number of Bed">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                    
                    <br>



                                <div class="col-sm-4">
                                        <label for="booking_open">Booking Open</label>
                                        <div class="input-group">
                                        <input type="date" name="booking_open" id="booking_open" class="form-control"  value="<?php echo $rooms[0]->booking_open; ?>" placeholder="Booking Open">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                



                                <div class="col-sm-4">
                                        <label for="booking_close">Booking Closed</label>
                                        <div class="input-group">
                                        <input type="date" name="booking_close" id="booking_close" class="form-control"  value="<?php echo $rooms[0]->booking_close; ?>" placeholder="Booking Close">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                    

                            <div class="col-sm-4">
                                    <label for="television">Television</label>
                                    <div class="input-group">
                                        <select class="form-control" name="television" id="television">
                                        <option value=" <?php echo $rooms[0]->television; ?>"><?php echo $rooms[0]->television; ?></option>
                                            <option value="1">Available</option>
                                            <option value="0">Unavailable</option>                               
                                        </select>
                                        <div class="input-group-addon" id="">
                                        </div>
                                    </div>
                                </div>
                 <br>           
                    
                
                            <div class="col-sm-4">
                                    <label for="AC">AC</label>
                                    <div class="input-group">
                                        <select class="form-control" name="AC" id="AC">
                                        <option value="<?php echo $rooms[0]->AC; ?>"> <?php echo $rooms[0]->AC; ?> </option>
                                            <option value="1">Available</option>
                                            <option value="0">Unavailable</option>                              
                                        </select>
                                        <div class="input-group-addon" id="">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                        <label for="bathroom">Bathroom</label>
                                        <div class="input-group">
                                            <select class="form-control" name="bathroom" id="bathroom">
                                        <option value="<?php echo $rooms[0]->bathroom; ?>"> <?php echo $rooms[0]->bathroom; ?> </option>
                                                <option value="1">Attached</option>
                                                <option value="0">Shared</option>                           
                                            </select>
                                            <div class="input-group-addon" id="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                            <label for="railing">Railing</label>
                                            <div class="input-group">
                                                <select class="form-control" name="railing" id="railing">
                                        <option value="<?php echo $rooms[0]->railing; ?>"> <?php echo $rooms[0]->railing; ?> </option>
                                                    <option value="1">Available</option>
                                                    <option value="0">Unavailable</option>                               
                                                </select>
                                                <div class="input-group-addon" id="">
                                                </div>
                                            </div>
                                        </div>
                    <br>
                

                                        <div class="col-sm-4">
                                                <label for="description">Description</label>
                                            <div class="input-group">
                                                <input type="text" name="description" id="description"  value="<?php echo $rooms[0]->description; ?>" class="form-control" placeholder="Description" minlength="50"required>

                                                    <div class="input-group-addon">
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                        <label for="pic">Images</label>
                                        <div class="input-group">
                                        <input type="file" name="pic" id="pic" class="form-control" placeholder="Image">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                    


                                        </div>
                                        </div> 

                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Update Room</button>
                                        </div>
                            
       

        </section>
            </div>
        </div>
        </form>
        
        
       
    @endsection
   