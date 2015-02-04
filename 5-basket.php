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
                            <li class="active"><a href="#">Basket</a></li>
                        </ul>
                        <h1>Your Basket</h1>
                    </div>
                </div>


                 <div id="page">
                    
                    <div id="seq-basket">
                        <div class="seq-basket-header">
                            <h2>You have added <span class="label label-warning vpress">42</span> item(s)</h2>
                            <button class="btn vpress">Checkout Securely <span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>



                        <table border="0" id="basket-list" width="100%">
                            <tr style="border-bottom:solid 6px #363636;">
                                <th class="hidden-xs hidden-sm" colspan="2" style="width:100px;padding:20px 10px;">Product</th>
                                <th class="visible-xs visible-sm" style="20px 10px">Product</th>
                                <th style="width:150px;padding:20px 10px;">Deliver to</th>
                                <th class="hidden-xs hidden-sm" style="width:100px;padding:20px 10px;">Cost centre</th>
                                <th style="width:100px;padding:20px 10px;">Quantity</th>
                                <th style="width:100px;padding:20px 10px;">Subtotal</th>
                                <th style="width:50px;padding:20px 10px;">&nbsp;</th>
                            </tr>

                            <tr style="border-bottom:solid 3px #f5f5f5;">
                                <td class="hidden-xs hidden-sm" style="padding-top:10px; width:90px;"><img src="http://placehold.it/80x80" /></td>
                                <td style="padding-top:10px;">
                                    <strong>Stationery Catalogue</strong><br />
                                    Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued.
                                </td>
                                <td style="padding-top:10px;">
                                    Sequence<br />
                                    Fitzalan House<br />
                                    Fitzalan Road<br />
                                    Cardiff<br />
                                    CF24 0EL
                                </td>
                                <td class="hidden-xs hidden-sm" style="padding-top:10px;"><button class="btn btn-info btn-xs">CODE01</button></td>
                                <td style="padding-top:10px;">9 x boxes of 100</td>
                                <td style="padding-top:10px;">&#163;1000.00</td>
                                <td style="padding-top:10px;">
                                    <div class="basket-circle-grey"><span class="glyphicon glyphicon-pencil"></span></div>
                                    <div class="basket-circle-orange"><span class="glyphicon glyphicon-trash"></span></div>
                                </td>
                            </tr>

                            <tr style="border-bottom:solid 3px #f5f5f5;">
                                <td class="hidden-xs hidden-sm" style="padding-top:10px;"><img src="http://placehold.it/80x80" /></td>
                                <td class="row-buffer-top">
                                    <strong>Stationery Catalogue</strong><br />
                                    Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued.
                                </td>
                                <td style="padding-top:10px;">
                                    Sequence<br />
                                    Fitzalan House<br />
                                    Fitzalan Road<br />
                                    Cardiff<br />
                                    CF24 0EL
                                </td>
                                <td class="hidden-xs hidden-sm" style="padding-top:10px;"><button class="btn btn-info btn-xs">CODE01</button></td>
                                <td style="padding-top:10px;">9 x boxes of 100</td>
                                <td style="padding-top:10px;">&#163;1000.00</td>
                                <td style="padding-top:10px;">
                                    <div class="basket-circle-grey"><span class="glyphicon glyphicon-pencil"></span></div>
                                    <div class="basket-circle-orange"><span class="glyphicon glyphicon-trash"></span></div>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="hidden-xs hidden-sm"></td>
                                <td style="padding-right:20px; text-align:right;" colspan="2"><h4>Subtotal</h4></td>
                                <td><h4>&#163;2000.00</h4></td>
                                <td class="hidden-xs hidden-sm"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="hidden-xs hidden-sm"></td>
                                <td style="padding-right:20px; text-align:right;" colspan="2"><h4>Delivery</h4></td>
                                <td><h4>&#163;10.00</h4></td>
                                <td class="hidden-xs hidden-sm"></td>
                            </tr>

                            <tr style="background-color:#EEEEEE;">
                                <td colspan="2" style="padding:20px; vertical-align:middle;">
                                    <form action="#">
                                        <div class="discount-code input-group">
                                            <input type="text" class="form-control" placeholder="Enter your discount code" style="width:200px;">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default vpress" type="button">Apply</button>
                                            </span>
                                        </div>
                                    </form>
                                </td>
                                <td class="hidden-xs hidden-sm"></td>
                                <td style="padding: 20px 16px; text-align:right;" colspan="2"><h3 style="margin:0;">Order TOTAL</h3></td>
                                <td style="padding:20px 0;"><h3 style="margin:0;">&#163;2010.00</h3></td>
                                <td class="hidden-xs hidden-sm"></td>
                            </tr>
                        </table>

                       

                        <ul class="seq-basket-actions">
                            <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span> Continue Shopping</a></li>
                            <li>
                                <img src="images/cards.png" />
                                <button class="btn vpress">Checkout Securely <span class="glyphicon glyphicon-chevron-right"></span></button>
                            </li>
                        </ul>

                    </div> <!-- end seq basket -->

                    <aside class="seq-ctas">
                        <h1>Related Products</h1>

                        <!-- ctas-->
                        <ul class="product-ctas">
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
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
                            </li>
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
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
                            </li>
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
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
                            </li>  
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
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
                            </li>
                        </ul>
                    </aside> <!-- end ctas -->


                </div> <!-- end page -->
        
            </div> <!-- end page content wrapper -->

        </div>  <!-- end wrapper -->
        
      
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