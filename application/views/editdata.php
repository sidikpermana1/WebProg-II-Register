<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">			
			<div class="form-group">
				
				<form action="<?= base_url('Myadmin/f_editdata');?>" method="post">
					<?php 
						if(!empty($user)){
				 	?>
					<?php foreach($user as $u){ ?>		
					<input name="id" maxlength="12" value="<?= $u->id; ?>" hidden>
					<div class="col-md-12">
						<center><h1>Data Mahasiswa</h1></center>
						<hr>
					</div>
					<div class="col-sm-12">
						<label for="nama">npm: </label> 	
						
						<input type="test" name="npm" class="form-control" maxlength="8" placeholder="Nomor Induk Mahasiswa" value="<?= $u->npm; ?>"><br>
					</div>

					<div class="col-sm-12">
						<label for="nama">nama: </label> 		
						<input type="text" name="nama" maxlength="40" class="form-control" placeholder="Nama Lengkap" value="<?= $u->nama;?>"><br>
					</div>

					<div class="col-sm-12">
					<label for="semester">semester:</label> 	
					<select name="semester" class="form-control" value="<?= $u->semester; ?>">
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
					</div>
					<div class="col-sm-6">
						<button type="submit" onclick="runPopup()" class="btn btn-success">Submit</button>
						<button type="#" class="btn btn-danger">Cancel</button>
					</div>
					<?php } ?>

				<?php } else{
					// redirect ('Myadmin/error');
					echo "Data Kosong! <center>";
				}
				?>
				</form>
			</div>
		</div>
	</div>
</div>
