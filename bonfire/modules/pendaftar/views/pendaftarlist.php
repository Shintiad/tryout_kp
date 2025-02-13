<head>
	<title><?php echo $pageTitle; ?></title>
</head>
<style>
	div#example1_filter {
		float: right;
	}
</style>
<section class="content container-fluid">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Pendaftar Pengajuan Guru</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body">
			
			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger" role="alert"><?php echo validation_errors('<p>', '</p>'); ?></div>
			<?php endif; ?>
			<?php if ($message = $this->session->flashdata('message')) : ?>
				<div class="alert alert-success" role="alert"><?php echo $message['message']; ?></div>
			<?php endif; ?>
			<div class="table-responsive">
				<table id="example1" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Sekolah</th>
							<th width="25%">Alamat Sekolah</th>
							<th>Email</th>
							<th>NIP</th>
							<th width="18%" colspan="4">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0;
						foreach ($pendaftaran as $row) : ?>
							<tr>
								<td><?php echo ++$no; ?></td>
								<td><?php echo $row->nama_sekolah; ?></td>
								<td><?php echo $row->alamat_sekolah; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->nip; ?></td>
                                <td>
                                <a href="<?php echo base_url('pendaftar/acc/' . $row->id_pendaftar_guru); ?>"><button class="btn btn-success"><i class="fa fa-check"></i> </button></a>
                                </td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>