<?php include "head.php" ?>
<?php
if (isset($_GET['action']) && $_GET['action'] == "tambah_petani") {
	include "tambah_petani.php";
} else if (isset($_GET['action']) && $_GET['action'] == "edit_petani") {
	include "edit_petani.php";
} else {
?>
	<script type="text/javascript">
		document.title = "Data petani";
		document.getElementById('users').classList.add('active');
	</script>

	<div class="content">
		<div class="padding">
			<div class="bgwhite">
				<div class="padding">
					<div class="contenttop">
						<div class="left">
							<a href="?action=tambah_petani" class="btnblue">Tambah petani</a>
						</div>
						<div class="both"></div>
					</div>
					<span class="label">Jumlah petani : <?= $root->show_jumlah_petani() ?></span>
					<table class="datatable" id="datatable" style="width: 600px;">
						<thead>
							<tr>
								<th width="10px">NO</th>
								<th>Username</th>
								<th>Status</th>
								<th>Tanggal Didaftarkan</th>
								<th width="60px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$root->tampil_petani();
							?>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function myconfirm() {
			confirm("Yakin Ingin Menghapus Barang?");
			return false;
		}
	</script>

<?php
}
include "foot.php" ?>