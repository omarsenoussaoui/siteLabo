
<?php
session_start();
if (isset($_SESSION['admin'])) {


$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "labo");
 /*
function make_query($connect)
{
 $query = "SELECT * FROM banner ORDER BY banner_id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div  class="item active">';
  }
  else
  {
   $output .= '<div  class="item">';
  }
  $output .= '
   <img  style="width:100%;" src="images/'.$row["banner_image"].'" alt="'.$row["banner_title"].'" />
   <div class="carousel-caption">
    <h3 style="color:red;">'.$row["banner_title"].'</h3>
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}*/
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
   <title>Les Annonces</title>
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
 <body>
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
 <br>
<div class="text-center">
  <?php  if (isset($errreur)) {
    echo $errreur;
  } ?>
  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalRegisterForm">Ajouter Une Annonce</a>

<?php 
 ?>

<br>
<h1 class="text-danger text-center">La Liste des Annonces</h1>
    <table id="table" class="table table-bordered  text-center">
  <thead>
    <tr >
      <th  class="text-center" scope="col">Num</th>
      <th  class="text-center" scope="col">ID</th>
      <th  class="text-center" scope="col">Titre</th>
      <th  class="text-center" scope="col">Description</th>
      <th  class="text-center" scope="col">Image</th>
      <th  class="text-center" scope="col">Options</th>
      
    </tr>
  </thead>
  <tbody>
    <div >
<?php 
$sql = "SELECT * FROM `banner` where val =0" ;
$resul = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$i = 0;

while( $rows = mysqli_fetch_assoc($resul) ) {
  ?>
          <tr id="<?php echo $rows["banner_id"]; ?>">
          <td><?php echo $i=$i+1; ?></td>
          <td><?php echo $rows["banner_id"]; ?></td>
          <td><?php echo $rows["banner_title"]; ?></td>
          <td><?php echo $rows["detail"]; ?></td>
          <td><a href="" data-toggle="modal" data-target="#myModal<?php echo $rows['banner_id']; ?>" ><?php echo $rows["banner_image"]?></a></td>
          <!---<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows['banner_id']; ?>">Afficher</button></td>-->
          <td>
             <button type="button" class="btn btn-success "id="btn_edit" 
             data-id="<?php echo $rows["banner_id"]; ?>"><i class="fa fa-edit"></i>
             </button>
            <button type="button" class="btn btn-danger " id="delete" data-id1="<?php echo $rows['banner_id']; ?> " ><i class="fa fa-trash"></i></button>
            </a>
          </td>
          </tr>


  <!-------------------------------------------modal image--------------->
  <div id="myModal<?php echo $rows['banner_id'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Details</h4>
              </div>
              <div class="modal-body">
               <h3> <img style="width: 100%;height: 100%;" src="images/<?php echo $rows['banner_image']; ?>" ></h3>
              </div>
          </div>
        </div>
      </div>
  <!-------------------------------------------modal image--------------->





  <!-----------------------------------modal update--------------->
<div class="modal fade" id="Update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Modifier L'Annonce</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <p id="up_message" style="color: red;"></p>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form id="formU" method="POST" enctype="multipart/form-data" >
         <label  class="label" >le titre de l'annonce</label>
          <input type="text" id="UP_Title" name="titre_mod" class="form-control validate">
        </div>
        <div class="md-form mb-5">
          <form id="formU" method="POST" enctype="multipart/form-data" >
         <label  class="label" >Description de l'annonce</label>
          <textarea type="text" id="UP_desc" name="desc_mod" class="form-control validate"></textarea>
        </div>
        <div class="md-form mb-5">
        <label   class="label"  >Image</label>
        <input type="text" id="UP_Image" name="file_mod" class="form-control validate">
        <input type="hidden" id="UP_Id" name="id_mod" class="form-control validate">
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success" name="update" type="submit" id="btn_update">modifier</button>
        </form>
        <button type="button" class="btn btn-danger" id="close2" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!---------------------------update modal-------------------------------->



<!---------------------------delete modal-------------------------------->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Delete Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        	<h1>Do you want to delete ?</h1>
        <button class="btn btn-success" id="btn_delete">Delete</button>
        <button type="button" class="btn btn-danger" id="close3" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!---------------------------delete modal-------------------------------->





<?php
}

?>
</div>
</tbody>
</table>
 
</div>
  <br />

  <!--<div class="container">
   <br />
   <div  id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol  class="carousel-indicators">
    <?php/* echo make_slide_indicators($conn); */?>
    </ol>

    <div  class="carousel-inner">
     <?php/* echo make_slides($conn);*/ ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>
