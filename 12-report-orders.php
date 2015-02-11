<!DOCTYPE html>

<html lang="en" class="seq-sidebar-active">

    <?php require 'includes/_htmlhead.php'; ?>
    
    <body>
            
        <?php require 'includes/_sidebar.php'; ?>

        <div id="page-content-wrapper">
            <div id="page-content-wrapper-inner">

                <?php require 'includes/_topnav.php'; ?>

                <div id="header-graphic">
                    <div class="inner">
                        <ul class="seq-breadcrumb">
                            <li>Home</li> 
                            <li>Reports</li>
                            <li class="active"><a href="#">Order Report</a></li>
                        </ul>
                        <h1>Order Report</h1>
                    </div>
                </div>

                <div id="page">

                    <div id="seq-order-page">

                        <div class="seq-datepicker-bar">
                            <div class="input-group">
                                <input class="form-control" data-provide="datepicker" type="text" name="start" />
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                            <span class="join">to</span>
                            <div class="input-group">
                                <input class="form-control" data-provide="datepicker" type="text" name="end" />
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                            <ul class="seq-btn-bar seq-btn-bar-left">
                                <li>
                                    <button type="button" class="seq-btn-orange">
                                        <span class="btn-text">Update</span>
                                    </button>
                                </li>
                            </ul>
                        </div>


                        <div class="seq-control-bar">

                            <div class="seq-control-bar-search">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Enter keyword" type="text">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Search</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </form>
                            </div>

                            <ul class="seq-btn-bar seq-btn-bar-right">
                                <li>
                                    <button type="button" class="seq-btn-orange">
                                        <span class="btn-text">Export</span>
                                    </button>
                                </li>
                            </ul>
                            
                            <div class="seq-control-bar-sort">
                                <form action="#" method="post">
                                    <div class="input-group">
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                                    All orders <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Option 1</a></li>
                                                    <li><a href="#">Option 2</a></li>
                                                    <li><a href="#">Option 3</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                    </div><!-- /input-group -->
                                </form>
                            </div>
                        </div>


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
                                        <th data-priority="1" class="seq-td-width-30"><input type="checkbox"></th>
                                        <th data-priority="4" class="seq-td-width-150">Order No</th>
                                        <th data-priority="6" class="seq-td-width-150">Date</th>
                                        <th data-priority="6" class="seq-td-width-60">Code</th>
                                        <th data-priority="1">Name</th>
                                        <th data-priority="1">Document</th>
                                        <th data-priority="1" class="seq-td-width-30">Qty</th>
                                        <th data-priority="1" class="seq-td-width-90">Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>891 COMPLETED</td>
                                        <td>01/05/14 13:00</td>
                                        <td>VP017</td>
                                        <td>Egyptian Cotton Bath Robes</td>
                                        <td>Document name here</td>
                                        <td>5</td>
                                        <td>&pound;89.95</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>891 COMPLETED</td>
                                        <td>01/05/14 13:00</td>
                                        <td>VP017</td>
                                        <td>Egyptian Cotton Bath Robes</td>
                                        <td>Document name here</td>
                                        <td>5</td>
                                        <td>&pound;89.95</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>891 COMPLETED</td>
                                        <td>01/05/14 13:00</td>
                                        <td>VP017</td>
                                        <td>Egyptian Cotton Bath Robes</td>
                                        <td>Document name here</td>
                                        <td>5</td>
                                        <td>&pound;89.95</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>891 COMPLETED</td>
                                        <td>01/05/14 13:00</td>
                                        <td>VP017</td>
                                        <td>Egyptian Cotton Bath Robes</td>
                                        <td>Document name here</td>
                                        <td>5</td>
                                        <td>&pound;89.95</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>891 COMPLETED</td>
                                        <td>01/05/14 13:00</td>
                                        <td>VP017</td>
                                        <td>Egyptian Cotton Bath Robes</td>
                                        <td>Document name here</td>
                                        <td>5</td>
                                        <td>&pound;89.95</td>
                                    </tr>
            


                                </tbody>
                            </table>
                        </div> <!-- end responsive table -->

                        <div class="seq-pagination">
                            <ul>
                                <li class="prev">&#10094;</li> 
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="next"><a href="#">&#10095;</a></li>
                            </ul>
                        </div>
                    </div> <!-- end seq order page --> 
                </div> <!-- end page-->   
                
            </div> <!-- end page content wrapper inner -->    
        </div> <!-- end page content wrapper -->
  
    </body>

</html>
