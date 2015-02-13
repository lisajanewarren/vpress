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
                                <p class="seq-text">Quotes <br /><a href="#">received</a></p>
                                <span class="seq-bar"></span>
                            </li>
                            -->
                            <li>
                                <a href="#" class="seq-icon">
                                    <div class="stat">04</div>
                                    <div class="hidden-m icon"><span class="glyphicon glyphicon-heart"></span></div>
                                </a>
                                <p class="seq-text"><a href="#">Favourite <br />products</a></p>
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
                            <h1>Quotes Received</h1>


                           


                            <aside class="seq-ctas">
                                    <h1>Your categories</h1>

                                    <!-- ctas-->
                                    <ul>
                                        <li>
                                            <button class="btn btn-lg dashboard">Marketing<br />Literature</button>
                                        </li>
                                        <li>
                                            <button class="btn btn-lg dashboard">Request<br />a Quote</button>
                                        </li>
                                        <li>
                                            <button class="btn btn-lg dashboard">Newsletters</button>
                                        </li>  
                                        <li>
                                            <button class="btn btn-lg dashboard">Standard<br />Stationery</button>
                                        </li>
                                    </ul>
                            </aside> <!-- end ctas -->


                        </section>

                    </div> <!-- end tab box -->
                </div> <!-- end page -->

            </div> <!-- end page content wrapper inner -->
        </div>  <!-- end page content wrapper -->

    </body>

</html>