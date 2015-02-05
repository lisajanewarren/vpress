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
                            <li>Reports</li>
                            <li class="active"><a href="#">Order Report</a></li>
                        </ul>
                        <h1>Order Report</h1>
                    </div>
                </div>

                <div id="page">

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
