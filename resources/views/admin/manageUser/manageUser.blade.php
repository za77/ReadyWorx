@extends('layout.app')
@section('content')
    
        <div id="page_content_inner">

        

           
    {{ trans('message.welcome')}}
        <div><h3 class="heading_c uk-margin-bottom">Create Author</h3></div>

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                
                <div class="uk-width-1-1">
               <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-text-nowrap">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mall / Company</th>
                                <th>status</th>
                                <th>action</th>
                                
                            </tr>
                            </thead>
                           <!--  <tfoot>
                           
                           <tr>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Email</th>
                               <th>Profile Name</th>
                               <th>status</th>
                               <th>action  </th>
                               
                           </tr>
                           </tfoot> -->
                            <tbody>
                            <tr>
                               <td><input name="firstName" required="" class="form-control" type="text" placeholder="Search"></td>
                                <td><input name="lastName" required="" class="form-control" type="text" placeholder="Search"></td>
                                <td><input name="email" required="" class="form-control" type="text" placeholder="Search"></td>
                                <td><input name="soon" required="" class="form-control" type="text" placeholder="Search"></td>
                                <td><select class="form-control">
                                    <option value="">Select Status</option>}
                                    @foreach($role as $data)
                                        <option value="{{ $data->id }}">{{ $data->roleName }}</option>
                                        
                                    @endforeach
                                </select></td>
                                <td><button type="submit" class="md-btn md-btn-primary">Search <i class="material-icons uk-text-white">&#xE8B6;</i></button></td>
                            </tr>
                            
                            @foreach($res as $user)
                            <tr>
                                <td>{{$user->firstName}}</td>
                                <td>{{$user->lastName}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->companyName}}</td>
                               <td><span class="uk-badge uk-badge-success">status</span></td>
                                
                                <td class="uk-text-center">
                                        <a href='{{ url("/admin/user/$user->id/edit") }}'><i class="md-icon material-icons">&#xE254;</i></a>
                                        <a href="#"><i class="md-icon material-icons">verified_user</i></a>
                                        <a href="#"><i class="md-icon material-icons">&#xE14B;</i></a>
                                        <a href="#"><i class="md-icon md-text-danger material-icons">&#xE872;</i></a>
                                        
                                </td>
                                
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                        {{ $res->appends([])->links() }}
                        
                        <!-- <tr>
                        <td>sam</td>
                                <td>sam</td>
                                <td>sam</td>
                                <td>soon</td>
                                <td>status</td>
                                <td class="uk-text-center">
                                        <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                                        <a href="#" ><i class="md-icon material-icons">&#xE88F;</i></a>
                                    </td>
                        </tr> -->
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
        <a class="md-fab md-fab-accent md-fab-wave" href="{{url('admin/user')}}"><i class="material-icons">+</i>
        </a>
    </div>
        </a>
    </div>
    
            
        </div>
    

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   