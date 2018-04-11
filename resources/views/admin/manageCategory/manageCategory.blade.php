@extends('layout.app')
@section('content')
    
        <div id="page_content_inner">

        

           

        <div><h3 class="heading_c uk-margin-bottom">Create Author</h3></div>

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
                                <th>Created</th>
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
                                <td>{{ $data->createdBy }}</td>
                                
                                <td class="uk-text-center">
                                        <a href='{{ url("/admin/category/$data->id/edit") }}'><i class="md-icon material-icons uk-text-primary">&#xE254;</i></a>
                                        
                                        
                                        <a href="#"><span class="md-icon uk-text-danger material-icons">&#xE872;</span></a>
                                    </td>
                        
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                     <ul class="uk-pagination ts_pager">
                        
                        <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
                        <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
                        <li><span class="pagedisplay">1 - 10 / 50 </span></li>
                        <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
                        <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
                        <!-- <li data-uk-tooltip title="Page Size">
                            <select class="pagesize ts_selectize">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </li> -->
                    </ul>
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

   