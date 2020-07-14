<?php 
include_once('../_header.php');
include_once '../_config/config.php';
?>

<h1 class="h3 mb-0 text-gray-800 mb-4">Dashboard</h1>
<?php 
$sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien") or die (mysqli_error($con));
$count_pasien = mysqli_num_rows($sql_pasien);

$sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter") or die (mysqli_error($con));
$count_dokter = mysqli_num_rows($sql_dokter);

$sql_poli = mysqli_query($con, "SELECT * FROM tb_poliklinik") or die (mysqli_error($con));
$count_poli = mysqli_num_rows($sql_poli);

$sql_obat = mysqli_query($con, "SELECT * FROM tb_obat") or die (mysqli_error($con));
$count_obat = mysqli_num_rows($sql_obat);
?>

<div class="row">
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-primary shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Patient</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_pasien ?></div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-fw fa-user-injured fa-3x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-success shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doctor</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_dokter ?></div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-fw fa-user-md fa-3x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-danger shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Polyclicic</div>
	          <div class="row no-gutters align-items-center">
	            <div class="col-auto">
	              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $count_poli ?></div>
	            </div>
	          </div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-fw fa-stethoscope fa-3x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-warning shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Medicine</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_obat ?></div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-fw fa-pills fa-3x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>