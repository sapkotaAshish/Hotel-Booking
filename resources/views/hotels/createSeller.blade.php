@extends('adminHome')


@section('content')

<div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Sellers</h3>
             <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                     <li><i class="icon_document_alt"></i>Sellers</li>
                     <li><i class="fa fa-file-text-o"></i>Create Seller</li>
            </ol>
        </div>
    </div>





    <div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
        <header class="panel-heading">
            Create Seller
            </header>
            <form action="{{route('addSeller')}}" class="form-horizontal" id="frm-create-hotel" method="post"> 
            @csrf 

            <div class="panel-body">
                <div class="form-group">
                                         <div class="col-sm-4">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

              
                                    <div class="col-sm-4">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="name">Password</label>
                                        <div class="input-group">
                                        <input type="text" name="password" id="password" class="form-control" placeholder="Password" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>
                        <input type="hidden" name="is_seller" id="is_seller" class="form-control" placeholder="is_seller" value="1">

                                  



                                    </div>
                                    </div>
                                    <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Create Seller</button>
                                        </div>
                            </form>
                            </section>
                            </div>
                            </div>



                            <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Sellers
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>Seller ID</th>
                    <th>Name</th>
                   
                    <th>Email</th>

                    <th>
                    Actions
                    </th>
                   
                  </tr>
                
                  @foreach($user as $key => $y)

                  <tr>
                  <td>{{$y->id}}</td>
        
                    <td>{{$y->name}}</td>
                    <td>{{$y->email}}</td>
                 
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary button" href="editSeller/{{$y->id}}"><i class="icon_pencil"></i></a>
                        <a class="btn btn-danger" href="/deleteSeller/{{$y->id}}"><i class="icon_close_alt2"></i></a>
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