-->
<!--------------------------------------ajouter annc---------------->
<form method="POST" action="" enctype="multipart/form-data" >
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Ajouter une annonce</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Titre de l'Annonce</label>
          <input type="text" name="titre" class="form-control validate">
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Description De l'Annonce</label>
          <textarea  name="description"  class="form-control validate"></textarea>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Image De l'Annonce</label>
          <input type="file" name="file"  class="form-control validate">
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button name="submit-ajouter" class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </div>
</div>
</form>
<!--------------------------------------ajouter annc---------------->
<br><br><br>
<?php 
          /*ajouter annonce*/
          
          if (isset($_POST['submit-ajouter'])) 
          {
            $titre=$_POST['titre'];
            $description=$_POST['description'];
            $files = $_FILES['file'];
            echo $description;
            $filetmp = $files['tmp_name'];/*chemin*/
            $filename= $files['name'];/*nom*/
            $fileext=explode('.',$filename);
            $filecheck = strtolower(end($fileext));
            $fileextstored = array('png','jpg');
            if (in_array($filecheck,$fileextstored)) {
              $distinationfile='images/'.$filename;
              move_uploaded_file($filetmp, $distinationfile);

/*$q="INSERT INTO `banner`(`banner_id`, `banner_title`, `detail`, `banner_image`, `val`) VALUES ('','$titre','$_POST["description"]','$filename','')";*/
$q="INSERT INTO `banner`(`banner_id`, `banner_title`, `detail`, `banner_image`, `val`) VALUES ('','$titre','$description','$filename','0')";
              if (mysqli_query($conn,$q)){
                echo "<script> alert('La saisie est succée'); </script> ";
              }
              }else{
                $errreur="ce fichier n'est pas une image";
              }
            }
              ?>
 </body>
 <script type="text/javascript">
  $(document).ready(function () {

    get_rec();
    update_record();
    delete_rec();

    });
function get_rec() 
{
  $(document).on('click','#btn_edit',function () 
  { 
    var ID =$(this).attr('data-id');
    $.ajax({
      url : 'view-annc.php',
      method:'POST',
      dataType:'JSON',
      data:{ID:ID},
      success:function (data) 
      {
        $('#UP_Title').val(data[1]);
        $('#UP_Image').val( data[2]);
        $('#UP_Id').val(data[0]);
        $('#UP_desc').val(data[3]);
        $('#Update').modal('show');
      }
    })
  })
   $("#UP_Image").click(function () {
        $(this).attr('type', 'file');

    });
}


function update_record() {
  $(document).on('click','#btn_update',function() 
  {
    var ID = $('#UP_Id').val();
    var Titre = $('#UP_Title').val();
    var Image = $('#UP_Image').val();
    var description =$('#UP_desc').val();
    if (Titre=='' ||  Image =='') 
    {
      $('#up_message').html('Remplissez les champs svp');
      $('#update').modal('show');
      $("#formU").submit(function(e){
        alert('Remplissez les champs svp ');
        return  false;
    })

    }
    else 
    {
      $.ajax({
          method:'POST',
          data:{ ID:ID,Titre :Titre,Image:Image},
          success:function(data)
          {
            //$('#up_message').html(data);
            $("#Update").modal('show');
            //window.location.reload();

          }
        });
    }

        

  })
}

function delete_rec() 
	{
		$(document).on('click','#delete',function () 
		{
			var deletID =$(this).attr('data-id1');
			$('#deleteModal').modal('show');
			$(document).on('click','#btn_delete',function () {
				$.ajax({
						url:"delete-annc.php",
						method:"POST",
						data:{ID:deletID},
						success:function (data) 
						{	
							$('#deleteModal').modal('hide');
							$('#delete_message').html(data);
							window.location.reload();
						}
			})
			})
			
		})
		$(document).on('click','#close3',function(){
	 		$('#form').trigger('reset');
	 		$('#up_message').html('');
	 		 
	 	})
	}


</script>
<?php 
          /*mod annonce*/
          
          if (isset($_POST['update'])) 
          {
            $titre=$_POST['titre_mod'];
            $id_mod= $_POST['id_mod'];
            $description = $_POST['desc_mod'];
            if (isset($_FILES['file_mod']))
            {
              $files = $_FILES['file_mod'];
              $filetmp = $files['tmp_name'];/*chemin*/
              $filename= $files['name'];/*nom*/
              $fileext=explode('.',$filename);
              $filecheck = strtolower(end($fileext));
              $fileextstored = array('png','jpg');
                if (in_array($filecheck,$fileextstored)) 
                {
                  $distinationfile='images/'.$filename;
                  move_uploaded_file($filetmp, $distinationfile);                 
                  $q="UPDATE `banner` SET `banner_title`='$titre',`detail`='$description' , `banner_image`='$filename'  WHERE banner_id=$id_mod";
                  if (mysqli_query($conn,$q))
                  {
                    echo "<script> alert('La modification  est succées'); </script> ";
                  }
                  else 
                  {
                    echo "<script> alert('Erreur'); </script> ";
                  }
                }
                else
                {
                    echo "<script> alert('ce fichier n'est pas une image'); </script>";
                }
            }
            else{
                  $filename= $_POST['file_mod'];
                  $titre=$_POST['titre_mod'];
                  $description = $_POST['desc_mod'];
                  $id_mod= $_POST['id_mod'];
                  $q="UPDATE `banner` SET `banner_title`='$titre',`detail`='$description' , `banner_image`='$filename'  WHERE banner_id=$id_mod";
                  if (mysqli_query($conn,$q))
                  {
                    echo "<script>
                     alert('La modification  est succées');
                     </script> ";



                  }
                  else 
                  {
                    echo "<script> alert('Erreur'); </script> ";
                  }

            }
            
            }
              ?> 
</html>
