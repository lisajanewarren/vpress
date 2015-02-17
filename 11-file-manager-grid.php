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

                                <div class="seq-control-bar-search">
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

                                        <div class="seq-select">
                                            <div class="seq-select-inner">

                                                <select class="selectpicker">
                                                    <option value="">All file types</option>
                                                    <option value="">option 2</option>
                                                    <option value="">option 3</option>
                                                </select>

                                            </div>
                                        </div>

                                </div>
                            </div>
                            <!-- End search bar -->


                            <h2 class="seq-folder-title">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                Folder title
                            </h2>

                            <div class="seq-btn-bar-holder">
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
                            </div>


                            <!-- grid layout -->
                            <div class="seq-griddable seq-griddable-grid"> <!-- seq-griddable-list -->
                        
                                <div class="seq-griddable-item">
                                    <div class="seq-griddable-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-griddable-description">
                                        <div class="seq-griddable-text">
                                            <p>01 Invoice Letterhead on recycled paper</p>

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
                                            </div> <!-- end inline popup -->

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
                                            <a class="seq-pdf seq-inline-popup-trigger" href="#popup-2">PDF</a>
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
                                            </div> <!-- end inline popup -->
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
                                            <a class="seq-pdf seq-inline-popup-trigger" href="#popup-3">PDF</a>
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
                                            </div> <!-- end inline popup -->
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
                                            </div> <!-- end inline popup -->
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
                                            </div> <!-- end inline popup -->
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
                                            </div> <!-- end inline popup -->
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
                                            <a class="seq-pdf seq-inline-popup-trigger" href="#popup-7">PDF</a>
                                            <div id="popup-7" class="seq-popup mfp-hide">         
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
                                            </div> <!-- end inline popup -->
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
                                            <a class="seq-pdf seq-inline-popup-trigger" href="#popup-8">PDF</a>
                                            <div id="popup-8" class="seq-popup mfp-hide">         
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
                                            </div> <!-- end inline popup -->
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
                                            <a class="seq-pdf seq-inline-popup-trigger" href="#popup-9">PDF</a>
                                            <div id="popup-9" class="seq-popup mfp-hide">         
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
                                            </div> <!-- end inline popup -->
                                        </div>
                                    </div>
                                    <input type="checkbox">
                                </div>
                            </div>
                            <!-- end grid layout -->

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
