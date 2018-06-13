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
                                        <li data-uk-filter="goodwin-nienow"><a href="#">Goodwin-Nienow</a></li>
                                        <li data-uk-filter="strosin groupa"><a href="#">Strosin Groupa</a></li>
                                        <li data-uk-filter="schamberger plc"><a href="#">Schamberger PLC </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <label for="contact_list_search">Search... (min 3 char.)</label>
                            <input class="md-input" type="text" id="contact_list_search"/>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="heading_b uk-text-center grid_no_results" style="display:none">No results found</h3>

            <div class="uk-grid-width-medium-1-2 uk-grid-width-large-1-3 hierarchical_show" id="contact_list">
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
                                Mercedes Carroll                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Perspiciatis qui harum deserunt tenetur a necessitatibus rem illum nesciunt porro.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">gerlach.francisca@haley.info</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">401.374.0858x7352</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,wilton blanda,benny.white@gmail.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_01.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Wilton Blanda                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Quod necessitatibus est tenetur tenetur illo id ut ut autem iure nostrum et dolor consequuntur.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">benny.white@gmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">+63(5)4754631114</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,karson hansen,bberge@yahoo.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_05.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Karson Hansen                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Doloremque modi possimus maiores aut autem magni consequatur delectus ex illum.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">bberge@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">1-801-037-9997x625</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,dr. trent durgan,krice@marks.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head md-bg-cyan-600">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_03.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center md-color-white">
                                Dr. Trent Durgan                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Et ut et reprehenderit et aliquam sint ad.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">krice@marks.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(036)815-5263x22442</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,michelle dare,lenny.ward@gmail.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_02.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Michelle Dare                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Quo velit molestiae magni omnis voluptatem necessitatibus.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">lenny.ward@gmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(601)987-5388x86279</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,florian willms,bergstrom.fredrick@yahoo.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_09.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Florian Willms                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Voluptatibus nisi mollitia minima est quam vel ad praesentium est id reprehenderit vel praesentium.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">bergstrom.fredrick@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">1-184-913-5515</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,amber cremin,twintheiser@yahoo.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head md-bg-cyan-600">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_03.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center md-color-white">
                                Amber Cremin                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Nihil laudantium praesentium et impedit consequatur eius eum in nam eligendi aliquid voluptatem animi.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">twintheiser@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(942)139-7619x644</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,ms. mckayla luettgen,sonya77@collier.biz">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_01.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Ms. Mckayla Luettgen                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Molestias sed fugiat quo sit odit aut impedit delectus enim ratione necessitatibus minus.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">sonya77@collier.biz</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(617)547-7515x1420</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,maxime keeling,qhilll@breitenberg.biz">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_06.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Maxime Keeling                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Repellat quia ab earum ad nulla velit sit voluptas laboriosam aliquid numquam et.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">qhilll@breitenberg.biz</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(669)986-9868</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,prof. gaetano berge jr.,antonietta.kessler@lockman.org">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_04.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Prof. Gaetano Berge Jr.                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Voluptas praesentium et praesentium et tempora aperiam tempore ipsa doloremque.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">antonietta.kessler@lockman.org</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">811.832.0945</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="strosin groupa,mrs. selena pagac ii,martina.shanahan@yahoo.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_06.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Mrs. Selena Pagac II                                <span class="uk-text-truncate">Strosin Groupa</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Inventore maiores sit sint voluptatem minima qui id est ut illum.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">martina.shanahan@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">715-324-0333</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="strosin groupa,wilfred cronin iv,macejkovic.lillian@hotmail.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_07.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Wilfred Cronin IV                                <span class="uk-text-truncate">Strosin Groupa</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Aliquid blanditiis et dolor et dicta odio.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">macejkovic.lillian@hotmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">093.035.9870x9571</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="strosin groupa,liza gulgowski,hilpert.keith@gmail.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_08.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Liza Gulgowski                                <span class="uk-text-truncate">Strosin Groupa</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">In doloribus optio ut et qui quo et sunt.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">hilpert.keith@gmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(279)603-8153</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,hollie jast sr.,oschaden@rippin.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_02.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Hollie Jast Sr.                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Aut labore quasi quo commodi quisquam qui aut quidem.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">oschaden@rippin.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">630.420.6605x45004</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="strosin groupa,edwardo robel,pagac.wilson@deckow.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_05.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Edwardo Robel                                <span class="uk-text-truncate">Strosin Groupa</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Dolores eligendi et quia modi ut voluptas et incidunt aperiam.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">pagac.wilson@deckow.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">1-880-721-5256</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,franz reilly,csimonis@mcdermott.net">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_06.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Franz Reilly                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Dolor deleniti quod sint quas explicabo minima eligendi soluta molestiae qui aut vero qui.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">csimonis@mcdermott.net</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">562.985.5694</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,lexi senger,maggio.mia@yahoo.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_07.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Lexi Senger                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Porro quas quasi est sed incidunt neque.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">maggio.mia@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">05771365664</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="strosin groupa,crystal marvin dds,forrest.rolfson@ward.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_08.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Crystal Marvin DDS                                <span class="uk-text-truncate">Strosin Groupa</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">A atque ducimus enim tenetur rerum sit similique asperiores consequatur necessitatibus aliquam et voluptatem.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">forrest.rolfson@ward.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(839)822-1062x9031</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,paolo rogahn,konopelski.garret@dubuque.biz">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_07.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Paolo Rogahn                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Odio voluptate excepturi at qui tempora aut ipsum pariatur.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">konopelski.garret@dubuque.biz</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">1-149-309-4387x67077</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,destinee koelpin,julie24@yahoo.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head md-bg-cyan-600">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_08.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center md-color-white">
                                Destinee Koelpin                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Est dicta ipsa totam repudiandae quia minima consequuntur sint tempora exercitationem.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">julie24@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(279)983-1223x12066</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,amina terry,kristina.hoppe@hotmail.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_08.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Amina Terry                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Voluptatem voluptatem id fugit rerum maxime repellat iste quaerat sint reiciendis eos.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">kristina.hoppe@hotmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">949-480-5465x68529</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,miss bettye murphy jr.,dach.valentine@howell.info">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_01.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Miss Bettye Murphy Jr.                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Et reiciendis ut nobis consequatur maiores illum.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">dach.valentine@howell.info</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">158-279-7498</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,mrs. minnie pouros,jannie.mertz@yahoo.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_09.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Mrs. Minnie Pouros                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Et ut quam nam aut esse architecto ad saepe quam corrupti.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">jannie.mertz@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">1-575-635-2164x593</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,prof. selina stehr,qheaney@king.com">
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
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_11.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Prof. Selina Stehr                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Est distinctio veritatis eum reiciendis doloremque delectus libero enim et.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">qheaney@king.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">423.274.9509x8950</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>

@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   