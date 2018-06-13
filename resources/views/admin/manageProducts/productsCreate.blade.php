@extends('layout.app')
@section('content')
<script src="{{ asset('public/js/croppie.js')}}"></script>
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
                    <h3 class="heading_a">Create Products</h3>
                    <form method="POST" action="{{ url('admin/products') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="uk-grid" data-uk-grid-margin>

                        <div class="uk-width-medium-1-1 uk-margin-large-top">
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-1">
                                        <label>Product Name</label>
                                        <input type="text" class="md-input" name="name" />
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                     <label>Category Type</label>
                                      <select name="categoryId" class="form-control uk-margin-top">
                                            <option value="">Select Category</option>
                                            @foreach($res as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="uk-width-medium-1-1 uk-margin-large-top">
                                        <label>Description</label>
                                        <textarea rows="4"  class="form-control" name="desc" />
                                        </textarea>
                                    </div>
                                     <!-- <div class="uk-width-medium-1-3 uk-margin-large-top">
                                         <div class="input-group">
                                            <input id="uploadFile" class="form-control" placeholder="Choose File" disabled="disabled">
                                            <div class="input-group-btn">
                                              <div class="fileUpload btn btn-danger">
                                                <span><i class="glyphicon glyphicon-upload"></i> Upload</span>
                                                <input id="uploadBtn" name="pic" type="file" onchange="up()" class="upload" />
                                     
                                              </div>
                                              <br>
                                     
                                              
                                            </div>
                                          </div>
                                                                         </div> -->
                                    <div class="uk-width-6-10 text-center">
                                    <label>Choose  Product Image</label>
                                </br>
                                <span class="uk-form-file md-btn uk-margin-top uk-margin-bottom text-center hideShow">choose file
                                <input id="upload"  type="file" accept="image/* " ></span>
                                <span style="margin-left:10px;" ></span> 
                                <a class="btn btn-primary upload-result text-center"  id="hideSeek">Crop Image</a>
                                <div id="upload-demo" class="text-center" style="width:150px"></div>
                 <div id="upload-demo-i" style="background:#e1e1e1;width:308px;padding:30px;height:175px;margin-top:30px"></div>
                 
      
       

        </div>
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="uk-width-medium-1-2 uk-float-right">
                            <div class="uk-form-row">
                            <textarea name="crop" id="imgUrl" hidden=""></textarea>
                                
                                <button type="submit" name="create" class="md-btn md-btn-primary">Create</button>
                                <a  href="{{url('admin/products')}}" class="md-btn md-btn-danger">Back</a>
                            </div>
                            
                        </div>
                    </div>
                    
                    </form>
                   
                </div>
            </div>

         

        </div>
    
    
       <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="{{url('admin/products/create')}}"><i class="material-icons">keyboard_backspace</i>
        </a>
    </div>
        
    
            
        </div>
     <script>
document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value.substring(12);
};
    </script>
      <script>

    
  //$(".cr-slider").hide();
$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 308,
        height: 136,
        type: 'square'
    },
    boundary: {
        width: 308,
        height: 136
    }
});
$('#upload').on('change', function () 
{ 
  var reader = new FileReader();
    reader.onload = function (e) {
      $uploadCrop.croppie('bind', {
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    //$("#hideSeek").hide();
});
$('.upload-result').on('click', function (ev) {
    
  $uploadCrop.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) { 
    
      //localStorage.removeItem('crop');
        html = '<img src="' + resp + '" />';
        //$("#upload-demo-i").html(html);
        //localStorage.setItem('crop',resp);
        $("#imgUrl").val(resp);
        /*$('#upload-demo').css({
                     "display":"none"
                  
                });
      $("#upload-demo-i").css({
                     "display":"block"               
                });*/
    //   }
    // });
  });
});
</script>

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   