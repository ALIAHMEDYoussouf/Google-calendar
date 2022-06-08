<?php 
// Include configuration file 
include 'config.php'; 
 
$postData = ''; 
if(!empty($_SESSION['postData'])){ 
    $postData = $_SESSION['postData']; 
    unset($_SESSION['postData']); 
} 
 
$status = $statusMsg = ''; 
if(!empty($_SESSION['status_response'])){ 
    $status_response = $_SESSION['status_response']; 
    $status = $status_response['status']; 
    $statusMsg = $status_response['status_msg']; 
} 
?>

<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >  
    <title>Google Calendar!</title>
  </head>
  <!-- Bootstrap CSS & JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Jquery -->
<script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables -->
 <link rel="stylesheet" type="text/css"
href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/cr-1.5.5/r-2.2.9/datatables.min.css" />
<script defer type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script defer type="text/javascript"
src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/cr-1.5.5/r-2.2.9/datatables.min.js"></script>

<script defer src="./unigest.js"></script>
<script defer src="./webgestion_header/header.js"></script> 

<style>
.nav-item-perso {
  padding: .5rem;
}

.nav-item-perso-hover:hover {
  background-color: #E96117;
}

.nav-links {
  color: #fff;
  text-decoration: none;
}

.nav-links:hover {
  color: #fff;
}

.nav-item-perso.active {
  background-color: #E96117;
}
</style> 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
	<a class="navbar-brand" header-data-module-logo>
	  <img src="cc.jpg" alt="Logo societe" height="150" header-data-logo> 
		<img src="cal.jpg" alt="Logo societe" height="150" header-data-logo>
        <img src="ag.jpg" alt="Logo societe" height="150" header-data-logo>
  
		 <img src="bb.jpg" alt="Logo societe" height="100" header-data-logo> 
	  </a>
 
	
      <button type="button" class="btn btn-primary btn-lg">Aujourdhui</button>
      <div class="container-fluid">
        
   
			

	<div class="collapse navbar-collapse pt-2 pt-lg-0" id="nav1ItemsWrapper">

	
	  <!-- <span class="navbar-text">
		<b><span header-data-nom-societe></span></b> <span header-data-database></span>
	  </span>
	  <ul class="navbar-nav ms-auto py-3 py-lg-0 align-items-center">
		<li class="nav-item mb-2 mb-lg-0 ms-lg-2" hierarchie-3> -->

		  <!-- BLOC SELECTEUR DE CONFIGURATION  -->
		  <!-- FIN  BLOC  -->

		<!-- </li> 
		 <li class="nav-item mb-2 mb-lg-0 ms-lg-2" hierarchie-3>
		  <label id="nom_groupe_en_config" class="bi bi-people-fill"></label> 
		</li> -->
        
		<!-- <li class="nav-item mb-2 mb-lg-0 ms-lg-2">
		  <a href="index.php" class="btn btn-danger">  -->
		<!-- <i class="bi bi-power"></i> --> 
		<!-- <a class="btn btn-primary" href="#" role="button">Link</a> --> 
        <!-- <button type="button" class="btn btn-primary btn-lg" type="submit">JOUR/Semaine/Mois</button> -->
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      
  <button class="btn btn-success btn-lg me-md-2" type="button">JOUR</button>
  <button class="btn btn-success btn-lg" type="button">SEMAINE</button>
  <button class="btn btn-success btn-lg" type="button">MOIS</button>
  <button class="btn btn-info btn-lg" type="button">Planing</button>
</div>
		  </a>
		</li>
	  </ul>
      <li class="nav-item dropdown">
      <div class="d-flex align-items-start flex-column flex-sm-row py-1000">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Application Google
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
	</div>
  </div> 
  <img src="P.png" alt="Logo societe" height="120" header-data-logo>
  <img src="R.jpg" alt="Logo societe" height="120" header-data-logo>  
</nav>
<style>
	  	
.logo{
	height: 50px;
	width: 100px;
}

