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
                    <li><a href="#">Campaigns</a></li>
                    <li class="active"><a href="#">Campaign Name</a></li> 
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
                                        <button type="button" class="btn vpress">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            Back
                                        </button>
                                    </li>
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

                                <div class="seq-box">
                                    <header class="seq-box-header ">
                                        <h2 class="seq-sub-title">Name</h2>
                                    </header>
                                    <div class="seq-box-content">
                                        <div class="seq-inner">
                                            <input class="form-control" placeholder="" type="text">
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

                                

                                <div class="seq-box">
                                    <header class="seq-box-header ">
                                        <h2 class="seq-sub-title">Background colour</h2>
                                    </header>
                                    <div class="seq-box-content">
                                        <div class="seq-inner">
                                            <ul class="seq-product-editor-options" data-toggle="tooltip" data-placement="left" title="" data-original-title="Choose from one of the predefined colours or select the colour wheel to choose a custom colour">
                                                <li><span class="colour colour-one">white</span></li>
                                                <li><span class="colour colour-two">grey</span></li>
                                                <li><span class="colour colour-three">black</span></li>
                                                <li><span class="colour colour-four">green</span></li>
                                                <li><span class="colour colour-five">blue</span></li>
                                                <li><span class="colour colour-six">multicoloured</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

                                <div class="seq-box">
                                    <header class="seq-box-header">
                                        <h2 class="seq-sub-title">Image</h2>
                                    </header>
                                    <div class="seq-box-content">
                                        <div class="seq-inner">
                                            <ul class="seq-product-editor-options">
                                                <li><span>shape 1</span></li>
                                                <li><span>shape 2</span></li>
                                                <li><span>shape 3</span></li>
                                                <li><span>shape 4</span></li>
                                                <li><span>shape 5</span></li>
                                                <li><span>shape 6</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

                                

                            </div>

                        </div>

                        <div class="seq-product-editor-foot">
                            <div class="inner">

                                <ul class="seq-product-editor-actions">
                                    <li><button type="button" class="btn vpress">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        Back
                                    </button></li>
                                    <li><button type="button" class="btn vpress">Save</button></li>
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
