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


  div.scroll {
   
    width: 800px;
    height: 340px;
    overflow: auto;
}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
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
        <li class="active"><a href="<?php echo base_url()."home/adminlogin"?>">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>
        
      <?php $array2= array(); ?>    
      <?php $array3= array(); ?>
      <?php $array4= array(); ?>
      <?php $array5= array(); ?>
      <?php $array6= array(); ?>
      <?php $array7= array(); ?>
      <?php $array8= array(); ?>




        <?php foreach($results as $res) 
        { ?>
               <?php array_push($array2, $res->answer); 
               array_push($array3, $res->qid); 
               array_push($array4, $res->question); 
               array_push($array5, $res->choice1); 
               array_push($array6, $res->choice2); 
               array_push($array7, $res->choice3); 
               array_push($array8, $res->answer); 
         } ?>
<div class="scroll">
  <div class="container">
      <?php echo $this->session->flashdata('updatesuccess'); ?>
   
        <?php 
           for ($x=0; $x <10; $x++) { ?>
               <form method="post" action="<?php echo base_url()."home/updatetestdata"?>">   
    
    <p><input type="text" style="width:2%; border: none; background: transparent;" readonly name="qid" value="<?=$array3[$x]?>">
    <input type="text" name="question" value="<?=$array4[$x]?>"></p>
    <input type="text" name="choice1" value="<?=$array5[$x]?>">
    <input type="text" name="choice2" value="<?=$array6[$x]?>">
    <input type="text" name="choice3" value="<?=$array7[$x]?>">
    <input type="text" name="answer" value="<?=$array8[$x]?>"> 

    <input type="submit" class="btn btn-success" value="Reflect Chainges">
    
    </form>
    <hr>
<?php } ?>
</div>
</div>


         <!--       
<div class="well">
  <form method="post" action="<?php echo base_url()."home/temp"?>">
<?php
 $temp= array();
foreach($results as $key)
{
    //$qid= $key->qid;
    //$question= $key->question;
    echo "$key->qid <input type='text' value='$key->question' />
    <input type='text' value='$key->choice1' /><input type='text' value='$key->choice2' /><input type='text' value='$key->choice3' /><input type='text' value='$key->answer'/><br>  ";
    //echo "";
}
?>
<input type="submit" name="submit">
</form>
</div>
 -->




       </p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>