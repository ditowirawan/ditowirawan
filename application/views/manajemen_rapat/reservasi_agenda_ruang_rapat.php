<!-- <style type="text/css"></style> -->
<!-- ini adalah header content -->
<div>
	<div class="row">
		<div class="col-md-9"><h3><b>Reservasi & Agenda Rapat</b></h3></div>
		<div class="col-md-3">
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Reservasi & Agenda Rapat</li>
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
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" ></i>&nbsp &nbsp Add Reservasi & Agenda</button>
						
					</div>
				</div>

				<!-- BODI -->
				<div class="box-body" >
					<div class="box" >
						<div class="box-body">
							<table id="example3" class="table table-bordered table-striped" style="width: 100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>No.Reservasi</th>
										<th>Pemesan</th>
										<th>Tgl Rapat</th>
										<th>Jam Mulai</th>
										<th>Jam Selesai</th>
										<th>Ruang Rapat</th>
										<th>Status</th>
										<th>Jenis Agenda</th>
										<th class="text-center">Action</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>VIP350</td>
										<td>Budi Sudjanto</td>
										<td>25/12/2017</td>
										<td>09:00</td>
										<td>11:00</td>
										<td>ICON+ Cawang</td>
										<td>Book</td>
										<td>Baru</td>
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
										<td>VIP350</td>
										<td>Budi Sudjanto</td>
										<td>25/12/2017</td>
										<td>09:00</td>
										<td>11:00</td>
										<td>ICON+ Cawang</td>
										<td>Book</td>
										<td>Baru</td>
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
										<td>VIP350</td>
										<td>Budi Sudjanto</td>
										<td>25/12/2017</td>
										<td>09:00</td>
										<td>11:00</td>
										<td>ICON+ Cawang</td>
										<td>Book</td>
										<td>Baru</td>
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

