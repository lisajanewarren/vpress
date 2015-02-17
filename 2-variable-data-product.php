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
                        <h1>Variable data product</h1>
                    </div>
                </div>

                <div id="page">
                    
                    <div id="seq-vdp">

                        <h2>Search for</h2>
                        <section class="seq-vdp-search">
                            <div class="seq-filter-row">

                                <div class="seq-select seq-filter">
                                    <div class="seq-select-inner">

                                        <select class="selectpicker">
                                            <option value="">Surname</option>
                                            <option value="">option 2</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="seq-select seq-filter">
                                    <div class="seq-select-inner">

                                        <select class="selectpicker">
                                            <option value="">Contains</option>
                                            <option value="">option 2</option>
                                        </select>

                                    </div>
                                </div>
                                
                                <div class="seq-filter btn-group">
                                        <input class="form-control" placeholder="" type="text">
                                </div>

                            </div>

                            <div class="seq-filter-row">

                                <div class="seq-select seq-filter">
                                    <div class="seq-select-inner">

                                        <select class="selectpicker">
                                            <option value="">show</option>
                                            <option value="">option 2</option>
                                        </select>

                                    </div>
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

            </div> <!-- end page content wrapper inner -->           
        </div> <!-- end page content wrapper -->

    </body>

</html>
