<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-20 21:04:35
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-10-09 07:35:42
 */
$title = 'Perhitungan';
include "../include/header.php";
?>

<ul class="nav nav-pills">
	<li class="active"><a data-toggle="pill" href="#home">Home</a></li>
	<li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
	<li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
	<li><a data-toggle="pill" href="#menu3">Menu 3</a></li>
</ul>
<br>

<div class="tab-content">
	<div id="home" class="tab-pane fade in active">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						PERBANDINGAN CLASTER TERHADAP KEUNGAN
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>ALTERNATIVE</td>
									<td>PEKERJAAN</td>
									<td>e vectore</td>
								</tr>
								<tr>
									<td>ALTERNATIVE</td>
									<td>1</td>
									<td>0.2</td>
									<td>0.166667</td>
								</tr>
								<tr>
									<td>PEKERJAAN</td>
									<td>5</td>
									<td>1</td>
									<td>0.833333</td>
								</tr>
								<tr>
									<td>Jml</td>
									<td>6</td>
									<td>1.2</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						PERBANDINGAN CLASTER TERHADAP KEUNGAN
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>KEUANGAN</td>
									<td>PEKERJAAN</td>
									<td>&nbsp;</td>
									<td>e vektore</td>
								</tr>
								<tr>
									<td>KEUANGAN</td>
									<td>1</td>
									<td>2</td>
									<td>&nbsp;</td>
									<td>0.666667</td>
								</tr>
								<tr>
									<td>PEKERJAAN</td>
									<td>0.5</td>
									<td>1</td>
									<td>&nbsp;</td>
									<td>0.333333</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>1.5</td>
									<td>3</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						PERBANDINGAN CLASTER TERHADAP KEUNGAN
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>ALTERNATIVE</td>
									<td>KEUANGAN</td>
									<td>PEKERJAAN</td>
									<td>&nbsp;</td>
									<td>evektore</td>
								</tr>
								<tr>
									<td>ALTERNATIVE</td>
									<td>1</td>
									<td>0.333333</td>
									<td>0.2</td>
									<td>&nbsp;</td>
									<td>0.118476</td>
								</tr>
								<tr>
									<td>KEUANGAN</td>
									<td>3</td>
									<td>1</td>
									<td>2</td>
									<td>&nbsp;</td>
									<td>0.501263</td>
								</tr>
								<tr>
									<td>PEKERJAAN</td>
									<td>5</td>
									<td>0.5</td>
									<td>1</td>
									<td>&nbsp;</td>
									<td>0.380261</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>9</td>
									<td>1.833333</td>
									<td>3.2</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="menu1" class="tab-pane fade">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Perbandingan tingkat kepentingan pendapatan terhadap sub  pekerjaan
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>Jabatan</td>
									<td>Lama kerja</td>
									<td>Status kerja</td>
									<td>VEKTORE&nbsp;</td>
								</tr>
								<tr>
									<td>Jabatan</td>
									<td>1</td>
									<td>2</td>
									<td>2</td>
									<td>0.5</td>
								</tr>
								<tr>
									<td>Lama kerja</td>
									<td>0.5</td>
									<td>1</td>
									<td>1</td>
									<td>0.25</td>
								</tr>
								<tr>
									<td>Status kerja</td>
									<td>0.5</td>
									<td>1</td>
									<td>1</td>
									<td>0.25</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>2</td>
									<td>4</td>
									<td>4</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Perbandingan tingkat kepentingan pengeluaran terhadap sub pekerjaan
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>Jabatan</td>
									<td>Lama kerja</td>
									<td>Status kerja</td>
									<td>&nbsp;</td>
									<td>evektore</td>
								</tr>
								<tr>
									<td>Jabatan</td>
									<td>1</td>
									<td>3</td>
									<td>2</td>
									<td>&nbsp;</td>
									<td>0.548485</td>
								</tr>
								<tr>
									<td>Lama kerja</td>
									<td>0.333333</td>
									<td>1</td>
									<td>1</td>
									<td>&nbsp;</td>
									<td>0.210606</td>
								</tr>
								<tr>
									<td>Status kerja</td>
									<td>0.5</td>
									<td>1</td>
									<td>1</td>
									<td>&nbsp;</td>
									<td>0.240909</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>1.833333</td>
									<td>5</td>
									<td>4</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Perbandingan tingkat kepentingan jabatan terhadap sub keuangan
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>pendapatan</td>
									<td>pengeluaran</td>
									<td>e vektore</td>
								</tr>
								<tr>
									<td>pendapatan</td>
									<td>1</td>
									<td>5</td>
									<td>0.833333</td>
								</tr>
								<tr>
									<td>pengeluaran</td>
									<td>0.2</td>
									<td>1</td>
									<td>0.166667</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>1.2</td>
									<td>6</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Perbandingan tingkat kepentingan status terhadap sub keuangan
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>pendapatan</td>
									<td>pengeluaran</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>pendapatan</td>
									<td>1</td>
									<td>3</td>
									<td>vektore</td>
								</tr>
								<tr>
									<td>pengeluaran</td>
									<td>0.333333</td>
									<td>1</td>
									<td>0.75</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>1.333333</td>
									<td>4</td>
									<td>0.25</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Perbandingan tingkat kepentingan Lama kerja terhadap sub keuangan
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>pendapatan</td>
									<td>pengeluaran</td>
									<td>evektore</td>
								</tr>
								<tr>
									<td>pendapatan</td>
									<td>1</td>
									<td>3</td>
									<td>0.75</td>
								</tr>
								<tr>
									<td>pengeluaran</td>
									<td>0.333333</td>
									<td>1</td>
									<td>0.25</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>1.333333</td>
									<td>4</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="menu2" class="tab-pane fade">

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						PERBANDINGAN ALT1 EKA DENGAN PEKERJAAN
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>Jabatan</td>
									<td>Lama kerja</td>
									<td>Status kerja</td>
									<td>evektore</td>
								</tr>
								<tr>
									<td>Jabatan</td>
									<td>1</td>
									<td>0.25</td>
									<td>0.142857</td>
									<td>0.079644</td>
								</tr>
								<tr>
									<td>Lama kerja</td>
									<td>4</td>
									<td>1</td>
									<td>0.333333</td>
									<td>0.264811</td>
								</tr>
								<tr>
									<td>Status kerja</td>
									<td>7</td>
									<td>3</td>
									<td>1</td>
									<td>0.655545</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>12</td>
									<td>4.25</td>
									<td>1.47619</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						PERBANDINGAN ALT1 EKA DENGAN KEUANGAN
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>pendapatan</td>
									<td>pengeluaran</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>pendapatan</td>
									<td>1</td>
									<td>5</td>
									<td>evektore</td>
								</tr>
								<tr>
									<td>pengeluaran</td>
									<td>0.2</td>
									<td>1</td>
									<td>0.833333333</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>1.2</td>
									<td>6</td>
									<td>0.166666667</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						ALT2 IYUS
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>Jabatan</td>
									<td>Lama kerja</td>
									<td>Status kerja</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Jabatan</td>
									<td>1</td>
									<td>0.2</td>
									<td>0.2</td>
									<td>evektore</td>
								</tr>
								<tr>
									<td>Lama kerja</td>
									<td>5</td>
									<td>1</td>
									<td>1</td>
									<td>0.090909</td>
								</tr>
								<tr>
									<td>Status kerja</td>
									<td>5</td>
									<td>1</td>
									<td>1</td>
									<td>0.454545</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>11</td>
									<td>2.2</td>
									<td>2.2</td>
									<td>0.454545</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						ALT2 IYUS
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>pendapatan</td>
									<td>pengeluaran</td>
									<td>&nbsp;</td>
									<td>evektore</td>
								</tr>
								<tr>
									<td>pendapatan</td>
									<td>1</td>
									<td>3</td>
									<td>&nbsp;</td>
									<td>0.75</td>
								</tr>
								<tr>
									<td>pengeluaran</td>
									<td>0.333333</td>
									<td>1</td>
									<td>&nbsp;</td>
									<td>0.25</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>1.333333</td>
									<td>4</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						ALT2 YULI
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>Jabatan</td>
									<td>Lama kerja</td>
									<td>Status kerja</td>
									<td>e vktore&nbsp;</td>
								</tr>
								<tr>
									<td>Jabatan</td>
									<td>1</td>
									<td>0.2</td>
									<td>0.2</td>
									<td>0.090909</td>
								</tr>
								<tr>
									<td>Lama kerja</td>
									<td>5</td>
									<td>1</td>
									<td>1</td>
									<td>0.454545</td>
								</tr>
								<tr>
									<td>Status kerja</td>
									<td>5</td>
									<td>1</td>
									<td>1</td>
									<td>0.454545</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>11</td>
									<td>2.2</td>
									<td>2.2</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						ALT2 YULI
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>pendapatan</td>
									<td>pengeluaran</td>
									<td>&nbsp;</td>
									<td>evektore</td>
								</tr>
								<tr>
									<td>pendapatan</td>
									<td>1</td>
									<td>5</td>
									<td>&nbsp;</td>
									<td>0.833333</td>
								</tr>
								<tr>
									<td>pengeluaran</td>
									<td>0.2</td>
									<td>1</td>
									<td>&nbsp;</td>
									<td>0.166667</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>1.2</td>
									<td>6</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div id="menu3" class="tab-pane fade">

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						PERBANDINGAN BERPASANGAN ALTERNATIVE UNTUK SUBKRITERIA PENDAPATAN
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>A1 EKA</td>
									<td>A2 IYUS</td>
									<td>&nbsp;</td>
									<td>A3 YULI</td>
									<td>evektore</td>
								</tr>
								<tr>
									<td>A1 EKA</td>
									<td>1</td>
									<td>1</td>
									<td>&nbsp;</td>
									<td>1</td>
									<td>0.333333</td>
								</tr>
								<tr>
									<td>A2 IYUS</td>
									<td>1</td>
									<td>1</td>
									<td>&nbsp;</td>
									<td>1</td>
									<td>0.333333</td>
								</tr>
								<tr>
									<td>A3 YULI</td>
									<td>1</td>
									<td>1</td>
									<td>&nbsp;</td>
									<td>1</td>
									<td>0.333333</td>
								</tr>
								<tr>
									<td>jml</td>
									<td>3</td>
									<td>3</td>
									<td>&nbsp;</td>
									<td>3</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						PERBANDINGAN BERPASANGAN ALTERNATIVE UNTUK SUBKRITERIA PEMGELUARAN
					</div>
					<div style="overflow-x:auto;">
						<table class="table table-bordered table-striped">
							<tbody>
<tr>
<td>&nbsp;</td>
<td>A1 EKA</td>
<td>A2 IYUS</td>
<td>A3 YULI</td>
<td>evektore</td>
</tr>
<tr>
<td>A1 EKA</td>
<td>1</td>
<td>0.5</td>
<td>1</td>
<td>0.25</td>
</tr>
<tr>
<td>A2 IYUS</td>
<td>2</td>
<td>1</td>
<td>2</td>
<td>0.5</td>
</tr>
<tr>
<td>A3 YULI</td>
<td>1</td>
<td>0.5</td>
<td>1</td>
<td>0.25</td>
</tr>
<tr>
<td>jml</td>
<td>4</td>
<td>2</td>
<td>4</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
					</div>
				</div>
			</div>

		</div>

		

	</div>


</div>

<?php 
include "../include/footer.php";
?>