<!-- <!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Perencanaan Rapat</h4>
			</div>
			<div class="modal-body">
				<form >
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="font-bold">Reservasi Ruang Rapat</span>
						</div>
						<div class="panel-body">
							<div class="btn-group">
								<button class="btn btn-default" href data-toggle="tab" data-target="#tab_1" ng-disabled="1==1">Add Reservasi Ruang Rapat</button>
								<button class="btn btn-default" href data-toggle="tab" data-target="#tab_2" ng-disabled="1==1">Add Agenda Rapat</button>
							</div>

							<div class="tab-content p m-b-md b-t b-t-2x">
								<div role="tabpanel" class="tab-pane animated fadeIn active" id="tab_1"><br/>	
									<div class="row">

										<div class="col-sm-6 m-b">
											<div class="form-group">
												<label class="control-label">No.Reservasi</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Tanggal Reservasi</label>

												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input type="text" class="form-control pull-right" id="datepicker">
												</div>
												<!-- /.input group -->
											</div>
											<!-- /.form group -->
											<div class="form-group">
												<label class="control-label">Pemesan</label>
												<input type="text" class="form-control">
											</div>


											<!-- Date and time range -->
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

													<!-- /.form group -->
												</div>
											</div>

											<div class="form-group">
												<label>Dikirim Ke : </label>
												<select class="form-control select2" multiple="multiple" data-placeholder="Masukkan Nama Email .. " style="width: 100%;">
													<option>dito.wirawan@iconpln.co.id</option>
													<option>agung.permana@iconpln.co.id</option>
													<option>bagas.prakarso@iconpln.co.id</option>
													<option>tri.wibowo@iconpln.co.id</option>
													<option>heri.supriyadi@iconpln.co.id</option>
													<option>siyon.balakenam@iconpln.co.id</option>
													<option>ridho.yonni@iconpln.co.id</option>
												</select>
											</div>



										</div>
										<div class="col-sm-6 m-b">
											<div class="form-group">
												<label class="control-label">Lokasi Rapat</label>
												<select class="form-control">
													<option value="" disabled selected>Pilih Lokasi Rapat..</option>
													<option >ICON+ Trapesium</option>
													<option>ICON+ Cawang</option>
													<option>ICON+ Mampang</option>
												</select>
											</div>

											<div class="form-group">
												<label class="control-label">Ruang Rapat</label>
												<select class="form-control">
													<option value="" disabled selected>Pilih Lokasi Rapat..</option>
													<option >ICON+ Trapesium</option>
													<option>ICON+ Cawang</option>
													<option>ICON+ Mampang</option>
												</select>
											</div>

											<div class="form-group">
												<label class="control-label">Alamat</label>
												<input type="text" class="form-control"" disabled>
											</div>

											<div class="form-group">

												<label class="control-label">PIC Site</label>
												<select class="form-control">
													<option value="" disabled selected>Pilih PIC Site..</option>
													<option>Ella</option>
													<option>Tiara Lamsu</option>
													<option>Tiaraku</option>
												</select>
											</div>

											<div class="form-group">

												<label class="control-label">No.Tlp PIC</label>
												<input type="text" class="form-control"" disabled>
											</div>

											<div class="form-group">

												<label>Agenda Rapat</label>
												<textarea class="form-control" rows="3" placeholder="Masukkan Agenda Rapat ..."></textarea>
											</div>


										</div>




									</div>

								</div>

								<div role="tabpanel" class="tab-pane animated fadeIn " id="tab_2" disabled="true"><br/>
									<div class="row">
									</div>					
									<div class="row">
										<div class="col-sm-6 m-b">
											<div class="form-group">
												<label class="control-label">No.Reservasi</label>
												<input type="text" class="form-control">

												<!-- Date and time range -->
												<div class="form-group">
													<label>Tanggal Rapat</label>

													<div class="input-group">
														<div class="input-group-addon">
															<i class="fa fa-clock-o"></i>
														</div>
														<input type="text" class="form-control pull-right" id="reservationtime" disabled="">
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
															<input type="text" class="form-control timepicker" disabled="">

															
														</div>
														<!-- /.input group -->
													</div>
													<!-- /.form group -->
												</div>

												<div class="bootstrap-timepicker">
													<div class="form-group">
														<label>Jam Selesai:</label>

														<div class="input-group">
															<div class="input-group-addon">
																<i class="fa fa-clock-o"></i>
															</div>
															<input type="text" class="form-control timepicker" disabled="">

															
														</div>
														<!-- /.input group -->
													</div>
													<!-- /.form group -->
												</div>

												<div class="form-group">
													<label class="control-label">Lokasi Rapat</label>
													<select class="form-control" disabled="">
														<option value="" disabled selected>Pilih Lokasi Rapat..</option>
														<option >ICON+ Trapesium</option>
														<option>ICON+ Cawang</option>
														<option>ICON+ Mampang</option>
													</select>
												</div>


												<div class="form-group">
													<label class="control-label">Ruang Rapat</label>
													<select class="form-control" disabled="">
														<option value="" disabled selected>Pilih Lokasi Rapat..</option>
														<option >ICON+ Trapesium</option>
														<option>ICON+ Cawang</option>
														<option>ICON+ Mampang</option>
													</select>
												</div>
												
												<div class="form-group">
													<label>Agenda Rapat</label>
													<textarea class="form-control" rows="3" placeholder="Masukkan Agenda Rapat ..." disabled=""></textarea>

												</div>
												

											</div>



										</div>
										<div class="col-sm-6 m-b">
											<div class="form-group">
												<label class="control-label">
													Jenis Agenda
												</label>
											</div>
											<div style="margin-left: 3px;">
												<label>
													<input type="radio" name="r1" class="minimal" checked>
													<label> Baru</label>
												</label>

												<label style="margin-left:7px">
													<input type="radio" name="r1" class="minimal">
													<label> Lanjutan</label>
												</label></br>
											</div>

											<div class="form-group">
												<label class="control-label">No.Agenda</label>
												<input type="text" class="form-control">
											</div>


											<div class="form-group">
												<label class="control-label">Jenis Rapat</label>
												<select class="form-control">
													<option value="" disabled selected>Pilih Jenis Rapat..</option>
													<option>Rapat Direksi</option>
													<option>Rapat OS</option>
													<option>Rapat Vendor</option>
												</select>

											</div>

											<div class="form-group">
												<div class="row" style="margin-left: 3px">
													<label>Agenda rapat berdasarkan: </label>

												</div>
											</div>

											<div class="form-group">
												<label class="control-label">Instansi</label>
												<input type="text" class="form-control">
											</div>

											<div class="form-group">
												<label class="control-label">Nomor Surat</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Tanggal Rapat:</label>

												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input type="text" class="form-control pull-right" id="datepicker">
												</div>
												<!-- /.input group -->
											</div>

											<div class="form-group">
												<label for="exampleInputFile">Lampiran Surat</label>
												<input type="file" id="exampleInputFile">

												<p class="help-block">Upload Surat (PDF,Word ,Dll)</p>
											</div>

										</div> <!-- end row -->
									</div> <!-- end tab panel -->
									<div class="modal-footer">



									</div>


								</div> 
							</div> 
						</div>
					</form>
				</div>
				<div class="modal-footer">

					<button type="button" class="btn btn-danger"><i class="fa fa-refresh" ></i> Reset</button>

					<button href data-toggle="tab" class="btn btn-info" ng-click="ctrl.SetCurrentPage(ctrl.currentPage - 1)" data-target="#tab_1" ng-show="ctrl.currentPage - 1 == 2" >Prev</button>



					<button href data-toggle="tab" class="btn btn-info" ng-click="ctrl.SetCurrentPage(ctrl.currentPage - 1)" data-target="#tab_2" ng-show="ctrl.currentPage - 1 == 3" >Next</button>

					<button type="button" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button>


				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- MODAL Edit-->
