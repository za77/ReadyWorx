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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Profile Name</th>
                                
                            </tr>
                            </thead>
                            <tfoot>

                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Profile Name</th>
                                
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                               <td><input name="firstName" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="lastName" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="email" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="soon" required="" class="md-input" type="text" placeholder="Search"></td>
                            </tr>
                            @foreach($data as $user)
                            <tr>
                                <td>{{$user->firstName}}</td>
                                <td>{{$user->lastName}}</td>
                                <td>{{$user->email}}</td>
                                <td>soon</td>
                                
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                        {{ $data->appends([])->links() }}
                    </div>
                </div>
            </div>
            </div>  
            </div>

        </div>
    
       <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="#mailbox_new_message" data-uk-modal="{center:true}">
            <i class="material-icons">+</i>
        </a>
    </div>
        </a>
    </div>
    <div class="uk-modal" id="mailbox_new_message">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close uk-close" type="button"></button>
           <form action="{{url('createAuthor')}}" method="POST">
                <div class="uk-modal-header">
                    <h3 class="uk-modal-title">Create Author</h3>
                </div>
                <!-- <div class="uk-margin-medium-bottom">
                    <label for="mail_new_to">To</label>
                    <input type="text" class="md-input" id="mail_new_to"/>
                
                </div> -->
                    {{ csrf_field() }}
                <div class="uk-width-medium-1-1 uk-row-first">
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin="">
                                    <div class="uk-width-medium-1-2 uk-row-first">
                                        <div class="md-input-wrapper"><label>First Name</label><input class="md-input" name="firstName" type="text"><span class="md-input-bar "></span></div>
                                        
                                    </div>
                                    <div class="uk-width-medium-1-2 uk-row-first">
                                        <div class="md-input-wrapper"><label>Last Name</label><input class="md-input" name="lastName" type="text"><span class="md-input-bar "></span></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-medium-1-1 uk-margin-top uk-row-first">
                                        <div class="md-input-wrapper"><label>Email</label><input class="md-input" 
                                        name="email" type="text"><span class="md-input-bar "></span></div>
                                        
                                    </div>
                            <div class="uk-width-medium-1-1 uk-margin-top uk-row-first">
                                        <div class="md-input-wrapper"><label>Mobile</label><input class="md-input" 
                                        name="mobile" type="text"><span class="md-input-bar "></span></div>
                                        
                                    </div>
                        </div>

                <div class="uk-margin-large-bottom">
                    <label for="mail_new_message">Message</label>
                    <textarea name="mail_new_message" id="mail_new_message" cols="30" rows="6" class="md-input"></textarea>
                </div>
                <div id="mail_upload-drop" class="uk-file-upload">
                    <p class="uk-text">Drop file to upload</p>
                    <p class="uk-text-muted uk-text-small uk-margin-small-bottom">or</p>
                    <a class="uk-form-file md-btn">choose file<input id="mail_upload-select" type="file"></a>
                </div>
                <div id="mail_progressbar" class="uk-progress uk-hidden">
                    <div class="uk-progress-bar" style="width:0">0%</div>
                </div>
                <div class="uk-modal-footer">
                    <!-- <a href="#" class="md-icon-btn"><i class="md-icon material-icons">&#xE226;</i></a> -->
                    <button type="submit" class="uk-float-right md-btn md-btn-flat md-btn-flat-primary">INVITE</button>
                </div>
            </form>
        </div>
    </div>
            
        </div>
    

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   