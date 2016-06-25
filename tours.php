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

    <!-- ---------------------- TOURS ROW 1-->
    <div class="row" id="tours">
        <div class="col-sm-3">
            <div class="tours-thumb">
                <a href="#"><img src="images/tours/snorkeling/tour-saona.png" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="tours-middle">
                <p><font size="5px">SNORKELIING ADVENTURE</font></p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  </p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="tours-price">
                <center>from USD</center>
                <h2><center>$100</center></h2>
                <p><a class="btn btn-blue btn-md btn-block" href="#" role="button">BOOK NOW</a></p>
            </div>
        </div>
    </div> <!-- /.row #tours -->

    <!-- ---------------------- END TOURS ROW 1-->

</div> <!-- /. container -->

<hr>
<!-- FOOTER -->
<?php include('inc/footer.php'); ?>