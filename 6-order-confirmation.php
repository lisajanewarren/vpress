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
                            <li class="active"><a href="#">Confirmation of order no. 1738</a></li>
                        </ul>
                        <h1>Order Confirmation</h1>
                    </div>
                </div>

                <div id="page">
                    
                    <div id="seq-basket">
                        <div class="seq-basket-header">
                            <h2>Order No. 1738</h2>
                            <button class="btn vpress">Print order <span class="glyphicon glyphicon-print"></span></button>
                        </div>

                        <div class="seq-basket-text">
                            <p>Thank you for your order, if you have any questions, please don't hesitate to contact any of the team on +44 (0)1242 246 970. UK VAT No. 1234323 Registered in UK, Ireland &amp; Wales.</p>
                        </div>


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
                                        <th data-priority="5" class="seq-td-width-90">Product</th>
                                        <th data-priority="1"><span class="offscreen">Product Description</span></th>
                                        <th data-priority="6" class="seq-td-width-150">Deliver to</th>
                                        <th data-priority="6" class="seq-td-width-120">Cost Centre</th>
                                        <th data-priority="4" class="seq-td-width-120">Quantity</th>
                                        <th data-priority="4" class="seq-td-width-90">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="http://placehold.it/80x80/363636" />
                                        </td>
                                        <td>
                                            <strong>Stationery Catalogue</strong><br />
                                            Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued.
                                        </td>
                                        <td>
                                            Sequence<br />
                                            Fitzalan House<br />
                                            Fitzalan Road<br />
                                            Cardiff<br />
                                            CF24 0EL
                                        </td>
                                        <td>
                                            <span class="data-cost-centre">CODE1</span>
                                        </td>
                                        <td>
                                            9 x boxes of 100
                                        </td>
                                        <td>
                                            &pound;1000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="http://placehold.it/80x80/363636" />
                                        </td>
                                        <td>
                                            <strong>Stationery Catalogue</strong><br />
                                            Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued.
                                        </td>
                                        <td>
                                            Vpress<br />
                                            Clarendon House<br />
                                            42 Clarence Street<br />
                                            Cheltenham<br />
                                            Gloucestershire<br />
                                            GL50 3PL
                                        </td>
                                        <td>
                                            <span class="data-cost-centre">CODE1</span>
                                        </td>
                                        <td>
                                            9 x boxes of 100
                                        </td>
                                        <td>
                                            &pound;1000.00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end responsive table -->

                       
                        <div class="seq-basket-summary-bar">

                            <div class="seq-basket-delivery-address">
                                <h3>Delivery address</h3>
                                <p>
                                    <span>Sequence,</span> 
                                    <span>Fitzalan house,</span> 
                                    <span>Fitzalan rd,</span> 
                                    <span>Cardiff,</span> 
                                    <span>CF24 0EL.</span>
                                </p>
                            </div>

                            <div class="seq-basket-delivery-address">
                                <h3>Invoice address</h3>
                                <p>
                                    <span>Sequence</span>
                                    <span>Fitzalan house,</span>
                                    <span>Fitzalan rd,</span>
                                    <span>Cardiff</span>
                                    <span>CF24 0EL.</span>
                                </p>
                            </div>

                            <div class="seq-basket-delivery-costs">
                                <p><span>Subtotal</span> <span>&pound;1144.00</span></p>
                                <p><span>Delivery</span> <span>&pound;10.00</span></p>
                                <p><span>Total</span> <span>&pound;1154.00</span></p>
                            </div>

                        </div>
                        

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

            </div> <!-- end page content wrapper inner -->
        </div> <!-- end page content wrapper -->

    </body>
</html>