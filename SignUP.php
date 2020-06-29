<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insecription</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/css-SignUP/style.css"/>
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>INFORMATIONS GENERALES </h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="Nom" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Prenom" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="E-mail">
					</div>	
					<div class="form-row">
						<input type="password" name="your_email" id="your_email" class="input-text" placeholder="Mot de Passe">
					</div>			

					<div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Numéro de Telephone">
					</div>
					
					<div class="form-row form-row-2">
							<select name="place"  >
							    <option>Commune</option>
							    <option value="Mascara">Mascara</option>
							    <option value="Tighanif">Tighanif</option>
							    <option value="Sig">Sig</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					
				</div>
				<div class="form-right">
					<h2>INFORMATION POUR RENDEZ-VOUS</h2>
					<div class="form-row">
						<input type="Date" name="" class="" id="" placeholder="La date de RENDEZ-VOUS" required>
						<input type="time" name=""value="00:00" class="" id="" placeholder="" required>
					</div>

					<div class="container">
						<ul class="ks-cboxtags">
							<label style="color: white; font-size: 17px; " > Choisissez le type d'Analyse   </label> </br><br>
							 <li><input type="checkbox" id="checkboxOne" value="">
							 	<label for="checkboxOne">HUMONOLOGIE</label></li>
							 <li><input type="checkbox" id="checkboxTwo" value="">
							    <label for="checkboxTwo">BIOCHEMIE</label></li>
							 <li><input type="checkbox" id="checkboxThree" value="" >
							 	<label for="checkboxThree">IMMUNOLOGIE</label></li>
							 <li><input type="checkbox" id="checkboxFour" value="">
							 	<label for="checkboxFour">PARASITOLOGIE</label></li>
							<li  ><input type="checkbox" id="checkboxFive" value="">
								<label for="checkboxFive">BIOCHIMIE</label></li>
									    
						 </ul>

					</div>					
						<div class="form-row form-row-1">
							<label style="color: white;" > Scannez Votre Ordonnance SVP !</label><br><br>
							<input type="file" style="border: 0px;" required>
						</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Envoyer">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

<!-- CheckBox Style -->

<style type="text/css">
	
.container {
    max-width: 640px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 13px;
    padding-left: 50px;
}

ul.ks-cboxtags {
    list-style: none;
    padding: 20px;
}
ul.ks-cboxtags li{
  display: inline;
}
ul.ks-cboxtags li label{
    display: inline-block;
    background-color: rgba(255, 255, 255, .9);
    border: 2px solid rgba(139, 139, 139, .3);
    color: #adadad;
    border-radius: 25px;
    white-space: nowrap;
    margin: 3px 0px;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    transition: all .2s;
}

ul.ks-cboxtags li label {
    padding: 8px 12px;
    cursor: pointer;
}

ul.ks-cboxtags li label::before {
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 12px;
    padding: 2px 6px 2px 2px;
    content: "\f067";
    transition: transform .3s ease-in-out;
}

ul.ks-cboxtags li input[type="checkbox"]:checked + label::before {
    content: "\f00c";
    transform: rotate(-360deg);
    transition: transform .3s ease-in-out;
}

ul.ks-cboxtags li input[type="checkbox"]:checked + label {
    border: 2px solid #1bdbf8;
    background-color: #12bbd4;
    color: #fff;
    transition: all .2s;
}

ul.ks-cboxtags li input[type="checkbox"] {
  display: absolute;
}
ul.ks-cboxtags li input[type="checkbox"] {
  position: absolute;
  opacity: 0;
}
ul.ks-cboxtags li input[type="checkbox"]:focus + label {
  border: 2px solid #e9a1ff;
}

</style>
</html>