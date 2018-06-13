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
                               <td>@if($user->status == 0)<span class="uk-badge uk-badge-warning">Waiting</span>@endif
                                    @if($user->status == 1)<span class="uk-badge uk-badge-success">Active</span>@endif
                                    @if($user->status == 2)<span class="uk-badge uk-badge-danger">Blocked</span>@endif
                                </td>
                                
                                <td class="uk-text-center">
                                        <a href='{{ url("/admin/user/$user->userId/edit") }}'>
                                        <i class="md-icon material-icons uk-text-primary">&#xE254;</i></a>
                                        
                                        @if($user->status == 0 || $user->status == 2 )<a onclick="status('user',{{ $user->userId }},1)"><i class="md-icon material-icons uk-text-success">verified_user</i></a>@endif
                                        @if($user->status == 1 )<a onclick="status('user',{{ $user->userId }},2)"><i class="md-icon material-icons uk-text-warning">&#xE14B;</i></a>@endif
                                        <a href="#"><i class="material-icons uk-text-info">&#xE5D5;</i></a>
                                        <a onclick="remove('user',{{ $user->userId }})"><i class="md-icon uk-text-danger material-icons">&#xE872;</i></a>

                                        
                                </td>
                                
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                        <div class="uk-grid">
                        <div class="uk-width-4-10 float-right">{{ $res->appends([])->links() }}</div>
                        
                       
                        </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            </div>  
            </div>

        </div>
    
       <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="{{url('admin/user/create')}}"><i class="material-icons">+</i>
        </a>
    </div>
        </a>
    </div>
    
            
        </div>
    

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   