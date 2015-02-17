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
                            <div class="seq-product-editor-inner">

                            
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
                                
                                <div class="seq-interactive-image">
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

                                                <div class="seq-select">
                                                    <div class="seq-select-inner">

                                                        <select class="selectpicker">
                                                            <option value="">Please choose...</option>
                                                            <option value="">option 1</option>
                                                            <option value="">option 2</option>
                                                        </select>

                                                    </div>
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
                                                
                                               <div class="seq-select">
                                                    <div class="seq-select-inner">

                                                        <select class="selectpicker">
                                                            <option value="">Please choose...</option>
                                                            <option value="">option 1</option>
                                                            <option value="">option 2</option>
                                                        </select>

                                                    </div>
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

                                                        <!-- either a textbox... -->
                                                        <input placeholder="Enter quantity..." type="text">
                                                        <span class="info">Box of 500</span>

                                                        <!-- ...or a dropdown -->
                                                        <!--
                                                        <div class="seq-select">
                                                            <div class="seq-select-inner">
                                                                <select class="selectpicker">
                                                                    <option value="">Select...</option>
                                                                    <option value="">option 1</option>
                                                                    <option value="saab">option 2</option>
                                                                </select>
                                                                <span class="info">Box of 500</span>
                                                            </div>

                                                        </div>--> <!-- end seq select -->

                                                    </div>
                                                    <p class="result">= &pound;0.00</p>

                                                    
                                                </div>

                                                <div class="info-row">
                                                    <span class="glyphicon glyphicon-ok"></span>
                                                    <p>2000 boxes in stock</p>
                                                </div>

                                            </div> <!-- end seq box form-->

                                           

                                            <h4 class="seq-faux-table-header">Sample prices</h4>

                                            <div class="seq-faux-table">
                                                <div class="seq-thead">
                                                    <div class="seq-tr">
                                                        <div class="seq-th">
                                                            Quantity
                                                        </div>
                                                         <div class="seq-th">
                                                            Price
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seq-tbody">
                                                    <div class="seq-tr">
                                                        <div class="seq-td">1000</div>
                                                        <div class="seq-td">£350.00</div>
                                                    </div>
                                                    <div class="seq-tr">
                                                        <div class="seq-td">200</div>
                                                        <div class="seq-td">£700.00</div>
                                                    </div>
                                                    <div class="seq-tr">
                                                        <div class="seq-td">3000</div>
                                                        <div class="seq-td">£1050.00</div>
                                                    </div>
                                                    <div class="seq-tr">
                                                        <div class="seq-td">4000</div>
                                                        <div class="seq-td">£1400.00</div>
                                                    </div>
                                                    <div class="seq-tr">
                                                        <div class="seq-td">4000</div>
                                                        <div class="seq-td">£1400.00</div>
                                                    </div>
                                                    <div class="seq-tr">
                                                        <div class="seq-td">4000</div>
                                                        <div class="seq-td">£1400.00</div>
                                                    </div>
                                                    <div class="seq-tr">
                                                        <div class="seq-td">4000</div>
                                                        <div class="seq-td">£1400.00</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end seq box -->

      
                            </div>
                        </div>

                        <div class="seq-product-editor-foot">
                            <div class="seq-product-editor-inner">

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
