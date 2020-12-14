<a href="<?= site_url('admin/tentang_admin/tambah_tentang') ?>" class="btn btn-success btn-lg">
    <i class="fa fa-plus"></i> Tambah Tentang</a><br><br>
<table id="example2" class="table table-bordered table-hover">
    <p><?php echo $this->session->flashdata('tentang') ?></p>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Tentang</th>
            <th>Deskripsi Tentang</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tentang as $tentangs) { ?>
            <tr>
                <td><?php echo $no ?></td>

                <td><?php echo $tentangs['judul_tentang'] ?></td>
                <td><?php echo $tentangs['keterangan'] ?></td>

                <td>
                    <a href="<?php echo base_url() ?>admin/tentang_admin/edit_tentang/<?php echo $tentangs['id_tentang'] ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                    <a onclick="return confirm('Yakin Dihapus?')" href="<?php echo base_url() ?>admin/tentang_admin/hapus_tentang/<?php echo $tentangs['id_tentang'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>