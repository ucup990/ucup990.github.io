<script type="text/javascript">
	document.title = "Edit petani";
	document.getElementById('users').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Edit petani</h3>
				<form class="form-input" method="post" action="handler.php?action=edit_petani">
					<?php $f = $root->edit_petani($_GET['id_petani']) ?>
					<input type="hidden" name="id" value="<?= $f['id'] ?>">
					<input type="text" name="nama_petani" placeholder="Username petani" required="required" value="<?= $f['username'] ?>">
					<input autocomplete="off" type="text" name="password" placeholder="Password">
					<label>* Password tidak bisa ditampikan karena terenkripsi</label><br>
					<label>* Kosongkan form password jika tidak ingin merubah password</label><br><br>
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="users.php" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>