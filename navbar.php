<body>
<!--header start here-->
<!-- <div class="mother-grid" style="margin-top: 80px;"> -->
  <!-- <div class="container"> -->
    <!-- <div class="header"> --> 
      <!-- <div class="header-left">
           <a href="index.html"> <img src="images/logo.png" style="width: 40%; height: 40%;"> </a>
      </div>
      <span class="menu"> <img src="images/icon-1.png"></span> -->
      <!-- <div class="clear"> </div>
      <div class="header-right"> -->

  <!-- <div class="container">
    <h1>Stichting Goede Daad</h1>
  </div> -->
<nav id="navbar-primary" class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-primary-collapse">
      <ul class="nav navbar-nav" style="margin-bottom: 10px;">
    <?php
        // Define each name associated with an URL
        $urls = array(
            'HOME' => '/',
            'PROJECTEN' => '/projecten',
            'EVENTS' => '/events',
            'VRIJWILLIGERS' => '/vrijwilligers',
            'FONDSENWERVING' => '/fondsenwerving',
            'CONTACT' => '/contact',
        );

        foreach ($urls as $name => $url) {
            print '<li '.(($currentPage === $name) ? ' class="active" ': '').
                '><a href="'.$url.'">'.$name.'</a></li>';
        }
    ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header><!-- header role="banner" -->
</nav>
  <script>
      $( "span.menu").click(function() {
    $(  "ul.res" ).slideToggle("slow", funion() {
     // Animation complete.
      });
      });
  </script>

<!--/header end here-->


