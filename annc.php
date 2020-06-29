
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
      <th  class="text-center" scope="col">Image</th>
     <!-- <th  class="text-center" scope="col">afficher</th>-->
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
          <label data-error="wrong" data-success="right" for="orangeForm-email">Image De l'Annonce</label>
          <input type="file" name="file"  class="form-control validate">
          
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button name="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </div>
</div>
</form>
<!--------------------------------------ajouter annc---------------->
<br><br><br>
<?php 
          /*ajouter annonce*/
          
          if (isset($_POST['submit'])) 
          {
            $titre=$_POST['titre'];
            $files = $_FILES['file'];
            echo "</br>";
            $filetmp = $files['tmp_name'];/*chemin*/
            $filename= $files['name'];/*nom*/
            $fileext=explode('.',$filename);
            $filecheck = strtolower(end($fileext));
            $fileextstored = array('png','jpg');
            if (in_array($filecheck,$fileextstored)) {
              $distinationfile='images/'.$filename;
              move_uploaded_file($filetmp, $distinationfile);
              $q="INSERT INTO `banner`(`banner_id`, `banner_title`, `banner_image`) VALUES ('','$titre','$filename')";
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
          /*ajouter annonce*/
          
          if (isset($_POST['update'])) 
          {
            $titre=$_POST['titre_mod'];
            $id_mod= $_POST['id_mod'];
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
                  $q="UPDATE `banner` SET `banner_title`='$titre' , `banner_image`='$filename'  WHERE banner_id=$id_mod";
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
                  $id_mod= $_POST['id_mod'];
                  $q="UPDATE `banner` SET `banner_title`='$titre' , `banner_image`='$filename'  WHERE banner_id=$id_mod";
                  if (mysqli_query($conn,$q))
                  {
                    echo "<script> alert('La modification  est succées'); </script> ";
                  }
                  else 
                  {
                    echo "<script> alert('Erreur'); </script> ";
                  }

            }
            
            }
              ?> 
</html>
