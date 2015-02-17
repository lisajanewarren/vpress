<!DOCTYPE html>

<html lang="en" class="seq-sidebar-active">

    <?php require 'includes/_htmlhead.php'; ?>
    
    <body>
       
        <?php require 'includes/_sidebar.php'; ?>

        <div id="page-content-wrapper">
            <div id="page-wrapper-inner">

                <?php require 'includes/_topnav.php'; ?>

                <div id="header-graphic">
                    <div class="inner">
                        <h1>Product category (list view)</h1>
                    </div>
                </div>

                <div id="page">

                    <!-- Search Bar -->
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
                        <div class="seq-control-bar-toggle">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="glyphicon glyphicon-th-list"></span>
                        </div>

                        <div class="seq-control-bar-sort">
                            <label class="seq-label">Sort by</label>
                            <div class="seq-select">
                                <div class="seq-select-inner">

                                    <select class="selectpicker">
                                        <option value="">Most popular</option>
                                        <option value="">option 2</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Search Bar -->
            
                    <div class="seq-griddable seq-griddable-list"> <!-- seq-griddable-grid -->
                        <div class="seq-griddable-item">
                            <div class="seq-griddable-image">
                                <img src="http://placehold.it/130x130/363636">
                            </div>
                            <div class="seq-griddable-description">
                                <p class="seq-griddable-prod-code">PRODCODE</p>
                                <h2 class="seq-griddable-title">Product Title</h2>
                                <div class="seq-griddable-text">
                                    <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                </div>
                            </div>
                            <ul class="seq-griddable-actions">

                                <li>
                                    <div class="seq-select">
                                        <div class="seq-select-inner">

                                            <select class="selectpicker">
                                                <option value="">Create</option>
                                                <option value="">Order</option>
                                            </select>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button class="btn vpress btn-favourite"><span class="glyphicon glyphicon-heart"></span></button>
                                </li>

                            </ul>
                        </div>
                        <div class="seq-griddable-item">
                            <div class="seq-griddable-image">
                                <img src="http://placehold.it/130x130/363636">
                            </div>
                            <div class="seq-griddable-description">
                                <p class="seq-griddable-prod-code">PRODCODE</p>
                                <h2 class="seq-griddable-title">Product Title Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor urna sit amet ligula elementum</h2>
                                <div class="seq-griddable-text">
                                    <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                </div>
                            </div>
                            <ul class="seq-griddable-actions">

                                <li>
                                    <div class="seq-select">
                                        <div class="seq-select-inner">

                                            <select class="selectpicker">
                                                <option value="">Create</option>
                                                <option value="">Order</option>
                                            </select>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button class="btn vpress btn-favourite"><span class="glyphicon glyphicon-heart"></span></button>
                                </li>

                            </ul>
                        </div>
                        <div class="seq-griddable-item">
                            <div class="seq-griddable-image">
                                <img src="http://placehold.it/130x130/363636">
                            </div>
                            <div class="seq-griddable-description">
                                <p class="seq-griddable-prod-code">PRODCODE</p>
                                <h2 class="seq-griddable-title">Product Title</h2>
                                <div class="seq-griddable-text">
                                    <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                </div>
                            </div>
                            <ul class="seq-griddable-actions">

                                <li>
                                    <div class="seq-select">
                                        <div class="seq-select-inner">

                                            <select class="selectpicker">
                                                <option value="">Create</option>
                                                <option value="">Order</option>
                                            </select>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button class="btn vpress btn-favourite"><span class="glyphicon glyphicon-heart"></span></button>
                                </li>

                            </ul>
                        </div>
                        <div class="seq-griddable-item">
                            <div class="seq-griddable-image">
                                <img src="http://placehold.it/130x130/363636">
                            </div>
                            <div class="seq-griddable-description">
                                <p class="seq-griddable-prod-code">PRODCODE</p>
                                <h2 class="seq-griddable-title">Product Title</h2>
                                <div class="seq-griddable-text">
                                    <p>Std stationery catalogue. 40pp, full colour, 200gsm cover, 60sgm inners, glued. Box of 100...</p>
                                </div>
                            </div>
                            <ul class="seq-griddable-actions">

                                <li>
                                    <div class="seq-select">
                                        <div class="seq-select-inner">

                                            <select class="selectpicker">
                                                <option value="">Create</option>
                                                <option value="">Order</option>
                                            </select>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button class="btn vpress btn-favourite"><span class="glyphicon glyphicon-heart"></span></button>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- end seq griddable list -->

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
                </div> <!-- end page-->    

            </div> <!-- end page wrapper inner -->
        </div> <!-- end page content wrapper -->
  
    </body>

</html>
