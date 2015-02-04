<!DOCTYPE html>

<html lang="en">
 
    <?php require 'includes/_htmlhead.php'; ?>

    <body>

        <div id="wrapper">

            <?php require 'includes/_sidebar.php'; ?>


            <div id="page-content-wrapper" class="page-dashboard">
            
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
                                <div class="seq-icon">
                                    <div class="stat">888</div>
                                    <div class="hidden-s icon"><span class="glyphicon glyphicon-time"></span></div>
                                </div>
                                <p class="seq-text">Orders awaiting <br />approval</p>
                                <span class="seq-bar"></span>
                            </li>
                            <li>
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
                            <li class="active">
                                <div class="seq-icon">
                                    <div class="stat">04</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-heart"></span></div>
                                </div>
                                <p class="seq-text">Favourite <br />products</p>
                                <span class="seq-bar"></span>
                            </li>
                            <li>
                                <div class="seq-icon">
                                    <div class="stat">05</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-floppy-disk"></span></div>
                                </div>
                                <p class="seq-text">Recently <br />saved</p>
                                <span class="seq-bar"></span>
                            </li>
                        </ul>

                        <section class="seq-tab-panel">   
                            <h1>Your Favourites</h1>

                            <div class="seq-list">
                                <div class="seq-item">
                                    <div class="seq-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-description">
                                        <p class="seq-prod-code">PRODCODE</p>
                                        <h2 class="seq-title">Product Title</h2>
                                        <div class="seq-text">
                                            <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                        </div>
                                    </div>
                                    <div class="seq-actions">

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

                                    </div>
                                </div> <!-- end seq-item -->
                                <div class="seq-item">
                                    <div class="seq-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-description">
                                        <p class="seq-prod-code">PRODCODE</p>
                                        <h2 class="seq-title">Product Title</h2>
                                        <div class="seq-text">
                                            <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                        </div>
                                    </div>
                                    <div class="seq-actions">

                                        <div class="btn-singular">
                                            <button type="button" class="btn vpress">Add to Basket</button>
                                        </div>

                                    </div>
                                </div> <!-- end seq-item -->
                                <div class="seq-item">
                                    <div class="seq-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-description">
                                        <p class="seq-prod-code">PRODCODE</p>
                                        <h2 class="seq-title">Product Title</h2>
                                        <div class="seq-text">
                                            <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                        </div>
                                    </div>
                                    <div class="seq-actions">

                                        <div class="btn-group vpress">
                                            <button type="button" class="btn btn-dropdown vpress">Create</button>
                                            <button type="button" class="btn dropdown-toggle vpress" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Order</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div> <!-- end seq-item -->
                                <div class="seq-item">
                                    <div class="seq-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-description">
                                        <p class="seq-prod-code">PRODCODE</p>
                                        <h2 class="seq-title">Product Title</h2>
                                        <div class="seq-text">
                                            <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                        </div>
                                    </div>
                                    <div class="seq-actions">
                                        
                                        <div class="btn-singular">
                                            <button type="button" class="btn vpress">Add to Basket</button>
                                        </div>

                                    </div>
                                </div> <!-- end seq-item -->
                            </div>
                           

                        </section>

                    </div> <!-- end tab box -->

                </div> <!-- end page -->

            </div>  <!-- end page content wrapper -->
           

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