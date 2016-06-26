<!-- call head partial file -->
<?php include('inc/head.php'); ?>

<body>
<!-- call head partial file -->
<?php include('inc/header.php'); ?>
   <hr>
    <div class="container">
        
    <div class="container-fluid">
    <div class="col-md-8">
        <div class="col-md-12">
        <div class="row">
            
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/Cover%201.png" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="images/Cover%201.png" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="images/Cover%201.png" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
      <img src="images/Cover%201.png" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
            </div>
            
        
            
            
            
            
        </div>
        </div>
    
    <div class="col-md-4">
        <div class="col-md-12">
        <div class="row">
            <div class="booking-info">
                <div class="booking-header">   </div>
                <form class="form-vertical" role="form">
                <fieldset>
                    <legend> BOOKING INFORMATION</legend>
                    
                    
                    
                    <style>.springDealsText { margin-top: 0px; } </style>

            
      <div class="form-horizontal">

          <div class="form-group">
                          <label>Adults:</label>
              <span class="col-xs-6 h4" style="float:right;">
              $ 45.00 USD</span>
                      </div>

                    <div class="form-group">
                          <label>Children: <br> <span class="small">6 to 12 years old</span></label>
              <span class="col-xs-6 h4" style="float:right;">$ 22.50 USD</span>
                      </div>
          
      </div> <!-- form-horizontal -->

                    
                    
                    <label>Adults:</label>
                    <input type="number" name="adults" class="form-control form-half" min="1" max="16"  value="1" required><br>
                          
                    <label>Children:</label>
              <input type="number" name="kids" class="form-control form-half" min="0" max="16" value="0"><br>
             
                    <div class="form-group">
            <label>Date of tour:</label>
            <input name="date" class="form-control datepicker" type="text" autocomplete="off" required>
          </div><br>
                    
                    <div class="form-group">
                      <label>Promocode:</label>
                      <div class="input-group">
                        <input name="promo_code" type="text" class="form-control" placeholder="Your promode">
                        <span class="input-group-btn"><button class="btn btn-default" type="button">Apply!</button></span>
                      </div>
                    </div><br>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="BOOK NOW"></div>
        
                    
                    </fieldset>
                </form>
                
            </div>
            <div class="clear mb-20"></div>
        </div>
        </div>
        </div>
        
</div>
        </div>
<hr>
<!-- FOOTER -->
<?php include('inc/footer.php'); ?>