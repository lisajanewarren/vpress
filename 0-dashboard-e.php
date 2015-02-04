<!DOCTYPE html>

<html lang="en">
 
    <?php require 'includes/_htmlhead.php'; ?>

    <body>

        <div id="wrapper">

            <?php require 'includes/_sidebar.php'; ?>


            <div id="page-content-wrapper" class="page-dashboard">
            
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
                            <li>
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
                            <li class="active">
                                <div class="seq-icon">
                                    <div class="stat">05</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-floppy-disk"></span></div>
                                </div>
                                <p class="seq-text">Recently <br />saved</p>
                                <span class="seq-bar"></span>
                            </li>
                        </ul>

                        <section class="seq-tab-panel">   
                            <h1>Recently Saved</h1>


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
                            <div class="seq-table-responsive table-responsive" data-pattern="priority-columns" data-add-display-all-btn="false" data-add-focus-btn="false" data-focus-btn-icon="false" data-sticky-table-header="false">
                                <table class="table">
                                   <thead>
                                        <tr>
                                            <th data-priority="1" class="seq-td-width-60">Modified</th>
                                            <th data-priority="6" class="seq-td-width-60"><span class="offscreen">Time</span></th>
                                            <th data-priority="6" class="seq-td-width-150">Product</th>
                                            <th data-priority="1">Details</th>
                                            <th data-priority="2" class="seq-td-width-150"><span class="offscreen">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div> <!-- end responsive table -->

                            <table class="seq-table seq-table-recently-saved" border="0">
                                <tr>
                                    <th class="seq-td-date">Modified</th>
                                    <th class="seq-td-time"></th>
                                    <th class="seq-td-prod">Product</th>
                                    <th class="seq-td-details">Details</th>
                                    <th class="seq-td-action-bar"></th>
                                </tr>
                                <tr>
                                    <td class="seq-td-date" data-priority="persist">
                                        <div class="dashboard-order-date"><span class="day">20</span><div class="month-year">04/14</div></div>
                                    </td>
                                    <td class="seq-td-time">
                                        <span class="glyphicon glyphicon-time"></span>
                                        <p>10:22</p>
                                    </td>
                                    <td class="seq-td-prod" data-priority="2">
                                        Stationary Catalogue
                                    </td>
                                    <td class="seq-td-details">
                                        Mok_test
                                    </td>
                                    <td class="seq-td-action-bar">
                                        <ul>
                                            <li>
                                                <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-arrow-right"></span>
                                                </button>
                                                <p>Order</p>
                                            </li>
                                            <li>
                                                <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                                <p>Edit</p>
                                            </li>
                                            <li>
                                                 <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                                <p>Delete</p>
                                            </li>
                                    </td>
                                </tr> 
                                <tr>
                                    <td class="seq-td-date" data-priority="persist">
                                        <div class="dashboard-order-date"><span class="day">20</span><div class="month-year">04/14</div></div>
                                    </td>
                                    <td class="seq-td-time">
                                        <span class="glyphicon glyphicon-time"></span>
                                        <p>10:22</p>
                                    </td>
                                    <td class="seq-td-prod" data-priority="2">
                                        Stationary Catalogue
                                    </td>
                                    <td class="seq-td-details">
                                        Mok_test
                                    </td>
                                    <td class="seq-td-action-bar">
                                        <ul>
                                            <li>
                                                <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-arrow-right"></span>
                                                </button>
                                                <p>Order</p>
                                            </li>
                                            <li>
                                                <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                                <p>Edit</p>
                                            </li>
                                            <li>
                                                 <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                                <p>Delete</p>
                                            </li>
                                    </td>
                                </tr> 
                                <tr>
                                    <td class="seq-td-date" data-priority="persist">
                                        <div class="dashboard-order-date"><span class="day">20</span><div class="month-year">04/14</div></div>
                                    </td>
                                    <td class="seq-td-time">
                                        <span class="glyphicon glyphicon-time"></span>
                                        <p>10:22</p>
                                    </td>
                                    <td class="seq-td-prod" data-priority="2">
                                        Stationary Catalogue
                                    </td>
                                    <td class="seq-td-details">
                                        Mok_test
                                    </td>
                                    <td class="seq-td-action-bar">
                                        <ul>
                                            <li>
                                                <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-arrow-right"></span>
                                                </button>
                                                <p>Order</p>
                                            </li>
                                            <li>
                                                <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                                <p>Edit</p>
                                            </li>
                                            <li>
                                                 <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                                <p>Delete</p>
                                            </li>
                                    </td>
                                </tr> 
                                <tr>
                                    <td class="seq-td-date" data-priority="persist">
                                        <div class="dashboard-order-date"><span class="day">20</span><div class="month-year">04/14</div></div>
                                    </td>
                                    <td class="seq-td-time">
                                        <span class="glyphicon glyphicon-time"></span>
                                        <p>10:22</p>
                                    </td>
                                    <td class="seq-td-prod" data-priority="2">
                                        Stationary Catalogue
                                    </td>
                                    <td class="seq-td-details">
                                        Mok_test
                                    </td>
                                    <td class="seq-td-action-bar">
                                        <ul>
                                            <li>
                                                <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-arrow-right"></span>
                                                </button>
                                                <p>Order</p>
                                            </li>
                                            <li>
                                                <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                                <p>Edit</p>
                                            </li>
                                            <li>
                                                 <button class="btn btn-default btn-circle background-grey">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                                <p>Delete</p>
                                            </li>
                                    </td>
                                </tr>         
                            </table>


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

            </div>  <!-- end page content wrapper -->
           

        </div> <!-- end wrapper -->
    

        <!-- this is shown when sidebar links are clicked -->
        <div class="row-fluid" id="catalogue-selection" style="background-color:#434343; border-left:solid 2px #FFFFFF; display:none; left: 0px; margin-left:225px; margin-right:0px; height:100%; opacity:0.9; padding:50px 0 0 0; position:fixed; top: 60px; width:100%;">
        </div>
                          
        <!-- this populates the catalogue selection div above -->
        <ul id="catalogue-structure">
            <li><a href="#" data-category="1">Vegetables</a>
                <ul>
                    <li><a class="subcategory" href="#" data-category="8">Greens</a>
                        <ul>
                            <li>Chips</li>
                            <li>Crisps</li>
                            <li>Haribo</li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li><a href="#" data-category="2">What's included</a>
                <ul>
                    <li><a class="subcategory" href="#" data-category="3">Big Animals</a>
                        <ul>
                            <li><a class="subcategory" href="#" data-category="4">Land</a></li>
                            <li><a class="subcategory" href="#" data-category="5">Sea</a></li>
                        </ul>
                    </li>
                    <li><a class="subcategory" href="#" data-category="6">Small Animals</a>
                        <ul>
                            <li><a class="subcategory" href="#" data-category="7">Air</a></li>
                            <li><a class="subcategory" href="#" data-category="8">Rivers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul> <!-- end catalogue structure -->
   
  
        <?php require 'includes/_inlinejs.php'; ?>

    </body>

</html>