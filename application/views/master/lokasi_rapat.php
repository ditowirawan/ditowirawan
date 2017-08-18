<!-- ini adalah header content -->
<div>
	<div class="row">
		<div class="col-md-9"><h3><b>Master Lokasi Rapat</b></h3></div>
		<div class="col-md-3">
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Master Lokasi Rapat</li>
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
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" ></i>&nbsp &nbsp Add Lokasi Rapat</button>
						<!-- <button type="button" class="btn btn-warning"> <i class="fa fa-print" ></i></button>
						<button type="button" class="btn btn-info"><i class="fa  fa-download"></i> Export</button>  -->
					</div>
				</div>
				<div class="box-body">
					<div class="box">
						<!-- /.box-header -->
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Kode Lokasi</th>
										<th>Lokasi Rapat</th>
										<th>Alamat</th>
										<th>Koordinat X</th>
										<th>Koordinat Y</th>
										<th class="text-center">Action</th>
										<!-- <th> </th> -->

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>B216</td>
										<td>Cawang</td>
										<td>Jl.Cawang Awang</td>
										<td>212444.22</td>
										<td>321112.81</td>
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
										<td>C316</td>
										<td>Mampang</td>
										<td>Jl.Mampang Angkang</td>
										<td>25555444.22</td>
										<td>87171112.81</td>
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
										<td>V1P</td>
										<td>Mampang</td>
										<td>Jl.Direbut Suami V</td>
										<td>25321144.22</td>
										<td>87899112.81</td>
										<td align="center">
											<button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#myModalEdit">
												<i data-placement="bottom" data-toggle="tooltip" title="Edit Data" class="fa fa-pencil-square-o" ></i></button>

											</button>&nbsp &nbsp
											<button type="button" class="btn btn-danger
											" data-toggle="modal" data-target="#myModalDelete" >
											<i data-placement="bottom"  title="Non Aktif" data-toggle="tooltip"  class="fa fa-minus-circle" ></i>
										</button></td>
									</tr>

								</tfoot>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
					<div class="box-footer">
					</div>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Master Lokasi Rapat</h4>
								</div>
								<div class="modal-body">
									<form role="form">
										<div class="box-body">
											<div class="form-group">
												<label for="text">Kode Lokasi</label>
												<input type="text" class="form-control" id="text" placeholder="Masukkan Kode Lokasi..">
											</div>
											<div class="form-group">
												<label>Lokasi Rapat</label>
												<select class="form-control" style="width: 100%;">
													<option value="" disabled selected>Pilih Lokasi Rapat..</option>
													<option >ICON+ Trapesium</option>
													<option>ICON+ Cawang</option>
													<option>ICON+ Mampang</option>
                    <!--<option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>-->
                </select>
            </div>
            <div class="form-group">
            	<label>Alamat</label>
            	<textarea class="form-control" rows="3" placeholder="Masukkan Alamat ..."></textarea>
            </div>
            <div class="form-group">
            	<label for="text">Koordinat</label>
            	<input type="text" class="form-control" id="text" placeholder="Masukkan Koordinat X ..">
            </div>
            <div class="form-group">
            	<input type="text" class="form-control" id="text" placeholder="Masukkan Koordinat Y ..">
            </div>
            <div class="form-group">
            	<label>PIC Site</label>
            	<select class="form-control" style="width: 100%;">
            		<option value="" disabled selected>Pilih PIC Site..</option>
            		<option>Elo</option>
            		<option>Ki Hajar Dewantara</option>
            		<option>Ingo</option>
                    <!--<option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>-->
                </select>
            </div>
            <div class="form-group">
            	<label for="text">No. Telp PIC</label>
            	<input type="text" class="form-control" id="text" placeholder="Masukkan No.Telepon..">
            </div>


                <!--<div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
              </div>-->
                <!--<div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
              </div>-->
          </div>
          <!-- /.box-body -->
      </form>
  </div>
  <div class="modal-footer">
  	<button type="button" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button>
  </div>








</div>

</div>
</div>
</section>
</div>

<!-- MODAL Edit-->
<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Master Lokasi Rapat</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label for="text">Kode Lokasi</label>
							<input type="text" class="form-control" id="text" disabled placeholder="Masukkan Kode Lokasi..">
						</div>
						<div class="form-group">
							<label>Lokasi Rapat</label>
							<select class="form-control" style="width: 100%;">
								<option value="" disabled selected>Pilih Lokasi Rapat..</option>
								<option >ICON+ Trapesium</option>
								<option>ICON+ Cawang</option>
								<option>ICON+ Mampang</option>
                    <!--<option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>-->
                </select>
            </div>
            <div class="form-group">
            	<label>Alamat</label>
            	<textarea class="form-control" rows="3" placeholder="Masukkan Alamat ..."></textarea>
            </div>
            <div class="form-group">
            	<label for="text">Koordinat</label>
            	<input type="text" class="form-control" id="text" placeholder="Masukkan Koordinat X ..">
            </div>
            <div class="form-group">
            	<input type="text" class="form-control" id="text" placeholder="Masukkan Koordinat Y ..">
            </div>
            <div class="form-group">
            	<label>PIC Site</label>
            	<select class="form-control" style="width: 100%;">
            		<option value="" disabled selected>Pilih PIC Site..</option>
            		<option>Elo</option>
            		<option>Ki Hajar Dewantara</option>
            		<option>Ingo</option>
                    <!--<option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>-->
                </select>
            </div>
            <div class="form-group">
            	<label for="text">No. Telp PIC</label>
            	<input type="text" class="form-control" id="text" placeholder="Masukkan No.Telepon..">
            </div>


                <!--<div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
              </div>-->
                <!--<div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
              </div>-->
          </div>
          <!-- /.box-body -->
      </form>
  </div>
  <div class="modal-footer">
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

