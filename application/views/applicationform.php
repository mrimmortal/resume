<!-- <head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head


<h1>hello <?php echo $this->session->userdata('abc');?>
</h1>
<div align="right">
<a href="<?php echo base_url()."home/logout"?>" class="btn btn-success">logout</a>
</div>
<div class="w3-card-4 w3-dark-grey">

<div class="w3-container w3-center">

<div class="w3-row">
<div class="w3-col s2">----

</div>
<div class="w3-col s8">
<h3>Friend request</h3>
<img src="<?php echo base_url()."assets/images/mk.jpg";?>"  alt="My Profile" style="width:20%; height:40%;">
<h5>John Doe</h5>

</div>
<div class="w3-col s2">
msag


<?php 
foreach ($info as $msg) {echo "<br><br>sender=".$msg->sender."<br>";
echo "msg=".$msg->text;

}


?>
</div>

</div>

<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Send msg</button>

</div>

</div>  

<div class="w3-container">

<a href="<?php echo base_url()."home/photo"?>" class="btn btn-success">photo</a>
</div>
-->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
          <li class="active" ><a class="btn-primary" href="<?php echo base_url()."home/login"?>">Home</a></li>
          <li><a href="#">About</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url()."home/logout"?>"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-2 ">
      </div>
      <div class="col-sm-8 text-left"> 
        <h1><?php echo $this->session->userdata('abc');?></h1>
        <p><h3>Please Submit Your Resume Details</h3></p>
        <br>
        <p class="text-left">
        </p>

        <form id="loginForm" method="post" class="form-horizontal" action="<?php echo base_url()."home/rdetails";?>">

          <div class="row col-md-12">
            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">Personal Details</div>
                <div class="panel-body">

                  <div class="form-group">
                    <!-- <label class="col-md-3 control-label">Full Name</label> -->
                    <div class="col-md-9">  
                      <input type="text" required class="form-control" name="name" placeholder="Enter Full Name" />
                    </div>
                  </div>
                  <div class="form-group">
                    <!-- <label class="col-md-3 control-label">Email</label> -->
                    <div class="col-md-9">
                      <input type="text" required class="form-control" name="mobile" placeholder="Enter Mobile Number"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <!-- <label class="col-md-3 control-label">Address</<label></label>bel> -->
                    <div class="col-md-9">
                      <textarea type="text" required class="form-control" name="address" placeholder="Current Address" /></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <!-- <label class="col-md-3 control-label">Email</label> -->
                    <div class="col-md-8">
                      <input type="Email" required class="form-control" name="email" placeholder="Working Email Id" />
                    </div>
                  </div>
                  <div class="form-group">

                    <div class="col-md-5">
                      Date of Birth<input type="date" required class="form-control" name="date" placeholder="Enter Email Id" />
                    </div>
                  </div>
                  <div required class="form-group">
                    <!--  <label class="col-md-3 control-label">Email</label> -->
                    <div required class="col-md-5">
                      <select name="mstatus">
                        <option value="Empty">Marital Status</option>
                        <option value="single">Single</option>  
                        <option value="Maride">Maride</option>
                      </select> 
                    </div>
                  </div>
                </div>
              </div>
            </div>




            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">Education Details</div>
                <div class="panel-body">

                  <div class="form-group">
                    <label class="col-md-3 control-label">University Name</label>
                    <div class="col-md-9">  
                      <!-- <label>Graduation</label> -->
                      <input type="text" required class="form-control" name="uniname" placeholder="Name of University" />
                    </div>  
                  </div>



                  <div class="form-group">
                    <label class="col-md-3 control-label">Degree</label>
                    <div class="col-md-9">
                    <select class="form-control" name="seldeg" id="seldeg">
                      <option value="Empty"> -- Select Education -- </option>
                      <option value="B.Tech"> B.Tech  </option>
                      <option value="MCA"> MCA  </option>
                      <option value="MCS"> MCS  </option>
                      <option value="BE Computer/IT">BE Computer/IT</option>
                      <option value="BE Electronics">BE Electronics</option>
                      <option value="BE Other">BE Other</option>
                      <option value="POLY Computer/IT">POLY Computer/IT</option>
                      <option value="POLY Electronics">POLY Electronics</option>
                      <option value="POLY Other">POLY Other</option>
                      <option value="BCA/BCS/BSC Computer">BCA/BCS/BSC Computer</option>
                    </select>
                  </div>
                </div>  


                  <div class="form-group">
                    <label required class="col-md-3 control-label">Agrigate Score</label>
                    <div class="col-md-9">  
                      <!-- <label>Graduation</label> -->
                      <input type="text" class="form-control" name="score" placeholder="Score" />
                    </div>  
                  </div>

                  Skill Set: <br>
                  <label for="chkandroid">
                    <input id="chkandroid" class="skillchk" name="android" value="1"  type="checkbox"> Android</label>,

                    <label for="chkjava">
                      <input id="chkjava" class="skillchk" name="java" value="1" type="checkbox"> Java</label>, 

                      <label for="chkadvjava">
                        <input id="chkadvjava" class="skillchk" name="advance_java" value="1" type="checkbox"> Advance Java</label>, 

                        <label for="chkcs">
                          <input id="chkcs" class="skillchk" name="csharp" value="1" type="checkbox"> C#.Net</label>, 

                          <label for="chkasp">
                            <input id="chkasp" class="skillchk" name="asp" value="1" type="checkbox"> ASP.Net</label>,

                            <label for="chkoracle">
                              <input id="chkoracle" class="skillchk" name="oracle" value="1" type="checkbox"> Oracle</label>, 

                              <label for="chkphp">
                                <input id="chkphp" class="skillchk" name="php" value="1" type="checkbox"> PHP</label>,

                                <label for="chkpython">
                                  <input id="chkpython" class="skillchk" name="python" value="1" type="checkbox"> Python</label>,

                                  <label for="chknetworking">
                                    <input id="chknetworking" class="skillchk" name="networking" value="1" type="checkbox"> Networking</label>

                                    <label for="chknetworking">
                                    <input id="chknetworking" class="skillchk" name="mvc" value="1" type="checkbox"> MVC</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-md-5 col-md-offset-3">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <!-- Apply here Section -->
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
                                  <label required class="col-xs-3 control-label">Last Name</label>
                                  <div class="col-xs-5">
                                    <input type="text" required class="form-control" name="lname" placeholder="Enter Your Last Name Here" />
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-xs-3 control-label">Email</label>
                                  <div class="col-xs-5">
                                    <input type="Email" required="" class="form-control" name="email" placeholder="Enter Your Email Id Here" />
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

                    </div>

                    <footer class="container-fluid text-center">
                      <p>Footer Text</p>
                    </footer>

                  </body>
                  </html>