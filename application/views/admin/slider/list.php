<a href="<?= site_url('admin/slider/tambah_slider') ?>" class="btn btn-success btn-lg">
    <i class="fa fa-plus"></i> Tambah Slider</a><br><br>
<table id="example2" class="table table-bordered table-hover">
    <p><?php echo $this->session->flashdata('slider') ?></p>
    <thead>
        <tr>
            <th>No</th>
            <th>Slider</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($slider as $sliders) { ?>
            <tr>
                <td><?php echo $no ?></td>

                <td><img style="width: 140px" height="80px" src="<?php echo base_url() ?>assets/slider/<?php echo $sliders['foto'] ?>"></td>
                <td>
                    <a href="<?php echo base_url() ?>admin/slider/edit_slider/<?php echo $sliders['id_slider'] ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                    <a onclick="return confirm('Yakin Dihapus?')" href="<?php echo base_url() ?>admin/slider/hapus_slider/<?php echo $sliders['id_slider'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>