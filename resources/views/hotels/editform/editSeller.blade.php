@extends('adminHome')


@section('content')

<div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Sellers</h3>
             <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                     <li><i class="icon_document_alt"></i>Sellers</li>
                     <li><i class="fa fa-file-text-o"></i>Edit Seller</li>
            </ol>
        </div>
    </div>





    <div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
        <header class="panel-heading">
            Edit Seller
            </header>
            <form action="{{route('updateSeller')}}" class="form-horizontal" id="frm-create-hotel" method="post"> 
            @csrf 

            <div class="panel-body">
                <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" placeholder="id" value="<?php echo $user[0]->id; ?>">

                                         <div class="col-sm-4">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $user[0]->name; ?>" minlength="50" maxlength="100" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

              
                                    <div class="col-sm-4">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $user[0]->email; ?>" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="name">Password</label>
                                        <div class="input-group">
                                        <input type="text" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo $user[0]->password; ?>" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                        <input type="hidden" name="is_seller" id="is_seller" class="form-control" placeholder="is_seller" value="1">

                                  



                                    </div>
                                    </div>
                                    <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Update Seller</button>
                                        </div>
                            </form>
                            </section>
                            </div>
                            </div>
@endsection
