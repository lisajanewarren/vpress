<!DOCTYPE html>

<html lang="en">

    <?php require 'includes/_htmlhead.php'; ?>
    
    <body>

        <div id="wrapper">
            
            <?php require 'includes/_sidebar.php'; ?>

            <div id="page-content-wrapper">

                <?php require 'includes/_topnav.php'; ?>

                <div id="header-graphic">
                    <div class="inner">
                        <ul class="seq-breadcrumb">
                            <li>Home</li> 
                            <li><a href="#">Product Category</a></li>
                            <li><a href="#">Product Name</a></li>
                            <li class="active"><a href="#">Order</a></li>
                        </ul>
                        <h1>Order</h1>
                    </div>
                </div>

                <div id="page">

                    <div id="seq-order-page">

                        
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
                                        <span class="btn-text">Order Selected</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="seq-btn-orange">
                                        <span class="btn-text">Delete selected</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="seq-btn-orange">
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
                

            </div> <!-- end page content wrapper -->

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
