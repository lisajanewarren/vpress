<!DOCTYPE html>

<html lang="en">
    
    <?php require 'includes/_htmlhead.php'; ?>

    <style>
        .front-cover {
            max-width: 980px;
            margin:0 auto;
            padding: 50px 100px;
        }

        ul {
            padding: 0 0 0 20px;
        }
        ul li ul {
            padding: 0 0 20px 40px;
        }
        h1 {
            font-size: 20px;
            padding: 50px 0 20px 0;
        }
        li {
            font-size 14px;
            line-height: 1.6em;
        }
        li p {
            padding: 0 0 10px 23px;
        }
        em {
            color: #ff0000;
            font-weight: bold;
            font-style: normal;
        }

        .del {
            color: #ccc;
        }
        .del a {
            color: #ccc;
        }
    </style>

    <body>
        <section class="front-cover">
            <h1>Templates I currently have designs for...</h1>
            <ul>
                <li>0 - Dashboard Views</a>
                    <ul>
                        <li><a href="0-dashboard-a.php">- Dashboard Panel A</a></li>
                        <li><a href="0-dashboard-b.php">- Dashboard Panel B</a></li>
                        <li class="del"><del>- Dashboard Panel C - on hold for now</del></li>
                        <li><a href="0-dashboard-d.php">- Dashboard Panel D</a></li>
                        <li><a href="0-dashboard-e.php">- Dashboard Panel E</a></li>
                    </ul>
                <li><a href="1-product-grid.php">1 - Product Grid</a></li>
                <li><a href="1-product-list.php">1 - Product List</a></li>
                <li><a href="2-variable-data-product.php">2 - Variable Data Product</a></li>
                <li>
                    <a href="3-product-editor.php">3 - Product Editor</a>
                    <p>Lots of additions &amp; changes! Modular fields including <i>text field, text area, dropdown, radio list, single radio, checkbox list, single checkbox, datepicker (boostrap plugin)</i>. Also create a help icon. 'Select more' text on the bg image field. Fixed header bar &amp; fixed image position. Image should be 500px wide. <em>- Steve to design</em></p>
                </li>
                <li class="del"><del>4 - Request for Quote [on hold!]</del></li>
                <li>
                    <a href="5-basket.php">5 - Basket</a>
                    <p>Basket/Checkout/Order Confirmation needs clarification(!) &amp; design.</p>
                </li>
                <li>
                    <a href="5-checkout.php">5.5 - Checkout</a>
                    <p>Apparently there should be another step here, between basket and order confirmation. Checkout should have radio option to select payment method. - <em>Steve to design</em></p>
                </li>
                <li>
                    <a href="6-order-confirmation.php">6 - Order Confirmation</a>
                    <p>I think the 'Enter your discount' might need to be on the previous page? </p>
                </li>

            </ul>


            <h1>Templates I have wireframes for...but no designs...</h1>
            <ul>
                <li class="del">
                    <del><a href="7-product-details.php">7 - Product Details</a> no longer required</del>
                </li>
                <li class="del">
                    <a href="8-product-details-campaign.php"><del>8 - Product Details: Campaign</del> [on hold - phase 2]</a>
                </li>
                <li class="del">
                    <a href="9-product-details-campaign-create.php"><del>9 - Product Details: Campaign: Create</del> [on hold - phase 2]</a>
                </li>
                <li>
                    <a href="10-order.php">10 - Order</a>
                    <p>Steve confirmed this is fine.</p>
                </li>
                <li>
                    <a href="10-order-selected.php">10 - Order Selected</a>
                    <p>Could do with a design (or accurate wireframe) to confirm exactly what is needed on this page. Remove 'refresh' button. Table needs a scrollbar as it could be long. Check what the buttons should be on this page? Remove 'Save and Continue' button? Remove Two layout options. Remove 'proof' button. Add an 'add to basket' button?<em>- Steve to design</em> (or at least create a quick jpg mockup to show which elements I need to include - which the client then confirms is correct &amp; accurate).</p>
                </li>
                <li>
                    <a href="11-file-manager-grid.php">11 - File Manager (Grid)</a>
                    <p>Designs apparently exist <em>- Steve to send me designs</em></p>
                </li>
                <li>
                    <a href="11-file-manager-list.php">11 - File Manager (list)</a>
                    <p>Designs apparently exist <em>- Steve to send me designs</em></p>
                </li>
                <li>
                    <a href="12-report-orders.php">12 - Report: Orders</a>
                    <p>Steve confirmed this is fine.</p>
                </li>
                <li>13. Left nav - they are not happy with current version (slide-out bits) - <em>Steve to provide design</em></li>
                <li>14. Top Nav - also not currently correct - will make similar to design without changing content...</li>
                <li>15. Login Page <em>- Steve to design</em></li>
            </ul>

            <h1>Other notes...</h1>
            <ul>
                <li>- Banner needs to handle different content over the top (user editable). In phase 2 there will also be ability to change colours.</li>
            </ul>
               
            <h1>My To-Do List..</h1>
            <ul>
                <li><del>- Make sure all tables work consistently &amp; responsively &amp; double-check they will work with any number of columns</del></li>
                <li>- Bootstrap plugin for equal height columns</li>
                <li><del>- Remove js bootstrap sortable tables</del></li>
                <li>- Restructure my classnames to make more minimal</li>
                <li>- Product editor changes</li>
                <li>...</li>
                <li>Templates:</li>
                <li>- Do missing 'checkout' template (plus small tweaks/changes to basket &amp; Order Confirmation - eg//remove subtotal &amp; delivery text from table - should be in a div.</li>
                <li>- Order selected</li>
                <li>- File Manager</li>
            </ul>

            <h1>Very Approximate timings:</h1>
            <ul>
                <li>'3 - Product Editor' - up to 2 hours</li>
                <li>'5.5 - Checkout ' - up to 2 hours</li>
                <li>'10 - Order Selected' - up to 2 hours</li>
                <li>'11 - File Manager' - no idea as I've not seen the designs - but perhaps a day to a day and a half depending on how complex the designs are - it looked a fairly involved section...so say, up to 11 hours for now...</li>
                <li>'Left Nav' - up to 4 hours</li>
                <li>'Top Nav' - 1 hour</li>
                <li>'Login' - 1 hour</li>
            </ul>
        </section>
    </body>

</html>