p{
	margin-left:10px;
	margin-right: 50px;
}
h1{
	margin-left:10px;
	color: rgb(140, 140, 245);;
}
h2{
	margin-left:10px;
	text-decoration-color: rgb(16, 89, 199);
	color:  rgb(140, 140, 245);
}
h3{
	margin-left:10px;
	text-decoration-color: rgb(16, 89, 199);
	color:  rgb(140, 140, 245);
}
  </style>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	
	
	  </nav></nav>
            <div class="col-md-5">
  <style type="text/css">
@import url("unigest.css");
/* 
.form-group
{
	background:#F7F7F7;
	border:1px solid #EAEAEA;
	color:black;
	padding:1px;
	font-size:14px;
	border-radius:5px;
    width:55%;
    font-family:Tahoma, Geneva, sans-serif;
	color:#000;
	vertical-align:middle;
    padding:1px;
	font-size:15px;
	border-radius:1px;

}
#a{
    color:black;

}
bod   width:80%;
    height: 55%;
    image: url("im.jpg");
    

}/*y{
 

    button {
	width:15%;
	}
    .navbar {
    /* position: relative; */
    /* min-height: 50px; */
    /* margin-bottom: 2px;
    margin-top: 2px; */
    /* border: 1px solid transparent; */

	 */
</style>
 </head>
 <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> <img src="im.jpg" width="110" height="120" class="centre"></div> -->
      
 <nav class="navbar navbar-light bg-light">
 <h1 class="mx-auto mt-1 fs-4">AJOUTER ÉVÉNEMENT </h1>
    <div class="container-fluid">
      <a class="fs-3" >
        <i class="bi bi-arrow-left-circle-fill"></i>
    
     
    </div>
  </nav>
  <body>
 
<div class="col-md-12">
    <form method="post" action="addEvent.php" class="form">
    <b>
        <div class="form-group">

            <label>Titre</label>
            <input type="text" class="form-control" name="title" value="<?php echo !empty($postData['title'])?$postData['title']:''; ?>" required="">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"><?php echo !empty($postData['description'])?$postData['description']:''; ?></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" value="<?php echo !empty($postData['location'])?$postData['location']:''; ?>">
        </div>
        <div class="form-group">
            <label>Date debut</label>
            <input type="date" name="date" class="form-control" value="<?php echo !empty($postData['date'])?$postData['date']:''; ?>" required="">
        </div>
        <div class="form-group">
            <label>Date fin</label>
            <input type="date" name="date" class="form-control" value="<?php echo !empty($postData['date'])?$postData['date']:''; ?>" required="">
        </div>
        <div class="form-group time">
            <label>Heure debut</label>
            <input type="time" name="time_from" class="form-control" value="<?php echo !empty($postData['time_from'])?$postData['time_from']:''; ?>">
            <span id="a">Heure fin</span>
            <input type="time" name="time_to" class="form-control" value="<?php echo !empty($postData['time_to'])?$postData['time_to']:''; ?>">
        </div>
        <div class="container">
        <button type="submit" class="btn btn-success btn-lg" name="" >ENREGISTRER</button>

        <button type="submit" class="btn btn-success btn-lg" name="submit" >SYNCHRONISER GOOGLE CALENDAR</button>

        </div><br>
    </form>
</div></div></div>

<footer class="bg-light text-center text-lg-start py-4  w3-row-padding w3-padding-32">

  
     



    <!-- Copyright -->
    <div class="text-center p-10" style="background-color:blue; color: white;">
      <div class="w3-third">
        <h3>FOOTER APPLICATION GOOGLE CALENDAR</h3>
    </div> © 2022 site Youssouf
      <a class="text-dark" href="https://mdbootstrap.com/"></a>
    </div>
    <!-- Copyright -->
   
    </footer>
    
 
 <!-- Option 2: Separate Popper and Bootstrap JS -->
 <!--
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 -->
 </body>
 </html>