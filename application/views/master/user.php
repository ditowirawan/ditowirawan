<div>
	<div class="row">
		<div class="col-md-9"><h3><b>Master User</b></h3></div>
		<div class="col-md-3">
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Master User</li>
			</ol>
		</div>
	</div>
</div>
<section class="content">
	<div class="row">
		<div class="box box-solid">
			<div class="box-header">
				<div class="text-right">
					<button type="button" class="btn btn-success" onclick="subdir()" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" ></i>&nbsp &nbsp Add User</button>
						<!-- <button type="button" class="btn btn-warning"> <i class="fa fa-print" ></i></button>
						<button type="button" class="btn btn-info"><i class="fa  fa-download"></i> Export</button>  -->
					</div>
				</div>

				<!-- BODI -->
				<div class="box-body">
					<div class="box">
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped table-responsive
							">
							<thead>
								<tr>
									<th class="text-center">No.</th>
									<th class="text-center">NIP</th>
									<th class="text-center">Nama Pegawai</th>
									<th class="text-center">Email</th>
									<th class="text-center">Sub Direktorat</th>
									<th class="text-center">Divisi</th>
									<th class="text-center">Jabatan</th>
									<th class="text-center">No.Tlp</th>
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>


								<?php 
								$nomor=1;
								foreach ($user['data'] as $row): ?>
								<tr>
									<td class="text-center"><?php echo $nomor;?></td>
									<td><?php echo $row['nip'] ?></td>
									<td><?php echo $row['namaPegawai'] ?></td>
									<td><?php echo $row['email'] ?></td>
									<td><?php echo $row['subDirektorat'] ?></td>
									<td><?php echo $row['divisi'] ?></td>
									<td><?php echo $row['jabatan'] ?></td>
									<td><?php echo $row['phoneNumber'] ?></td>

									<td class="text-center">
										<?php if ($row['status']=="Aktif")

										{?>

										<span class="label label-success"><?php echo $row['status'];?></span>

										<?php } else 

										{ ?>
										<span class="label label-danger"><?php echo $row['status'];?></span>
										<?php }
										?>
									</td>




									<td align="center">
										<button type="button" id="coba" class="btn btn-primary" data-toggle="modal"  data-target="#myModalEdit" onClick="edit(<?php echo $row['nip'] ?>)">
											<i data-placement="bottom" data-toggle="tooltip" title="Edit Data" class="fa fa-pencil-square-o" ></i></button>

										</button>&nbsp &nbsp

										<?php if ($row['status']=="Aktif")
										{?>

										<button type="button" class="btn btn-danger
										" data-toggle="modal" data-target="#myModalDelete" >
										<i data-placement="bottom"  title="Non Aktif" data-toggle="tooltip"  class="fa fa-minus-circle" ></i>
									</button>

									<?php } else 

									{ ?>
									<button type="button" class="btn btn-success
									" data-toggle="modal" data-target="#myModalDelete" >
									<i data-placement="bottom"  title="Aktif" data-toggle="tooltip"  class="fa fa-check-circle" ></i>
								</button>

								<?php } ?>

							</td>

						</tr>
						<?php
						$nomor++;
						endforeach; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
</section>




<!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Master User</h4>
			</div>
			<div class="modal-body">
				<form role="form" action="<?php echo base_url(). 'index.php/masteruser/tambahuser'; ?>" method="post">
					<div class="box-body">
						<div class="form-group">
							<label for="text">NIP</label>
							<input type="text" class="form-control" id="nip" placeholder="Masukkan NIP.." name="in_nip">
						</div>
						<div class="form-group">
							<label for="text">Nama Depan</label>
							<input type="text" class="form-control" id="firstname" placeholder="Masukkan Nama Depan.." name="in_first_name">
						</div>
						<div class="form-group">
							<label for="text">Nama Belakang</label>
							<input type="text" class="form-control" id="lastname" placeholder="Masukkan Nama Belakang.." name="in_last_name">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email.." name="in_mail">
						</div>
						<div class="form-group">
							<label>Sub Direktorat</label>
							<select class="form-control" id="edit_subdir" name= "in_subdir" style="width: 100%;">
								<option value="" disabled selected>Pilih Sub Direktorat..</option>
								<?php 
								foreach ($combo['data'] as $c) { ?>
								<option value="<?php echo $c['kodeSubdir'] ?>"><?php echo $c['namaSubdir'] ?></option>
								<?php	}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Divisi</label>
							<select class="form-control" id="divisi" name="in_divisi" style="width: 100%;">
								<option value="" disabled selected>Pilih Divisi..</option>
								<option value="1">BANG 1</option>
								<option value="2">BANG 2</option>
								<option value="3">BANG 3</option>
							</select>
						</div>
						<div class="form-group">
							<label>Jabatan</label>
							<select class="form-control" id="jabatan" name="in_jabatan" style="width: 100%;">
								<option value="" disabled selected>Pilih Jabatan..</option>
								<option value="1">BANG 1</option>
								<option value="2">BANG 2</option>
							</select>
						</div>
						<div class="form-group">
							<label for="text">Nomor Telepon</label>
							<input type="text" class="form-control" id="phonenumber" placeholder="Masukkan Nomor Telepon.." name=in_tlp>
						</div>
						<div class="form-group">
							<label>Level User</label>
							<select class="form-control" id="level" name="in_level" style="width: 100%;">
								<option value="" disabled selected>Pilih Level User..</option>
								<option value="1">Admin</option>
								<option value="2">Management</option>
								<option value="3">Staff</option>
							</select>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger"><i class="fa fa-refresh" ></i> Reset</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- MODAL Edit-->
