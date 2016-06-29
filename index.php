<!-- set a name for thisPage variable -->
<?php $thisPage="Home"; ?>

<!-- call head partial file -->
<?php include('inc/head.php'); ?>

<body>
<!-- call head partial file -->
<?php include('inc/header.php'); ?>

<div class="container">

<!-- SLIDER
================================================== -->
<hr>
        <div class="row">
            <div class="col-md-6">
                <img src="images/viia-combo-fetured.jpg" class="img-responsive">
                <div class="carousel-caption">
                    <h2>Top rated Tour</h2>
                    <p><a class="slide-name" href="#">Snorkeling & Buggy <br><span class="price"><font size="3px"> <sup>from</sup> </font> $100</span></a></p>
                </div>
            </div>
            <div class="col-md-3">
                <img src="images/cover-2.png" class="img-responsive" id="cover_2">
                <div class="carousel-caption" id="none">
                    <h2><center>Snorkeling</center></h2>
                    <p><a class="slide-name price" href="#"><font size="3px"><sup>from</sup></font> $89</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <img src="images/transportation-cover-picture.jpg" class="img-responsive" id="cover_3">
                <div class="carousel-caption" id="none">
                <h2>Airport Pickup</h2>
                    <p><a class="slide-name price" href="#"><font size="3px"><sup>from</sup></font> $65</a></p>
                    </div>
            </div>
        </div>

</div>

    <!-- PROMO BOXES
================================================== -->
    
<div class="container">

    <div class="row">
        <div class="headers">
            <h2 class="sale">On Sale Today</h2>
        </div>
        <div class="col-md-4 .sale">
            <div class="sale">
                <span class="tour-discount"> 10%<sup>off</sup> </span>
                    <img src="images/snokleing-bebe-catamaran-1.jpg" class="img-responsive"> </p>
                <h3>buggies & zipline <span style="float:right;"><strike> <font size="3px;">$144</font></strike> <br><font color="#2b8aca">$120</font></span></h3>
                <p>VIIA TOURS is offering you 2 of the most popular excursions for the cheapest price you can possible find online.</p>
                <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button">View details</a></p>
            </div>
        </div>
        
        <div class="col-md-4">
            <p><img src="images/maxres-polaris-viiatours.jpg" class="img-responsive"> </p>
            <h3>dune buggy <span style="float:right;"> <font color="#2b8aca">$85</font></span> </h3>
            <p>Visit and swim in an Indian cave. Drive on Macao Beach.  The racing time starts somewhere here in Punta Cana. Are you ready?</p>
            <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button">View details</a></p>
        </div>
        
        <div class="col-md-4">
            <p><img src="images/zipline-canopy-puntacana-viia-tours.jpg" class="img-responsive"> </p>
            <h3>zip line adventure <span style="float:right;"><font color="#2b8aca">$89</font></span> </h3>
            <p>Discover the most exhilarating Adventure in the Dominican Republic with our canopy zip line experience.</p>
            <p><a class="btn btn-primary btn-lg btn-block" href="#" role="button">View details</a></p>
        </div>
    </div>
    
    <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                    <h2>SEE WHAT'S ON SALE NOW</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
               
                    <a class="btn btn-lg btn-primary btn-half" href="sale.php">ON SALE NOW</a>
                </div>
            </div>
</div>

<!-- TOURS
================================================== -->

    <div class="row">
        <div class="headers">
            <h2>Featured Excursion Deals</h2>
        </div>
        <div class="col-md-3">
            <p><a href="#"><img src="images/featured-sales/saona-island-5.jpg" class="img-responsive"></a> </p>
            <h4>SAONA ISLAND <span style="float:right;">$85</span> </h4>
           <p>Heaven on earth, feel the caribbean breeze, sailing on a Catamaran over the Caribbean sea to a remote island that is totally breathtaking</p>
        </div>
        <div class="col-md-3">
            <p><a href="#"><img src="images/featured-sales/maxresdefault-viiatours.jpg" class="img-responsive"></a> </p>
            <h4>SAFARI <span style="float:right;">$85</span></h4>
            <p>Plenty to discover on this full day adventure including a visit the countryside and learn about Coffee and Cocoa plantation where you’ll try some organic coffee and Cacao.</p>
        </div>
        <div class="col-md-3">
            <p><a href="horseback-riding.php"><img src="images/featured-sales/horse-riding-1.jpg" class="img-responsive"></a> </p>
            <h4>HORSEBACK RIDING <span style="float:right;">$63</span></h4>
            <p>Live the dream of riding a horse along tropical white-sand beaches on this day trip from Punta Cana! Gorgeous scenery, friendly guides and amazing horses make this trip a trip to remember.</p>
        </div>
        <div class="col-md-3">
            <p><a href="#"> <img src="images/featured-sales/santo-domingo-1.jpg" class="img-responsive"> </a></p>
            <h4>SANTO DOMINGO <span style="float:right;">$82</span></h4>
            <p>Santo Domingo is the capital city of the Dominican Republic,and it is  the oldest continually inhabited European settlement in the Americas.</p>
        </div>
    </div>

</div> <!-- /container -->

<!-- FOOTER
================================================== -->
<?php include('inc/footer.php'); ?>
