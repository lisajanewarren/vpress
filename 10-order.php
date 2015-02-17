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
                        <h1>Order</h1>
                    </div>
                </div>

                <div id="page">
                    <div id="seq-order-page">

                        
                        <div class="seq-control-bar">

                            <div class="seq-control-bar-search">
                                <label>Search for an order</label>
                                <div class="input-group">
                                    <input class="form-control" placeholder="Enter keyword" type="text">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Search</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div>
       
                        </div>

                        <div class="seq-btn-bar-holder">

                            <ul class="seq-btn-bar seq-btn-bar-left">
                                <li>
                                    <button type="button" class="seq-btn-grey">
                                        <span class="glyphicon glyphicon-expand"></span>
                                            <span class="btn-text">Order Selected</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="seq-btn-grey">
                                        <span class="glyphicon glyphicon-remove"></span>
                                            <span class="btn-text">Delete selected</span>
                                    </button>
                                </li>
                            </ul>

                            <ul class="seq-btn-bar seq-btn-bar-right">
                                <li>
                                    <button type="button" class="seq-btn-orange">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        <span class="btn-text">Create new</span>
                                    </button>
                                </li>
                            </ul>

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
                                        <th data-priority="1">Name</th>
                                        <th data-priority="6">Author</th>
                                        <th data-priority="1" class="seq-td-width-150">Created</th>
                                        <th data-priority="4" class="seq-td-width-150">Modified</th>
                                        <th data-priority="1" class="seq-td-width-150">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>MOK Business Card 2014</td>
                                        <td>Matt O'Keefe</td>
                                        <td>04/06/13</td>
                                        <td>09/07/13</td>
                                        <td>dropdown here</td>
                                    </tr>
                                     <tr>
                                        <td><input type="checkbox"></td>
                                        <td>MOK Business Card 2014</td>
                                        <td>Matt O'Keefe</td>
                                        <td>04/06/13</td>
                                        <td>09/07/13</td>
                                        <td>dropdown here</td>
                                    </tr>
                                     <tr>
                                        <td><input type="checkbox"></td>
                                        <td>MOK Business Card 2014</td>
                                        <td>Matt O'Keefe</td>
                                        <td>04/06/13</td>
                                        <td>09/07/13</td>
                                        <td>dropdown here</td>
                                    </tr>
                                     <tr>
                                        <td><input type="checkbox"></td>
                                        <td>MOK Business Card 2014</td>
                                        <td>Matt O'Keefe</td>
                                        <td>04/06/13</td>
                                        <td>09/07/13</td>
                                        <td>dropdown here</td>
                                    </tr>
                                     <tr>
                                        <td><input type="checkbox"></td>
                                        <td>MOK Business Card 2014</td>
                                        <td>Matt O'Keefe</td>
                                        <td>04/06/13</td>
                                        <td>09/07/13</td>
                                        <td>dropdown here</td>
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
                    </div>
                </div> <!-- end page-->

            </div> <!-- end page content wrapper inner --> 
        </div> <!-- end page content wrapper -->
  
    </body>

</html>
