<?php
include '../include/header.php';
?>

<?php 
// notif pesan
if (!empty($_SESSION['pesan'])) { ?>
	<div class="alert alert-success">
		<i class="fa fa-check"></i> <?php echo $_SESSION['pesan']; ?>
	</div>
	<br>
	<?php 
	$_SESSION['pesan'] = '';
} 

// notif pesan ewrror
if (!empty($_SESSION['error'])) { ?>
	<div class="alert alert-danger">
		<i class="fa fa-check"></i> <?php echo $_SESSION['error']; ?>
	</div>
	<br>
	<?php 
	$_SESSION['error'] = '';
} 
?>

<?php 
if($_SESSION['akses_level'] == "admin" | $_SESSION['akses_level'] == "kepala_koperasi"){
$alternatif = mysqli_query($conn,"SELECT * FROM alternatif ");
$kriteria = mysqli_query($conn,"SELECT * FROM kriteria ");

?>

<script type="text/javascript" src="../assets/js/Chart.min.js"></script>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-group fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo mysqli_num_rows($alternatif) ?></span>
                    <div><b>ALTERNATIF</b></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-briefcase fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo mysqli_num_rows($kriteria) ?></span>
                    <div><b>KRITERIA</b></div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-md-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            RANGKING
        </div>
        <div class="panel-body">
            <canvas id="myChart" height="200px"></canvas>
        </div>
    </div>
</div>


<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["ASEP", "IYUS", "YULI"],
            datasets: [{
                label: '# Ranking',
                data: [0.001, 0.040, 0.002],
                backgroundColor: [
                'rgb(255, 128, 170)',
                'rgb(0, 255, 153)',
                'rgb(0, 191, 255)'
                ]
            }]
        },

    });
</script>

<?php } ?>


<?php  
include '../include/footer.php';
?>