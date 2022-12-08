<?php include "head.php" ?>
<?php
if (isset($_GET['action']) && $_GET['action'] == "tambah_pembeli") {
	include "tambah_pembeli.php";
} else if (isset($_GET['action']) && $_GET['action'] == "edit_pembeli") {
	include "edit_pembeli.php";
} else {
?>
	<script type="text/javascript">
		document.title = "pembeli";
		document.getElementById('pembeli').classList.add('active');
	</script>

	<div class="content">
		<div class="padding">
			<div class="bgwhite">
				<div class="padding">
					<div class="contenttop">
						<div class="left">
							<a href="?action=tambah_pembeli" class="btnblue">Tambah pembeli</a>
						</div>
						<div class="both"></div>
					</div>
					<span class="label">Jumlah pembeli : <?= $root->show_jumlah_pembeli() ?></span>
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
							$root->tampil_pembeli();
							?>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function myconfirm() {
			confirm("Yakin Ingin Menghapus Pembeli?");
			return false;
		}
	</script>

<?php
}
include "foot.php" ?>