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
                            <li>
                                <a href="#" class="seq-icon">
                                    <div class="stat">888</div>
                                    <div class="hidden-s icon"><span class="glyphicon glyphicon-time"></span></div>
                                </a>
                                <p class="seq-text"><a href="#">Orders awaiting <br />approval</a></p>
                                <span class="seq-bar"></span>
                            </li>
                            <li class="active">
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
                                <a href="#" class="seq-icon">
                                    <div class="stat">04</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-heart"></span></div>
                                </a>
                                <p class="seq-text"><a href="#">Favourite <br />products</a></p>
                                <span class="seq-bar"></span>
                            </li>
                            <li>
                                <a href="#" class="seq-icon">
                                    <div class="stat">05</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-floppy-disk"></span></div>
                                </a>
                                <p class="seq-text"><a href="#">Recently <br />saved</a></p>
                                <span class="seq-bar"></span>
                            </li>
                        </ul>

                        <section class="seq-tab-panel">   
                            <h1>Your Orders</h1>


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
                                            <th data-priority="1" class="seq-td-width-60">Date</th>
                                            <th data-priority="6" class="seq-td-width-60">Order</th>
                                            <th data-priority="6" class="seq-td-width-150">Code</th>
                                            <th data-priority="1">Product Details</th>
                                            <th data-priority="3" class="seq-td-width-150">Quantity</th>
                                            <th data-priority="2" class="seq-td-width-120">Price</th>
                                            <th data-priority="4" class="seq-td-width-120">Status</th>
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
                                                1676
                                            </td>
                                            <td>
                                                PRODCODE
                                            </td>
                                            <td>
                                                <strong>Product name</strong>
                                                <p>Document name</p>
                                            </td>
                                            <td>
                                                9 x boxes of 100
                                            </td>
                                            <td>
                                                &pound;1000.00
                                            </td>
                                            <td>
                                                Awaiting delivery
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
                                                1676
                                            </td>
                                            <td>
                                                PRODCODE
                                            </td>
                                            <td>
                                                <strong>Product name</strong>
                                                <p>A really long document name lorem ipsum sit amet et dolor lorem ipsum sit amet et dolor lorem ipsum sit amet et dolore</p>
                                            </td>
                                            <td>
                                                9 x boxes of 100
                                            </td>
                                            <td>
                                                &pound;1000.00
                                            </td>
                                            <td>
                                                Awaiting delivery
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
                                                1676
                                            </td>
                                            <td>
                                                PRODCODE
                                            </td>
                                            <td>
                                                <strong>Product name</strong>
                                                <p>Document name</p>
                                            </td>
                                            <td>
                                                9 x boxes of 100
                                            </td>
                                            <td>
                                                &pound;1000.00
                                            </td>
                                            <td>
                                                Awaiting delivery
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
                                                1676
                                            </td>
                                            <td>
                                                PRODCODE
                                            </td>
                                            <td>
                                                <strong>Product name</strong>
                                                <p>Document name</p>
                                            </td>
                                            <td>
                                                9 x boxes of 100
                                            </td>
                                            <td>
                                                &pound;1000.00
                                            </td>
                                            <td>
                                                Awaiting delivery
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