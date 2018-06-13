    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                <!-- main sidebar switch -->
                
                
                <!-- secondary sidebar switch -->
               
               
                {{-- 
                    <div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                            <div class="uk-dropdown uk-dropdown-width-3">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-2-3">
                                        <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-bottom uk-text-center">
                                            <a href="{{ url('registeredUser') }}" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-light-green-600">&#xE158;</i>
                                                <span class="uk-text-muted uk-display-block">Registered User</span>
                                            </a>
                                            <a href="{{ url('createBlog') }}" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-purple-600">&#xE53E;</i>
                                                <span class="uk-text-muted uk-display-block">Create Blog</span>
                                            </a>
                                            <a href="{{ url('createAuthor') }}" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-cyan-600">&#xE0B9;</i>
                                                <span class="uk-text-muted uk-display-block">Create Author</span>
                                            </a>
                                            <a href="{{ url('blogList') }}" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-red-600">&#xE85C;</i>
                                                <span class="uk-text-muted uk-display-block">List Blogs</span>
                                            </a>
                                            
                                            <a href="{{ url('blogList') }}" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-orange-600">&#xE87C;</i>
                                                <span class="uk-text-muted uk-display-block">User profile</span>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                 --}}
                <div class="uk-navbar-flip">
                        <ul class="uk-navbar-nav user_actions">
                            
                        
                            <!-- <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">16</span></a>
                                <div class="uk-dropdown uk-dropdown-xlarge">
                                    <div class="md-card-content">
                                        <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">
                                            <li class="uk-width-1-2 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (12)</a></li>
                                            <li class="uk-width-1-2"><a href="#" class="js-uk-prevent uk-text-small">Alerts (4)</a></li>
                                        </ul>
                                        <ul id="header_alerts" class="uk-switcher uk-margin">
                                            <li>
                                                <ul class="md-list md-list-addon">
                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <span class="md-user-letters md-bg-cyan">hg</span>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="page_mailbox.html">Earum pariatur reiciendis.</a></span>
                                                            <span class="uk-text-small uk-text-muted">Non eum ipsam non aut laborum.</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="page_mailbox.html">Voluptatem a.</a></span>
                                                            <span class="uk-text-small uk-text-muted">Ex nemo cum iure et perspiciatis molestias cum suscipit nisi.</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <span class="md-user-letters md-bg-light-green">jp</span>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="page_mailbox.html">Eum voluptas.</a></span>
                                                            <span class="uk-text-small uk-text-muted">Debitis sapiente ducimus minus error et officia et optio.</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="page_mailbox.html">Totam suscipit placeat.</a></span>
                                                            <span class="uk-text-small uk-text-muted">Iusto at impedit qui quis iure provident odit laboriosam omnis qui.</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="page_mailbox.html">Qui quia officiis.</a></span>
                                                            <span class="uk-text-small uk-text-muted">Minima tenetur omnis adipisci ipsum tempore sapiente quo consequuntur ipsam tenetur distinctio.</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="uk-text-center uk-margin-top uk-margin-small-bottom">
                                                    <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>
                                                </div>
                                            </li>
                                            <li>
                                                <ul class="md-list md-list-addon">
                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading">Enim quia fuga.</span>
                                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Non explicabo quidem ut expedita.</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading">Veniam quia blanditiis.</span>
                                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Neque eius doloribus perspiciatis quo.</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading">Et hic enim.</span>
                                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Nesciunt quam ipsa voluptas mollitia nostrum id.</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md-list-addon-element">
                                                            <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading">Sit ut eum.</span>
                                                            <span class="uk-text-small uk-text-muted uk-text-truncate">Eum reiciendis sunt qui quae aut earum hic soluta.</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li> -->
                            <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                <a href="#" class="user_action_image"><img class="md-user-image" src="{{ url('public/assets/img/avatars/avatar_11_tn.png') }}" alt=""/></a>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav js-uk-prevent">
                                        <li><a href="{{ url('admin/profile') }}">My profile</a></li>
                                        <li><a href="page_settings.html">Settings</a></li>
                                        <li><a href="login.html">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                </div>
            </nav>
        </div>
    
        </div>
    </header><!-- main header end -->
    <!-- main sidebar -->
    <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="assets/img/logo_main.png" alt="" height="15" width="71"/>
                    <img class="logo_light" src="assets/img/logo_main_white.png" alt="" height="15" width="71"/>
                </a>
                <a href="index.html" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                    <img class="logo_light" src="assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
                </a>
            </div>
            
        </div>
        
        {{--< --div class="menu_section">
            <ul>
                <li class="current_section" title="Dashboard">
                    <a href="{{ url('/') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                    
                </li>
                <li title="Mailbox">
                    <a href="{{ url('registeredUser') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE158;</i></span>
                        <span class="menu_title">Registered User</span>
                    </a>
                    
                </li>
                <li title="Invoices">
                    <a href="{{ url('createAuthor') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                        <span class="menu_title">Create Author</span>
                    </a>
                    
                </li>
                <li title="Invoices">
                    <a href="{{ url('createBlog') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                        <span class="menu_title">Create Blog</span>
                    </a>
                    
                </li>
                <li title="Invoices">
                    <a href="{{ url('blogList') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                        <span class="menu_title">List Blog</span>
                    </a>
                    
                </li>
               
            </ul>
        </div>--}}
    </aside><!-- main sidebar end -->