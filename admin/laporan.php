<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-20 21:04:35
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-20 21:55:44
 */
$title = 'Laporan';
include "../include/header.php";
?>
<style>
@media print {
	#main * {display:none;}
	#main #printarea {display:block;}
}
</style>

<script type="text/javascript" src="../assets/js/Chart.min.js"></script>

<div class="row">
	<button onclick="myFunction()" class="btn btn-success"><i class="fa fa-print"></i> PRINT</button>
</div>
<br>

<div id="printarea">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					HASIL RANKING
				</div>
				<div style="overflow-x:auto;">
					<table class="table table-bordered table-striped">
						<tbody>
							<tr>
								<td>
									<p>A1</p>
								</td>
								<td>
									<p>0.001</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>A2</p>
								</td>
								<td>
									<p>0.040</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>A3</p>
								</td>
								<td>
									<p>0.002</p>
								</td>
							</tr>
						</tbody>
					</table>
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

<script>
function myFunction() {
    window.print();
}
</script>


<?php 
include "../include/footer.php";
?>