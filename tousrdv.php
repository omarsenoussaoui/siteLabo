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
   <body style="font-size: 20px;"  class="clinic_version">
      <!-- LOADER -->
<header>
<style type="text/css">

</style>
<br>
<p id="message_envoyé"></p>
</header>
<!-----------------------------------modal update--------------->
<div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Envoyer un message</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        <div class="md-form mb-5">
          <input type="hidden" id="id" class="form-control validate">
        </div>
          <label data-error="wrong" data-success="right" for="form34">Numéro de téléphone   </label>
          <input type="text" id="num" class="form-control validate">
        </div>
        <div class="md-form">
          <label data-error="wrong" data-success="right" for="form8">Message</label>
          <textarea type="text" id="message" class="md-textarea form-control" rows="4"></textarea>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <center><button  id="send" class="btn btn-success">Envoyer</button></center>
      </div>
    </div>
  </div>
</div>


<!--script get rec-->
<script type="text/javascript">
$(document).ready(function ()       
  { 
    get_rec();
    envoyer_message();
    function get_rec() 
    {
      $(document).on('click','#btn_show',function() 
      { 
       var ID =$(this).attr('data-id');
       var id_rdv =$(this).attr('data-id2');

       $.ajax({
          url : 'crud_rdv/view_rdv.php',
          method:'POST',
          dataType:'JSON',
          data:{ID:ID},
          success:function (data) 
          {
            $('#num').val(data[5]);
            $('#id').val(id_rdv);
            $('#sendMessage').modal('show');
          }
        })
      });
    }

    function envoyer_message() 
    {
      $(document).on('click','#send',function() 
      { 
        var num = $("#num").val();
        var id_rdv = $("#id").val();
        var message = $("#message").val();
        $.ajax({
          url :'envoyer_message/send.php',
          method : 'POST',
          data : {num:num,
                  message:message ,
                  id_rdv :id_rdv
          },
          success:function(data) {
           $('#message_envoyé').html(data);
           $('#sendMessage').modal('hide');
          }
        })
      });

    }
  });

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
                        <li><button style="width: 50px; height: 50px;" type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fa fa-align-justify fa-2x"></i>
                                <span></span>
                            </button></li>
                        <li style="padding-left: 10px"><a style="font-size: 20px; " href="page-admin.php">Admin</a></li>
                        <li><a style="font-size: 20px;" class="active"  href="tousrdv.php">Tous les RDV</a></li>
                        <li><a style="font-size: 20px;" data-scroll href="rdv-auj.php">RDV d'aujourd'hui</a>
                        <li><a style="font-size: 20px;"data-scroll href="services.php">Nos service</a></li> 
                        <li><a style="font-size: 20px;"data-scroll href="logout.php">Déconnexion</a></li>
                     </ul>
                    
                  </div>
               </nav>
               
            </div>
         </div>
      </header>
      <br>
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
                        <a href="annc.php">
                            <i class="fa fa-bullhorn"></i>
                            Annonces
                        </a>
                    </li>
                    
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    Tous les rdv !
                </nav>
                <table id="table-rdv" class="table table-bordered text-center">
    <thead>
    <tr >
      <th  class="text-center" scope="col">Num</th>
      <th  class="text-center" scope="col">ID Rdv</th>
      <th  class="text-center" scope="col">date</th>
      <th  class="text-center" scope="col">time</th>
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
$sql = "SELECT * FROM rdv JOIN patient ON rdv.id_patient=patient.id_patient and rdv.accept=0 ";
$resul = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$i = 0;
while( $rows = mysqli_fetch_assoc($resul) ) {
?>
<tr>
<td><?php echo $i=$i+1; ?></td>
<td><?php echo $rows["id_rdv"]; ?></td>
<td ><?php echo $rows["date"];?></td>
<td ><?php echo $rows["time"];?></td>
<td contenteditable="true" class='edit' id='type_analyse.<?php echo $rows["id_rdv"];?>'><?php echo $rows["type_analyse"];?>

                </td>
<td><a href="" data-toggle="modal" data-target="#myModal<?php echo $rows['id_rdv']; ?>" ><?php echo $rows["ord"]?></a></td>
<td><?php echo $rows["id_patient"]?></td>
<td><?php echo $rows["nom_patient"]?></td>
<td><?php echo $rows["prenom_patient"]?></td>
<td><?php echo $rows["email"]?></td>
<td id="ted"><button id="btn_show" data-id2="<?php echo $rows["id_rdv"]; ?>" data-id="<?php echo $rows["id_patient"]?>"class="btn btn-danger"><i class="fa fa-times"></i></button>

</td>
<!-- Button trigger modal -->
<!-- Modal -->
</tr>
  <!-------------------------------------------modal ordonnance--------------->
  <div id="myModal<?php echo $rows['id_rdv'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Details</h4>
              </div>
              <div class="modal-body">
               <h3> <img style="width: 100%;height: 100%;" src="ordonnances/<?php echo $rows['ord']; ?>" ></h3>
              </div>
          </div>
        </div>
      </div>
  <!-------------------------------------------modal ordonnance--------------->

<?php

}

?>


</div>
</tbody>
</table> 
<button class="btn btn-success" onclick="imprimir()">generate pdf</button>
                <!--<div class="line"></div>-->
            </div>
        </div>
</body>



<script type="text/javascript">   
    function imprimir() {
        var divToPrint=document.getElementById("table-rdv");
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }
</script>
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
</script>
<script type="text/javascript">
  $(document).ready(function(){

 $(document).on("click", "#btn-accept", function(){
   $(this).parent('#ted').text("accpté");
});
 // Add Class
 $('.edit').click(function(){
  $(this).addClass('editMode');
 });

 // Save data
 $(".edit").focusout(function(){
  $(this).removeClass("editMode");
  var id = this.id;
  var split_id = id.split(".");
  var date = split_id[0];
  var edit_id = split_id[1];
  var value = $(this).text();

  $.ajax({
   url: 'update-analyse.php',
   type: 'post',
   data: { field:date, value:value, id:edit_id },
   success:function(data){
    console.log(data);
   }
  });
 
 });

});
</script>
<style type="text/css">
  /* style de dropdown*/
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