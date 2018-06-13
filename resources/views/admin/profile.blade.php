
@extends('layout.app')
@section('content')
 
        
        <div id="page_content_inner">
            <form action="" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-7-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="assets/img/avatars/user.png" alt="user avatar"/>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div class="user_avatar_controls">
                                        <span class="btn-file">
                                            <span class="fileinput-new"><i class="material-icons">&#xE2C6;</i></span>
                                            <span class="fileinput-exists"><i class="material-icons">&#xE86A;</i></span>
                                            <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">
                                        </span>
                                        <a href="#" class="btn-file fileinput-exists" data-dismiss="fileinput"><i class="material-icons">&#xE5CD;</i></a>
                                    </div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Rosetta Spinka</span><span class="sub-heading" id="user_edit_position">Land acquisition specialist</span></h2>
                                </div>
                                <div class="md-fab-wrapper">
                                    <div class="md-fab md-fab-toolbar md-fab-small md-fab-accent">
                                        <i class="material-icons">&#xE8BE;</i>
                                        <div class="md-fab-toolbar-actions">
                                            <button type="submit" id="user_edit_save" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Save"><i class="material-icons md-color-white">&#xE161;</i></button>
                                            <button type="submit" id="user_edit_print" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Print"><i class="material-icons md-color-white">&#xE555;</i></button>
                                            <button type="submit" id="user_edit_delete" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Delete"><i class="material-icons md-color-white">&#xE872;</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user_content">
                                <ul id="user_edit_tabs" class="uk-tab" data-uk-tab="{connect:'#user_edit_tabs_content'}">
                                    <li class="uk-active"><a href="#">Basic</a></li>
                                    <li><a href="#">Groups</a></li>
                                    <li><a href="#">Todo</a></li>
                                </ul>
                                <ul id="user_edit_tabs_content" class="uk-switcher uk-margin">
                                    <li>
                                        <div class="uk-margin-top">
                                            <h3 class="full_width_in_card heading_c">
                                                General info
                                            </h3>
                                            <div class="uk-grid" data-uk-grid-margin>
                                                <div class="uk-width-medium-1-2">
                                                    <label for="user_edit_uname_control">User name</label>
                                                    <input class="md-input" type="text" id="user_edit_uname_control" name="user_edit_uname_control" />
                                                </div>
                                                <div class="uk-width-medium-1-2">
                                                    <label for="user_edit_position_control">User position</label>
                                                    <input class="md-input" type="text" id="user_edit_position_control" name="user_edit_position_control" />
                                                </div>
                                            </div>
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <label for="user_edit_personal_info_control">About</label>
                                                    <textarea class="md-input" name="user_edit_personal_info_control" id="user_edit_personal_info_control" cols="30" rows="4">Modi dolorem suscipit et quia in et quos aut facere vero quisquam nihil quis et et saepe praesentium nihil illum voluptatibus voluptate iure aut sed molestiae facere voluptatum alias aliquam totam est nam exercitationem laudantium.</textarea>
                                                </div>
                                            </div>
                                            <h3 class="full_width_in_card heading_c">
                                                Languages
                                            </h3>
                                            <div class="uk-grid" data-uk-grid-margin>
                                                
                                            </div>
                                            <h3 class="full_width_in_card heading_c">
                                                Contact info
                                            </h3>
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                                                </span>
                                                                <label>Email</label>
                                                                <input type="text" class="md-input" name="user_edit_email" value="brando00@yundt.com" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                                                </span>
                                                                <label>Phone Number</label>
                                                                <input type="text" class="md-input" name="user_edit_phone" value="09519693766" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                                                </span>
                                                                <label>Facebook</label>
                                                                <input type="text" class="md-input" name="user_edit_facebook" value="facebook.com/envato" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-twitter"></i>
                                                                </span>
                                                                <label>Twitter</label>
                                                                <input type="text" class="md-input" name="user_edit_twitter" value="twitter.com/envato" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-linkedin"></i>
                                                                </span>
                                                                <label>Linkdin</label>
                                                                <input type="text" class="md-input" name="user_edit_linkdin" value="linkedin.com/company/envato" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-google-plus"></i>
                                                                </span>
                                                                <label>Google+</label>
                                                                <input type="text" class="md-input" name="user_edit_google_plus" value="plus.google.com/+envato/about" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="uk-text-muted uk-text-small">Move the draggable group by clicking and holding handler and drag it to other list.</p>
                                        <div class="uk-grid" data-uk-grid-margin>
                                            <div class="uk-width-medium-1-2">
                                                <h4 class="heading_c uk-margin-small-bottom">My groups</h4>
                                                <ul class="md-list md-list-addon uk-sortable groups_connected" id="user_groups">
                                                    <li data-group-id="1">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Cloud Computing</a></span>
                                                            <span class="uk-text-small uk-text-muted">125 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="2">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Account Manager Group</a></span>
                                                            <span class="uk-text-small uk-text-muted">71 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="3">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Digital Marketing</a></span>
                                                            <span class="uk-text-small uk-text-muted">126 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="4">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">HR Professionals Association - Human Resources</a></span>
                                                            <span class="uk-text-small uk-text-muted">190 Members</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="uk-width-medium-1-2">
                                                <h4 class="heading_c uk-margin-small-bottom">All Groups</h4>
                                                <ul class="md-list md-list-addon uk-sortable groups_connected" id="all_groups">
                                                    <li data-group-id="5">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Biotech & Pharma Professionals Network</a></span>
                                                            <span class="uk-text-small uk-text-muted">138 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="6">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">The IT Sales Global Community</a></span>
                                                            <span class="uk-text-small uk-text-muted">255 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="7">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Healthcare Executives Network</a></span>
                                                            <span class="uk-text-small uk-text-muted">21 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="8">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Luxury & Lifestyle Professionals</a></span>
                                                            <span class="uk-text-small uk-text-muted">117 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="9">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Information Security Community</a></span>
                                                            <span class="uk-text-small uk-text-muted">162 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="10">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">eMarketing Association Network</a></span>
                                                            <span class="uk-text-small uk-text-muted">121 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="11">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Finance Club</a></span>
                                                            <span class="uk-text-small uk-text-muted">155 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="12">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Banking Careers</a></span>
                                                            <span class="uk-text-small uk-text-muted">46 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="13">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Java Developers</a></span>
                                                            <span class="uk-text-small uk-text-muted">260 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="14">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons">&#xE5D2;</i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Information Technology: Software, Hardware, Computer, Developer, Cloud & Engineering</a></span>
                                                            <span class="uk-text-small uk-text-muted">176 Members</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <input name="user_groups_control" id="user_groups_control" type="hidden"/>
                                    </li>
                                    <li>
                                        <ul class="md-list md-list-addon" id="user_todo">
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_0" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Sed et voluptas.</span>
                                                    <span class="uk-text-small uk-text-muted">Eaque praesentium sapiente in quibusdam quod perferendis sunt autem sequi quasi.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_1" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Ut aut fugit nihil.</span>
                                                    <span class="uk-text-small uk-text-muted">Assumenda cupiditate fugit non ipsam aut atque enim.</span>
                                                </div>
                                            </li>
                                            <li class="md-list-item-disabled">
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_2" type="checkbox" data-md-icheck checked/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">In in debitis.</span>
                                                    <span class="uk-text-small uk-text-muted">Accusamus incidunt animi illum veritatis sint neque aliquam et nulla mollitia.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_3" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading uk-text-danger">In dolor ipsam rem unde molestias.</span>
                                                    <span class="uk-text-small uk-text-danger">Dolores est in maiores id qui saepe.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_4" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Quis sed aut laborum.</span>
                                                    <span class="uk-text-small uk-text-muted">Rerum odio explicabo rerum voluptas autem et vitae.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_5" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Qui magni enim maiores magni.</span>
                                                    <span class="uk-text-small uk-text-muted">Laboriosam iste explicabo perferendis et ut quo.</span>
                                                </div>
                                            </li>
                                            <li class="md-list-item-disabled">
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_6" type="checkbox" data-md-icheck checked/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading uk-text-danger">Totam voluptatem consequatur asperiores voluptates.</span>
                                                    <span class="uk-text-small uk-text-danger">Blanditiis eos omnis voluptatem eveniet esse deleniti ut dolorem.</span>
                                                </div>
                                            </li>
                                            <li class="md-list-item-disabled">
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_7" type="checkbox" data-md-icheck checked/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Voluptatem possimus doloremque saepe consequatur beatae.</span>
                                                    <span class="uk-text-small uk-text-muted">Inventore voluptas quia incidunt dolorem et nam est cumque praesentium.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_8" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Aspernatur nemo aperiam et quibusdam.</span>
                                                    <span class="uk-text-small uk-text-muted">Sit quis ut molestiae saepe quia expedita.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_9" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Quidem expedita non commodi.</span>
                                                    <span class="uk-text-small uk-text-muted">Voluptatem voluptas dolor porro et sint tempore a assumenda aut ut.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_10" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Ex tenetur officiis.</span>
                                                    <span class="uk-text-small uk-text-muted">Est occaecati consequatur enim dolorem amet repudiandae.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_11" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Velit similique quas.</span>
                                                    <span class="uk-text-small uk-text-muted">Ut maiores iure recusandae qui hic quod autem rerum.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_12" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading uk-text-danger">Illum laudantium sunt.</span>
                                                    <span class="uk-text-small uk-text-danger">Totam vero cumque necessitatibus eos officiis doloremque.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_13" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Inventore possimus deserunt distinctio et.</span>
                                                    <span class="uk-text-small uk-text-muted">Molestiae molestiae nesciunt iusto repellat voluptatum numquam consectetur enim.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_14" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Similique ut sed.</span>
                                                    <span class="uk-text-small uk-text-muted">Repellendus itaque consequatur porro voluptas possimus laudantium magnam laboriosam maxime.</span>
                                                </div>
                                            </li>
                                            <li class="md-list-item-disabled">
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_15" type="checkbox" data-md-icheck checked/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Totam accusantium sed.</span>
                                                    <span class="uk-text-small uk-text-muted">Vel libero et est sit et nisi nostrum optio velit qui qui.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_16" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Provident nobis est maxime et molestias.</span>
                                                    <span class="uk-text-small uk-text-muted">Ut quo reiciendis voluptates dolorem quas quisquam.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_17" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Sint velit repellat sint quia amet.</span>
                                                    <span class="uk-text-small uk-text-muted">Non autem atque voluptatem eum possimus pariatur odit.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_18" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Fugit dolorum veritatis ut.</span>
                                                    <span class="uk-text-small uk-text-muted">Dicta error eos quo minus odit ut facere quam esse.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <input name="todo_item_19" type="checkbox" data-md-icheck/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading uk-text-danger">Eos aut est.</span>
                                                    <span class="uk-text-small uk-text-danger">Alias dolorem dicta qui vitae repudiandae hic labore veniam fugit.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-large-3-10">
                        <div class="md-card uk-margin-large-bottom">
                            <div class="md-card-content">
                                <h3 class="heading_c uk-margin-medium-bottom">Other settings</h3>
                                <div class="uk-form-row">
                                    <input type="checkbox" checked data-switchery id="user_edit_active" />
                                    <label for="user_edit_active" class="inline-label">User Active</label>
                                </div>
                                <hr class="md-hr">
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="user_edit_role">User Role</label>
                                    <select data-md-selectize>
                                        <option value="">Select...</option>
                                        <option value="admin">Admin</option>
                                        <option value="super_admin">Super Admin</option>
                                        <option value="editor" selected>Editor</option>
                                        <option value="author">Author</option>
                                        <option value="none">None</option>
                                    </select>
                                </div>
                            </div>
                        </div>
			<style type="text/css" media="screen">
				#map {
				    width: 100%;
				    height: 600px;
				    float: left;
				  }
				  #infoPanel {
				    float: left;
				    margin-left: 10px;
				  }
				  #infoPanel div {
				    margin-bottom: 5px;
				  }
			</style>

                        <div class="uk-width-large-1-1 uk-margin-large-top">
                        <div class=" ">
                            <div class="md-card-content ">
                            <input id="pac-input" class="form-control" placeholder="Enter your address" type="text"></input>
                            <div id="map" class="md-card"></div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>

            </form>

        </div>

