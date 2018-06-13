@extends('layout.app')
@section('content')
    
<style type="text/css" media="screen">
        .modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;

}
.img
{
    height: 200px !important;
    max-width: 300px;
}
</style>
        <div id="page_content_inner">

        

           

        <div><h3 class="heading_c uk-margin-bottom">Manage Category</h3></div>

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                
                <div class="uk-width-1-1">
               <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-text-nowrap">
                            <thead>
                            <tr>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                                
                                
                            </tr>
                            </thead>
                          
                            <tbody>
                            <tr>
                               <td><input name="firstName" required="" class="form-control" type="text" placeholder="Search"></td>
                                <td><input name="lastName" required="" class="form-control" type="text" placeholder="Search"></td>
                                <td><input name="create" required="" class="form-control" type="text" placeholder="Search"></td>
                                <td><input type="submit" class="md-btn md-btn-primary" name="" value="Search" placeholder=""></td>
                            </tr>
                            
                         @foreach($res as $data) 
                        <tr>
                       
                        <td>{{ $data->name }}</td>
                                <td>{{ $data->desc }}</td>
                                <td>
                                @if($data->approved == 0)<span class="uk-badge uk-badge-warning">Waiting</span>@endif
                                    @if($data->approved == 1)<span class="uk-badge uk-badge-success">Approved</span>@endif
                                    @if($data->approved == 2)<span class="uk-badge uk-badge-danger">Blocked</span>@endif
                                    </td>
                                
                                <td class="uk-text-center">
                                        <a href='{{ url("/admin/category/$data->id/edit") }}'><i class="md-icon material-icons uk-text-primary">&#xE254;</i></a>
                                        
                                         @if($data->approved == 0 || $data->approved == 2 )<a onclick="status('category',{{ $data->id }},1)"><i class="md-icon material-icons uk-text-success">verified_user</i></a>@endif
                                        @if($data->approved == 1 )<a onclick="status('category',{{ $data->id }},2)"><i class="md-icon material-icons uk-text-warning">&#xE14B;</i></a>@endif
                                        <a data-toggle="modal" data-target="#myModal"><i class="md-icon material-icons uk-text-danger" >&#xE417;</i></a>
                                        <!-- <a href="#"><span class="md-icon uk-text-danger material-icons">&#xE872;</span></a> -->
                                    </td>
                        
                        </tr>
                        @endforeach
                        </tbody>
                        </table>

                        <div id="myModal" class="modal fade" role="dialog">
                          <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Category Details</h4>
                              </div>
                              <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            
                                            <img class="img" src="{{url('public/front/images/slide-1.jpg')}}">
                                            
                                        </div>
                                        <div class="col-md-7">
                                            <span>Category    :</span><span> Sivkumar</span><br>
                                            <span>Description    :</span><span> Sivkumar</span>
                                             
                                        
                                        </div>

                                    </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
                    </div>
                      <div class="uk-width-4-10 float-right">{{ $res->appends([])->links() }}</div>
                </div>
            </div>
            </div>  
            </div>


        </div>
    
       <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="{{url('admin/category/create')}}"><i class="material-icons">+</i>
        </a>
    </div>
        </a>
    </div>
    
            
        </div>
    

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   