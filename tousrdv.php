<?php 
   include('cnx.php');
session_start();
if (isset($_SESSION['admin'])) {
  
}else{
  header("location:login-admin.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Site Metas -->
   <title>Tous Les Rdv</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/style-principal.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <!-- [if lt IE 9] -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>

   </head>
   <body style="font-size: 20px;font-family: Arial"  class="clinic_version">
      <!-- LOADER -->
 <!-----------------------------------modal update--------------->
<div class="modal fade" id="Update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Pourquoi le rendez-vous réfusé</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="form34">Numéro de téléphone   </label>
          <input type="text" id="form34" class="form-control validate">
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="form32">Sujet</label>
          <input type="text" id="form32" class="form-control validate">
        </div>

        <div class="md-form">
          <label data-error="wrong" data-success="right" for="form8">Message</label>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <center><button class="btn btn-success">Envoyer</button></center>
      </div>
    </div>
  </div>
</div>


<!--script get rec-->
 <script type="text/javascript">
      $(document).ready(function () 
      {
          get_rec();
          $('.td').on('click', function() {
    var $this = $(this);
    var $input = $('<input>', {
        value: $this.text(),
        type: 'text',
        blur: function() {
           $this.text(this.value);
        },
        keyup: function(e) {
           if (e.which === 13) $input.blur();
        }
    }).appendTo( $this.empty() ).focus();
});
      });
function get_rec() 
{
  $(document).on('click','#btn_show',function() 
  { 
   var ID =$(this).attr('data-id');
   $.ajax({
      url : 'crud_rdv/view-rdv.php',
      method:'POST',
      dataType:'JSON',
      data:{ID:ID},
      success:function (data) 
      {
        $('#form34').val(data[5]);
        $('#Update').modal('show');
      }
    })
  });

}

</script>
<!---------------------------update modal-------------------------------->

    
      <header>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
                 
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a style="font-size: 20px;font-family: Arial"  href="tousrdv.php">Tous les RDV</a></li>
                        <li><a style="font-size: 20px;font-family: Arial" data-scroll href="rdv-auj.php">RDV d'aujourd'hui</a></li>
                        <li> <a onclick="myFunction()" onmouseover="myFunction()" class="dropbtn" style="font-size: 20px;font-family: Arial"  data-scroll >Gestion des membre </a>
                                       <div class="dropdown">
                                         
                                         <div  id="myDropdown" class="dropdown-content">
                                           <a  style="font-size: 20px;font-family: Arial" data-scroll href="gestion-patient.php">Gestion des patient</a>
                                           <a data-scroll href="gestion-admin.php" style="font-size: 20px;font-family: Arial">Gestion des ADMINS</a>
                                         </div>
                                       </div>
                                    </li> 
                        <li><a style="font-size: 20px;font-family: Arial"  dstyle="font-size: 20px;font-family: Arial"ata-scroll href="messages.php" >les messages</a></li>
                        <li><a style="font-size: 20px;font-family: Arial"data-scroll href="">Nos service</a></li> 
                        <li><a style="font-size: 20px;font-family: Arial"data-scroll href="logout.php">Log Out</a></li>
                     </ul>
                    
                  </div>
               </nav>
               
            </div>
         </div>
      </header>
      <br>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="  " role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
    
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
           
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="annc.php" style="color:#fff;" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> Les annonces</a>
                    <script type="text/javascript">
                      function xx(this) {
                        document.getElementById("x").classList.toggle("show");
                                              }
                    </script>
                    
                </li>
                <li>
                    <a href="#"  style="color:#fff;" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  MENU 2 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    
                </li>
                
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

<div id="page-wrapper">
<div class="container-fluid">
<!-- Page Heading -->
<div class="row" id="main" >
<div class="col-sm-12 col-md-12 " id="content">
  <table class="table table-bordered text-center">
    <thead>
    <tr >
      <th  class="text-center" scope="col">Num</th>
      <th  class="text-center" scope="col">ID Rdv</th>
      <th  class="text-center" scope="col">date</th>
      <th  class="text-center" scope="col">Type</th>
      <th  class="text-center" scope="col">ord</th>
      <th  class="text-center" scope="col">ID patient</th>
      <th  class="text-center" scope="col">Nom patient</th>
      <th  class="text-center" scope="col">Prenom patient</th>
      <th  class="text-center" scope="col">Email patient</th>
      <th  class="text-center" scope="col">Options</th>

      
    </tr>
  </thead>
  <tbody>
    <div >
 
 <?php 
/*$sql = "SELECT * FROM rdv patient WHERE  'rdv.id_patient'='patient.id_patient'";*/
$sql = "SELECT * FROM rdv JOIN patient ON rdv.id_patient=patient.id_patient";
$resul = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$i = 0;
while( $rows = mysqli_fetch_assoc($resul) ) {
?>
<tr>
<td><?php echo $i=$i+1; ?></td>
<td><?php echo $rows["id_rdv"]; ?></td>
<td><?php echo $rows["date"]; ?></td>
<td class="td" ><?php echo $rows["type_analyse"]?></td>
<td><?php echo $rows["ord"]?></td>
<td><?php echo $rows["id_patient"]?></td>
<td><?php echo $rows["nom_patient"]?></td>
<td><?php echo $rows["prenom_patient"]?></td>
<td><?php echo $rows["email"]?></td>
<td><button  id="btn_show" data-id="<?php echo $rows["id_patient"]?>" data-toggle="modal" data-target="#Update"class="btn btn-danger">réfuser</button></td>
<!-- Button trigger modal -->
<!-- Modal -->
</tr>
<?php

}

?>

</div>
</tbody>
</table>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
      <br><br>
       </body>
   <style type="text/css">
                      
              .dropdown-content {
                background-color: #1a75ff;
                display: none;
                position: absolute;
                min-width: 160px;
                overflow: auto;
                z-index: 1;

              }

              .dropdown-content a {
                  
                  text-decoration: none;
                  display: block;
                  text-align: left;
              }
              .show {display: block;}






              @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 50px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}

#wrapper {
    padding-left: 0;    
}

#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
}



.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

/* Side Navigation */

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 60px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #222;
        /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #39b49a !important;
    }
}

.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;    
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}

.navbar-brand {
    padding: 5px 15px;
}



                     </style>
<script type="text/javascript">
         /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    

      </script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</html>