<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>SENBUD UPD</title>
<link href="css/icon.css" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<link rel="stylesheet" type="text/css" href="css/rating.css">
<link rel="stylesheet" type="text/css" href=" css/animate.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script src="js/wow.min.js"></script>
<body>
	
	<section>
	<div class="center">
		<div align="center">
				<br>
				<h5 class="center light ">Pemilihan SENBUD-UPD SMK Wikrama Bogor</h5>
				<br>
				<br>

				<div class="card-panel center " style="width:450px; height: 400px;">
					<form method="post">
						<?php 
                if(isset($_POST['simpan'])){
                  $sql = mysqli_query($con,"INSERT INTO inputan SET nis='$_POST[nis]', nama='$_POST[nama]', rombel='$_POST[rombel]', rayon='$_POST[rayon]', senbud='$_POST[senbud]', upd='$_POST[upd]'");
                }
                ?>
						<div class="input-field">
							<input type="text" name="nis" placeholder="NIS" required></input>
							<label for="user"></label>
						</div>
						<div class="input-field">
							<input type="text" name="nama" placeholder="Nama" required></input>
							<label for="user"></label>
						</div>
						<div class="input-field">
							<input type="text" name="rombel" placeholder="Rombel" required></input>
							<label for="user"></label>
						</div>
						<div class="input-field">
							<input type="text" name="rayon" placeholder="Rayon" required></input>
							<label for="user"></label>
						</div>
						<div class="col-md-6">
		                  <div class="form-group mb-0">
		                    <label>Senbud</label>
		                    <select class="form-control" name="senbud">
		                      <?php 
		                        foreach ($senbud as $datas) { ?>
		                          <option value="<?php echo $datas['id'] ?>"><?php echo $datas['senbud']." - ".$datas['hari'] ?></option>
		                      <?php } ?>
		                    </select>
		                  </div>
		                  <div class="col-md-6">
		                  <div class="form-group mb-0">
		                    <label>UPD</label>
		                    <select class="form-control" name="upd">
		                      <?php 
		                        foreach ($upd as $datas) { ?>
		                          <option value="<?php echo $datas['id'] ?>"><?php echo $datas['upd']." - ".$datas['hari'] ?></option>
		                          
		                      <?php } ?>
		                    </select>
		                  </div>
		                </div>
						<div>
							<input type="submit" class="waves-effect waves-light btn" id="btn4" name="simpan" value="kirim"></div>
					</div>
				</form>
</body>