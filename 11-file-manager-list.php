<!DOCTYPE html>

<html lang="en" class="seq-sidebar-active">

    <?php require 'includes/_htmlhead.php'; ?>
    
    <body>
            
        <?php require 'includes/_sidebar.php'; ?>

        <div id="page-content-wrapper">
            <div id="page-content-wrapper-inner">

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
                                <li class="active"><span class="glyphicon glyphicon-th-list"></span></li>
                                <li><a href="11-file-manager-grid.php"><span class="glyphicon glyphicon-th"></span></a></li>
                            </ul>


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
                                            <td>
                                                <a class="seq-pdf seq-inline-popup-trigger" href="#popup-1">PDF</a>
                                                <div id="popup-1" class="seq-popup mfp-hide">
                                                        
                                                    <div class="seq-popup-file-preview">
                                                        <div class="image">
                                                            <img src="example-images/example-logo.jpg" alt="" />
                                                        </div>
                                                        <div class="description">
                                                            <h3>Preview</h3>
                                                            <h4>Sequencelogo.jpg</h4>
                                                            <ul class="details">
                                                                <li><strong>Size</strong> 230.90kb</li>
                                                                <li><strong>Type</strong> Image (JPG)</li>
                                                                <li><strong>Dimensions</strong>  460px x 460px</li>
                                                                <li><strong>Created</strong> 05/05/2014 10.00am</li>
                                                            </ul>

                                                            <ul class="seq-btn-bar">
                                                                <li>
                                                                    <button type="button" class="seq-btn-orange">
                                                                        <span class="btn-text">Select</span>
                                                                    </button>
                                                                </li>
                                                            </ul>

                                                            <ul class="user-actions">
                                                                <li class="delete"><a href="#">Delete</a></li>
                                                                <li class="crop"><a href="#">Crop</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td>
                                                <a class="seq-jpg seq-inline-popup-trigger" href="#popup-2">JPG</a>
                                                <div id="popup-2" class="seq-popup mfp-hide">         
                                                    <div class="seq-popup-file-preview">
                                                        <div class="image">
                                                            <img src="example-images/example-logo.jpg" alt="" />
                                                        </div>
                                                        <div class="description">
                                                            <h3>Preview</h3>
                                                            <h4>Sequencelogo.jpg</h4>
                                                            <ul class="details">
                                                                <li><strong>Size</strong> 230.90kb</li>
                                                                <li><strong>Type</strong> Image (JPG)</li>
                                                                <li><strong>Dimensions</strong>  460px x 460px</li>
                                                                <li><strong>Created</strong> 05/05/2014 10.00am</li>
                                                            </ul>

                                                            <ul class="seq-btn-bar">
                                                                <li>
                                                                    <button type="button" class="seq-btn-orange">
                                                                        <span class="btn-text">Select</span>
                                                                    </button>
                                                                </li>
                                                            </ul>

                                                            <ul class="user-actions">
                                                                <li class="delete"><a href="#">Delete</a></li>
                                                                <li class="crop"><a href="#">Crop</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td>
                                                <a class="seq-jpg seq-inline-popup-trigger" href="#popup-3">JPG</a>
                                                <div id="popup-3" class="seq-popup mfp-hide">         
                                                    <div class="seq-popup-file-preview">
                                                        <div class="image">
                                                            <img src="example-images/example-logo.jpg" alt="" />
                                                        </div>
                                                        <div class="description">
                                                            <h3>Preview</h3>
                                                            <h4>Sequencelogo.jpg</h4>
                                                            <ul class="details">
                                                                <li><strong>Size</strong> 230.90kb</li>
                                                                <li><strong>Type</strong> Image (JPG)</li>
                                                                <li><strong>Dimensions</strong>  460px x 460px</li>
                                                                <li><strong>Created</strong> 05/05/2014 10.00am</li>
                                                            </ul>

                                                            <ul class="seq-btn-bar">
                                                                <li>
                                                                    <button type="button" class="seq-btn-orange">
                                                                        <span class="btn-text">Select</span>
                                                                    </button>
                                                                </li>
                                                            </ul>

                                                            <ul class="user-actions">
                                                                <li class="delete"><a href="#">Delete</a></li>
                                                                <li class="crop"><a href="#">Crop</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                             <td>
                                                <a class="seq-pdf seq-inline-popup-trigger" href="#popup-4">PDF</a>
                                                <div id="popup-4" class="seq-popup mfp-hide">         
                                                    <div class="seq-popup-file-preview">
                                                        <div class="image">
                                                            <img src="example-images/example-logo.jpg" alt="" />
                                                        </div>
                                                        <div class="description">
                                                            <h3>Preview</h3>
                                                            <h4>Sequencelogo.jpg</h4>
                                                            <ul class="details">
                                                                <li><strong>Size</strong> 230.90kb</li>
                                                                <li><strong>Type</strong> Image (JPG)</li>
                                                                <li><strong>Dimensions</strong>  460px x 460px</li>
                                                                <li><strong>Created</strong> 05/05/2014 10.00am</li>
                                                            </ul>

                                                            <ul class="seq-btn-bar">
                                                                <li>
                                                                    <button type="button" class="seq-btn-orange">
                                                                        <span class="btn-text">Select</span>
                                                                    </button>
                                                                </li>
                                                            </ul>

                                                            <ul class="user-actions">
                                                                <li class="delete"><a href="#">Delete</a></li>
                                                                <li class="crop"><a href="#">Crop</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td>
                                                <a class="seq-pdf seq-inline-popup-trigger" href="#popup-5">PDF</a>
                                                <div id="popup-5" class="seq-popup mfp-hide">         
                                                    <div class="seq-popup-file-preview">
                                                        <div class="image">
                                                            <img src="example-images/example-logo.jpg" alt="" />
                                                        </div>
                                                        <div class="description">
                                                            <h3>Preview</h3>
                                                            <h4>Sequencelogo.jpg</h4>
                                                            <ul class="details">
                                                                <li><strong>Size</strong> 230.90kb</li>
                                                                <li><strong>Type</strong> Image (JPG)</li>
                                                                <li><strong>Dimensions</strong>  460px x 460px</li>
                                                                <li><strong>Created</strong> 05/05/2014 10.00am</li>
                                                            </ul>

                                                            <ul class="seq-btn-bar">
                                                                <li>
                                                                    <button type="button" class="seq-btn-orange">
                                                                        <span class="btn-text">Select</span>
                                                                    </button>
                                                                </li>
                                                            </ul>

                                                            <ul class="user-actions">
                                                                <li class="delete"><a href="#">Delete</a></li>
                                                                <li class="crop"><a href="#">Crop</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>01 Invoice Letterhead on recycled paper</td>
                                            <td>
                                                <a class="seq-pdf seq-inline-popup-trigger" href="#popup-6">PDF</a>
                                                <div id="popup-6" class="seq-popup mfp-hide">         
                                                    <div class="seq-popup-file-preview">
                                                        <div class="image">
                                                            <img src="example-images/example-logo.jpg" alt="" />
                                                        </div>
                                                        <div class="description">
                                                            <h3>Preview</h3>
                                                            <h4>Sequencelogo.jpg</h4>
                                                            <ul class="details">
                                                                <li><strong>Size</strong> 230.90kb</li>
                                                                <li><strong>Type</strong> Image (JPG)</li>
                                                                <li><strong>Dimensions</strong>  460px x 460px</li>
                                                                <li><strong>Created</strong> 05/05/2014 10.00am</li>
                                                            </ul>

                                                            <ul class="seq-btn-bar">
                                                                <li>
                                                                    <button type="button" class="seq-btn-orange">
                                                                        <span class="btn-text">Select</span>
                                                                    </button>
                                                                </li>
                                                            </ul>

                                                            <ul class="user-actions">
                                                                <li class="delete"><a href="#">Delete</a></li>
                                                                <li class="crop"><a href="#">Crop</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1.2MB</td>                                   
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end responsive table -->

                            <div class="seq-pagination">
                                <ul>
                                    <li class="prev">&#10094;</li> 
                                    <li class="current">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a href="#">&#10095;</a></li>
                                </ul>
                            </div>

                        
                        </div> <!-- end seq file manager main-->

                    </div> <!-- end seq file manager -->  
                </div> <!-- end page-->  
                  
            </div> <!-- end page content wrapper inner -->   
        </div> <!-- end page content wrapper -->
  
    </body>

</html>
