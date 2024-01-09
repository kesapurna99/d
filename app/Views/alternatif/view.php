<?= $this->extend('app-master') ?>
<?= $this->section('content') ?>
<form class="inline">
	<div class="form-group">
		<h3 style="margin-top: 0px;margin-bottom: 15px"><?=$title?></h3>
	</div>
	<div class="float-right">
		<a class="btn btn-sm btn-primary pull-left" href="/alternatif/add"><span class="fas fa-plus-square "></span> Tambah</a>
	</div>
	
		<div class="float-right">
			<button type="submit" class="btn btn-sm btn-success" ><span class="fas fa-refresh"></span> Perbarui</button>
		</div>
	
</form>
<div class="box box-danger">
	<div class="card-body">
		<div class="table-responsive">
			<table  class="table table-bordered" id="dataTable">
				<thead class="bg-info">
					<tr>
						<th>No</th>
						<th>Kode Alternatif</th>
						<th>Nama Alternatif</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no=1;
					foreach ($rows as $row):?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$row['kode_alternatif']?></td>
							<td><?=$row['nama_alternatif']?></td>
							<td>  
								<a class="btn btn-xs btn-warning" href="<?= base_url("alternatif/view_edit/".$row['kode_alternatif']); ?>"><span class="fa fa-edit"></span></a>
								<a class="btn btn-xs btn-danger" href="<?= base_url("alternatif/delete/".$row['kode_alternatif']); ?>" onclick="return confirm('Hapus data?')"><span class="fa fa-trash"></span></a></td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').DataTable();
		} );

		function reload_table(){
			$('#table').DataTable();
		}
	</script>

	<?= $this->endSection() ?>