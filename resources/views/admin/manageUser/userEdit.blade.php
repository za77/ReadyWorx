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
                                        <input type="text" class="md-input" value="{{ $res->firstName }}" name="firstName" />
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <label>Last Name</label>
                                        <input type="text" class="md-input" value="{{ $res->lastName }}" name="lastName" />
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>email</label>
                                <input type="text" class="md-input" name="email" value="{{ $res->email }}" />
                            </div>
                            
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>Mobile</label>
                                <input type="text" class="md-input" name="mobile" value="{{ $res->mobile }}" />
                            </div>
                            
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>Mall or Company Name </label>
                                <input type="text" class="md-input" name="companyName" value="{{ $res->companyName }}" />
                            </div>
                            
                        </div>
                        <div class="uk-width-medium-1-1">
                            <h3 class="heading_a">Role</h3>
                            <div class="uk-grid" data-uk-grid-margin>
                                
                                <div class="uk-width-medium-3-10">
                                    
                                    <span class="icheck-inline">
                                        <input type="radio" name="radio" value="2"id="radio_demo_inline_2" data-md-icheck {{ $res->role == '2' ? 'checked' : '' }}/>
                                        <label for="radio_demo_inline_2" class="inline-label">Mall</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="radio" name="radio" value="3" id="radio_demo_inline_3" data-md-icheck {{ $res->role == '3' ? 'checked' : '' }} />
                                        <label for="radio_demo_inline_3" class="inline-label">Company</label>
                                    </span>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <input type="hidden" name="userId" value="{{ $res->userId}}">
                        <div class="uk-width-medium-1-2 uk-float-right">
                            <div class="uk-form-row">
                                
                                <button name="create" class="md-btn md-btn-primary">Update</button>
                                <a name="create" href="{{url('admin/user')}}" class="md-btn md-btn-danger">Back</a>
                            </div>
                            
                        </div>
                    </div>
                    </form>
                    
                   
                </div>
            </div>

         

        </div>
    
    
       <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="{{url('admin/user')}}"><i class="material-icons">keyboard_backspace</i>
        </a>
    </div>
        
    
            
        </div>
    

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   