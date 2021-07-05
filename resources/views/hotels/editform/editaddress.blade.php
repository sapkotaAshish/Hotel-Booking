
@extends('adminHome')
@section('content')

<form action="{{route('updateAddress')}}" enctype="multipart/form-data" class="form-horizontal" id="" method="post"> 
                @csrf 

              
        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                <header class="panel-heading">
                Update Address
                </header>
               

            <div class="panel-body">
            <div class="form-group">

            <input type="hidden" name="hotel_id" id="hotel_id" class="form-control" placeholder="hotel_id" value="<?php echo $address[0]->hotel_id; ?>">
            <input type="hidden" name="address_id" id="address_id" class="form-control" placeholder="address_id" value="<?php echo $address[0]->address_id; ?>">


            <div class="col-sm-4">
                                        <label for="country">Country</label>
                                        <div class="input-group">
                                        <input type="text" name="country" id="country" class="form-control" placeholder="Country" value="<?php echo $address[0]->country;?>" minlength="5" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                        
                                
                                <div class="col-sm-4">
                                        <label for="state">State</label>
                                        <div class="input-group">
                                        <input type="text" name="state" id="state" class="form-control" placeholder="State"  value="<?php echo $address[0]->state;?>" minlength="5" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>


                                <div class="col-sm-4">
                                        <label for="district">District</label>
                                        <div class="input-group">
                                        <input type="text" name="district" id="district" class="form-control" placeholder="District"  value="<?php echo $address[0]->district;?>" minlength="5" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

      
                    <br>
                
                    <div class="col-sm-4">
                                        <label for="city">City</label>
                                        <div class="input-group">
                                        <input type="text" name="city" id="city" class="form-control" placeholder="City"  value="<?php echo $address[0]->city;?>" minlength="5" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="locality">Locality</label>
                                        <div class="input-group">
                                        <input type="text" name="locality" id="locality" class="form-control" placeholder="Locality"  value="<?php echo $address[0]->locality;?>" minlength="5" reqiured>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-4">
                                                <label for="description">Description</label>
                                            <div class="input-group">
                                                <input type="text" name="description" id="description" class="form-control" placeholder="Description"  value="<?php echo $address[0]->description;?>" minlength="50" maxlength="100" required>

                                                    <div class="input-group-addon">
                                                    </div>
                                            </div>
                                        </div>

                         


                                        </div>
                                        </div> 

                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Update Address</button>
                                        </div>
                            
       

        </section>
            </div>
        </div>
        </form>
        @endsection