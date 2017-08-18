<!-- ini adalah header content -->
<div>
	<div class="row">
		<div class="col-md-9"><h3><b>Pelaksanaan Rapat</b></h3></div>
		<div class="col-md-3">
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Pelaksanaan Rapat</li>
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

						<a class="btn btn-danger" href="<?php echo base_url() ?>index.php/admin/pelaksanaan_rapat"><i class="fa fa-arrow-circle-left" ></i>&nbsp &nbsp Kembali</a>
						<!-- <button type="button" class="btn btn-danger" > <i class="fa fa-arrow-circle-left" ></i>&nbsp &nbsp Kembali</button> -->
						
					</div>
				</div>

				<!-- START CUSTOM TABS -->
				<!-- Custom Tabs -->
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">

						<li class="active"><a href="#tab_1" data-toggle="tab">Pembahasan Rapat</a></li>
						<li><a href="#tab_2" data-toggle="tab">Peserta Meeting</a></li>
						<li><a href="#tab_3" data-toggle="tab">Agenda Rapat</a></li>
						<li><a href="#tab_4" data-toggle="tab">Tindak Lanjut Agenda</a></li>
						<li><a href="#tab_5" data-toggle="tab">Data Pendukung</a></li>
					</ul>

					

					<div class="tab-content">
						<div class="tab-pane active" id="tab_1">
							<div class="row">
								<!-- kiri -->
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">No.Agenda</label>
										<input type="text" class="form-control">
									</div>
									<!-- <div class="form-group">
										<label class="control-label">No.Surat</label>
										<input type="text" class="form-control">
									</div> -->
									<div class="form-group">
										<label class="control-label">Materi Agenda</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Pembicara</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Notulen</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Jenis Rapat</label>
										<input type="text" class="form-control" disabled="">
									</div>
								</div>


								<!-- kanan -->
								<div class="col-md-6">
									
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
											<option value="" disabled selected>Pilih Ruang Rapat..</option>
											<option >ICON+ Trapesium</option>
											<option>ICON+ Cawang</option>
											<option>ICON+ Mampang</option>
										</select>
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
								</div>

							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										
									</div>
								</div>
							</div>

							<div class="box-footer">
								<button type="button" class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-circle-right"></i>&nbsp &nbsp Next</button>
								<button type="button" class="btn btn-danger" style="float: right; margin-right: 10px"><i class="fa fa-refresh" ></i>&nbsp &nbsp Reset</button>
								
							</div>
						</div>
						
						<!-- /.tab-pane -->

						<div class="tab-pane" id="tab_2">
							<div class="box-header">
								<div class="text-right">
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="margin-right: 5px"> <i class="fa fa-plus" ></i>&nbsp &nbsp Add Peserta</button>
									<button type="button" class="btn btn-warning"> <i class="fa fa-print" ></i>&nbsp &nbsp Print</button>
									<!-- 						<button type="button" class="btn btn-info"><i class="fa  fa-download"></i> Export</button> --> 
								</div>
							</div>
							<div class="box-body">
								<div class="box">
									<div class="box-body">
										<table id="example1" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>No.</th>
													<th>Nama</th>
													<th>Divisi</th>
													<th>Email</th>
													<th>No.Telepon</th>
													<th>Dikirim ke</th>
													<th>TTD MOM</th>

													<th class="text-center">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Budi Sudjanto</td>
													<td>STI</td>
													<td>budisud@gmail.com</td>
													<td>091000</td>
													<td>
														<div class="checkbox">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</td>
													<td>
														<div class="checkbox">
															<label>
																<input type="checkbox">
																&nbsp &nbsp TTD 1
															</label>
														</div>
													</td>
													<td align="center">


													</button>&nbsp &nbsp
													<button type="button" class="btn btn-danger
													" data-toggle="modal" data-target="#myModalDelete" >
													<i data-placement="bottom"  title="Hapus" data-toggle="tooltip"  class="fa fa-times" ></i>
												</button></td>

											</tr>
											<tr>
												<td>2</td>
												<td>Purnomo</td>
												<td>EX-STI</td>
												<td>purnomo@gmail.com</td>
												<td>091000</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox">
														</label>
													</div>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox">
															&nbsp &nbsp TTD 2
														</label>
													</div>
												</td>
												<td align="center">


												</button>&nbsp &nbsp
												<button type="button" class="btn btn-danger
												" data-toggle="modal" data-target="#myModalDelete" >
												<i data-placement="bottom"  title="Hapus" data-toggle="tooltip"  class="fa fa-times" ></i>
											</button></td>
										</tr>


										<tr>
											<td>3</td>
											<td>Trisunu</td>
											<td>STI</td>
											<td>tri@gmail.com</td>
											<td>0813550</td>
											<td>
												<div class="checkbox">
													<label>
														<input type="checkbox">
													</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<label>
														<input type="checkbox">
														&nbsp &nbsp  TTD 3
													</label>
												</div>
											</td>
											<td align="center">


											</button>&nbsp &nbsp
											<button type="button" class="btn btn-danger
											" data-toggle="modal" data-target="#myModalDelete" >
											<i data-placement="bottom"  title="Hapus" data-toggle="tooltip"  class="fa fa-times" ></i>
										</button></td>
									</tr>


								</tbody>
							</table>
						</div>

					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-circle-right"></i>&nbsp &nbsp Next</button>

						<button type="button" class="btn btn-primary" style="float: right;margin-right: 10px"><i class="fa fa-arrow-circle-left"></i>&nbsp &nbsp Previous</button>

					</div>
				</div>
			</div>
			<!-- /.tab-pane -->
			<div class="tab-pane" id="tab_3">

				<div class="row">

					<div class="col-md-12">
						<div class="form-group">
							<label>Agenda Rapat     :</label>
							<textarea class="form-control" rows="3" placeholder="Masukkan Agenda Rapat ..."></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Rincian Rapat     :</label>
							<textarea class="form-control" rows="3" placeholder="Masukkan Agenda Rapat ..."></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<button type="button" class="btn btn-success" style="float: right; margin-right: 30px"> <i class="" ></i>Submit</button>
					</div>

				</div>
				<hr>
				
				<div class="box-body">
					<div class="box">
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Agenda</th>
										<th>Rincian Rapat</th>
										<th>PIC TL</th>
										<th>TL</th>
										<th>Tipe TL</th>

										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Pembuatan Mockup</td>
										<td>
											1.1 Mockup AGO
										</td>
										<td>Letjen Maul</td>
										<td>Pembahasan</td>
										<td>
											Keputusan Direksi
										</td>
										<td align="center">


										</button>&nbsp &nbsp
										<button type="button" class="btn btn-danger
										" data-toggle="modal" data-target="#myModalDelete" >
										<i data-placement="bottom"  title="Hapus" data-toggle="tooltip"  class="fa fa-times" ></i>
									</button></td>

								</tr>
								<tr>
									<td>2</td>
									<td>Pembahasan Infrastruktur</td>
									<td>
										1.1 Infrastruktur
									</td>
									<td>Raul Gonzales</td>
									<td>Pembahasan</td>
									<td>
										Keputusan Direksi
									</td>
									<td align="center">


									</button>&nbsp &nbsp
									<button type="button" class="btn btn-danger
									" data-toggle="modal" data-target="#myModalDelete" >
									<i data-placement="bottom"  title="Hapus" data-toggle="tooltip"  class="fa fa-times" ></i>
								</button></td>

							</tr>


							<tr>
								<td>3</td>
								<td>Kontrak</td>
								<td>
									1.1 Kontrak AGO
								</td>
								<td>Jendral</td>
								<td>Pembahasan</td>
								<td>
									Keputusan Direksi
								</td>
								<td align="center">


								</button>&nbsp &nbsp
								<button type="button" class="btn btn-danger
								" data-toggle="modal" data-target="#myModalDelete" >
								<i data-placement="bottom"  title="Hapus" data-toggle="tooltip"  class="fa fa-times" ></i>
							</button></td>

						</tr>


					</tbody>
				</table>
			</div>
		</div>
		<div class="box-footer">
			<button type="button" class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-circle-right"></i>&nbsp &nbsp Next</button>

			<button type="button" class="btn btn-primary" style="float: right;margin-right: 10px"><i class="fa fa-arrow-circle-left"></i>&nbsp &nbsp Previous</button>

			<button type="button" class="btn btn-warning" style="float: right;margin-right: 10px"><i class="fa fa-eye"></i>&nbsp &nbsp View</button>

		</div>
	</div>



