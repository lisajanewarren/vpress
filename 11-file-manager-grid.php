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
                            <li class="active"><a href="#">File Manager</a></li>
                        </ul>
                        <h1>File Manager</h1>
                    </div>
                </div>

                <div id="page">

                    <div class="seq-file-manager">

                        <nav class="seq-file-manager-nav">

                            <ul>
                                <li class="active">
                                    <a href="#">Top Level Folder
                                    </a>
                                    <ul>
                                        <li><a href="#">Subfolder</a></li>
                                        <li class="active"><a href="#">Subfolder</a></li>
                                        <li><a href="#">Subfolder</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Top Level Folder</a></li>
                                <li><a href="#">Top Level Folder</a></li>
                                <li><a href="#">Top Level Folder</a></li>
                            </ul>
                        </nav>  <!-- end seq file manager nav-->

                        <div class="seq-file-manager-main">


                            <!-- Search bar -->
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

                                <div class="seq-control-bar-sort">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                                <div class="btn-group">
                                                    <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                                        All file types <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">option 1</a></li>
                                                        <li><a href="#">option 2</a></li>
                                                        <li><a href="#">option 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div><!-- /btn-group -->
                                        </div><!-- /input-group -->
                                    </form>
                                </div>
                            </div>
                            <!-- End search bar -->


                            <h2 class="seq-folder-title">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                Folder title
                            </h2>


                            <ul class="seq-btn-bar seq-btn-bar-left">
                                <li>
                                    <button type="button" class="seq-btn-orange">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        <span class="btn-text">New folder</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="seq-btn-orange">
                                        <span class="glyphicon glyphicon-open"></span>
                                        <span class="btn-text">Upload</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="seq-btn-grey">
                                        <span class="glyphicon glyphicon-remove"></span>
                                        <span class="btn-text">Delete</span>
                                    </button>

                                </li>
                                <li>
                                    <button type="button" class="seq-btn-grey">
                                        <span class="glyphicon glyphicon-move"></span>
                                        <span class="btn-text">Move</span>
                                    </button>
                                </li>
                            </ul>


                            <ul class="seq-layout-toggle seq-layout-toggle-right">
                                <li><a href="11-file-manager-list.php"><span class="glyphicon glyphicon-th-list"></span></a></li>
                                <li class="active"><span class="glyphicon glyphicon-th"></span></li>
                            </ul>


                            <!-- grid layout -->
                            <div class="seq-griddable seq-griddable-grid"> <!-- seq-griddable-list -->
                        
                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>
                                            <a class="seq-pdf" href="#">PDF</a>
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>

                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>
                                            <a class="seq-pdf" href="#">PDF</a>
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>

                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>
                                            <a class="seq-pdf" href="#">PDF</a>
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>

                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>
                                            <a class="seq-pdf" href="#">PDF</a>
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>

                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>
                                            <a class="seq-pdf" href="#">PDF</a>
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>

                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>
                                            <a class="seq-pdf" href="#">PDF</a>
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>

                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>
                                            <a class="seq-pdf" href="#">PDF</a>
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>

                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>
                                            <a class="seq-pdf" href="#">PDF</a>
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>

                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>
                                            <a class="seq-pdf" href="#">PDF</a>
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>
                            </div>
                            <!-- end grid layout -->



                        </div> <!-- end seq file manager main-->

                    </div> <!-- end seq file manager -->
                    

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
