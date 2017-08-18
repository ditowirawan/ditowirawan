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

						<a class="btn btn-danger" href="<?php echo base_url() ?>index.php/admin/undangan_rapat"><i class="fa fa-arrow-circle-left" ></i>&nbsp &nbsp Kembali</a>
						<!-- <button type="button" class="btn btn-danger" > <i class="fa fa-arrow-circle-left" ></i>&nbsp &nbsp Kembali</button> -->
						
					</div>
				</div>

				<!-- BODI -->
				<div class="box-body">
					<div class="box">
						<div class="box-body">
							<div class="row">

								<!-- kiri -->
								<div class="col-md-6">
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
										<label>Judul Agenda</label>
										<textarea class="form-control" rows="3" placeholder="Masukkan Judul Agenda ..."></textarea>
									</div>
								</div>


								<!-- kanan -->

								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">No.Agenda</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">No.Surat</label>
										<input type="text" class="form-control">
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

								<div class="col-md-12">
									<label> Isi Undangan</label>

									<div class="box box-info">
										<div class="box-header">
											<!-- <h3 class="box-title">CK Editor
												<small>Advanced and full of features</small>
											</h3> -->
											<!-- tools box -->
											<div class="pull-right box-tools">
												<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
													<i class="fa fa-minus"></i></button>
													<!-- <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
													<i class="fa fa-times"></i></button> -->
												</div>
												<!-- /. tools -->
											</div>
											<!-- /.box-header -->
											<div class="box-body pad">
												<form>
													<textarea id="editor1" name="editor1" rows="10" cols="80">
														Dengan hormat,

														Sehubungan dengan Rapat Koordinasi Batubara bulan Juli 2017, bersama ini mengharapkan kehadiran Bapak/Ibu untuk menghadiri Rapat Koordinasi Batubara yang akan diselenggarakan pada :

													</textarea>
												</form>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										
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
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Alamat Ruang</label>
											<select class="form-control" style="width: 100%;">
												<option value="" disabled selected>Pilih Ruang..</option>
												<option >APKT</option>
												<option>SHIDOKU</option>
												<option>AP2T</option>
											</select>
										</div>

									</div>

									<div class="col-md-12">
										<div class="box box-info">
											<div class="box-header">
											<!-- <h3 class="box-title">CK Editor
												<small>Advanced and full of features</small>
											</h3> -->
											<!-- tools box -->
											<div class="pull-right box-tools">
												<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
													<i class="fa fa-minus"></i></button>
													<!-- <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
													<i class="fa fa-times"></i></button> -->
												</div>
												<!-- /. tools -->
											</div>
											<!-- /.box-header -->
											<div class="box-body pad">
												<form>
													<textarea id="editor2" name="editor2" rows="10" cols="80">
														Dihadiri oleh Penanggung Jawab Perusahaan yang berwenang mengambil keputusan.
														Penyerahan realisasi pengiriman bulan Juni 2017 dan jadwal pasokan bulan Juli dan Agustus 2017 paling lambat sebelum rapat dimulai.

														Demikian atas perhatian dan kehadirannya kami ucapkan terima kasih.

														Salam,

														Sugeng Riyadi
														Sekretariat Divisi QA 
														PT Indonesia Comnet Plus

													</textarea>
												</form>
											</div>

											
										</div>
										<div class="row">
											<div class="col-md-8" style="margin-left: 70px"></div>
											<div class="col-md-1">
												<div>
													<button type="button" class="btn btn-success"><i ></i> Preview</button>
												</div>
											</div>
											<div class="col-md-1">
												<div>
													<button type="button" class="btn btn-danger"><i class="fa fa-refresh" ></i> Reset</button>
												</div>
											</div>
											<div class="col-md-1">
												<div>
													<button type="button" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
	</div>



	


