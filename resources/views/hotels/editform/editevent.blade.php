@extends('adminHome')

    @section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Edit Event</h3>
                        <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="icon_document_alt"></i>Event</li>
                                <li><i class="fa fa-file-text-o"></i>Edit Event</li>
                        </ol>
                    </div>
                </div>
                <form action="#" enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
                @csrf 

        

        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Edit Event
                </header>
               

            <div class="panel-body">
            <div class="form-group">

 <input type="hidden" name="hotel_id" id="hotel_id" class="form-control" placeholder="hotel_id" value="<?php echo $event[0]->hotel_id; ?>">
            <input type="hidden" name="event_id" id="event_id" class="form-control" placeholder="address_id" value="<?php echo $event[0]->event_id; ?>">

                                             
            <div class="col-sm-4">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $event[0]->name; ?>" placeholder="Name" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
    
                    
                                        <div class="col-sm-4">
                                            <label for="type">Event type</label>
                                        <div class="input-group">
                                                        <select class="form-control" name="type" id="type">
                                                        <option value="<?php echo $event[0]->type; ?>">  <?php echo $event[0]->type; ?></option>
                                                            <option value="music">Musical</option>
                                                            <option value="dance">Dance</option>
                                                            <option value="pool_party">Pool Party</option>
                                                            <option value="conference">Conference</option>                                 
                                                        </select>
                                                        <div class="input-group-addon" id="">
                                                        </div>
                                        </div>
                                        </div>
                                        
                                
                                        <div class="col-sm-4">
                                        <label for="start_date">Start Date</label>
                                        <div class="input-group">
                                        <input type="date" name="start_date" id="start_date" class="form-control" value="<?php echo $event[0]->start_date; ?>" placeholder="Start Date">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                

                                

                    
                    <br>



                                <div class="col-sm-4">
                                        <label for="end_date">End Date</label>
                                        <div class="input-group">
                                        <input type="date" name="end_date" id="end_date" class="form-control" value="<?php echo $event[0]->end_date; ?>" placeholder="End Date">

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                                <label for="description">Description</label>
                                            <div class="input-group">
                                                <input type="text" name="description" id="description" class="form-control" value="<?php echo $event[0]->description; ?>" placeholder="Description" minlength="50" maxlength="100" required>

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
                    <br>
                



                                        </div>
                                        </div> 

                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Edit Event</button>
                                        </div>
                            
       

        </section>
           
        </form>





     
 @endsection
   