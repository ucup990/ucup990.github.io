<script type="text/javascript">
	document.title = "Tambah petani";
	document.getElementById('users').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Tambah petani</h3>
				<form class="form-input" method="post" action="handler.php?action=tambah_petani">
					<input type="text" name="nama_petani" placeholder="Username petani" required="required">
					<input autocomplete="off" type="text" name="password" placeholder="Password" required="required">
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="users.php" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>