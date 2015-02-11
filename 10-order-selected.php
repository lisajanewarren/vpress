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
                    <li class="active"><a href="#">Order</a></li> 
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
                                        <button type="button" class="btn vpress">Remove item from queue</button>
                                    </li>
                                </ul>

                              
                                <div class="seq-word-pagination seq-word-pagination-right">
                                    <ul>
                                        <li class="prev">&#10094;</li> 
                                        <li class="current">Item 1 of 12</li>
                                        <li class="next"><a href="#">&#10095;</a></li>
                                    </ul>
                                </div>

                                <ul class="seq-product-editor-actions">
                                    <li>
                                        <button type="button" class="btn vpress">Add to basket</button>
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
                                </ul>
                                
                                <div class="seq-interactive-image js-sticky-image">
                                </div>

                            </div>

                             <div class="seq-product-editor-col">

                                <div class="seq-product-editor-info">
                                    <p>Description text could go in here. This description could be two or three lines long...</p>
                                </div>

                                <div class="seq-product-editor-title">
                                    <small>Prodcode</small>
                                    <h2>Variable product title</h2>
                                </div>

                                <div class="seq-box js-toggle-box">
                                    <header class="seq-box-header ">
                                        <h2 class="seq-title">Engagement Code</h2>
                                        <ul class="seq-box-controls">
                                            <li class="js-toggle-trig active">toggle visibility</li>
                                        </ul>
                                    </header>
                                    <div class="seq-box-content js-toggle-panel">
                                        <div class="seq-inner">

                                            <div class="seq-box-form">
                                               <div class="btn-group">
                                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                                      Please choose... <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">option 2</a></li>
                                                        <li><a href="#">option 3</a></li>
                                                        <li><a href="#">option 4</a></li>
                                                    </ul>
                                                </div>
                                            </div> <!-- end seq box form-->

                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

                                

                                
                                <div class="seq-box js-toggle-box">
                                    <header class="seq-box-header">
                                        <h2 class="seq-title">Delivery Address</h2>
                                        <ul class="seq-box-controls">
                                            <li class="js-toggle-trig active">toggle visibility</li>
                                        </ul>
                                    </header>
                                    <div class="seq-box-content js-toggle-panel">
                                        <div class="seq-inner">
                                           
                                            <div class="seq-box-form">
                                               <div class="btn-group">
                                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                                      Please choose... <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">option 2</a></li>
                                                        <li><a href="#">option 3</a></li>
                                                        <li><a href="#">option 4</a></li>
                                                    </ul>
                                                </div>

                                                <div class="address-info">
                                                    <p class="address">
                                                        Sequence<br />
                                                        Gloworks<br />
                                                        Porth Teigr Way<br />
                                                        Cardiff<br />
                                                        CF10 4GA
                                                    </p>
                                                    <p class="add-link">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                        <a href="#">Add New Address</a>
                                                    </p/>
                                                </div>

                                            </div> <!-- end seq box form-->

                                        </div>
                                    </div>
                                </div> <!-- end seq box -->


                                <div class="seq-box js-toggle-box">
                                    <header class="seq-box-header ">
                                        <h2 class="seq-title">Quantity</h2>
                                        <ul class="seq-box-controls">
                                            <li class="js-toggle-trig active">toggle visibility</li>
                                        </ul>
                                    </header>
                                    <div class="seq-box-content js-toggle-panel">
                                        <div class="seq-inner">

                                            <div class="seq-box-form">
                                                
                                                <div class="update-quantity">
                                                    <div class="seq-box-form-field">
                                                        <input placeholder="Enter quantity..." type="text">
                                                        <span class="info">Box of 500</span>
                                                    </div>
                                                    <p class="result">= &pound;0.00</p>
                                                </div>

                                                <div class="info-row">
                                                    <span class="glyphicon glyphicon-ok"></span>
                                                    <p>2000 boxes in stock</p>
                                                </div>

                                            </div> <!-- end seq box form-->

                                            <h4 class="seq-box-table-header">Sample prices</h4>

                                            <table class="seq-box-table" style="margin-top: 30px">
                                                <tr>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                </tr>
                                                <tr>
                                                    <td>1000</td>
                                                    <td>£350.00</td>
                                                </tr>
                                                <tr>
                                                    <td>200</td>
                                                    <td>£700.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3000</td>
                                                    <td>£1050.00</td>
                                                </tr>
                                                <tr>
                                                    <td>4000</td>
                                                    <td>1400.00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

      
                            </div>
                        </div>

                        <div class="seq-product-editor-foot">
                            <div class="inner">

                                <ul class="seq-product-editor-actions">
                                    <li>
                                        <button type="button" class="btn vpress">
                                            Remove item from queue
                                        </button>
                                    </li> 
                                </ul>

                                <div class="seq-word-pagination seq-word-pagination-right">
                                    <ul>
                                        <li class="prev">&#10094;</li> 
                                        <li class="current">Item 1 of 12</li>
                                        <li class="next"><a href="#">&#10095;</a></li>
                                    </ul>
                                </div>

                                <ul class="seq-product-editor-actions">
                                    <li>
                                        <button type="button" class="btn vpress">
                                            Add to basket
                                        </button>
                                    </li> 
                                </ul>

                            </div>
                        </div>

                    </div>                    
                </div> <!-- end page-->
                
            </div> <!-- end page content wrapper inner -->
        </div> <!-- end page content wrapper -->
  
    </body>

</html>
