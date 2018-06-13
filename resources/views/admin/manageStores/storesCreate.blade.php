@extends('layout.app')
@section('content')
    <style type="text/css" media="screen">
 .fileUpload {
    position: absolute;
    overflow: hidden;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
    </style>
   
         
        <div id="page_content_inner">

            <div class="md-card uk-margin-top">
                <div class="md-card-content">
                    <h3 class="heading_a">Create User</h3>
                    <form method="POST" action="{{ url('admin/category') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="uk-grid" data-uk-grid-margin>

                        <div class="uk-width-medium-1-1 uk-margin-large-top">
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin>

                                <div class="uk-width-medium-1-1">
                                        <label>Store Number</label>
                                        <input type="text" class="md-input" name="name" />
                                    </div>

                                    <div class="uk-width-medium-1-1">
                                        <label>Store Name</label>
                                        <input type="text" class="md-input" name="name" />
                                    </div>
                                    <div class="uk-width-medium-1-1 uk-margin-large-top">
                                        <label>Description</label>
                                        <textarea rows="4"  class="form-control" name="desc" />
                                        </textarea>
                                    </div>
                                     <div class="uk-width-medium-1-3 uk-margin-large-top">
                                         <div class="input-group">
                                            <input id="uploadFile" class="form-control" placeholder="Choose File" disabled="disabled">
                                            <div class="input-group-btn">
                                              <div class="fileUpload btn btn-danger">
                                                <span><i class="glyphicon glyphicon-upload"></i> Store Picture</span>
                                                <input id="uploadBtn" name="pic" type="file" onchange="up()" class="upload" />

                                              </div>
                                              <br>

                                              
                                            </div>
                                          </div>
                                    </div>
                                    <div class="uk-width-medium-1-1">
                                    <span class="uk-text-small">250 * 250</span>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="uk-width-medium-1-2 uk-float-right">
                            <div class="uk-form-row">
                                
                                <button type="submit" name="create" class="md-btn md-btn-primary">Create</button>
                                <a  href="{{url('admin/stores')}}" class="md-btn md-btn-danger">Back</a>
                            </div>
                            
                        </div>
                    </div>
                    
                    </form>
                   
                </div>
            </div>

         

        </div>
    
    
       <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="{{url('admin/stores')}}"><i class="material-icons">keyboard_backspace</i>
        </a>
    </div>
        
    
            
        </div>
     <script>
document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value.substring(12);
};
    </script>

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   