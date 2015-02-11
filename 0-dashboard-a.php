<!DOCTYPE html>

<html lang="en" class="seq-sidebar-active">
 
    <?php require 'includes/_htmlhead.php'; ?>

    <body>

        <?php require 'includes/_sidebar.php'; ?>

        <div id="page-content-wrapper" class="page-dashboard">
            <div id="page-content-wrapper-inner">
        
                <?php require 'includes/_topnav.php'; ?>

                <!-- header banner -->
                <div id="header-graphic">
                    <div class="inner">
                        <h1>Welcome...</h1>
                        <h4>Welcome to Coreprint Web2Print for all<br />your print ordering requirements...</h4>
                    </div>
                </div>
                <!-- end header banner -->

                <!-- this will be the main content holder -->
                <div id="page">
                    
                    <div class="seq-tab-box">

                        <ul class="seq-tab-nav">
                            <li class="active">
                                <div class="seq-icon">
                                    <div class="stat">888</div>
                                    <div class="hidden-s icon"><span class="glyphicon glyphicon-time"></span></div>
                                </div>
                                <p class="seq-text">Orders awaiting <br />approval</p>
                                <span class="seq-bar"></span>
                            </li>
                            <li>
                                <div class="seq-icon">
                                    <div class="stat">02</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-ok"></span></div>
                                </div>
                                <p class="seq-text">Current <br />orders</p>
                                <span class="seq-bar"></span>
                            </li>
                            <!-- (being removed for now )
                            <li>
                                <div class="seq-icon">
                                    <div class="stat">03</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-envelope"></span></div>
                                </div>
                                <p class="seq-text">Quotes <br />received</p>
                                <span class="seq-bar"></span>
                            </li>
                            -->
                            <li>
                                <div class="seq-icon">
                                    <div class="stat">04</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-heart"></span></div>
                                </div>
                                <p class="seq-text">Favourite <br />products</p>
                                <span class="seq-bar"></span>
                            </li>
                            <li>
                                <div class="seq-icon">
                                    <div class="stat">05</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-floppy-disk"></span></div>
                                </div>
                                <p class="seq-text">Recently <br />saved</p>
                                <span class="seq-bar"></span>
                            </li>
                        </ul>

                        <section class="seq-tab-panel">   
                            <h1>Orders awaiting approval</h1>


                        <!-- Responsive Tables: http://gergeo.se/RWD-Table-Patterns -->
                        <!-- table header responsive options
                            data-priority=""    Always visible and not hideable from dropdown
                            data-priority="1"   Always visible (but hidable from dropdown)
                            data-priority="2"   Visible when (min-width: 480px)
                            data-priority="3"   (min-width: 640px)
                            data-priority="4"   (min-width: 800px)
                            data-priority="5"   (min-width: 960px)
                            data-priority="6"   (min-width: 1120px)
                        -->
                            <div class="seq-table-responsive seq-th-hidden table-responsive" data-pattern="priority-columns" data-add-display-all-btn="false" data-add-focus-btn="false" data-focus-btn-icon="false" data-sticky-table-header="false">
                                <table class="table">
                                   <thead>
                                        <tr>
                                            <th data-priority="2" class="seq-td-width-60">Date</th>
                                            <th data-priority="1" class="seq-td-width-60">Eye</th>
                                            <th data-priority="3" class="seq-td-width-60">Number</th>
                                            <th data-priority="1">Name</th>
                                            <th data-priority="5">Company</th>
                                            <th data-priority="2">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="seq-date-block">
                                                    <span class="day">20</span>
                                                    <span class="month-year">04/14</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="seq-icon-eye">
                                                    <span class="glyphicon glyphicon-eye-open"></span>
                                                </div>
                                            </td>
                                            <td>1234</td>
                                            <td>By <strong>David James Very Very Very Longname DeMontforte</strong></td>
                                            <td>For <strong>An extremely long company name goes here</strong></td>
                                            <td>
                                                <ul class="seq-circular-actions">
                                                    <li><button class="btn background-orange"><span class="glyphicon glyphicon-ok"></span></button></li>
                                                    <li><button class="btn background-grey"><span class="glyphicon glyphicon-remove"></span></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="seq-date-block">
                                                    <span class="day">20</span>
                                                    <span class="month-year">04/14</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="seq-icon-eye">
                                                    <span class="glyphicon glyphicon-eye-open"></span>
                                                </div>                                            
                                            </td>
                                            <td>1234</td>
                                            <td>By <strong>David James Very Very Very Longname DeMontforte</strong></td>
                                            <td>For <strong>An extremely long company name goes here</strong></td>
                                            <td>
                                                <ul class="seq-circular-actions">
                                                    <li><button class="btn background-orange"><span class="glyphicon glyphicon-ok"></span></button></li>
                                                    <li><button class="btn background-grey"><span class="glyphicon glyphicon-remove"></span></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="seq-date-block">
                                                    <span class="day">20</span>
                                                    <span class="month-year">04/14</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="seq-icon-eye">
                                                    <span class="glyphicon glyphicon-eye-open"></span>
                                                </div>                                            
                                            </td>
                                            <td>1234</td>
                                            <td>By <strong>David James</strong></td>
                                            <td>For <strong>Sequence Agency</strong></td>
                                            <td>
                                                <ul class="seq-circular-actions">
                                                    <li><button class="btn background-grey"><span class="glyphicon glyphicon-remove"></span></button></li>
                                                    <li><button class="btn background-orange"><span class="glyphicon glyphicon-ok"></span></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="seq-date-block">
                                                    <span class="day">20</span>
                                                    <span class="month-year">04/14</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="seq-icon-eye">
                                                    <span class="glyphicon glyphicon-eye-open"></span>
                                                </div>
                                            </td>
                                            <td>1234</td>
                                            <td>By <strong>David James Very Very Very Longname DeMontforte</strong></td>
                                            <td>For <strong>An extremely long company name goes here</strong></td>
                                            <td>
                                                <ul class="seq-circular-actions">
                                                    <li><button class="btn background-orange"><span class="glyphicon glyphicon-ok"></span></button></li>
                                                    <li><button class="btn background-grey"><span class="glyphicon glyphicon-remove"></span></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="seq-date-block">
                                                    <span class="day">20</span>
                                                    <span class="month-year">04/14</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="seq-icon-eye">
                                                    <span class="glyphicon glyphicon-eye-open"></span>
                                                </div>
                                            </td>
                                            <td>1234</td>
                                            <td>By <strong>David James</strong></td>
                                            <td>For <strong>Sequence Agency</strong></td>
                                            <td>
                                                <ul class="seq-circular-actions">
                                                    <li><button class="btn background-orange"><span class="glyphicon glyphicon-ok"></span></button></li>
                                                    <li><button class="btn background-grey"><span class="glyphicon glyphicon-remove"></span></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end responsive table -->

                        

                            <aside class="seq-ctas">
                                    <h1>Your categories</h1>

                                    <!-- ctas-->
                                    <ul>
                                        <li>
                                            <button class="btn btn-lg dashboard">Marketing<br />Literature</button>
                                        </li>
                                        <li>
                                            <button class="btn btn-lg dashboard">Request<br />a Quote</button>
                                        </li>
                                        <li>
                                            <button class="btn btn-lg dashboard">Newsletters</button>
                                        </li>  
                                        <li>
                                            <button class="btn btn-lg dashboard">Standard<br />Stationery</button>
                                        </li>
                                    </ul>
                            </aside> <!-- end ctas -->


                        </section>

                    </div> <!-- end tab box -->
                </div> <!-- end page -->

            </div> <!-- end page content wrapper inner -->
        </div>  <!-- end page content wrapper -->
    </body>

</html>