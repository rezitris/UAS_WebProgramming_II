<div class="container">
<div class="panel panel-default">
	<div class="panel-body">			
		<div class="form-group">
			<div class="col-md-12">
				<?= $this->session->flashdata('message'); ?>
			</div>
			<form action="<?= base_url('Myadmin/f_tambahdata');?>" method="post">				
				<div class="col-sm-12">
					<label for="nama">NPM </label> 		
					<input type="text" class="form-control" name="npm" maxlength="8" placeholder="Nomor Pokok Mahasiswa" onkeypress="return hanyaAngka(event);" required><br>
				</div>

				<div class="col-sm-12">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" maxlength="40" placeholder="Nama Lengkap" required><br>
				</div>

				<div class="col-sm-12">
				<label for="semester" required>Semester</label> 
				 	<select name="semester" class="form-control">
								<option value="1">Semester 1</option>
								<option value="2">Semester 2</option>				
								<option value="3">Semester 3</option>
								<option value="4">Semester 4</option>
								<option value="5">Semester 5</option>
								<option value="6">Semester 6</option>
								<option value="7">Semester 7</option>
								<option value="8">Semester 8</option>
								<option value="9">Semester 9</option>
								<option value="10">Semester 10</option>
							</select>

				<div class="col-sm-12">
					<br><center><button type="submit" onclick="runPopup()" class="btn btn-success">Save</button>
					<button type="reset" class="btn btn-info">Reset</button>
					<hr>
				</div>
				</div>		
			</form>
		</div>
	</div>
</div>
<script>
  $(function () {
    $("#mahasiswa").DataTable();
   
  });
</script>
	<table style="margin:20px auto;" id="mahasiswa" class="table table-striped table-bordered">
		<thead>
			
				<th>No</th>
				<th>Npm</th>
				<th>Nama</th>
				<th>Semester</th>
				<th>Aksi</th>
			</thead>
			<tbody>
			<?php		
			$no = 1;
			foreach($user as $u){
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $u->npm ?></td>
				<td><?= $u->nama ?></td>
				<td><?= $u->semester ?></td>
				<td>
					<a href="<?= base_url('Myadmin/editdata/')?><?= $u->id ?>" class="btn btn-info"><span class="fa fa-edit"></span>Edit Data</a>
					<a href="<?= base_url('Myadmin/hapusdata/')?><?= $u->id ?>" class="btn btn-danger" onclick="return confirmDialog();"><span class="fa fa-trash"></span> Delete</a>
					
				</td>
			</tr>
			<?php	
				}			
			?>
		</tbody>
	</table>
</div>