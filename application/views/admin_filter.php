<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>

    <script>
        $(document).ready(function() {
// $('#loginForm').formValidation({
//     framework: 'bootstrap',
//     excluded: ':enable',
//     icon: {
//         valid: 'glyphicon glyphicon-ok',
//         invalid: 'glyphicon glyphicon-remove',
//         validating: 'glyphicon glyphicon-refresh'
//     },
//     fields: {
//         username: {
//             validators: {
//                 notEmpty: {
//                     message: 'The username is required'
//                 }
//             }
//         },
//         password: {
//             validators: {
//                 notEmpty: {
//                     message: 'The password is required'
//                 }
//             }
//         }
//     }
// });


// $('#example').DataTable();

//   $('#example_filter').hide(); // Hide default search datatables where example is the ID of table

//   $('#txtSearch').on('keyup', function() {
//       $('#example')
//           .DataTable()
//           .search($('#txtSearch').val(), false, true)
//           .draw();
//   });

//    $('#txtSearch2').on('keyup', function() {
//       $('#example')
//           .DataTable()
//           .search($('#txtSearch2').val(), false, true)
//           .draw();
//   });

$('#example tfoot th').each( function () {
    var title = $(this).text();
    $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
} );

// DataTable
var table = $('#example').DataTable();
//$('#example_filter').hide();

// Apply the search
table.columns().every( function () {
    var that = this;

    $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
            that
            .search( this.value )
            .draw();
        }
    } );
} );


$('#example1 tfoot th').each( function () {
    var title = $(this).text();
    $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
} );

// DataTable
var table = $('#example1').DataTable();
//$('#example_filter').hide();

// Apply the search
table.columns().every( function () {
    var that = this;

    $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
            that
            .search( this.value )
            .draw();
        }
    } );
} );



//  $('#example').DataTable();

} );



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

tfoot input {
    width: 100%;
    padding: 3px;
    box-sizing: border-box;
}
tfoot {
    display: table-header-group;
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
                    <li class="active"><a href="<?php echo base_url()."home/adminlogin"?>">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url()."home/adminlogout"?>"><span class="glyphicon glyphicon-log-out"></span>Admin Log Out</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">    
        <div class="row text-left">
            <div class="col-sm-2 sidenav">
                <div class="well-lg">
                    <div class="btn-group">
                        <ul class="list-group">
                            <table class="table">
    <h3><span class="label label-info text-left">Selected Drive Details</span></h3>
    <thead>
    
    </thead>
    <tbody>
      <tr>
        
       
      </tr>
      
    </tbody>
  </table>

                            



</div>
</div>
</div>
<div class="col-sm-8 text-left"> 
    <p><?php echo $this->session->flashdata('register'); ?></p>
    <p><?php echo $this->session->flashdata('selectSucess'); ?></p> 
    <p><?php echo $this->session->flashdata('selectfaild'); ?></p> 


    <p class="text-left">

        <!-- <a class="btn btn-info" href="<?php echo base_url()."home/readdrivedetails"?>">Details</a> -->
    </p>

    <h2 class="text-right"><span class="label label-danger">Candidate List</span></h2>



<table id="example" class="table table-responsive table-hover">
    <thead>
        <tr>
            <th></th>
            <th>Candidate id</th>
            <th>Full Name</th>
            <th>Degree</th>
            <th>Academic Score</th>
            <th>Test Score</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th></th>
            <th>Candidate id</th>
            <th>Full Name</th>
            <th>Degree</th>
            <th>Academic Score</th>
            <th>Test Score</th>
        </tr>
    </tfoot>
    <tbody>
        <?php 
        foreach ($info as $can_list)
            if($can_list->selected==0) 
            {
                {?>

                    <tr>
                        <td><?php echo '<a class="btn btn-primary" href="'.base_url().'home/selected_list/'.$can_list->did.'/'.$can_list->cr_id.'">Select</a>'; ?></td>
                        <td><?php echo $can_list->cr_id; ?></td>
                        <td><?php echo $can_list->fname; echo " "; echo $can_list->lname; ?></td>
                        <td><?php echo $can_list->seldeg; ?></td>
                        <td><?php echo $can_list->ascore; ?></td>
                        <td><?php echo $can_list->score; ?></td>
                    </tr>
                    <?php
                }
            }   
            ?>
        </tbody>
    </table>




    <h2 class="text-right"><span class="label label-success">Selected Candidate List</span></h2>
<!-- <?php
//print_r($info);
//exit();
?> -->


<table id="example1" class="table table-responsive table-hover">
    <thead>
        <tr>
            <th></th>
            <th>Candidate id</th>
            <th>Full Name</th>
            <th>Degree</th>
            <th>Academic Score</th>
            <th>Test Score</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th></th>
            <th>Candidate id</th>
            <th>Full Name</th>
            <th>Degree</th>
            <th>Academic Score</th>
            <th>Test Score</th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
        <?php 
        foreach ($info as $can_list)
            if($can_list->selected==1) 
            {
                {?>

                    <tr>
                        <td><?php echo '<a class="btn btn-primary" href="'.base_url().'home/deselect/'.$can_list->did.'/'.$can_list->cr_id.'">Deselect</a>'; ?></td>
                        <td><?php echo $can_list->cr_id; ?></td>
                        <td><?php echo $can_list->fname; echo " "; echo $can_list->lname; ?></td>
                        <td><?php echo $can_list->seldeg; ?></td>
                        <td><?php echo $can_list->ascore; ?></td>
                        <td><?php echo $can_list->score; ?></td>
                        <td><?php echo '<a class="btn btn-danger" href="'.base_url().'home/deselect/'.$can_list->did.'/'.$can_list->cr_id.'">Email</a>'; ?></td>
                    </tr>
                    <?php
                }
            }   
            ?>
        </tbody>
    </table>
</div>






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
                            <input type="text" class="form-control" name="fname" placeholder="Enter Your First Name Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Last Name</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="lname" placeholder="Enter Your Last Name Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="Email" class="form-control" name="email" placeholder="Enter Your Email Id Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password Here" />
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

<!-- add new admin -->
<div class="modal fade" id="addnewadmin" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 align="center" class="modal-title"><b>Add New Admin</b></h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="addnewadmin" method="post" class="form-horizontal" action="<?php echo base_url()."home/addadmin";?>">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Full Name</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="Fullname" placeholder="Enter Your First Name Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Mobile Number</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile Number Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="Email" class="form-control" name="email" placeholder="Enter Your Email Id Here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password Here" />
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

<!-- end add new admin -->

<!-- Scheduling new Drive -->
<div class="modal fade" id="drive" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 align="center" class="modal-title"><b>Driver Details</b></h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="drivedetails" method="post" class="form-horizontal" action="<?php echo base_url()."home/drivedetails";?>">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Drive Name</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="dname" placeholder="Enter Name For Driver" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Date</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="ddate" placeholder="Choose Date For Drive" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Venu</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="venu" placeholder="Enter Address For Drive" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Post</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="post" placeholder="Enter Post Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Vacancy</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="vacancy" placeholder="Enter Number Of Vacancy" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Percentage Criteria</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="criteriya" placeholder="Enter Percentage Criteria" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Skills Required</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="skill" placeholder="Enter Extra Skills Requirement" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Salary CTC</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="ctc" placeholder="Enter CTC" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End of Scheduling Drive -->
<hr>
</div>
<!--  <div class="col-sm-2 sidenav">
<div class="well">
<p>EMPTY</p>
</div>
<div class="well">
<p>EMPTY</p>
</div>
</div> -->
</div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>



















