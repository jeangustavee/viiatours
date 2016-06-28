<!-- call head partial file -->
<?php include('inc/head.php'); ?>

<body>
<!-- call head partial file -->
<?php include('inc/header.php'); ?>
   <hr>
    <div class="container">
       <div class="row">
            <div class="col-md-8">
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
           
           
            <div class="col-md-4">
           <div class="booking-info">
                <div class="booking-header"><legend> BOOKING INFORMATION</legend>
               </div>
                <form class="form-vertical" role="form">
                <fieldset>
                   

            
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
            <input name="date" id="date" class="form-control datepicker" type="text" autocomplete="off" required>
          </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="BOOK NOW"></div>
        
                    
                    </fieldset>
                </form>
            </div>
       </div>
       </div>
        
        <br>
        
        <div class="row">
        <div class="col-md-8"><!-- DESCRIPTION -->
                 <h3>Description</h3>
                A lovely excursion to explore the fauna and flora, and also the Dominican culture, riding beautiful horses through rural roads to reach a beautiful beach!        <p class="h4">Itinerary</p>
        <p>Enjoy a relaxing day discovering the rural roads in Uvero Alto, riding one of the beautiful horses through quiet roads, while you get the chance to meet local people. This ride &nbsp;will take you straight to the beach of Uvero Alto where you can enjoy the beautiful beach. An ideal place to enjoy this beautiful paradise of the Dominican Republic.</p>
            
        <h4>Highlights</h4>
        <p>Visit to Uvero Alto</p>
            
        <h4>Includes</h4>
        <p>Transfer, training, helmets.</p>
            
        <h4>Not Included</h4>
        <p>Photos and souvenirs</p>
            
        <h4>Recommendations</h4>
        <p>Wear comfortable clothes, swimsuit, hiking shoes, sunscreen, insect repellent, bring extra cash.</p>
            
        <h4>Additional Information</h4>
        <p>The price varies depending on the length of the tour. It is not recommended for people with any health problems.</p>
        <h4>About Transportation</h4>
        <p>Hotel lobby</p>
        <h4>Activity Duration</h4>
            
        N/A        <h4>Tour Duration</h4>
        N/A </div>
            
        <div class="col-md-4"></div>
        </div>
        
    </div>
    
    
    <br><br><br><br><br><br>
        
<hr>
<!-- FOOTER -->
<?php include('inc/footer.php'); ?>