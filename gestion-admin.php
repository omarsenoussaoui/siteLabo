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
                        <li><button style="width: 50px; height: 50px;" type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fa fa-align-justify fa-2x"></i>
                                <span></span>
                            </button></li>
                        <li style="padding-left: 10px"><a style="font-size: 20px; "href="page-admin.php">Admin</a></li>
                        <li><a style="font-size: 20px;"  href="tousrdv.php">Tous les RDV</a></li>
                        <li><a style="font-size: 20px;" data-scroll href="rdv-auj.php">RDV d'aujourd'hui</a></li>
                        <li><a style="font-size: 20px;"data-scroll href="services.php">Nos service</a></li> 
                        <li><a style="font-size: 20px;"data-scroll href="logout.php">Déconnexion</a></li>
                     </ul>
                    
                  </div>
               </nav>
               
            </div>
         </div>
      </header>
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
                            <li ><a class="active2" href="gestion-admin.php">Admins</a></li>
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
                        <a href="annc.php">
                            <i class="fa fa-bullhorn"></i>
                            Annonces
                        </a>
                    </li>
                    
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
              <div class="text-center" style="padding-top: 50px;">
                <?php if ($_SESSION["accept"]==2) 
                {   
               ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
Ajouter admin 
</button>

</div>
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
$sql = "SELECT `id_admin`, `email`, `mot_passe` FROM `admin` WHERE val=0  or val =2"  ;
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
<?php  }
else {?>

</div>
<h1 class="text-danger text-center">La Liste des Administrateurs</h1>
    <table class="table table-bordered table-dark text-center">
  <thead>
    <tr >
      <th  class="text-center" scope="col">Num</th>
      <th  class="text-center" scope="col">ID</th>
      <th  class="text-center" scope="col">E-mail</th>      
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

</tr>
<?php

}

?>
</div>
</tbody>
</table>

  <?php }?>
 
                 <!--<div class="line"></div>-->
            </div>
        </div>
<div>
<h1 id="delete_message"></h1>
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


<!--style of slidbar-->
<style type="text/css">
  /*
    DEMO STYLE
*/
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
  margin-top: 30px;
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
.active2{
      color: #7386D5;
    background: #fff;
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
    font-size: 1.1em;
    display: block;
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
