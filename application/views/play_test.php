
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url()."home/profile"?>">Profile</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><li><a href="<?php echo base_url()."home/logout"?>"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-Right">  
    <p><h1>Test</h1>
    
    <form method="post" action="<?php echo base_url()."home/resultdisplay";?>">
       
    
    <?php foreach($questions as $row) { ?>
    
    <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
    shuffle($ans_array); ?>
    
    <p><?=$row->qid?>.<?=$row->question?></p>
    
    <input type="radio" name="qid<?=$row->qid?>" value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?><br>
    <input type="radio" name="qid<?=$row->qid?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
    <input type="radio" name="qid<?=$row->qid?>" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
    <input type="radio" name="qid<?=$row->qid?>" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>
    
    <?php } ?>
    
    <br><br>
    <input type="submit" value="Submit!">
    
    </form>
</p>
  </div>
</div>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

