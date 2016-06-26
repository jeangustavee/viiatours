<!-- set a name for thisPage variable -->
<?php $thisPage="Tours"; ?>

<!-- call head partial file -->
<?php include('inc/head.php'); ?>

<body>
<!-- call head partial file -->
<?php include('inc/header.php'); ?>
    
<!-- TOURS -->
   
<!-- Page Content -->
<div class="container">
    <hr>
        <!-- Preview Image -->
        <img class="img-responsive center-block" src="images/tours/cover_img/tours-cover-img.png" alt="">
    <hr>
    
    <div class="row">
		<div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for tours" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control">
                                        <option value="0" selected>All Tours</option>
                                        <option value="1">On Sales</option>
                                        <option value="2">Most popular</option>
                                        <option value="3">Top rated</option>
                                        <option value="4">Adventure</option>
                                        <option value="5">Dolphins</option>
                                        <option value="6">Family</option>
                                        <option value="7">Kids discount</option>
                                        <option value="8">Groups</option>
                                        <option value="9">Sightseeing</option>
                                        <option value="10">Water</option>
                                    </select>
                                  </div>
                                    <!-- hidden --
                                  <div class="form-group">
                                    <label for="contain">Author</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                    -->
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
    
    <hr>

<!-- ----------------------
    TOURS ROW 11
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/atv_individual_adventure/A-ATV-viiatours.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>ATV INDIVIDUAL ADVENTURE</h3>
                <p>Drive your very own racing ATV through the Dominican countryside while enjoying the stunning view of coffee and chocolate plantations, and local houses; a once in a lifetime experience. Get dirty and muddy. 100% off Road.</p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$85</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 11 -->

    <!-- ----------------------
    TOURS ROW 12
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/atv_double_adventure/beach-atv-tours-viiatours.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>ATV DOUBLE ADVENTURE</h3>
                <p>Drive your very own racing ATV through the Dominican countryside while enjoying the stunning view of coffee and chocolate plantations, and local houses; a once in a lifetime experience. Get dirty and muddy. 100% off Road.</p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$50</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 12 -->

    <!-- ----------------------
    TOURS ROW 13
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/combo/combo_zip_buggy.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>VIIA COMBO [ZIP LINE + BUGGY]</h3>
                <p>VIIA TOURS is offering you 2 of the most popular excursions for the cheapest price you can possible find online. Those 2 excursions altogether are suitable for family and group so they can save and focus on having more fun. </p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$120</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 13 -->

    <!-- ----------------------
    TOURS ROW 14
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/combo/viia-snorkeling_buggy.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>VIIA COMBO [SNORKELING + BUGGY]</h3>
                <p>VIIA TOURS is offering you 2 of the most popular excursions for the cheapest price you can possible find online. Those 2 excursions altogether are suitable for family and group so they can save and focus on having more fun.</p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$100</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 14 -->
    
    
    <!-- ----------------------
    TOURS ROW 15
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/snorkeling/tour-saona.png" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>BEBE CATAMARAN</h3>
                <p>Enjoy a perfect snorkeling experience on a Coral reef with colorful fish and  relaxing on our catamaran. soak up the sun and bathe in natural sea pools.an unforgettable half day experience.</p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$59</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 15-->





  <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="tours.php">1</a>
                    </li>
                    <li class="active">
                        <a href="tours/page-2.php">2</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

<hr>

</div> <!-- /. container -->

<hr>
<!-- FOOTER -->
<?php include('inc/footer.php'); ?>