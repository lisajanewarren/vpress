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
                            <li class="active"><a href="#">Product Category</a></li>
                        </ul>
                        <h1>Product category (list view)</h1>
                    </div>
                </div>

                <div id="page">

                     <!-- Search Bar -->
                    <div class="seq-control-bar">

                        <div class="seq-control-bar-search"
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Enter keyword" type="text" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Search</button>
                                    </span>
                                </div><!-- /input-group -->
                            </form>
                        </div>
                        <div class="seq-control-bar-toggle">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="glyphicon glyphicon-th-list"></span>
                        </div>

                        <div class="seq-control-bar-sort">
                            <form action="#" method="post">
                                <label class="seq-label">Sort by</label>
                                <div class="input-group">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                                Most popular <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                    </div><!-- /btn-toolbar -->
                                </div><!-- /input-group -->
                            </form>
                        </div>

                    </div>
                    <!-- Search Bar -->
            
                    <div class="seq-griddable seq-griddable-list"> <!-- seq-griddable-grid -->
                        <div class="seq-griddable-item">
                            <div class="seq-griddable-image">
                                <img src="http://placehold.it/130x130/363636">
                            </div>
                            <div class="seq-griddable-description">
                                <p class="seq-griddable-prod-code">PRODCODE</p>
                                <h2 class="seq-griddable-title">Product Title</h2>
                                <div class="seq-griddable-text">
                                    <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                </div>
                            </div>
                            <ul class="seq-griddable-actions">

                                <li>
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
                                    <button class="btn vpress btn-favourite"><span class="glyphicon glyphicon-heart"></span></button>
                                </li>

                            </ul>
                        </div>
                        <div class="seq-griddable-item">
                            <div class="seq-griddable-image">
                                <img src="http://placehold.it/130x130/363636">
                            </div>
                            <div class="seq-griddable-description">
                                <p class="seq-griddable-prod-code">PRODCODE</p>
                                <h2 class="seq-griddable-title">Product Title Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor urna sit amet ligula elementum</h2>
                                <div class="seq-griddable-text">
                                    <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                </div>
                            </div>
                            <ul class="seq-griddable-actions">

                                <li>
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
                                    <button class="btn vpress btn-favourite"><span class="glyphicon glyphicon-heart"></span></button>
                                </li>

                            </ul>
                        </div>
                        <div class="seq-griddable-item">
                            <div class="seq-griddable-image">
                                <img src="http://placehold.it/130x130/363636">
                            </div>
                            <div class="seq-griddable-description">
                                <p class="seq-griddable-prod-code">PRODCODE</p>
                                <h2 class="seq-griddable-title">Product Title</h2>
                                <div class="seq-griddable-text">
                                    <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                </div>
                            </div>
                            <ul class="seq-griddable-actions">

                                <li>
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
                                    <button class="btn vpress btn-favourite"><span class="glyphicon glyphicon-heart"></span></button>
                                </li>

                            </ul>
                        </div>
                        <div class="seq-griddable-item">
                            <div class="seq-griddable-image">
                                <img src="http://placehold.it/130x130/363636">
                            </div>
                            <div class="seq-griddable-description">
                                <p class="seq-griddable-prod-code">PRODCODE</p>
                                <h2 class="seq-griddable-title">Product Title</h2>
                                <div class="seq-griddable-text">
                                    <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                </div>
                            </div>
                            <ul class="seq-griddable-actions">

                                <li>
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
                                    <button class="btn vpress btn-favourite"><span class="glyphicon glyphicon-heart"></span></button>
                                </li>

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
