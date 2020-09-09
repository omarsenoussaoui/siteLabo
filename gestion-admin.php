<?php 
include('cnx.php');
$conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "labo");



session_start();
if (isset($_SESSION['admin'])) {
  
}else{
  header("location:login-admin.php");
}
echo "<br><br>";
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
   <title>Gestion Des Admins</title>
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
    
      <header>
         
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
          
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a style="font-size: 20px;font-family: Arial;;" href="">Gestion des Admins</a></li>
                        
                     </ul>
                    
                  </div>
               </nav>
               
            </div>
         </div>
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



         </style>
      </header>
      <div>

<h1 id="delete_message"></h1>
     
<div class="text-center" style="padding-top: 50px;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
Ajouter admin 
</button>
</div>
<!-- AJOUTER ADMIN -->

<?php  


if (isset($_SESSION['admin'])) {
  
}else{
  header("location:login-admin.php");
}
if (isset($_POST['envoyer'])) 
{
    $email=$_POST['email'];
      $mot_passe=$_POST['mot_passe'];
     $req = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
     $rows = mysqli_num_rows($req);
     if ($rows>0) 
  {
    echo '<script> alert("Ce compte déja existe")</script>';
  }else
    
  {

     $query =  "INSERT into admin (id_admin,email,mot_passe,val) VALUES('','$email','$mot_passe','0')" ;

      if (mysqli_query($conn,$query))
    {
          echo '<script> alert("Insecription Succé")</script>';
      
    } else{
      echo '<script> alert("Insecription Echoué")</script>';
    }
  }




}

?>



<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

    <form action="" method="post" onsubmit="return verifForm(this)">
  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="Email" onblur="verifMail(this)">
   
  </div>
  <div class="form-group">
    <label >Mot de passe </label>
    <input type="password" class="form-control" name="mot_passe" placeholder="Mot de passe" onblur="verifPass(this)">
  </div>
 <div class="text-center">
  <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
  </div>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>




 <!-----------------------------------modal update--------------->
<div class="modal fade" id="Update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Modifier Admin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <p id="up_message" style="color: red;"></p>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form id="formU" method="post">
          <input type="hidden" id="UP_id" name="id_mod" class="form-control validate">
          <input type="text" id="UP_email" name="email-mod" class="form-control validate">
        </div>
        <div class="md-form mb-5">
        <input type="password" class="aa" name="password" id="password"/><br/><br/>
        <button  type="button" id="show_hide" name="show_hide"><i id="ii" class="fa fa-eye-slash"></i></button>
        </div>
      </div>
      
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success" type="submit" name="modifier"  id="btn_update">modifier</button>
        </form>
        <button type="button" class="btn btn-danger" id="close2" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!---------------------------update modal-------------------------------->


<!-----------------------------modal delete--------------------->
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
<!------------------------------------modal delete--------------------->









<?php 
 ?>

<br>
<h1 class="text-danger text-center">La Liste des Administrateurs</h1>
    <table class="table table-bordered table-dark text-center">
  <thead>
    <tr >
      <th  class="text-center" scope="col">Num</th>
      <th  class="text-center" scope="col">ID</th>
      <th  class="text-center" scope="col">E-mail</th>
      <th  class="text-center" scope="col">Mot de Passe</th>
      <th  class="text-center" scope="col">Option</th>

      
    </tr>
  </thead>
  <tbody>
    <div >
<?php 
$sql = "SELECT `id_admin`, `email`, `mot_passe` FROM `admin` WHERE val=0 "  ;
$resul = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$i = 0;

while( $rows = mysqli_fetch_assoc($resul) ) {
?>
<tr>
<td><?php echo $i=$i+1; ?></td>
<td><?php echo $rows["id_admin"]; ?></td>
<td><?php echo $rows["email"]; ?></td>
<td><?php echo $rows["mot_passe"]?></td>
<td>
<button type="button" class="btn btn-success "id="btn_edit" data-id="<?php echo $rows["id_admin"]; ?>"><i class="fa fa-edit"></i>
</button>
<button type="button" id="btn_delete" data-id1="<?php echo $rows["id_admin"]; ?>"  class="btn btn-danger"><i class="fa fa-trash"></i></button>
           
</td>
</tr>
<?php

}

?>
</div>
</tbody>
</table>
 
 

   </body>

    <script type="text/javascript">
        
    function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifPass(champ)
{
   
  if (champ.value.length==0) {
    surligne(champ, true);
      return false;
  }else{
    return true;
  }
  
}


function verifForm(f)
{
   var mailOk = verifMail(f.email);
   var passOK = verifPass(f.mot_passe);
  
   
   if(mailOk && passOK){
      return true;
   }
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}

    </script>
    <script type="text/javascript">
      $(document).ready(function () {

    get_rec();
    update_record();
    delete_rec() ;

    });

function get_rec() 
{
  $(document).on('click','#btn_edit',function () 
  { 
   var ID =$(this).attr('data-id');
   $.ajax({
      url : 'crud_admin/view-admin.php',
      method:'POST',
      dataType:'JSON',
      data:{ID:ID},
      success:function (data) 
      {
        $('#UP_id').val(data[0]);
        $('#UP_email').val( data[1]);
        $('#password').val(data[2]);
        $('#Update').modal('show');
      }
    })

  });
 $('#show_hide').on('click', function(){
var passwordField = $('#password');
var passwordFieldType = passwordField.attr('type');
if(passwordFieldType == 'password')
{
passwordField.attr('type', 'text');
$("#ii").attr('class', 'fa fa-eye');
}
else
{
passwordField.attr('type', 'password');
$("#ii").attr('class', 'fa fa-eye-slash');
}
});
}
function update_record() {
  $(document).on('click','#btn_update',function() 
  {
    var ID = $('#UP_id').val();
    var email = $('#UP_email').val();
    var pass = $('#password').val();
    if (email=='' ||  pass =='') 
    {
      $('#up_message').html('Remplissez les champs svp');
      $('#update').modal('show');
      $("#formU").submit(function(e){
        return  false;
    })

    }
    else 
    {
      $.ajax({
          method:'POST',
          data:{ ID:ID,email :email,pass:pass},
          success:function(data)
          {
            //$('#up_message').html(data);
            $("#Update").modal('show');
            window.location.reload();

          }
        });
    }

        

  })
}
function delete_rec() 
  {
    $(document).on('click','#btn_delete',function () 
    {
      var deletID =$(this).attr('data-id1');
      $('#deleteModal').modal('show');
      $(document).on('click','#btn_delete',function () {
        $.ajax({
            url:"crud_admin/delete-admin.php",
            method:"POST",
            data:{ID:deletID},
            success:function (data) 
            { 
              $('#deleteModal').modal('hide');
              $('#delete_message').html(data);
            }
      })
      })
      
    })
  
}
  
    </script>
  <style type="text/css">
    #password{
      width: 90%;
    }
    .aa{
      float: left;
    }
    #show_hide{
    border: 0 ;
    background: none;
    float: right;
    position: relative;
    bottom: 50px;
    }


  </style>

</html>

<?php 
  if (isset($_POST['modifier'])) {
    $id=$_POST['id_mod'];
    $email=$_POST['email-mod'];
    $pass = $_POST['password'];

    $sql = "UPDATE `admin` SET `email`='$email' , `mot_passe`='$pass'  WHERE id_admin=$id";
      if (mysqli_query($conn,$sql))
                  {
                    echo "<script> alert('Modification avec succès'); </script> ";
                  }
                  else 
                  {
                    echo "<script> alert('Erreur'); </script> ";
                  }

  }

 ?>
