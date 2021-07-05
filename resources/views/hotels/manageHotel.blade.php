@extends('adminHome')


@section('content')

<div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Hotels</h3>
             <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                     <li><i class="icon_document_alt"></i>Hotels</li>
                     <li><i class="fa fa-file-text-o"></i>Create Hotel</li>
            </ol>
        </div>
    </div>



    <div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
        <header class="panel-heading">
            Create Hotel
            </header>
            <form action="{{route('createHotel')}}" class="form-horizontal" id="frm-create-hotel" method="post"> 
            @csrf 

            <div class="panel-body">
                <div class="form-group">
                                         <div class="col-sm-4">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" id="inputSuccess" class="form-control" placeholder="Name" minlength="5" required>

                                            <div class="input-group-addon">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                            <label for="ratings">Ratings</label>
                                            <div class="input-group">
                                                <select class="form-control" name="ratings" id="ratings">
                                                <option value="">Ratings</option>
                                                    <option value="★★★★★">★★★★★</option>
                                                    <option value="★★★★">★★★★</option> 
                                                    <option value="★★★">★★★</option>                               
                                                    <option value="★★">★★</option>                               
                                                    <option value="★★">★</option>                               

                                                </select>
                                                <div class="input-group-addon" id="">
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    </div>
                                    <div class="panel-footer">
                                            <button type="submit" class="btn btn-default btn-sm">Create Hotel</button>
                                        </div>
                            </form>
                            </section>
                            </div>
                            </div>




                            <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Hotels
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>Hotel id</th>
                    <th>Name</th>
                    <th>    <i class="icon_star"></i>
                            <i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                            <i class="icon_star"></i>
                    </th>
                    <th>
                    Actions
                    </th>
                   
                  </tr>
                
                  @foreach($hotel as $key => $y)

                  <tr>
                  <td>{{$y->hotel_id}}</td>
                    <td>{{$y->name}}</td>
                    <td>{{$y->ratings}}</td>
                 
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary button" href="editHotel/{{$y->hotel_id}}"><i class="icon_pencil"></i></a>
                        <a class="btn btn-danger" href="/deleteHotel/{{$y->hotel_id}}"><i class="icon_close_alt2"></i></a>
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


@section('script')

<script type="text/javascript">




////////////create room




</script>
@endsection
