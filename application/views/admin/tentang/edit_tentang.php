<div class="container">
    <?php echo form_open_multipart('admin/tentang_admin/do_edit_tentang') ?>
    <div class=" form-group">
        <label>Masukkan Judul Tentang</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $tentang['id_tentang'] ?>">
        <input type="text" name="judul_tentang" class="form-control" value="<?php echo $tentang['judul_tentang'] ?>">
    </div>
    <div class=" form-group">
        <label>Deskripsi</label>
        <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="editor"><?php echo $tentang['keterangan'] ?></textarea>
    </div>
    <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
    </form>
</div>