<script type="text/javascript">
	var geocoder = new google.maps.Geocoder();
	function initialize() 
	{
	  var latLng = new google.maps.LatLng(-34.397, 150.644);
	  var map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 8,
	    center: latLng,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	  });


	  var marker = new google.maps.Marker({
	    position: latLng,
	    title: 'Point A',
	    map: map,
	    draggable: true
	  });

	   var input =  document.getElementById('pac-input');



	  var autocomplete = new google.maps.places.Autocomplete(input);
  	autocomplete.bindTo('bounds', map);

	  updateMarkerPosition(latLng);
	  geocodePosition(latLng);
	  
	  // Add dragging event listeners.
	  google.maps.event.addListener(marker, 'dragstart', function() {
	    updateMarkerAddress('Dragging...');
	  });
	      
	  google.maps.event.addListener(marker, 'drag', function() {
	    updateMarkerStatus('Dragging...');
	    updateMarkerPosition(marker.getPosition());
	  });
	  
	  google.maps.event.addListener(marker, 'dragend', function() {
	    updateMarkerStatus('Drag ended');
	    geocodePosition(marker.getPosition());
	  });
	  
	  google.maps.event.addListener(map, 'click', function(e) {
	    updateMarkerPosition(e.latLng);
	    geocodePosition(marker.getPosition());
	    marker.setPosition(e.latLng);
	  });

	}
	google.maps.event.addDomListener(window, 'load', initialize);
	initialize();
</script>        
    
@endsection

    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

