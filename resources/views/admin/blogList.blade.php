
@extends('layout.app')
@section('content')
 
     
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Contact List</h3>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-vertical-align">
                                <div class="uk-vertical-align-middle">
                                    <ul id="contact_list_filter" class="uk-subnav uk-subnav-pill uk-margin-remove">
                                        <li class="uk-active" data-uk-filter=""><a href="#">All</a></li>
                                        <li data-uk-filter="goodwin-nienow"><a href="#">Rating</a></li>
                                        <li data-uk-filter="strosin groupa"><a href="#">Date</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <label for="contact_list_search">Search...</label>
                            <input class="md-input" type="text" id="contact_list_search"/>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="heading_b uk-text-center grid_no_results" style="display:none">No results found</h3>

            <div class="uk-grid-width-medium-1-2 uk-grid-width-large-1-3 hierarchical_show" id="contact_list">
                @foreach($data as $blog)
                <div data-uk-filter="goodwin-nienow,mercedes carroll,gerlach.francisca@haley.info">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_12.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                {{ $blog->firstName }} {{$blog->lastName  }}                               
                                <span class="uk-text-truncate">#programming</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Title</span>
                                        <span class="uk-text-small uk-text-muted">{{ $blog->title }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">{{ $blog->email }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">mobile</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>

    @endsection
