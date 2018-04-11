@extends('layout.app')
@section('content')
    
         
        <div id="page_content_inner">

            <div class="md-card uk-margin-top">
                <div class="md-card-content">
                    <h3 class="heading_a">Create User</h3>
                    <form method="POST" action="{{ url('admin/category') }}">
                    {{ csrf_field() }}
                    <div class="uk-grid" data-uk-grid-margin>

                        <div class="uk-width-medium-1-1 uk-margin-large-top">
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-1">
                                        <label>Category</label>
                                        <input type="text" class="md-input" name="name" />
                                    </div>
                                    <div class="uk-width-medium-1-1 uk-margin-large-top">
                                        <label>Description</label>
                                        <textarea rows="4"  class="form-control" name="desc" />
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="uk-width-medium-1-2 uk-float-right">
                            <div class="uk-form-row">
                                
                                <button type="submit" name="create" class="md-btn md-btn-primary">Create</button>
                                <a  href="{{url('admin/user')}}" class="md-btn md-btn-danger">Back</a>
                            </div>
                            
                        </div>
                    </div>
                    
                    </form>
                   
                </div>
            </div>

         

        </div>
    
    
       <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="{{url('admin/category/create')}}"><i class="material-icons">keyboard_backspace</i>
        </a>
    </div>
        
    
            
        </div>
    

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   