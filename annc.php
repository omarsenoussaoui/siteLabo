
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
                        <li><button style="width: 50px; height: 50px;" type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fa fa-align-justify fa-2x"></i>
                                <span></span>
                            </button></li>
                         <li style="padding-left: 10px"><a style="font-size: 20px; "href="page-admin.php">Admin</a></li>
                        <li><a style="font-size: 20px;" class=""  href="tousrdv.php">Tous les RDV</a></li>
                        <li><a style="font-size: 20px;" data-scroll href="rdv-auj.php">RDV d'aujourd'hui</a>
                        <li><a style="font-size: 20px;"data-scroll href="services.php">Nos service</a></li> 
                        <li><a style="font-size: 20px;"data-scroll href="logout.php">Déconnexion</a></li>
                     </ul>
                    
                  </div>
               </nav>
               
            </div>
         </div>
      </header>

<style type="text/css">
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 80px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}
 </style>
<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                
                <ul class="list-unstyled components">
                    <li class="">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>
                            Membres
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="gestion-admin.php">Admins</a></li>
                            <li><a href="gestion-patient.php">Patients</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="messages.php">
                            <i class="fa fa-envelope-open"></i>
                            Messages
                        </a>
                      
                    </li>
                    <li>
                        <a class="active2" href="annc.php">
                            <i class="fa fa-bullhorn"></i>
                            Annonces
                        </a>
                    </li>
                    
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">


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
        <h4 class="modal-title w-100 font-weight-bold">Supprimer Annonce</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        	<h1>Voulez-vous la suppimer ?</h1>
        <button class="btn btn-success" id="btn_delete">supprimer</button>
        <button type="button" class="btn btn-danger" id="close3" data-dismiss="modal">annuler</button>
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
                <!--<div class="line"></div>-->
            </div>

 
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
            //echo $description;
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
<!--style of slidbar-->
<style type="text/css">
  /*
    DEMO STYLE
*/
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

i, span {
    display: inline-block;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    margin-top: -20px;
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}
#sidebar.active {
    min-width: 80px;
    max-width: 80px;
    text-align: center;
}

#sidebar.active .sidebar-header h3, #sidebar.active .CTAs {
    display: none;
}

#sidebar.active .sidebar-header strong {
    display: block;
}

#sidebar ul li a {
    text-align: left;
}

#sidebar.active ul li a {
    padding: 20px 10px;
    text-align: center;
    font-size: 10px;
}

#sidebar.active ul li a i {
    margin-right:  0;
    display: block;
    margin-bottom: 5px;
    font-size:35px;
}

#sidebar.active ul ul a {
    padding: 10px !important;
}

#sidebar.active a[aria-expanded="false"]::before, #sidebar.active a[aria-expanded="true"]::before {
    top: auto;
    bottom: 5px;
    right: 50%;
    -webkit-transform: translateX(50%);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}


#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 20px;
    display: block;
}
.active2{
      color: #7386D5;
    background: #fff;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}
#sidebar ul li a i {
    margin-right: 10px;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 15px;
    font-family: 'Glyphicons Halflings';
    font-size: 15px;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}



/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
    width: 100%;
}


/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
        margin-left: -80px !important ;
    }
    a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
        top: auto;
        bottom: 5px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }
    #sidebar.active {
        margin-left: 0 !important;
    }

    #sidebar .sidebar-header h3, #sidebar .CTAs {
        display: none;
    }

    #sidebar .sidebar-header strong {
        display: block;
    }

    #sidebar ul li a {
        padding: 20px 10px;
    }

    #sidebar ul li a span {
        font-size: 0.85em;
    }
    #sidebar ul li a i {
        margin-right:  0;
        display: block;
    }

    #sidebar ul ul a {
        padding: 10px !important;
    }

    #sidebar ul li a i {
        font-size: 1.3em;
    }
    #sidebar {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
  
</style>
<!-- script slidbar-->

          <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
