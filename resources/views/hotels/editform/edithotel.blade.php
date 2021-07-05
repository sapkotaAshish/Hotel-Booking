@extends('adminHome')
@section('content')
    <div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
        <header class="panel-heading">
            Update Hotel
            </header>
            <form action="{{route('updateHotel')}}" enctype="multipart/form-data" class="form-horizontal"  method="post"> 
            @csrf 

            <div class="panel-body">
                <div class="form-group">
                <input type="hidden" name="hotel_id" id="hotel_id" class="form-control" placeholder="hotel_id" value="<?php echo $hotels[0]->hotel_id; ?>">

                                         <div class="col-sm-4">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $hotels[0]->name; ?>" minlength="5" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                            <label for="ratings">Ratings</label>
                                            <div class="input-group">
                                                <select class="form-control" name="ratings" id="ratings">
                                                <option value="<?php echo $hotels[0]->ratings; ?>"><?php echo $hotels[0]->ratings; ?></option>
                                                    <option value="★★★★★">★★★★★</option>
                                                    <option value="★★★★">★★★★</option> 
                                                    <option value="★★★">★★★</option>                               
                                                    <option value="★★">★★</option>                               
                                                    <option value="★">★</option>                               

                                                </select>
                                                <div class="input-group-addon" id="">
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    </div>
                                    <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Update Hotel</button>
                                        </div>
                            </form>
                            @endsection