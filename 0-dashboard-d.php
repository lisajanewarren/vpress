<!DOCTYPE html>

<html lang="en" class="seq-sidebar-active">
 
    <?php require 'includes/_htmlhead.php'; ?>

    <body>

        <?php require 'includes/_sidebar.php'; ?>

        <div id="page-content-wrapper" class="page-dashboard">
            <div id="page-content-wrapper-inner">
        
                <?php require 'includes/_topnav.php'; ?>

                <!-- header banner -->
                <div id="header-graphic">
                    <div class="inner">
                        <h1>Welcome...</h1>
                        <h4>Welcome to Coreprint Web2Print for all<br />your print ordering requirements...</h4>
                    </div>
                </div>
                <!-- end header banner -->

                <!-- this will be the main content holder -->
                <div id="page">
                    
                    <div class="seq-tab-box">

                        <ul class="seq-tab-nav">
                            <li>
                                <a href="#" class="seq-icon">
                                    <div class="stat">888</div>
                                    <div class="hidden-s icon"><span class="glyphicon glyphicon-time"></span></div>
                                </a>
                                <p class="seq-text"><a href="#">Orders awaiting <br />approval</a></p>
                                <span class="seq-bar"></span>
                            </li>
                            <li>
                                <a href="#" class="seq-icon">
                                    <div class="stat">02</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-ok"></span></div>
                                </a>
                                <p class="seq-text"><a href="#">Current <br />orders</a></p>
                                <span class="seq-bar"></span>
                            </li>
                            <!-- (being removed for now )
                            <li>
                                <a href="#" class="seq-icon">
                                    <div class="stat">03</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-envelope"></span></div>
                                </a>
                                <p class="seq-text"><a href="#">Quotes <br />received</a></p>
                                <span class="seq-bar"></span>
                            </li>
                            -->
                            <li class="active">
                                <div class="seq-icon">
                                    <div class="stat">04</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-heart"></span></div>
                                </div>
                                <p class="seq-text">Favourite <br />products</p>
                                <span class="seq-bar"></span>
                            </li>
                            <li>
                                <a href="#" class="seq-icon">
                                    <div class="stat">05</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-floppy-disk"></span></div>
                                </a>
                                <p class="seq-text"><a href="#">Recently <br />saved</a></p>
                                <span class="seq-bar"></span>
                            </li>
                        </ul>

                        <section class="seq-tab-panel">   
                            <h1>Your Favourites</h1>

                            <div class="seq-list">
                                <div class="seq-item">
                                    <div class="seq-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-description">
                                        <p class="seq-prod-code">PRODCODE</p>
                                        <h2 class="seq-title">Product Title</h2>
                                        <div class="seq-text">
                                            <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                        </div>
                                    </div>
                                    <div class="seq-actions">

                                        <div class="seq-select">
                                            <div class="seq-select-inner">

                                                <select class="selectpicker">
                                                    <option value="volvo">Create</option>
                                                    <option value="saab">Order</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- end seq-item -->
                                <div class="seq-item">
                                    <div class="seq-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-description">
                                        <p class="seq-prod-code">PRODCODE</p>
                                        <h2 class="seq-title">Product Title</h2>
                                        <div class="seq-text">
                                            <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                        </div>
                                    </div>
                                    <div class="seq-actions">

                                        <div class="btn-singular">
                                            <button type="button" class="btn vpress">Add to Basket</button>
                                        </div>

                                    </div>
                                </div> <!-- end seq-item -->
                                <div class="seq-item">
                                    <div class="seq-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-description">
                                        <p class="seq-prod-code">PRODCODE</p>
                                        <h2 class="seq-title">Product Title</h2>
                                        <div class="seq-text">
                                            <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                        </div>
                                    </div>
                                    <div class="seq-actions">

                                        <div class="seq-select">
                                            <div class="seq-select-inner">

                                                <select class="selectpicker">
                                                    <option value="volvo">Create</option>
                                                    <option value="saab">Order</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- end seq-item -->
                                <div class="seq-item">
                                    <div class="seq-image">
                                        <img src="http://placehold.it/220x220/363636">
                                    </div>
                                    <div class="seq-description">
                                        <p class="seq-prod-code">PRODCODE</p>
                                        <h2 class="seq-title">Product Title</h2>
                                        <div class="seq-text">
                                            <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                        </div>
                                    </div>
                                    <div class="seq-actions">
                                        
                                        <div class="btn-singular">
                                            <button type="button" class="btn vpress">Add to Basket</button>
                                        </div>

                                    </div>
                                </div> <!-- end seq-item -->
                            </div>
                           

                        </section>

                    </div> <!-- end tab box -->
                </div> <!-- end page -->

            </div> <!-- end page content wrapper inner -->
        </div>  <!-- end page content wrapper -->
        
    </body>

</html>