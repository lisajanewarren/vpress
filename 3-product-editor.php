<!DOCTYPE html>

<html lang="en" class="seq-sidebar-active">

    <?php require 'includes/_htmlhead.php'; ?>
    
    <body>
        
        <?php require 'includes/_sidebar.php'; ?>

        <div id="page-content-wrapper" class="page-product-editor">
            <div id="page-content-wrapper-inner">

                <?php require 'includes/_topnav.php'; ?>

                <ul class="seq-breadcrumb">
                    <li><a href="#">Home</a></li> 
                    <li><a href="#">Product Category</a></li>
                    <li><a href="#">Product Name</a></li> 
                    <li class="active"><a href="#">Create</a></li> 
                </ul>

                <div id="page">

                    <div id="seq-product-editor">
                        <div class="seq-product-editor-head js-sticky-header">
                            <div class="inner">

                            
                                <div class="seq-word-pagination seq-word-pagination-left seq-word-pagination-dark">
                                    <ul>
                                        <li class="prev">&#10094;</li> 
                                        <li class="current">1 of 2</li>
                                        <li class="next"><a href="#">&#10095;</a></li>
                                    </ul>
                                </div>

                               
                                <ul class="seq-product-editor-actions">
                                    <li>
                                        <button type="button" class="btn vpress">Save</button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn vpress">
                                            Save &amp; continue
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
                                
                                <div class="seq-interactive-image js-sticky-image">
                                </div>

                            </div>

                             <div class="seq-product-editor-col">

                                <div class="seq-product-editor-info">
                                    <p>Description text could go in here. This description could be two or three lines long...</p>
                                </div>

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
                                        <h2 class="seq-sub-title">Background image</h2>
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

                                <div class="seq-box js-toggle-box">
                                    <header class="seq-box-header">
                                        <h2 class="seq-title">Header</h2>
                                        <ul class="seq-box-controls">
                                            <li class="js-toggle-trig">toggle visibility</li>
                                        </ul>
                                    </header>
                                    <div class="seq-box-content js-toggle-panel">
                                        <div class="seq-inner">

                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

                                <div class="seq-box js-toggle-box">
                                    <header class="seq-box-header">
                                        <h2 class="seq-title">Client address list</h2>
                                        <ul class="seq-box-controls">
                                            <li class="js-toggle-trig">toggle visibility</li>
                                            <li class="js-popout-trig">popout</li>
                                        </ul>
                                    </header>
                                    <div class="seq-box-content js-toggle-panel">
                                        <div class="seq-inner">
                                            <table class="seq-box-table">
                                                <thead>
                                                    <tr>
                                                        <th>Building no.</th>
                                                        <th>Street</th>
                                                        <th>Area</th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Arabella st</td>
                                                    <td>Roath</td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Fitzalan rd</td>
                                                    <td>Cathays</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>Treforest st</td>
                                                    <td>Roath</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Arabella st</td>
                                                    <td>Roath</td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Fitzalan rd</td>
                                                    <td>Cathays</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>Treforest st</td>
                                                    <td>Roath</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Arabella st</td>
                                                    <td>Roath</td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Fitzalan rd</td>
                                                    <td>Cathays</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Arabella st</td>
                                                    <td>Roath</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>Treforest st</td>
                                                    <td>Roath</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

                                <div class="seq-box js-toggle-box">
                                    <header class="seq-box-header">
                                        <h2 class="seq-title">Featured Article</h2>
                                        <ul class="seq-box-controls">
                                            <li class="js-toggle-trig">toggle visibility</li>
                                            <li class="js-popout-trig">popout</li>
                                        </ul>
                                    </header>
                                    <div class="seq-box-content js-toggle-panel">
                                        <div class="seq-inner">
                                            <div class="seq-box-form">
                                                <div class="seq-box-form-field">
                                                    <label for="ctl-title">Title</label>
                                                    <input id="ctl-title" placeholder="" type="text">
                                                </div>
                                                <div class="seq-box-form-field">
                                                    <label for="ctl-intro">Introduction</label>
                                                    <input id="ctl-intro" placeholder="" type="text">
                                                </div>
                                                <div class="seq-box-form-field">
                                                    <label for="ctl-body">Body</label>
                                                    <textarea id="ctl-body"></textarea>
                                                </div>
                                                <div class="seq-box-form-field">
                                                    <button id="ctl-addimage" class="btn vpress"><span class="glyphicon glyphicon-picture"></span></button>
                                                    <label for="ctl-addimage">Add image</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

                                <div class="seq-box js-toggle-box">
                                    <header class="seq-box-header">
                                        <h2 class="seq-title">Article 2</h2>
                                        <ul class="seq-box-controls">
                                            <li class="js-toggle-trig">toggle visibility</li>
                                            <li class="js-popout-trig">popout</li>
                                        </ul>
                                    </header>
                                    <div class="seq-box-content js-toggle-panel">
                                        <div class="seq-inner">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu volutpat mauris. Nullam risus lorem, rhoncus nec ante at, feugiat molestie arcu. Nam at maximus enim.</p>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->
                            </div>

                        </div>

                        <div class="seq-product-editor-foot">
                            <div class="inner">

                                <ul class="seq-product-editor-actions">
                                    <li>
                                        <button type="button" class="btn vpress">Save</button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn vpress">
                                            Save &amp; continue
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </button>
                                    </li>
                                </ul>
            
                            </div>
                        </div>

                    </div>            
                </div> <!-- end page--> 

            </div>  <!-- end page content wrapper inner -->
        </div> <!-- end page content wrapper -->

    </body>

</html>