</div>

<div class="tab-pane" id="tab_4"><div class="box-body">
	<div class="box">
		<div class="box-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Agenda</th>
						<th>Rincian Rapat</th>
						<th>Target</th>
						<th>PIC TL</th>
						<th>TL</th>
						<th>Tipe TL</th>
						
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Pembuatan Mockup</td>
						<td>1.1 Pihak Icon + sudah demo aplikasi Rekam</td>
						<td>30/12/2017</td>
						<td>Bayufrio</td>
						<td>Continue</td>
						<td>Bahas Ulang</td>
						
						<td align="center">


						</button>&nbsp &nbsp
						<button type="button" class="btn btn-danger
						" data-toggle="modal" data-target="#myModalDelete" >
						<i data-placement="bottom"  title="Hapus" data-toggle="tooltip"  class="fa fa-times" ></i>
					</button></td>

				</tr>
				<tr>
					<td>1</td>
					<td>Pembuatan Mockup</td>
					<td>1.1 Pihak Icon + sudah demo aplikasi Rekam</td>
					<td>30/12/2017</td>
					<td>Bayufrio</td>
					<td>Continue</td>
					<td>Bahas Ulang</td>

					<td align="center">


					</button>&nbsp &nbsp
					<button type="button" class="btn btn-danger
					" data-toggle="modal" data-target="#myModalDelete" >
					<i data-placement="bottom"  title="Hapus" data-toggle="tooltip"  class="fa fa-times" ></i>
				</button></td>



				<tr>
					<td>1</td>
					<td>Pembuatan Mockup</td>
					<td>1.1 Pihak Icon + sudah demo aplikasi Rekam</td>
					<td>30/12/2017</td>
					<td>Bayufrio</td>
					<td>Continue</td>
					<td>Bahas Ulang</td>

					<td align="center">


					</button>&nbsp &nbsp
					<button type="button" class="btn btn-danger
					" data-toggle="modal" data-target="#myModalDelete" >
					<i data-placement="bottom"  title="Hapus" data-toggle="tooltip"  class="fa fa-times" ></i>
				</button></td>


			</tbody>
		</table>
	</div>
	<div class="box-footer">

		<button type="button" class="btn btn-success" style="float: right;margin-right: 10px"><i class="fa fa-save"></i>&nbsp &nbsp Simpan</button>

		<button type="button" class="btn btn-primary" style="float: right;margin-right: 10px"><i class="fa fa-arrow-circle-left"></i>&nbsp &nbsp Previous</button>

		

	</div>
