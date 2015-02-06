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
                            <li class="active"><a href="#">Product Category</a></li>
                        </ul>
                        <h1>Variable data product</h1>
                    </div>
                </div>

                <div id="page">
                    
                    <div id="seq-vdp">

                        <h2>Search for</h2>
                        <section class="seq-vdp-search">
                            <div class="seq-filter-row">

                                <div class="seq-filter btn-group">
                                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                                          Surname <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">option 2</a></li>
                                            <li><a href="#">option 3</a></li>
                                            <li><a href="#">option 4</a></li>
                                        </ul>
                                </div>
                                <div class="seq-filter btn-group">
                                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                                          Contains <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">option 2</a></li>
                                            <li><a href="#">option 3</a></li>
                                            <li><a href="#">option 4</a></li>
                                        </ul>
                                </div>
                                <div class="seq-filter btn-group">
                                        <input class="form-control" placeholder="" type="text">
                                </div>

                            </div>

                            <div class="seq-filter-row">
                                <div class="seq-filter btn-group">
                                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                                      Show <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">option 2</a></li>
                                        <li><a href="#">option 3</a></li>
                                        <li><a href="#">option 4</a></li>
                                    </ul>
                                </div>

                                <div class="seq-filter">
                                    <div class="checkbox checkbox-inline">
                                        <label>
                                          <input type="checkbox" checked> All
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline">
                                        <label>
                                          <input type="checkbox" checked> Lapsed 12 -24 months
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline">
                                        <label>
                                          <input type="checkbox" checked> Lapsed customer
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline">
                                        <label>
                                          <input type="checkbox" checked> New Acc. not traded
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline">
                                        <label>
                                          <input type="checkbox" checked> Regular customer
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </section>

                        <h2>Upload a spreadsheet</h2>
                        <section class="seq-vdp-upload">
                            <label for="exampleInputFile">Browse &amp; Upload</label>
                            <input type="file" class="filestyle" data-icon="false" data-buttonBefore="true" id="exampleInputFile">

                            <button type="button" class="btn vpress">upload</button>
                        </section>

                        <h2>Results <span class="num">(500)</span></h2>
                        
                        <!-- Responsive Tables Info: http://gergeo.se/RWD-Table-Patterns -->
                        <!-- table header responsive options
                            data-priority=""    Always visible and not hideable from dropdown
                            data-priority="1"   Always visible (but hidable from dropdown)
                            data-priority="2"   Visible when (min-width: 480px)
                            data-priority="3"   (min-width: 640px)
                            data-priority="4"   (min-width: 800px)
                            data-priority="5"   (min-width: 960px)
                            data-priority="6"   (min-width: 1120px)
                        -->

                        <div class="table-responsive seq-table-responsive" data-pattern="priority-columns" data-add-display-all-btn="false" data-add-focus-btn="false" data-focus-btn-icon="false" data-sticky-table-header="false">
                            <table class="table">
                               <thead>
                                    <tr>
                                        <th data-priority="1"><input type="checkbox"></th>
                                        <th data-priority="2">Title</th>
                                        <th data-priority="1">Salutation</th>
                                        <th data-priority="3">Firstname</th>
                                        <th data-priority="1">Surname</th>
                                        <th data-priority="5">Address</th>
                                        <th data-priority="2">Tel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Goldstone</td>
                                        <td>Mr</td>
                                        <td>Steven</td>
                                        <td>Goldstone</td>
                                        <td>Fitzalan House, Fitzalan Place, Cardiff. CF24 0EL</td>
                                        <td>02920 252555</td>
                                    </tr>
                                    <tr>
                                        <td><input name="" type="checkbox"></td>
                                        <td>Hornsby</td>
                                        <td>Mr</td>
                                        <td>John</td>
                                        <td>Hornsby</td>
                                        <td>Fitzalan House, Fitzalan Place, Cardiff. CF24 0EL</td>
                                        <td>02920 252555</td>
                                    </tr>
                                    <tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Goldstone</td>
                                            <td>Mr</td>
                                            <td>Steven</td>
                                            <td>Goldstone</td>
                                            <td>Fitzalan House, Fitzalan Place, Cardiff. CF24 0EL</td>
                                            <td>02920 252555</td>
                                        </tr>
                                    </tr>
                                    <tr>
                                        <td><input name="" type="checkbox"></td>
                                        <td>Hornsby</td>
                                        <td>Mr</td>
                                        <td>John</td>
                                        <td>Hornsby</td>
                                        <td>Fitzalan House, Fitzalan Place, Cardiff. CF24 0EL</td>
                                        <td>02920 252555</td>
                                    </tr>
                                    <tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Goldstone</td>
                                            <td>Mr</td>
                                            <td>Steven</td>
                                            <td>Goldstone</td>
                                            <td>Fitzalan House, Fitzalan Place, Cardiff. CF24 0EL</td>
                                            <td>02920 252555</td>
                                        </tr>
                                    </tr>
                                    <tr>
                                        <td><input name="" type="checkbox"></td>
                                        <td>Hornsby</td>
                                        <td>Mr</td>
                                        <td>John</td>
                                        <td>Hornsby</td>
                                        <td>Fitzalan House, Fitzalan Place, Cardiff. CF24 0EL</td>
                                        <td>02920 252555</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end responsive table -->


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

                        <div class="seq-vdp-summary">
                            <p class="seq-vdp-credit">Your credit &pound;988.07</p>
                            <div class="seq-vdp-price">
                                <button class="btn">Recalculate price</button>
                                <p class="seq-vdp-price-text">Price <em>&pound;23.63</em></p>
                            </div>
                        </div>
                        <div class="seq-vdp-actions">
                            <button class="btn vpress">Add to basket</button>
                        </div>

                    </div> <!-- end seq-vdp -->

                    

                </div> <!-- end page-->
                

            </div> <!-- end page content wrapper -->

        </div> <!-- end wrapper -->
    
        
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
