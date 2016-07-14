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
    TOURS ROW 1
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/combo/combomega1cover.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>MEGA COMBO [SNORKELING + BUGGY + ZIP LINE]</h3>
                <p>VIIA TOURS is offering you 3 of the most popular excursions for the cheapest price you can possibly find online. Those 3 excursions altogether are suitable for family and group so they can save and focus on having more fun.</p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <span class="tour-deal">Deal</span>
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$180</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 1 -->
    


    <!-- ----------------------
    TOURS ROW 2
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="horseback-riding.php"><img src="images/tours/snorkeling/horse-riding-1.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>Horseback Riding</h3>
                <p>Live the dream of riding a horse along tropical white-sand beaches on this day trip from Punta Cana! Gorgeous scenery, friendly guides and amazing horses make this trip a trip to remember. Designed for all ages and all levels of experience, this fun horse-riding adventure is...  </p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <span class="tour-deal">Deal</span>
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$63</center></h2>
                <p><a class="btn btn-blue btn-md" href="horseback-riding.php" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="horseback-riding.php" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 2-->
    
    <!-- ----------------------
    TOURS ROW 3
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/Zipline/zipline-canopy-puntacana.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>ZIP LINE ADVENTURE</h3>
                <p>Discover the most exhilarating Adventure in the Dominican Republic with our canopy zip line experience. This half day Excursions is designed to offer the best adrenaline moment in history...  </p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$89</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 3-->
    
    
    <!-- ----------------------
    TOURS ROW 4
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/buggy_double/buggies-double-beach-punta-cana.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>DUNE BUGGY DOUBLE</h3>
                <p>Drive your very own buggy through the Dominican countryside while enjoying the stunning view of coffee and chocolate plantations, and local houses; a once in a lifetime experience. Get dirty and muddy. 100% off Road.</p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$65</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 4-->
    
    <!-- ----------------------
    TOURS ROW 5
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/saona_island/saona-island.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>SAONA ISLAND</h3>
                <p>Heaven on earth, feel the caribbean breeze, sailing on a Catamaran over the Caribbean sea to a remote island that is totally breathtaking – Crystal clear water white sandy beach relax under the shade of palm trees then on the way home you speed off in speed boats...</p>
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

    <!-- ---------------------- END TOURS ROW 5-->
    
    <!-- ----------------------
    TOURS ROW 6
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/mega_truck/maxresdefault-viiatours.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>MEGA TRUCK SAFARI</h3>
                <p>Plenty to discover on this full day adventure including a visit the countryside and learn about Coffee and Cocoa plantation where you’ll try some organic coffee and Cacao. </p>
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

    <!-- ---------------------- END TOURS ROW 6-->
    
    <!-- ----------------------
    TOURS ROW 7
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/santo_domingo/santo-domingo-1.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>SANTO DOMINGO CITY TOURS</h3>
                <p>The city has a long and fascinating history. It is a city where history comes to life. Santo Domingo is where you must go if you like History and Culture,The two most prominent colonial monuments in Santo Domingo are the cathedral and the palace of Diego Columbus.  </p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$82</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 7-->
    
    <!-- ----------------------
    TOURS ROW 8
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/individual_buggy/dune-buggy.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>DUNE BUGGY INDIVIDUAL</h3>
                <p>Drive your very own buggy through the Dominican countryside while enjoying the stunning view of coffee and chocolate plantations, and local houses; a once in a lifetime experience.</p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$90</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 8-->
    
    <!-- ----------------------
    TOURS ROW 9
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/polaris_double/maxres-polaris-viiatours.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>POLARIS ADVENTURE DOUBLE</h3>
                <p>Drive your very own racing Polaris through the Dominican countryside while enjoying the stunning view of coffee and chocolate plantations, and local houses; a once in a lifetime experience. Get dirty and muddy. 100% off Road.</p>
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

    <!-- ---------------------- END TOURS ROW 9-->
    
    <!-- ----------------------
    TOURS ROW 10
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/polaris_individual/polaris_individual.jpg" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>POLARIS INDIVIDUAL</h3>
                <p>Drive your very own racing Polaris through the Dominican countryside while enjoying the stunning view of coffee and chocolate plantations, and local houses; a once in a lifetime experience. Get dirty and muddy. 100% off Road.</p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <p class="from-price">from USD</p>
                <h2 class="price-hidden"><center>$140</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
                
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button" id="btn-tours-media">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 10-->
    
    
    
    <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li class="active">
                        <a href="tours.php">1</a>
                    </li>
                    <li>
                        <a href="page-2.php">2</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

</div> <!-- /. container -->
    <br><br><br>

<!-- FOOTER -->
<?php include('inc/footer.php'); ?>