<div class="container">
    <?php echo form_open_multipart('admin/destinasi/do_edit_destinasi') ?>
        <div class=" form-group">
            <label>Masukkan Nama Destinasi</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $destinasi['id_destinasi'] ?>">
            <input type="text" name="nama_destinasi" class="form-control" value="<?php echo $destinasi['nama_destinasi'] ?>">
        </div>
        <div class=" form-group">
            <label>Masukkan Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $destinasi['alamat'] ?>">
        </div>
        <div class=" form-group">
            <label>Masukkan Tarif</label>
            <input type="text" name="tarif" class="form-control" value="<?php echo $destinasi['tarif'] ?>">
        </div>
        <div class=" form-group">
        <img style="width: 200px" src="<?php echo base_url() ?>assets/foto/<?php echo $destinasi['foto'] ?>"><br>
            <label>Masukkan Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <input type="submit" name="simpan" value="SAVE" class="btn btn-info">
    </form>
</div>