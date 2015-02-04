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
                            <li>Campaigns</li> 
                            <li class="active"><a href="#">Campaign Name</a></li>
                        </ul>
                        <h1>Campaign</h1>
                    </div>
                </div>

                <div id="page">

                    
            
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
