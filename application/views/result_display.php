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
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
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
      <a class="navbar-brand" href="#">logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><li class="btn-primary"><a href="<?php echo base_url()."home/login"?>">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url()."home/logout"?>"><span class="glyphicon glyphicon-log-out"></span>Login Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-left">     
    <p>
      <div id="container">
  <h2>Test Result</h2>
    
    <?php $score =0; ?>
    
      <?php $array1= array(); ?>
      <?php $array2= array(); ?>    
      <?php $array3= array(); ?>
      <?php $array4= array(); ?>
      <?php $array5= array(); ?>
      <?php $array6= array(); ?>
      <?php $array7= array(); ?>
      <?php $array8= array(); ?>
      
         <?php foreach($checks as $checkans) { ?>
               <?php array_push($array1, $checkans); } ?>
               
               
        <?php foreach($results as $res) { ?>
               <?php array_push($array2, $res->answer); 
               array_push($array3, $res->qid); 
               array_push($array4, $res->question); 
               array_push($array5, $res->choice1); 
               array_push($array6, $res->choice2); 
               array_push($array7, $res->choice3); 
               array_push($array8, $res->answer); 
         } ?>
               
               
           <?php 
           for ($x=0; $x <10; $x++) { ?>
 
    <form method="post" action="<?php echo base_url()."home/updatescore"?>">  
  
    <hr>
    <p><?=$array3[$x]?>.<?=$array4[$x]?></p>
    

      <?php if ($array2[$x]!=$array1[$x]) { ?>
           <span class="badge" style="background-color: #ff0000 ">Wrong Answer</span>
           <p>Your Answer=<span class="badge" style="background-color: #ff0000 "><?=$array1[$x]?></span></p>
           <p>Correct Answer=<span class="badge" style="background-color:#008000"><?=$array2[$x]?></span></p>
           
      <?php } else { ?>
           <span class="badge" style="background-color: #008000 ">Correct Answer</span>
           <p>Correct Answer=<span class="badge" style="background-color: #008000"><?=$array1[$x]?></span></p>
           
           <?php $score = $score + 1; ?>
      
    <?php } ?><hr><?php } ?>
    <h2>Your Score: </h2>
      <input type="text" name="score" value="<?=$score?>">
    
    <input type="submit" class="btn btn-success" value="Submit Your Score">
    
    </form>
    
</div>
    </p>
  </div>
</div>
 
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>