<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Master User</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label for="text">NIP</label>
							<input type="text" class="form-control" id="edit_nip" placeholder="Masukkan NIP.." name="in_nip" readonly="readonly">
						</div>
						<div class="form-group">
							<label for="text">Nama Depan</label>
							<input type="text" class="form-control" id="edit_firstname" placeholder="Masukkan Nama Depan.." name="in_first_name">
						</div>
						<div class="form-group">
							<label for="text">Nama Belakang</label>
							<input type="text" class="form-control" id="edit_lastname" placeholder="Masukkan Nama Belakang.." name="in_last_name">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="edit_exampleInputEmail1" placeholder="Masukkan email.." name="in_mail" readonly="readonly">
						</div>
						<div class="form-group">
							<label>Sub Direktorat</label>
							<select class="form-control" id="edit_subdir_edit" name= "edit_subdir_edit" style="width: 100%;">
								<option value="" disabled selected>Pilih Sub Direktorat..</option>
								<?php 
								foreach ($combo['data'] as $c) { ?>
								<option value="<?php echo $c['kodeSubdir'] ?>"><?php echo $c['namaSubdir'] ?></option>
								<?php	}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Divisi</label>
							<select onSelected = "divisi()" class="form-control" id="edit_divisi" name="in_divisi" style="width: 100%;">
								<option value="" disabled selected>Pilih Divisi..</option>
								
							</select>
						</div>
						<div class="form-group">
							<label>Jabatan</label>
							<select class="form-control" id="edit_jabatan" name="in_jabatan" style="width: 100%;">
								<option value="" disabled selected>Pilih Jabatan..</option>
								<option value="1">BANG 1</option>
								<option value="2">BANG 2</option>
							</select>
						</div>
						<div class="form-group">
							<label for="text">Nomor Telepon</label>
							<input type="text" class="form-control" id="edit_phonenumber" placeholder="Masukkan Nomor Telepon.." name=in_tlp>
						</div>
						<div class="form-group">
							<label>Level User</label>
							<select class="form-control" id="in_level2" name="in_level2" style="width: 100%;">
								<option value="" disabled selected>Pilih Level User..</option>
								<option value="1">Admin</option>
								<option value="2">Management</option>
								<option value="3">Staff</option>
							</select>
						</div>
					</div>
				</form>
			</div>	
			<div class="modal-footer">
				<button type="button" class="btn btn-danger"><i class="fa fa-refresh" ></i> Reset</button>
				<button type="submit" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button>
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


<script type="text/javascript">
	function edit(nip){
		var obj = <?php echo json_encode($user['data']); ?> ;
		console.log(obj);
		var filteredData = obj.filter(obj => obj.nip == nip)
		console.log(filteredData);
		document.getElementById('edit_nip').value = filteredData[0].nip;
		document.getElementById('edit_exampleInputEmail1').value = filteredData[0].email;
		document.getElementById('edit_phonenumber').value = filteredData[0].phoneNumber;
		document.getElementById('edit_firstname').value = filteredData[0].namaDepan;
		document.getElementById('edit_lastname').value = filteredData[0].namaBelakang;
		document.getElementById('edit_subdir_edit').value = "1";
		document.getElementById('edit_jabatan').value = "2";
		document.getElementById('in_level2').value = "1";
	}
	function Subdir(){
		window.location.href();
		var obj = <?php echo json_encode($user['data']); ?> ;
		console.log(obj);
		var filteredData = obj.filter(obj => obj.nip == nip)
		console.log(filteredData);
		document.getElementById('edit_nip').value = filteredData[0].nip;
		document.getElementById('edit_exampleInputEmail1').value = filteredData[0].email;
		document.getElementById('edit_phonenumber').value = filteredData[0].phoneNumber;
		document.getElementById('edit_firstname').value = filteredData[0].namaDepan;
		document.getElementById('edit_lastname').value = filteredData[0].namaBelakang;
	}
</script>
