<div class="flash-data" data-flashdataok="<?php echo $this->session->flashdata('berhasil');?>"></div>
<div class="row">
	<div class="col-md-12">
		<h4>Daftar Materi yang di ampu.!</h4>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
		<table id="example1" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th width="50" align="center">No</th>
					<th width="200">Nama Mapel</th>
                    <th width="500">Deskripsi</th>
                    <th width="100">Kelas</th>
                    <th> Action</th>
				</tr>
			</thead>
			<tbody>
                <?php 
                $no=1;
                    foreach ($data_mat_pel->result_array() as $tampilkan):
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tampilkan['nama_mapel'] ?></td>
                        <td><?php echo $tampilkan['deskripsi'] ?></td>
                        <td><?php echo $tampilkan['nama_kelas'] ?></td>
                        <td>
                            <button class="btn btn-warning btn-xs" title="Lihat Materi"> <li class="fa fa-search"></li> </button>
                        </td>
                    </tr>
                <?php 
                    endforeach;
                ?>
			</tbody>
		</table>
		</div>
	</div>
</div>
