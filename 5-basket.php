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
                        <h1>Your Basket</h1>
                    </div>
                </div>

                <div id="page">

                    <div id="seq-basket">
                        <div class="seq-basket-header">
                            <h2>You have added <span class="label label-warning vpress">42</span> item(s)</h2>
                            <button class="btn vpress">Checkout Securely <span class="glyphicon glyphicon-chevron-right"></span></button>
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
                                        <th data-priority="6" class="seq-td-width-60"><span class="offscreen">actions</span></th>
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
                                        <td>
                                            <ul class="seq-circular-actions seq-circular-actions-stacked">
                                                <li><button class="btn background-grey"><span class="glyphicon glyphicon-pencil"></span></button></li>
                                                <li><button class="btn background-orange"><span class="glyphicon glyphicon-trash"></span></button></li>
                                            </ul>
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
                                        <td>
                                            <ul class="seq-circular-actions seq-circular-actions-stacked">
                                                <li><button class="btn background-grey"><span class="glyphicon glyphicon-pencil"></span></button></li>
                                                <li><button class="btn background-orange"><span class="glyphicon glyphicon-trash"></span></button></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end responsive table -->

                        <div class="seq-basket-subtotal-bar">
                            <p>
                                <span class="seq-basket-label">Subtotal</span> 
                                <span class="seq-basket-value">&pound;1144.00</span>
                            </p>
                            <p>
                                <span class="seq-basket-label">Delivery</span> 
                                <span class="seq-basket-value">&pound;10.00</span>
                            </p>
                        </div>

                        
                        <div class="seq-basket-total-bar">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your discount code">
                                <button class="btn btn-default vpress" type="button">Apply</button>
                            </div>
                            <p class="seq-basket-final-total">
                                <span class="seq-basket-label">Order TOTAL</span> 
                                <span class="seq-basket-value">&pound;1154.00</span>
                            </p>
                        </div>


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

                                <div class="seq-select seq-filter">
                                    <div class="seq-select-inner">

                                        <select class="selectpicker">
                                            <option value="">Create</option>
                                            <option value="">Order</option>
                                        </select>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
                                
                                <div class="seq-select seq-filter">
                                    <div class="seq-select-inner">

                                        <select class="selectpicker">
                                            <option value="">Create</option>
                                            <option value="">Order</option>
                                        </select>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
                                
                                <div class="seq-select seq-filter">
                                    <div class="seq-select-inner">

                                        <select class="selectpicker">
                                            <option value="">Create</option>
                                            <option value="">Order</option>
                                        </select>

                                    </div>
                                </div>

                            </li>  
                            <li>
                                <img src="http://placehold.it/200x200/363636">
                                <span class="product-code">PRODCODE</span>
                                <h3 class="product-title">Product Title</h3>
                                
                                <div class="seq-select seq-filter">
                                    <div class="seq-select-inner">

                                        <select class="selectpicker">
                                            <option value="">Create</option>
                                            <option value="">Order</option>
                                        </select>

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </aside> <!-- end ctas -->
                </div> <!-- end page -->

            </div> <!-- end page content wrapper inner --> 
        </div> <!-- end page content wrapper -->

    </body>
</html>