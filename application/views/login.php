<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $('#loginForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });
});
</script>


  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .prettyline {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}


    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
         <li><a data-toggle="modal" data-target="#adminloginModal"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" data-target="#registrationmodal"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
        <!-- <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-left">    
  <div class="row text-left">
    <div class="col-sm-4 sidenav">
      <form id="loginForm" method="post" class="form-horizontal" action="<?php echo base_url()."home/login";?>">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="email" required placeholder="Enter Email Id" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input required type="password" class="form-control" name="password" placeholder="Enter Your Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                           <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                        </div>
                    </div>
                </form>
    </div>
    <div class="col-sm-6 text-left"> 
      <p><?php echo $this->session->flashdata('register'); ?></p>
      <p><?php echo $this->session->flashdata('alreadyexist'); ?></p>
      <h1>Candidate Selection System</h1>
      <p>System Introduction<br>
      The benefit of using an application form from the organisation's perspective is that it ensures that the same information is gained from all candidates, which helps to achieve a level of consistency in the short-listing process. Candidate selection system is a tool that analysis the correct person for the correct position. Resume is a version control system that is widely used in the open source community and we take the small test of candidate and analysis the score of candidate as per the score requirement of human resource department. System will rank the experience and key skills required for particular job position. Than system will rank the resume based on the experience and other key skills which are required for particular job profile. And we select the particular candidate on the basis of score given by the admin. And then system will shortlist the candidate on the basis on score written in the score module by the admin. From this admin can analysis the candidate. In this system admin can add new admin or another admin, he can modify or update all the questions and set the information of new updates or tests.
      </p>
      


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Login</h5>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" method="post" class="form-horizontal" action="<?php echo base_url()."home/login";?>">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="email" required placeholder="Enter Email Id" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input required type="password" class="form-control" name="password" placeholder="Enter Your Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Apply here Section -->


<!-- admin login -->

<div class="modal fade" id="adminloginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Admim login</h5>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" method="post" class="form-horizontal" action="<?php echo base_url()."home/adminlogin";?>">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="email" required class="form-control" name="email" placeholder="Enter Email Id" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Mobile No.</label>
                        <div class="col-xs-5">
                            <input type="text" required class="form-control" name="mobile" placeholder="Enter Mobile Number" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" required class="form-control" name="password" placeholder="Enter Your Password"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <div><?php echo $this->session->flashdata('testerror'); ?></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<!-- Apply for adminlogin -->


<!-- Apply for registration -->
      



<div class="modal fade" id="registrationmodal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Registration</h5>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="registrationForm" method="post" class="form-horizontal" action="<?php echo base_url()."home/insert";?>">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">First Name</label>
                        <div class="col-xs-5">
                            <input type="text" required class="form-control" name="fname" placeholder="Enter Your First Name Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Last Name</label>
                        <div class="col-xs-5">
                            <input type="text" required class="form-control" name="lname" placeholder="Enter Your Last Name Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="Email" required class="form-control" name="email" placeholder="Enter Your Email Id Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" required class="form-control" name="password" placeholder="Enter Your Password Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      <hr>
      <h3></h3>
      <p></p>
    </div>
   
    <div class="col-sm-2 sidenav text-center">
		<p>Letest News</p>
      <div class="scroll">
        <?php 
        foreach ($info as $drive_data) 
         {?>
            <div class="well">
              <p><h
      <?php
      echo "<br><h4>Drive Name</h4>:".$drive_data->dname.
            "<br>Date=".$drive_data->ddate.
            "<br>Venu=".$drive_data->Venue.
            "<br>Post=".$drive_data->post.
            "<br>Vacancy".$drive_data->vacancy.
            "<br>Criteriya=".$drive_data->criteria."<br>";
              ?>
                
              </p>
            </div>
            <?php
              }   
            ?>
          </div>
    </div>
  </div>
</div>
</div>

<footer class="container-fluid text-center">
  <p><b> Candidate Selection System for Organization</p>
</footer>
</body>
</html>



















