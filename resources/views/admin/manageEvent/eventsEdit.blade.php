@extends('layout.app')
@section('content')

        <div id="page_content_inner ">
        <h3 class="heading_b uk-margin-bottom uk-margin-top uk-margin-left">Create Blog</h3>
            <div class="md-card uk-margin-medium-bottom uk-margin-left uk-margin-right">
                <div class="md-card-content">

        <div class="uk-width-medium-1-1 uk-row-first  ">
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin="">
                                    <div class="uk-width-medium-1-3 uk-row-first">
                                        <div class="md-input-wrapper"><label>Title</label><input class="md-input" name="firstName" type="text"><span class="md-input-bar "></span></div>
                                        
                                    </div>
                                   
                                </div>
                                 <div class="uk-width-medium-1-1  uk-margin-top uk-margin-large-bottom">
                                        <div class="md-input-wrapper"><label>Description</label>
                                        <textarea rows="3" cols="3" class="md-input" name="lastName" type="text"></textarea></div>
                                        
                                </div>
                        <div class="uk-width-large-1-1">
                            <select id="selec_adv_1" name="selec_adv_1" multiple>
                                <option value="2" selected>Venus</option>
                                <option value="3" selected>Earth</option>
                            </select>
                        </div>
                            </div>
            </div>
            </div>
            </div>

            <textarea id="wysiwyg_tinymce" cols="30" rows="40" class="uk-margin-left uk-margin-right">
            </textarea>
            <div class="uk-margin-top uk-margin-large-bottom uk-float-right">
            <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" href="javascript:void(0)">Preview</a>
            <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" href="javascript:void(0)">Save</a>
            </div>
       
    
            
        </div>

@endsection


    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

    <!-- google web fonts -->
   