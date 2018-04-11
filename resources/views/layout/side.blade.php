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
            <div class="sidebar_actions">
                <select id="lang_switchers" name="lang_switcher">
                    <option value="gb" selected>English</option>
                    <option value="gb" selected>Arab</option>
                </select>
            </div>
            
        </div>
        
        <div class="menu_section">
            <ul>
                <!-- <li class="current_section" title="Dashboard">
                    <a href="{{ url('/index') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                    
                </li> -->
                <!-- <li title="Manage Shopes">
                    <a href="{{ url('admin/user') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE0AF;</i></span>
                        <span class="menu_title">Manage Companies</span>
                    </a>
                    
                </li> -->

                <li title="Manage User">
                    <a href="{{ url('admin/user') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE8D3;</i></span>
                        <span class="menu_title">Manage User</span>
                    </a>
                    
                </li>
                
                <li title="Manage Coupons">
                    <a href="{{ url('admin/coupons') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE903;</i></span>
                        <span class="menu_title">Manage Coupons</span>
                    </a>
                    
                </li>
                <li title="Manage Events">
                    <a href="{{ url('admin/events') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE878;</i></span>
                        <span class="menu_title">Manage Events</span>
                    </a>
                    
                </li>
               
                <li title="Manage Category">
                    <a href="{{ url('admin/category') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE5C3;</i></span>
                        <span class="menu_title">Manage Category</span>
                    </a>
                    
                </li>
                <li title="Manage Stores">
                    <a href="{{ url('blogList') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE8D1;</i></span>
                        <span class="menu_title">Manage Stores</span>
                    </a>
                    
                </li>
                 <li title="Competition">
                    <a href="{{ url('admin/competetion') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE903;</i></span>
                        <span class="menu_title">Competition</span>
                    </a>
                    
                </li>           
            </ul>
        </div>
    </aside>    