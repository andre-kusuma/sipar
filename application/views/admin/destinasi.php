<a href="<?= site_url('admin/destinasi/tambah_destinasi') ?>" class="btn btn-success btn-lg">
    <i class="fa fa-plus"></i> Tambah Destinasi</a><br><br>
<table id="example2" class="table table-bordered table-hover">
    <p><?php echo $this->session->flashdata('destinasi') ?></p>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Destinasi</th>
            <th>Kategori Destinasi</th>
            <th>Deskripsi</th>
            <th>Alamat</th>
            <th>Tarif</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $no=1; foreach($destinasi as $destinasis){?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $destinasis['nama_destinasi'] ?></td>
            <td><?php echo $destinasis['nama_kategori'] ?></td>
            <td><?php echo $destinasis['keterangan'] ?></td>
            <td><?php echo $destinasis['alamat'] ?></td>
            <td><?php echo $destinasis['tarif'] ?></td>
            <td><img style="width: 140px" height="80px" src="<?php echo base_url() ?>assets/foto/<?php echo $destinasis['foto'] ?>"></td>
            <td>
                <a href="<?php echo base_url() ?>admin/destinasi/edit_destinasi/<?php echo $destinasis['id_destinasi'] ?>" class=
                "btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                <a onclick="return confirm('Yakin Dihapus?')" href="<?php echo base_url() ?>admin/destinasi/hapus_destinasi/<?php echo $destinasis['id_destinasi'] ?>" class=
                "btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
    <?php $no++; } ?>
    </tbody>
</table>