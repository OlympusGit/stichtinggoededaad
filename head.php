<!DOCTYPE html>
<html>
<head>
<title><?php echo($title); ?></title>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--web-fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--js-->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript">]
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
  </script>
<!-- //end-smoth-scrolling -->
<style type="text/css">

  .lel {
      border: 1px solid white;
      padding-left: 20px;
      padding-top: 20px;
      color: white;
    }

  @media screen and (min-width: 980px) {

  .dude {
    max-width: 980px;
  }

}

@media screen and (min-width: 480px) {

  .dude2 {
    max-width: 480px;
  }

  #logo {
        display: none;
    }

}

header[role="banner"] #logo-main {
  display: block;
  margin: 20px auto;
  margin-bottom: -30px;
}
#navbar-primary.navbar-default {
  background: transparent;
  border: none;
}
#navbar-primary.navbar-default .navbar-nav {
  width: 100%;
  text-align: center;
}
#navbar-primary.navbar-default .navbar-nav > li {
  display: inline-block;
  float: none;
}
#navbar-primary.navbar-default .navbar-nav > li > a {
  padding-left: 30px;
  padding-right: 30px;
}
.navbar {
  padding-bottom: 0;
}

ul.navbar-collapse {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

ul.navbar-collapse li {float: left;}

ul.navbar-collapse li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.navbar-collapse li:hover a:not(.active) {
    background-color: #D3D3D3;
    color: #000;
}

ul.navbar-collapse li a.active {
    background-color: #D2691E;
    color: white;
}

ul.navbar-collapse li.right {float: right;}

@media screen and (max-width: 600px){
    ul.navbar-collapse,
    ul.navbar-collapse {position: unset}
    ul.navbar-collapse li.right, 
    ul.navbar-collapse li {float: none;}
}

ul.navbar-collapse .dropdown-content {
  display: none;
  position: absolute;
}
ul.navbar-collapse .dropdown-content a {
  color: black;
}
ul.navbar-collapse .dropdown:hover > .dropdown-content {
  display: block;
}

}

.vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern:focus, .vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern:hover {
    color: #5e5e5e;
    border-color: #dcdcdc;
    background-color: #dcdcdc;
}

.vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern {
    color: #666;
    border-color: #ebebeb;
    background-color: #ebebeb;
}
.vc_btn3.vc_btn3-color-grey.vc_btn3-style-flat:focus, .vc_btn3.vc_btn3-color-grey.vc_btn3-style-flat:hover, .vc_btn3.vc_btn3-color-grey:focus, .vc_btn3.vc_btn3-color-grey:hover {
    color: #5e5e5e;
    background-color: #dcdcdc;
}
.vc_general.vc_btn3:focus, .vc_general.vc_btn3:hover {
    border: 1px solid transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
    text-decoration: none;
    color: #666;
}
.vc_btn3.vc_btn3-color-grey, .vc_btn3.vc_btn3-color-grey.vc_btn3-style-flat {
    color: #666;
    background-color: #ebebeb;
}
.vc_btn3.vc_btn3-size-md {
    font-size: 14px;
    padding: 14px 20px;
        padding-left: 20px;
}
.vc_btn3.vc_btn3-shape-rounded {
    border-radius: 5px;
}
.vc_btn3.vc_btn3-style-modern {
    background-image: linear-gradient(to bottom,rgba(255,255,255,.2) 0,rgba(255,255,255,.01) 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#33ffffff',endColorstr='#03ffffff',GradientType=0);
}
.vc_btn3.vc_btn3-icon-left {
    text-align: left;
}
.vc_btn3.vc_btn3-icon-left, .vc_btn3.vc_btn3-icon-right {
    position: relative;
}
.vc_btn3.vc_btn3-style-modern, .vc_tta.vc_tta-style-modern .vc_tta-panel-body, .vc_tta.vc_tta-style-modern .vc_tta-panel-heading {
    background-image: -webkit-linear-gradient(top,rgba(255,255,255,.2) 0,rgba(255,255,255,.01) 100%);
    background-image: -o-linear-gradient(top,rgba(255,255,255,.2) 0,rgba(255,255,255,.01) 100%);
}
.vc_general.vc_btn3 {
    display: inline-block;
    margin-bottom: 0;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    background-color: transparent;
    color: #5472d2;
    border: 1px solid transparent;
    box-sizing: border-box;
    word-wrap: break-word;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    position: relative;
    top: 0;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    line-height: normal;
    font-size: 14px;
    padding: 14px 20px;
}
.vc_general.vc_btn3, .wpb_button:hover, a.wpb_button_a, a.wpb_button_a:hover {
    text-decoration: none;
}

@media screen and (max-width:10000px) {  
  #stg {
        margin-left: 49%;
        bottom: 160px;
        display: block;
        position: absolute;
    }

  }


@media screen and (max-width:1380px) {  
  #stg {
      
        padding-left: 40px;
    }
    
  }

  @media screen and (max-width:1080px) {  
  #stg {
      
        padding-left: 80px;
    }
    
  }

@media screen and (max-width:979px) {  
  #stg {
        display: none;
    }
  #main {
        margin-left: 60px;
    }

  }

@media screen and (max-width:940px) {  
  #main {
        margin-left: 20px;
    }
    
  }

@media screen and (max-width:500px) {  
  #main {
        margin-left: -80px;
    }
    
  }

@media screen and (max-width:480px) {  
   #response {
      width: 200%;
      margin-left: -50%;
 
  }
    
}



.text-wrap {
  width: 100%;
}

.center {
  width: 50%;
  margin-left: auto;
  margin-right: auto;
}



</style>

</head>

