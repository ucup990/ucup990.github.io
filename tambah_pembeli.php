<script type="text/javascript">
	document.title = "Tambah pembeli";
	document.getElementById('pembeli').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Tambah pembeli</h3>
				<form class="form-input" method="post" action="handler.php?action=tambah_pembeli">
					<input type="text" name="nama_pembeli" placeholder="Username pembeli" required="required">
					<input autocomplete="off" type="text" name="password" placeholder="Password" required="required">
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="pembeli.php" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>