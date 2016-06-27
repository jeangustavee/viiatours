<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> 904-438-4353</p></div>
                </div>
                <div id="top-right">
                    <div class="col-sm-3 col-xs-4">
                        <div id="google_translate_element"></div>
                        <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,es,fr,it', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>   
                    </div>

                    <div class="col-sm-3 col-xs-4">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div> <!-- /#top-right -->
            </div>
        </div>
    </div>
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li <?php if ($thisPage=="Home")
                        echo " class=\"active\""; ?>>
                        <a href="index.php">Home</a></li>
                    <li <?php if ($thisPage=="Tours")
                        echo " class=\"active\""; ?>>
                        <a href="tours.php">Tours</a></li>
                    <li <?php if ($thisPage=="Transportation")
                        echo " class=\"active\""; ?>>
                        <a href="transportation.php">Transport</a></li>
                    <li <?php if ($thisPage=="Sale")
                        echo " class=\"active\""; ?>>
                        <a href="sale.php">Sale</a></li>
                    <li <?php if ($thisPage=="Blog")
                        echo " class=\"active\""; ?>>
                        <a href="blog.php">Blog</a></li>
                    <li <?php if ($thisPage=="Contact")
                        echo " class=\"active\""; ?>>
                        <a href="contact.php">Contact</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>