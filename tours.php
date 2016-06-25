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

    <!-- ----------------------
    TOURS ROW 1
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/snorkeling/tour-saona.png" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <h3>Snorkelling Adventure</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  </p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <span class="tour-deal">Deal</span>
                <p>from USD</p>
                <h2><center>$100</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 1-->

    <!-- ----------------------
    TOURS ROW 2
    --------------------------->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/snorkeling/horse-riding-1.jpg" class="img-responsive" alt=""></a>
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
                <p>from USD</p>
                <h2><center>$63</center></h2>
                <p><a class="btn btn-blue btn-md" href="#" role="button">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 2-->

</div> <!-- /. container -->

<hr>
<!-- FOOTER -->
<?php include('inc/footer.php'); ?>