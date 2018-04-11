

@extends('layout.app')
@section('content')
 
        <div id="page_content_inner">

            <!-- statistics (small charts) -->
            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Visitors (last 7d)</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>12456</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Sale</span>
                            <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>142384</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                            <span class="uk-text-muted uk-text-small">Orders Completed</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Visitors (live)</span>
                            <h2 class="uk-margin-remove" id="peity_live_text">46</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- large chart -->
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons">&#xE5D5;</i>
                                <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                    <i class="md-icon material-icons">&#xE5D4;</i>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#">Action 1</a></li>
                                            <li><a href="#">Action 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Chart
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div class="mGraph-wrapper">
                                <div id="mGraph_sale" class="mGraph" data-uk-check-display></div>
                            </div>
                            <div class="md-card-fullscreen-content">
                                <div class="uk-overflow-container">
                                    <table class="uk-table uk-table-no-border uk-text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Best Seller</th>
                                            <th>Total Sale</th>
                                            <th>Change</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>January 2014</td>
                                            <td>Et cupiditate velit praesentium.</td>
                                            <td>$3 234 162</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>February 2014</td>
                                            <td>Dolor qui velit doloribus.</td>
                                            <td>$3 771 083</td>
                                            <td class="uk-text-success">+2.5%</td>
                                        </tr>
                                        <tr>
                                            <td>March 2014</td>
                                            <td>Laboriosam qui optio nihil.</td>
                                            <td>$2 429 352</td>
                                            <td class="uk-text-danger">-4.6%</td>
                                        </tr>
                                        <tr>
                                            <td>April 2014</td>
                                            <td>Et mollitia et.</td>
                                            <td>$4 844 169</td>
                                            <td class="uk-text-success">+7%</td>
                                        </tr>
                                        <tr>
                                            <td>May 2014</td>
                                            <td>Non natus possimus praesentium.</td>
                                            <td>$5 284 318</td>
                                            <td class="uk-text-success">+3.2%</td>
                                        </tr>
                                        <tr>
                                            <td>June 2014</td>
                                            <td>Deserunt magnam consequuntur.</td>
                                            <td>$4 688 183</td>
                                            <td class="uk-text-danger">-6%</td>
                                        </tr>
                                        <tr>
                                            <td>July 2014</td>
                                            <td>Explicabo mollitia et accusamus.</td>
                                            <td>$4 353 427</td>
                                            <td class="uk-text-success">-5.3%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                <p class="uk-margin-large-top uk-margin-small-bottom heading_list uk-text-success">Some Info:</p>
                                <p class="uk-margin-top-remove">Ipsum eum minus sunt commodi dolorem praesentium voluptatibus repudiandae nesciunt et ex nostrum possimus corporis et nostrum eaque commodi omnis aut aliquid quaerat beatae corporis et quasi itaque eaque culpa perferendis velit non odit eligendi praesentium consequatur reprehenderit quaerat ea consequatur iste repellendus modi est pariatur voluptatibus mollitia accusamus aspernatur voluptatum dolorum fugit et architecto magnam maxime aliquid pariatur atque et laboriosam voluptatem aut qui quisquam velit unde aut dicta delectus est vel est molestiae voluptatem eos odit illum quas ut ad quaerat eveniet fugiat perferendis consequatur sunt reprehenderit illo tempora debitis qui quae perspiciatis harum consectetur expedita aut in occaecati tenetur adipisci repellat sit autem omnis qui deleniti rerum aut sed quos libero et perspiciatis et facere et incidunt et provident id sunt aut id modi suscipit deleniti dicta est ipsum voluptatem placeat et eveniet quis a aut repellat iusto voluptates eum possimus vel pariatur et aut ipsum non commodi est autem nisi officiis non doloribus illum repellat dolorem est repellat voluptas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-large-1-2">
                    <div class="md-card">
                        <div id="clndr_events" class="clndr-wrapper">
                            <script>
                                // calendar events
                                clndrEvents = [
                                    { date: '2017-05-08', title: 'Doctor appointment', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' },
                                    { date: '2017-05-09', title: 'John\'s Birthday', url: 'javascript:void(0)' },
                                    { date: '2017-05-09', title: 'Party', url: 'javascript:void(0)', timeStart: '08:00', timeEnd: '08:30' },
                                    { date: '2017-05-13', title: 'Meeting', url: 'javascript:void(0)', timeStart: '18:00', timeEnd: '18:20' },
                                    { date: '2017-05-18', title: 'Work Out', url: 'javascript:void(0)', timeStart: '07:00', timeEnd: '08:00' },
                                    { date: '2017-05-18', title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '11:10', timeEnd: '11:45' },
                                    { date: '2017-05-23', title: 'Meeting', url: 'javascript:void(0)', timeStart: '20:25', timeEnd: '20:50' },
                                    { date: '2017-05-26', title: 'Haircut', url: 'javascript:void(0)' },
                                    { date: '2017-05-26', title: 'Lunch with Katy', url: 'javascript:void(0)', timeStart: '08:45', timeEnd: '09:45' },
                                    { date: '2017-05-26', title: 'Concept review', url: 'javascript:void(0)', timeStart: '15:00', timeEnd: '16:00' },
                                    { date: '2017-05-27', title: 'Swimming Poll', url: 'javascript:void(0)', timeStart: '13:50', timeEnd: '14:20' },
                                    { date: '2017-05-29', title: 'Team Meeting', url: 'javascript:void(0)', timeStart: '17:25', timeEnd: '18:15' },
                                    { date: '2017-06-02', title: 'Dinner with John', url: 'javascript:void(0)', timeStart: '16:25', timeEnd: '18:45' },
                                    { date: '2017-06-13', title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' }
                                ]
                            </script>
                            <script id="clndr_events_template" type="text/x-handlebars-template">
                               
                            </script>
                        </div>
                        
                    </div>
                </div>
                <div class="uk-width-1-1">
               <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-text-nowrap">
                            <thead>
                            <tr>
                                <th>Table Heading</th>

                                <th>Table Heading</th>
                                <th>Table Heading</th>
                                <th>Table Heading</th>
                                <th>Table Heading</th>
                                <th>Table Heading</th>
                                <th>Table Heading</th>
                                <th>Table Heading</th>
                            </tr>
                            </thead>
                            <tfoot>

                            <tr>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                               <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                                <td><input name="fullname" required="" class="md-input" type="text" placeholder="Search"></td>
                            </tr>
                            <tr>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                            </tr>
                            <tr>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>>
            </div>

        </div>
    
@endsection

    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

