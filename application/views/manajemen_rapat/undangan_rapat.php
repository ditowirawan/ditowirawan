<!-- ini adalah header content -->
<div>
	<div class="row">
		<div class="col-md-9"><h3><b>Undangan Rapat</b></h3></div>
		<div class="col-md-3">
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Undangan Rapat</li>
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
						<a class="btn btn-primary" style="margin-right: 30px" data-toggle="modal" data-target="#myModal"><i></i>Reschedule</a>

						<a class="btn btn-success" href="<?php echo base_url() ?>index.php/admin/add_undangan_rapat"> <i class="fa fa-plus" ></i>&nbsp &nbsp Add Undangan</a>
					</div>
				</div>

				<!-- BODI -->
				<div class="box-body">
					<div class="box">
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>No. Agenda</th>
										<th>Tgl Rapat</th>
										<th>Jam Mulai</th>
										<th>Lokasi Rapat</th>
										<th>Ruang Rapat</th>
										<th>Status</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>14008976</td>
										<td>28/07/2017</td>
										<td>09:00</td>
										<td>Trapesium</td>
										<td>SHIDOKU</td>
										<td><span class="label label-success">Aktif</span></td>
										<td align="center">
										<a class="btn btn-primary" href="<?php echo base_url() ?>index.php/admin/edit_undangan"><i data-placement="bottom" data-toggle="tooltip" title="Edit Data" class="fa fa-pencil-square-o" ></i></a>

											<!-- <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#myModalEdit">
											<i data-placement="bottom" data-toggle="tooltip" title="Edit Data" class="fa fa-pencil-square-o" ></i></button> -->

										</button>&nbsp &nbsp
										<button type="button" class="btn btn-danger
										" data-toggle="modal" data-target="#myModalDelete" >
										<i data-placement="bottom"  title="Non Aktif" data-toggle="tooltip"  class="fa fa-minus-circle" ></i>
									</button></td>

								</tr>
								<tr>
									<td>1</td>
									<td>14008976</td>
									<td>28/07/2017</td>
									<td>09:00</td>
									<td>Trapesium</td>
									<td>SHIDOKU</td>
									<td><span class="label label-success">Aktif</span></td>
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
									<td>1</td>
									<td>14008976</td>
									<td>28/07/2017</td>
									<td>09:00</td>
									<td>Trapesium</td>
									<td>SHIDOKU</td>
									<td><span class="label label-success">Aktif</span></td>
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
				</div>
			</div>
		</div>
	</div>

</section>
</div>






<!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Reschedule</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label>Tanggal Rapat</label>

							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-clock-o"></i>
								</div>
								<input type="text" class="form-control pull-right" id="reservationtime">
							</div>
							<!-- /.input group -->
						</div>
						<div class="bootstrap-timepicker">
							<div class="form-group">
								<label>Jam Mulai:</label>

								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-clock-o"></i>
									</div>
									<input type="text" class="form-control timepicker">
								</div>
								<!-- /.input group -->
							</div>
							<!-- /.form group -->
						</div>
						<div class="form-group">
							<div class="bootstrap-timepicker">
								<div class="form-group">
									<label>Jam Selesai:</label>

									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input type="text" class="form-control timepicker">
									</div>
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
						</div>
						<div class="form-group">
							<label>Lokasi Rapat</label>
							<select class="form-control" style="width: 100%;">
								<option value="" disabled selected>Pilih Divisi..</option>
								<option >Trapesium</option>
								<option >Cawang</option>
								<option >Mampang</option>
							</select>
						</div>
						<div class="form-group">
							<label for="text">Alamat Ruangan</label>
							<input type="text" class="form-control" id="text" placeholder="Masukkan Ruang Rapat..">
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



