<div class="container">
<div class="panel panel-default">
	<div class="panel-body">			
		<div class="form-group">
			<div class="col-md-12">
				<?= $this->session->flashdata('message'); ?>
			</div>
			<form action="<?= base_url('Myadmin/f_tambahdata');?>" method="post">				
				<div class="col-sm-12">
					<label for="nama">npm: </label> 		
					<!-- error handling pengetikan hanya khusus untuk angka karena di database bersifat interger -->

					<!-- error handling/validasi inputan max length-->
					<input type="text" class="form-control" name="npm" maxlength="8" placeholder="Nomor Induk Mahasiswa" onkeypress="return hanyaAngka(event);" required><br>
				</div>

				<div class="col-sm-12">
					<label for="nama">nama:</label>
					<input type="text" class="form-control" name="nama" maxlength="40" placeholder="Nama Lengkap" required><br>
				</div>

				<div class="col-sm-12">
				<label for="semester" required>semester:</label> 
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
							</select><br>

				<div class="col-sm-12">
					<hr><br><center><button type="submit" onclick="runPopup()" class="btn btn-success">Simpan</button>
					<button type="#" class="btn btn-danger">Cancel</button>
				</div>
				</div>		
			</form>
		</div>
	</div>
</div>

	<table style="margin:20px auto;" class="table">
		<tbody>
			<tr>
				<td>No</td>
				<td>Npm</td>
				<td>Nama</td>
				<td>Semester</td>
				<td>Aksi</td>
			</tr>
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
					<?= anchor('Myadmin/editdata/'.$u->id,'<span class="glyphicon glyphicon-pencil"> </span>');?>
					<!-- error handling untuk membuat confirmasi dialog pada sebuah button delete -->
					<?= anchor('Myadmin/hapusdata/'.$u->id,'<span class="glyphicon glyphicon-trash"></span>', array('class'=>'delete', 'onclick'=>"return confirmDialog();"));?>
				</td>
			</tr>
			<?php	
				}			
			?>
		</tbody>
	</table>
</div>