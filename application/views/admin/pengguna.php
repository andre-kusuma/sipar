<a href="<?= site_url('admin/pengguna/tambah_pengguna') ?>" class="btn btn-primary">Tambah Pengguna</a><br><br>
<table id="example2" class="table table-bordered table-hover">
    <p><?php echo $this->session->flashdata('pengguna') ?></p>
    <thead>
        <tr>
            <th>Nama Pengguna</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($pengguna as $penggunas){?>
        <tr>
            <td><?php echo $penggunas['username'] ?></td>
            <td><?php echo $penggunas['alamat'] ?></td>
            <td><?php echo $penggunas['email'] ?></td>
            <td><?php echo $penggunas['level'] ?></td>
            <td>
                <a onclick="return confirm('Yakin Dihapus?')" href="<?php echo base_url() ?>admin/pengguna/hapus_pengguna/<?php echo $penggunas['id'] ?>" class="btn btn-warning">Hapus</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>