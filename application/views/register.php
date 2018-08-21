<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h2 align="center">Registration</h2>
    <div class="panel-group">
      <div class="panel panel-primary">
        <div class="panel-heading">Enter Information</div>
        <div class="panel-body"> 
        
        <form method="post" action="<?php echo base_url()."home/insert";?>">
          
          <div class="form-group">
            <label> Full Name:</label>
            <input type="text" required class="form-control" name="name" id="name">
          </div>

          <div class="form-group">
            <label>contact Number:</label>
            <input type="mnumber" required class="form-control" name="mnumber" id="mnumber">
          </div>

          <div class="form-group">
            <label>Email Address:</label>
            <input type="email" required class="form-control" name="email" id="email">
          </div>

          <div class="form-group">
            <label>Password:</label>
            <input type="password" required class="form-control" name="password" id="pwd">
          </div>

          <?php echo $this->session->flashdata('error'); ?>
          <button type="submit" class="btn btn-default">Submit</button>
        </form> 
      </div>
    </div>
  </div>
</div>
</body>
</html>
 -->









<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="<?php echo base_url()."assets/images/bg.jpeg"; ?>">

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form method="post" action="<?php echo base_url()."home/login";?>"  class="form-horizontal" >
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    



                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                   <!--  <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-success">Login</button>
                                      <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up
                                        </a>
                                      <a href="<?php echo base_url()."home/register";?>" class="btn btn-default" >Register</a>

                                    </div>
                          
                                </div>

                            </form>     
<hr>
          <?php echo $this->session->flashdata('error'); ?>



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <!-- <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div> --> Login Done... 
    




















<!-- 

  <div class="container">
    <h2 align="center">Login/Registration</h2>
    <div class="panel-group">
      <div class="panel panel-primary">
        <div class="panel-heading">login Details</div>
        <div class="panel-body"> 
        <form method="post" action="<?php echo base_url()."home/login";?>">
          <div class="form-group">
            <label>Email address:</label>
            <input type="email" required class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
            <label>Password:</label>
            <input type="password" required class="form-control" name="password" id="pwd">
          </div>
          <?php echo $this->session->flashdata('error'); ?>
          <button type="submit" class="btn btn-default">Submit</button>       
        </form>
        <div align="right">
        <a href="<?php echo base_url()."home/register";?>" class="btn btn-default" >Register</a>
      </div>             
      </div>
    </div>
  </div>
</div>
</body>
</html> -->
 -->


 <!DOCTYPE HTML>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta charset="utf-8">

<!-- Description, Keywords and Author -->

<meta name="description" content="">
<meta name="author" content="">
<title>:: Immortal ::</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

<!-- style -->

<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

<!-- style -->

<!-- bootstrap -->

<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

<!-- responsive -->

<link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">

<!-- font-awesome -->

<link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">

<!-- font-awesome -->

</head>

<body>

<!-- side bar -->

<aside role="siderbar-nav" class="side-bar">
  <nav>
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home" title="Home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a data-toggle="tab" href="#menu1" title="About"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
    </ul>
  </nav>
</aside>

<!-- side bar --> 

<!-- header -->

<header role="main-header">
  <div class="container"> 
    
    <!-- logo -->
    
    <h1> <a href="index.html" title="Floxi"><img src="<?php echo base_url(); ?>images/logo.png" alt="Floxi"/></a> </h1>
    
    <!-- logo --> 
    
    <!-- socil Icon -->
    
    <ul role="socil-icons">
      <li><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="#" target="_blank" title="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
      <li><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</header>

<!-- header --> 
  
<!-- main -->

