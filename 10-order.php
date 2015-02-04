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
                    
                    <div id="seq-vdp">

                       
                        <!-- bootstrap sortable table - http://bootstrap-table.wenzhixin.net.cn/ -->
                        <table  class="seq-vdp-results" data-toggle="table" data-pagination="true"  data-click-to-select="true" data-url="example-json/example-json-2.json">
                            <thead>
                                <tr>
                                    <th data-checkbox="true" class="seq-vpd-checkbox"></th>
                                    <th data-field="title" data-sortable="true" class="seq-vdp-title">Name</th>
                                    <th data-field="salutation" data-sortable="true" class="seq-vdp-salutation">Author</th>
                                    <th data-field="firstname" data-sortable="true" class="seq-vdp-firstname">Created</th>
                                    <th data-field="surname" data-sortable="true" class="seq-vdp-surname">Modified</th>
                                    <th data-field="address" data-sortable="true" class="seq-vdp-address">Actions</th>
                                </tr>
                                <!-- table data from data source pulled in here -->
                            </thead>

                        </table>

                    </div> <!-- end seq-vdp -->

                    

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