<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Perencanaan Rapat</h4>
			</div>
			<div class="modal-body">
				<form >
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="font-bold">Reservasi Ruang Rapat</span>
						</div>
						<div class="panel-body">
							<div class="btn-group">
								<button class="btn btn-default" href data-toggle="tab" data-target="#tab_edit_1" ng-disabled="1==1">Add Reservasi Ruang Rapat</button>
								<button class="btn btn-default" href data-toggle="tab" data-target="#tab_edit_2" ng-disabled="1==1">Add Agenda Rapat</button>
							</div>

							<div class="tab-content p m-b-md b-t b-t-2x">
								<div role="tabpanel" class="tab-pane animated fadeIn active" id="tab_edit_1"><br/>	
									<div class="row">

										<div class="col-sm-6 m-b">
											<div class="form-group">
												<label class="control-label">No.Reservasi</label>
												<input type="text" class="form-control" disabled="">
											</div>

											<div class="form-group">
												<label>Tanggal Reservasi:</label>

												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input type="text" class="form-control pull-right" id="datepicker">
												</div>
												<!-- /.input group -->
											</div>
											<div class="form-group">
												<label class="control-label">Pemesan</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group">
												<label>Tanggal Rapat:</label>

												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input type="text" class="form-control pull-right" id="datepicker">
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
										<div class="col-sm-6 m-b">
											<div class="form-group">
												<label class="control-label">Lokasi Rapat</label>
												<select class="form-control">
													<option value="" disabled selected>Pilih Lokasi Rapat..</option>
													<option >ICON+ Trapesium</option>
													<option>ICON+ Cawang</option>
													<option>ICON+ Mampang</option>
												</select>
											</div>

											<div class="form-group">
												<label class="control-label">Ruang Rapat</label>
												<select class="form-control">
													<option value="" disabled selected>Pilih Lokasi Rapat..</option>
													<option >ICON+ Trapesium</option>
													<option>ICON+ Cawang</option>
													<option>ICON+ Mampang</option>
												</select>
											</div>
											<div class="form-group">
												<label class="control-label">Alamat</label>
												<input type="text" class="form-control"" disabled>
											</div>
											
											<div class="form-group">
												<label class="control-label">PIC Site</label>
												<select class="form-control">
													<option value="" disabled selected>Pilih PIC Site..</option>
													<option>Ella</option>
													<option>Tiara Lamsu</option>
													<option>Tiaraku</option>
												</select>
											</div>
											
											<div class="form-group">
												<label class="control-label">No.Tlp PIC</label>
												<input type="text" class="form-control"" disabled>
											</div>
											
											<div class="form-group">
												<label>Agenda Rapat</label>
												<textarea class="form-control" rows="3" placeholder="Masukkan Agenda Rapat ..."></textarea>
											</div>
											

											

										</div>




									</div>

								</div>

								<div role="tabpanel" class="tab-pane animated fadeIn " id="tab_edit_2" disabled="true"><br/>
									<div class="row">
									</div>					
									<div class="row">
										<div class="col-sm-6 m-b">
											<div class="form-group">
												<label class="control-label">No.Reservasi</label>
												<input type="text" class="form-control">

												<div class="form-group">
													<label>Tanggal Rapat:</label>

													<div class="input-group date">
														<div class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</div>
														<input type="text" class="form-control pull-right" id="datepicker" disabled="">
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
															<input type="text" class="form-control timepicker" disabled="">

															
														</div>
														<!-- /.input group -->
													</div>
													<!-- /.form group -->
												</div>

												<div class="bootstrap-timepicker">
													<div class="form-group">
														<label>Jam Selesai:</label>

														<div class="input-group">
															<div class="input-group-addon">
																<i class="fa fa-clock-o"></i>
															</div>
															<input type="text" class="form-control timepicker" disabled="">

															
														</div>
														<!-- /.input group -->
													</div>
													<!-- /.form group -->
												</div>

												<div class="form-group">
													<label class="control-label">Lokasi Rapat</label>
													<select class="form-control" disabled="">
														<option value="" disabled selected>Pilih Lokasi Rapat..</option>
														<option >ICON+ Trapesium</option>
														<option>ICON+ Cawang</option>
														<option>ICON+ Mampang</option>
													</select>
												</div>

												<label class="control-label">Ruang Rapat</label>
												<select class="form-control" disabled="">
													<option value="" disabled selected>Pilih Lokasi Rapat..</option>
													<option >ICON+ Trapesium</option>
													<option>ICON+ Cawang</option>
													<option>ICON+ Mampang</option>
												</select>

												<label>Agenda Rapat</label>
												<textarea class="form-control" rows="3" placeholder="Masukkan Agenda Rapat ..." disabled=""></textarea>


											</div>
											
											

										</div>
										<div class="col-sm-6 m-b">
											<div class="form-group">
												<label class="control-label">
													Jenis Agenda
												</label>
											</div>
											<div style="margin-left: 3px;">
												<label>
													<input type="radio" name="r1" class="minimal" checked>
													<label> Baru</label>
												</label>
												
												<label style="margin-left:7px">
													<input type="radio" name="r1" class="minimal">
													<label> Lanjutan</label>
												</label></br>
											</div>

											<div class="form-group">
												<label class="control-label">No.Agenda</label>
												<input type="text" class="form-control">
											</div>


											<div class="form-group">
												<label class="control-label">Jenis Rapat</label>
												<select class="form-control">
													<option value="" disabled selected>Pilih Jenis Rapat..</option>
													<option>Rapat Direksi</option>
													<option>Rapat OS</option>
													<option>Rapat Vendor</option>
												</select>

											</div>

											<div class="form-group">
												<div class="row" style="margin-left: 3px">
													<label>Agenda rapat berdasarkan: </label>

												</div>
											</div>

											<div class="form-group">
												<label class="control-label">Instansi</label>
												<input type="text" class="form-control">
											</div>

											<div class="form-group">
												<label class="control-label">Nomor Surat</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Tanggal Rapat:</label>

												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input type="text" class="form-control pull-right" id="datepicker">
												</div>
												<!-- /.input group -->
											</div>

											<div class="form-group">
												<label for="exampleInputFile">Lampiran Surat</label>
												<input type="file" id="exampleInputFile">

												<p class="help-block">Upload Surat (PDF,Word ,Dll)</p>
											</div>

										</div> <!-- end row -->
									</div> <!-- end tab panel -->
									<div class="modal-footer">



									</div>


								</div> 
							</div> 
						</div>
					</form>
				</div>
				<div class="modal-footer">

					<button type="button" class="btn btn-danger"><i class="fa fa-refresh" ></i> Reset</button>

					<button href data-toggle="tab" class="btn btn-info" ng-click="ctrl.SetCurrentPage(ctrl.currentPage - 1)" data-target="#tab_1" ng-show="ctrl.currentPage - 1 == 2" >Prev</button>



					<button href data-toggle="tab" class="btn btn-info" ng-click="ctrl.SetCurrentPage(ctrl.currentPage - 1)" data-target="#tab_2" ng-show="ctrl.currentPage - 1 == 3" >Next</button>

					<button type="button" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button>


				</div>
			</div>
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
