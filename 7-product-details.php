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
                            <li>Product Category</li>
                            <li class="active"><a href="#">Product name</a></li>
                        </ul>
                        <h1>Product Details</h1>
                    </div>
                </div>

                <div id="page">


                    <aside class="seq-ctas">
                        <h1>Related Products</h1>

                        <!-- ctas-->
                        <ul class="product-ctas">
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dropdown vpress">Create</button>
                                    <button type="button" class="btn dropdown-toggle vpress" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Order</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dropdown vpress">Create</button>
                                    <button type="button" class="btn dropdown-toggle vpress" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Order</a></li>
                                    </ul>
                                </div>                            
                            </li>
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dropdown vpress">Create</button>
                                    <button type="button" class="btn dropdown-toggle vpress" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Order</a></li>
                                    </ul>
                                </div>
                            </li>  
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dropdown vpress">Create</button>
                                    <button type="button" class="btn dropdown-toggle vpress" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Order</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </aside> <!-- end ctas -->
                    
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
