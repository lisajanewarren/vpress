<!DOCTYPE html>

<html lang="en">

    <?php require 'includes/_htmlhead.php'; ?>
    
    <body>

        <div id="wrapper">
            
            <?php require 'includes/_sidebar.php'; ?>

            <div id="page-content-wrapper" class="page-product-editor">

                <?php require 'includes/_topnav.php'; ?>

                <ul class="seq-breadcrumb">
                    <li><a href="#">Home</a></li> 
                    <li><a href="#">Product Category</a></li>
                    <li><a href="#">Product Name</a></li> 
                    <li class="active"><a href="#">Order</a></li> 
                </ul>

                <div id="page">

                    <div id="seq-product-editor">
                        <div class="seq-product-editor-head">
                            <div class="inner">

                                <div class="seq-product-editor-user-controls">
                                   <ul class="pagination">
                                        <li class="prev"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li><a href="#">1 of 2</a></li>
                                        <li class="next"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                    </ul>

                                    <ul class="page-layout">
                                        <li class="page-layout-one active"><a href="#"></a></li>
                                        <li class="page-layout-two"><a href="#"></a></li>
                                    </ul>
                                </div>

                                <ul class="seq-product-editor-actions">
                                    <li>
                                        <button type="button" class="btn vpress">Remove item from queue</button>
                                    </li>
                                    <li><button type="button" class="btn vpress">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        Back</button></li>
                                    <li>
                                        <button type="button" class="btn vpress">Next
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </button>
                                    </li> 
                                </ul>
            
                            </div>
                        </div>

                        <div class="seq-product-editor-main">
                            
                            <div class="seq-product-editor-col">

                                <ul class="seq-interactive-image-controls">
                                    <li class="control-one">zoom in</li>
                                    <li class="control-two">zoom out</li>
                                    <li class="control-three">pdf</li>
                                    <li class="control-four">refresh <span class="num">2</span></li>
                                </ul>
                                
                                <div class="seq-interactive-image">
                                    <img src="http://placehold.it/400x580/363636" alt="" />
                                </div>

                            </div>

                             <div class="seq-product-editor-col">

                                <div class="seq-product-editor-info">
                                    <p>Description text could go in here. This description could be two or three lines long...</p>
                                </div>

                                <div class="seq-box">
                                    <header class="seq-box-header ">
                                        <h2 class="seq-sub-title">Engagement Code</h2>
                                    </header>
                                    <div class="seq-box-content">
                                        <div class="seq-inner">
                                           <div class="seq-filter btn-group" style="width: 100%;">
                                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="background:#ffffff;border:1px solid #ccc;width:100%;text-align:left">
                                                  Please choose <span class="caret" style="float: right;margin: 8px 0 0 0;"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" style="width:100%">
                                                    <li><a href="#">option 2</a></li>
                                                    <li><a href="#">option 3</a></li>
                                                    <li><a href="#">option 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

                                
                                <div class="seq-box">
                                    <header class="seq-box-header ">
                                        <h2 class="seq-sub-title">Delivery Address</h2>
                                    </header>
                                    <div class="seq-box-content">
                                        <div class="seq-inner">
                                           <div class="seq-filter btn-group" style="width: 100%;">
                                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="background:#ffffff;border:1px solid #ccc;width:100%;text-align:left;">
                                                  Please choose <span class="caret" style="float: right;margin: 8px 0 0 0;"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" style="width:100%">
                                                    <li><a href="#">option 2</a></li>
                                                    <li><a href="#">option 3</a></li>
                                                    <li><a href="#">option 4</a></li>
                                                </ul>
                                            </div>
                                            <div style="overflow:hidden;padding:20px 0;">
                                                <button type="button" class="btn vpress">Add New Address</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->


                                <div class="seq-box">
                                    <header class="seq-box-header ">
                                        <h2 class="seq-sub-title">Quantity</h2>
                                    </header>
                                    <div class="seq-box-content">
                                        <div class="seq-inner">
                                           <input class="form-control" placeholder="" type="text" style="border-radius: 0;box-shadow:none">
                                       
                                            <table class="seq-box-table" style="margin-top: 30px">
                                                <tr>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                </tr>
                                                <tr>
                                                    <td>1000</td>
                                                    <td>£350.00</td>
                                                </tr>
                                                <tr>
                                                    <td>200</td>
                                                    <td>£700.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3000</td>
                                                    <td>£1050.00</td>
                                                </tr>
                                                <tr>
                                                    <td>4000</td>
                                                    <td>1400.00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

      
                            </div>

                        </div>

                        <div class="seq-product-editor-foot">
                            <div class="inner">

                                <ul class="seq-product-editor-actions">
                                    <li><button type="button" class="btn vpress">Remove Item from Queue</button></li>
                                    <li><button type="button" class="btn vpress">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        Back
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn vpress">Save &amp; Continue
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </button>
                                    </li> 
                                </ul>

                            </div>
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