</div>
<!-- /.tab-pane -->
</div>
<!-- /.tab-content -->
</section>
</div>



<!-- MODAL PESERTA MEETING -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Peserta Meeting</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label for="text">Nama</label>
							<input type="text" class="form-control" id="text" placeholder="Masukkan Nama..">
						</div>
						
						<div class="form-group">
							<label>Jabatan</label>
							<select class="form-control" style="width: 100%;">
								<option value="" disabled selected>Pilih Jabatan..</option>
								<option >PLT Direktur Utama</option>
								<option >PLT Direktur Perencanaan & Operasi</option>
								<option >PLT Direktur Niaga</option>
								<option >PLT Direktur Keuangan & SDM</option>
								<option >Sekretaris Perusahaan</option>
								<option >Vice President</option>
								<option >Kepala Satuan Audit Internal (KS)</option>
								<option >General Manager</option>
								<option >Manager</option>
								<option >Peserta lain</option>
							</select>
						</div>
						<div class="form-group">
							<label for="text"></label>
							<input type="text" class="form-control" id="text" placeholder="Diisi selain Dirut & Sekper..">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email..">
						</div>
						<div class="form-group">
							<label for="text">Nomor Telepon</label>
							<input type="text" class="form-control" id="text" placeholder="Masukkan Nomor Telepon..">
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


<!-- MODAL Data Pendukung-->
<div class="modal fade" id="myModalData" tabindex="-1" role="dialog" aria-labelledby="myModalData" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Data Pendukung</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label for="text">Nama File</label>
							<input type="text" class="form-control" id="text" placeholder="Masukkan Nama..">
						</div>
						
						<div class="form-group">
							<label for="exampleInputFile">Lampiran Surat</label>
							<input type="file" id="exampleInputFile">

							<p class="help-block">Upload Surat (PDF,Word ,Dll)</p>
						</div>
						<div class="form-group">
							<label for="text">Jenis File</label>
							<input type="text" class="form-control" id="text" placeholder="Jenis File..">
						</div>
						
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button>
			</div>
		</div>
	</div>
</div>

