<!-- ini adalah header content -->
<div>
	<div class="row">
		<div class="col-md-9"><h3><b>Master Ruang Rapat</b></h3></div>
		<div class="col-md-3">
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Master Ruang Rapat</li>
			</ol>
		</div>
	</div>
</div>

<!-- Ini contents -->
<div>
	<section class="content">
		<div class="row">
			<div class="box box-solid">
				<div class="box-header">
					<div class="text-right">
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" ></i>&nbsp &nbsp Add Ruang Rapat</button>
							<!-- <button type="button" class="btn btn-warning"> <i class="fa fa-print" ></i></button>
							<button type="button" class="btn btn-info"><i class="fa  fa-download"></i> Export</button>  -->
						</div>
					</div>
					<div class="box-body">
						<div class="box">
							<!-- /.box-header -->
							<div class="box-body" align="center">
							</div>
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Kode Ruangan</th>
										<th>Lokasi Rapat</th>
										<th>Nama Ruangan</th>
										<th>Alamat</th>
										<th>Kapasitas Ruangan</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>B216</td>
										<td>Cawang</td>
										<td>VIP</td>
										<td>Jl.Cawang Awang Njos</td>
										<td>21</td>
										<td align="center">
											<button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#myModalEdit">
												<i data-placement="bottom" data-toggle="tooltip" title="Edit Data" class="fa fa-pencil-square-o" ></i></button>

											</button>&nbsp &nbsp
											<button type="button" class="btn btn-danger
											" data-toggle="modal" data-target="#myModalDelete" >
											<i data-placement="bottom"  title="Non Aktif" data-toggle="tooltip"  class="fa fa-minus-circle" ></i>
										</button></td>
									</tr>
									<tr>
										<td>2</td>
										<td>HJ16</td>
										<td>Mampang</td>
										<td>Dito's Room</td>
										<td>Jl. Mampang Bahagia Selalu</td>
										<td>4</td>
										<td align="center">
											<button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#myModalEdit">
												<i data-placement="bottom" data-toggle="tooltip" title="Edit Data" class="fa fa-pencil-square-o" ></i></button>

											</button>&nbsp &nbsp
											<button type="button" class="btn btn-danger
											" data-toggle="modal" data-target="#myModalDelete" >
											<i data-placement="bottom"  title="Non Aktif" data-toggle="tooltip"  class="fa fa-minus-circle" ></i>
										</button></td>
									</tr>
									<tr>
										<td>3</td>
										<td>GPV16</td>
										<td>Trapesium</td>
										<td>AP2T PREMIUM</td>
										<td>Jl.Blok M Pasaraya</td>
										<td>30</td>
										<td align="center">
											<button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#myModalEdit">
												<i data-placement="bottom" data-toggle="tooltip" title="Edit Data" class="fa fa-pencil-square-o" ></i></button>

											</button>&nbsp &nbsp
											<button type="button" class="btn btn-danger
											" data-toggle="modal" data-target="#myModalDelete" >
											<i data-placement="bottom"  title="Non Aktif" data-toggle="tooltip"  class="fa fa-minus-circle" ></i>
										</button></td>
									</tr>

								</tbody>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
		</div>
	</section>
</div>





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Form Master Ruang Rapat</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label for="text">Kode Ruang</label>
							<input type="text" class="form-control" id="text" placeholder="Masukkan Kode Ruang..">
						</div>
						<div class="form-group">
							<label>Lokasi</label>
							<select class="form-control" style="width: 100%;">
								<option value="" disabled selected>Pilih Lokasi Rapat..</option>
								<option >ICON+ Trapesium</option>
								<option>ICON+ Cawang</option>
								<option>ICON+ Mampang</option>
							</select>
						</div>
						<div class="form-group">
							<label>Nama Ruang</label>
							<select class="form-control" style="width: 100%;">
								<option value="" disabled selected>Pilih Ruang..</option>
								<option >APKT</option>
								<option>SHIDOKU</option>
								<option>AP2T</option>
							</select>
						</div>
						<div class="form-group">
							<label>Alamat Ruang</label>
							<select class="form-control" style="width: 100%;">
								<option value="" disabled selected>Pilih Ruang..</option>
								<option >APKT</option>
								<option>SHIDOKU</option>
								<option>AP2T</option>
							</select>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Kapasitas Ruangan</label>
							<div class="input-group">
								<input type="text" class="form-control" id="exampleInputAmount" placeholder="Masukkan Kapasitas Ruangan..">
								<div class="input-group-addon">peserta</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger"><i class="fa fa-refresh" ></i> Reset</button>
				<button type="button" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button>
			</div>
		</div>
	</div>



</div>


<!-- MODAL Edit-->
<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Master Ruang Rapat</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label for="text">Kode Ruang</label>
							<input type="text" class="form-control" id="text" disabled placeholder="Masukkan Kode Ruang..">
						</div>
						<div class="form-group">
							<label>Lokasi</label>
							<select class="form-control" style="width: 100%;">
								<option value="" disabled selected>Pilih Lokasi Rapat..</option>
								<option >ICON+ Trapesium</option>
								<option>ICON+ Cawang</option>
								<option>ICON+ Mampang</option>
							</select>
						</div>
						<div class="form-group">
							<label>Nama Ruang</label>
							<select class="form-control" style="width: 100%;">
								<option value="" disabled selected>Pilih Ruang..</option>
								<option >APKT</option>
								<option>SHIDOKU</option>
								<option>AP2T</option>
							</select>
						</div>
						<div class="form-group">
							<label>Alamat Ruang</label>
							<select class="form-control" style="width: 100%;">
								<option value="" disabled selected>Pilih Ruang..</option>
								<option >APKT</option>
								<option>SHIDOKU</option>
								<option>AP2T</option>
							</select>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Kapasitas Ruangan</label>
							<div class="input-group">
								<input type="text" class="form-control" id="exampleInputAmount" placeholder="Masukkan Kapasitas Ruangan..">
								<div class="input-group-addon">peserta</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger"><i class="fa fa-refresh" ></i> Reset</button>
				<button type="button" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal Non Aktif-->
<div class="modal fade" id="myModalDelete" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Warning</h4>
			</div>
			<div class="modal-body">
				<p>Apakah anda yakin ingin menonaktifkan data ini?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Ya</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
			</div>
		</div>
	</div>
</div>

