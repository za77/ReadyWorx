@extends('layout.app')
@section('content')
        
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Create User</h3>
                    <form method="post" action="{{  url('admin/user')}}">
                    {{ csrf_field() }}
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-2">
                                        <label>First Name</label>
                                        <input type="text" class="md-input" name="firstName" />
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <label>Last Name</label>
                                        <input type="text" class="md-input" name="lastName" />
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>email</label>
                                <input type="text" class="md-input" name="email" value="" />
                            </div>
                            
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>Mobile</label>
                                <input type="text" class="md-input" name="mobile" value="" />
                            </div>
                            
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>Mall or Comapany Name</label>
                                <input type="text" class="md-input" name="companyName" value="" />
                            </div>
                            
                        </div>
                        <div class="uk-width-medium-1-1">
                            <h3 class="heading_a">Role</h3>
                            <div class="uk-grid" data-uk-grid-margin>
                                
                                <div class="uk-width-medium-3-10">
                                    <span class="icheck-inline">
                                        <input type="radio" name="radio" onclick="radio(2)" value="2" id="radio_demo_inline_1" data-md-icheck />
                                        <label for="radio_demo_inline_1" value="" onclick="radio(2)" class="inline-label">Admin Mall</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="radio" name="radio" onclick="radio(3)" value="3"id="radio_demo_inline_2" data-md-icheck />
                                        <label for="radio_demo_inline_2" onclick="radio(3)" class="inline-label">Admin Branch</label>
                                    </span>
                                    <!-- <span class="icheck-inline">
                                        <input type="radio" name="radio" onclick="radio(4)" value="4"id="radio_demo_inline_3" data-md-icheck />
                                        <label for="radio_demo_inline_3" onclick="radio(4)" class="inline-label">Company</label>
                                    </span> -->
                                    
                                </div>
                                <input type="hidden" id="radio" name="role">
                            </div>
                            
                            
                        </div>
                        <input type="hidden" name="userId" value="0">                      
                        <div class="uk-width-medium-1-2 uk-float-right">
                            <div class="uk-form-row">
                                
                                <button name="create" class="md-btn md-btn-primary">Create</button>
                                <a name="create" href="{{url('admin/user')}}" class="md-btn md-btn-danger">Back</a>
                            </div>
                            
                        </div>
                    </div>
                    </form>
                    
                    
                   
                </div>
            </div>

         

        </div>
    
    
       <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="{{url('admin/user/create')}}"><i class="material-icons">keyboard_backspace</i>
        </a>
    </div>
        
    
            
        </div>

    

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   