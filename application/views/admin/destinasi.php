<a href="<?= site_url('admin/destinasi/tambah_destinasi') ?>" class="btn btn-primary">Tambah Destinasi</a><br><br>
<table id="example2" class="table table-bordered table-hover">
    <p><?php echo $this->session->flashdata('destinasi') ?></p>
    <thead>
        <tr>
            <th>Nama Destinasi</th>
            <th>Alamat</th>
            <th>Tarif</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($destinasi as $destinasis){?>
        <tr>
            <td><?php echo $destinasis['nama_destinasi'] ?></td>
            <td><?php echo $destinasis['alamat'] ?></td>
            <td><?php echo $destinasis['tarif'] ?></td>
            <td><img style="width: 140px" height="80px" src="<?php echo base_url() ?>assets/foto/<?php echo $destinasis['foto'] ?>"></td>
            <td>
                <a href="<?php echo base_url() ?>admin/destinasi/edit_destinasi/<?php echo $destinasis['id_destinasi'] ?>" class="btn btn-info">Edit</a>
                <a onclick="return confirm('Yakin Dihapus?')" href="<?php echo base_url() ?>admin/destinasi/hapus_destinasi/<?php echo $destinasis['id_destinasi'] ?>" class="btn btn-warning">Hapus</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>