<main role="main" id="main">
  <div class="container"> 
    
    <!-- tab-content -->
    
    <div class="tab-content"> 
      
      <!--Register Home -->
      
      <section id="registerhome" class="tab-pane fade in active">
        <article class="home-content">
          <header role="home-title">
            <h2>We are
              <div id="typed-strings"><span>Creative</span> <span>Dedicated</span> <span>Photographers</span> </div>
              <span id="typed" style="white-space:pre;"></span></h2>
          </header>
         <div class="contact-from row">
          <div class="col-md-7 col-lg-7">
            <div id="message"></div>
            <form method="post" action="<?php echo base_url()."home/insert";?>">
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                  <input  name="name" id="email"  type="text" required placeholder="Enter Your Full Name...">
                  <input  name="mnumber" id="email" type="text" required placeholder="Enter Your Mobile Number...">
                  <input  name="email" id="email" type="text" required placeholder="Enter Your Email...">
                  <input  name="password" id="email" type="password" required placeholder="Enter Your Password...">
                  <input name="" type="submit" class="btn btn-primary" value=" Sign up">
                  Already Having Account
                   <a href="<?php echo base_url()."home/login";?>" ><input name="" class="btn btn-primary" type="button" value="Login"></a>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                </div>
            </form>

          </div>
          <div class="clearfix"></div>
        </div>
        </article>
        <div id="countdown"></div>
      </section>
      
      <!-- Home --> 

      <!-- login --> 
      <section id="home" class="tab-pane fade in active">
        <article class="home-content">
          <header role="home-title">
            <h2>We are
              <div id="typed-strings"><span>Creative</span> <span>Dedicated</span> <span>Photographers</span> </div>
              <span id="typed" style="white-space:pre;"></span></h2>
          </header>
         <div class="contact-from row">
          <div class="col-md-7 col-lg-7">
            <div id="message"></div>
            <form method="post" action="<?php echo base_url()."home/login";?>">
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                  <input  name="email" id="email" type="text" placeholder="Enter Your Email...">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                  <input  name="password" id="email" type="password"  placeholder="Enter Your password...">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                <input name=""  class="btn btn-primary" type="submit" value="Login">
                <a href="<?php echo base_url()."home/register";?>" ><input name="" class="btn btn-primary" type="button" value="Register"></a>
                </div>
              <div id="simple-msg"> 
            </form>
          </div>
          <div class="clearfix"></div>
        </div>
        
        </article>
        <div id="countdown"></div>
      </section>

      <!-- Login --> 
      
      <!-- about -->


      
      <section id="menu1" class="tab-pane fade other-page about-pan">
        <header role="page-title">
          <h2>About us</h2>
        </header>
        <article>
          <p>Mauris rutrum risus ac luctus cursus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vel quam id mi finibus tempor. Sed bibendum, enim sit amet gravida bibendum, nisi sapien placerat risus, vitae lacinia velit felis ut erat. Phasellus eget purus rhoncus, scelerisque leo in, convallis massa.</p>
          <p>Mauris rutrum risus ac luctus cursus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vel quam id mi finibus tempor. Sed bibendum, enim sit amet gravida bibendum, nisi sapien placerat risus, vitae lacinia velit felis ut erat. Phasellus eget purus rhoncus, scelerisque leo in, convallis massa.</p>
        </article>
      </section>
      
      <!-- about --> 
      
      
      
      <!-- Contact -->
      
      <section id="menu3" class="tab-pane fade other-page">
        <header role="page-title">
          <h2>Contact us</h2>
        </header>
        <article>
          <p>Mauris rutrum risus ac luctus cursus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vel quam id mi finibus tempor. </p>
        </article>
        
        <!-- form -->
        
        <div class="contact-from row">
          <div class="col-md-7 col-lg-7">
            <div id="message"></div>
            <form method="post" action="php/contact.php" name="cform" id="cform">
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                  <input  name="name" id="name" type="text" placeholder="Enter Your Name...">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                  <input  name="email" id="email" type="email"  placeholder="Enter Your Email...">
                </div>
              </div>
              <div class="clearfix"></div>
              <textarea name="comments" id="comments" cols="" rows="" placeholder="Enter Your Description..."></textarea>
              <div class="clearfix"></div>
              <input name="" type="submit" value="Submit">
              <div id="simple-msg"></div>
            </form>
          </div>
          <div class="clearfix"></div>
        </div>
        
        <!-- form --> 
        
      </section>
      
      <!-- Contact --> 
      
    </div>
    
    <!-- tab-content --> 
    
  </div>
</main>

<!-- main --> 

<!-- footer -->

<footer role="footer">
  <div class="container">
    <p>&copy; All rights reserved. Floxi 2015</p>
    <p>Made with<i class="fa fa-heart" aria-hidden="true"></i>by <a href="http://www.designstub.com">Designstub</a></p>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script> 

<!-- custom --> 

<script src="<?php echo base_url(); ?>js/custom.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>js/nav-custom.js" type="text/javascript"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="<?php echo base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script> 

<!-- jquery.countdown --> 

<script src="<?php echo base_url(); ?>js/countdown-js.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.contact.js"></script> 
<script src="<?php echo base_url(); ?>js/html5shiv.js" type="text/javascript"></script> 

<!-- Typed jS --> 

<script src="<?php echo base_url(); ?>js/typed.js" type="text/javascript"></script> 
<script>
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 100,
            backDelay: 1000,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
</body>
</html>