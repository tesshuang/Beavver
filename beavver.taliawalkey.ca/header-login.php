<?php
session_start();
require_once('connect.php');
////var_dump($_SESSION);
console.log($_SESSION);
//phpinfo();

//$sql = "SELECT ('first_name') FROM login WHERE $email";
//echo $first_name;
//$conn->exec($sql);

?>

<?php 
            if (empty($_SESSION["user"])) {
                include 'header-logout.php';
                include 'login-warning.php';
                exit();
            }
            ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="google-signin-client_id" content="865984037107-0laeq4id47er4dn2s10kf547j5ebp5f1.apps.googleusercontent.com">
     
     <meta name="google-signin-client_id" content="651246939702-uhm0eltj2jfa6ipjt9hvtpisr94pqla7.apps.googleusercontent.com">

     
    <title>Beavver</title>
      
    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="favicon.png"/>  

    <!-- Bootstrap -->  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />   
     <script src="https://apis.google.com/js/platform.js" async defer></script>

  </head>
  <body>
    <!-- NAV BAR -->
    <nav class="navbar navbar-fixed-top navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="landingLogin.php">
            <img src="img/logo-text.png" id="logo" alt="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="matching.php">SCAN</a></li>
            <li><a href="resume-templates.php">RESOURCES</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="faqs.php">FAQ</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            
             
            <!-- LOGIN -->  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <button class="secondaryBtn">
                      <span id="after-login-span">Hello 
                      <span id="firstname">
                                 <?php echo $_SESSION['user']['first_name'];?>
                      </span>!
                      </span>
                      <span class="caret"></span>
                </button>
            
                </a>
                <ul class="dropdown-menu">

                <!-- AFTER LOGIN -->  
                <div id="after-login">
                    <li><a href="myCareer.php" id="myProfile">My Profile</a></li>
<!--
                    <li><a href="myCareer.php">My Resume</a></li>
                    <li><a href="myCareer.php">My Job Bank</a></li>
                    <li><a href="myCareer.php">Saved Courses</a></li>
-->
                    <li role="separator" class="divider"></li>
                    <li><a href="logout.php" onclick=""> Sign Out</a></li>
                  
                </div>
                    
              </ul>
            </li>
             
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav>

    <!-- SEARCH BAR -->  
    <div id="search-box" class="form-row align-items-center">
        <input type="text" class="form-control" placeholder="Search" id="search-input">  
        <a href="#"><span class="glyphicon glyphicon-search" id="search-icon"></span></a>
    </div>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      
    </body>
</html>

<!-- Google SignIn SCRIPT -->
      <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
      
      
      <script>
                     
//sign out gmail
                      function signOut() {
                        var auth2 = gapi.auth2.getAuthInstance();
                        auth2.signOut().then(function () {
                          console.log('User signed out.');
                        });
                      }
                      
//end sign out gmail
                     
                var myProfile = document.getElementById('myProfile');
                     myProfile.addEventListener("click", function(){
                         console.log("clicked");
                         window.location.href = "registeredProfile.php";
                     });
                 
               /*  //SEARCH BAR ANIMATION
                $(document).ready(function(){
                    $("#nav-search").click(function(){
                        $("#search-box").slideToggle();
                    });
                });*/
                 
             </script>

