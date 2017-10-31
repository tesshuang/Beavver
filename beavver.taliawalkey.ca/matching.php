<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Matching</title>

    <!-- Bootstrap -->  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/matching.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat:700" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>        
    <a name="top"></a>   

    <div>
        <!-- Make sure to change this to 'header-login.php' for pages that user is logged in -->
        <?php include 'header-login.php';?>
    </div>
    
    <!-- BREADCRUMBS -->
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Current Page</li>
      </ol>
    </nav>        
        
    
    <div class="content"> 
        
    <!-- PAGE HEADER -->    
    <div class="container-fluid templates-content">
        <div class="row">
            <div class="col-md-1"></div>
    		<div class="col-md-10">
                <div class="orange-line"></div>
                <img src="img/gray-circle.png" class="gray-circle"/>
                <h1 class="page-title">MATCHING</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </div> <!-- END OF CONTENT -->
    
    <div id="root"></div>
    <section>
        <div class="container">
                    <p id="title">Let's Get Started</p>
                    <p id="desc">Increase your chance in landing an interview in two steps. Just paste your resume on the </br>left sections and the job description on the right box. Then, we can make a match!</p>
                    <div id="mrow" class="row">
                    <div class="col">
                       <ul>
                           <li class="step">PASTE YOUR RESUME</li>
                       </ul>
                      <label class="mlabel">Job Title</label>
                      <input class="rinput">
                      <label class="mlabel">&nbsp;</label>
                      <textarea class="jinput" placeholder="Paste your resume here" id="text1" spellcheck="true"></textarea>

                      <br/>

                      <button class="clear">Clear resume</button>
                  </div>

                   <div class="col">
                       <ul>
                           <li class="step">PASTE YOUR JOB DESCRIPTION</li>
                       </ul>
                      <label class="mlabel">Job Title</label>
                      <input class="rinput">
                      <label class="mlabel">&nbsp;</label>
                      <textarea class="jinput" placeholder="Paste the job title with the full job description text-excluding the &quot About Company &quot section" id="text2" spellcheck="true"></textarea>

                      <br/>

                      <button class="clear">Clear job description</button>
                  </div>
                  </div>
                    <button class="msubmit" id="matchBtn">MAKE A MATCH</button>
                    <br/>

                </div>
    </section>
    <section class="rsection">
         </br></br></br>
        <div id="mhidden" class="container">
            <div id="percentage">
                <div class="progress" id="progress"></div>
            </div>
            </br></br>
            <div class="resultcontainer">
              <div class="resultbox">
                  <p class="rtitle">Comparison</p>
                  <table id="mTable">
                      <tr>
                        <th style="color:#292929">Keywords</th>
                        <th style="color:#292929">Resume</th>
                        <th style="color:#292929">Job Description</th>
                      </tr>
                  </table>
              </div>

              <div class="resultbox">
                  <p class="rtitle">Suggestion</p>
              </div>


              <div class="resultbox">
                  <p class="rtitle">Course Recommandation</p>
                  <div id="courseRec"></div>
              </div>

          </div>
        </div>
    </section>
    <br/>
    
    <div>
        <?php include 'footer.php';?>
    </div>  
    
    </div>
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/header-footer.js"></script>
      
    <!--progressbarJS-->
    <script src="js/progressbar/progressbar.js"></script>
    
    <!--scroll down jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
             $(function() {
             $('.msubmit').click (function() {
              $('html, body').animate({scrollTop: $('section.rsection').offset().top }, 'slow');
              return false;
            });
          });
    </script>

    <link href="/proj/build/static/css/main.5ec4dc93.css" rel="stylesheet">
<script type="text/javascript" src="/proj/build/static/js/main.9946222a.js"></script>
  </body>
</html>