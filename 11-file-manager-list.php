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
                    <!-- Search Bar -->




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
                                            <th data-priority="1">File name</th>
                                            <th data-priority="2" class="seq-td-width-60">Type</th>
                                            <th data-priority="2" class="seq-td-width-60">Size</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td><a class="seq-pdf" href="#">PDF</a></td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td><a class="seq-jpg" href="#">JPG</a></td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td><a class="seq-jpg" href="#">JPG</a></td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td><a class="seq-pdf" href="#">PDF</a></td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td><a class="seq-pdf" href="#">PDF</a></td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td><a class="seq-pdf" href="#">PDF</a></td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end responsive table -->
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
