<div class="container">
    <?php echo form_open_multipart('/admin/tentang_admin/simpan_tentang') ?>
    <div class=" form-group">
        <label>Masukkan Judul Tentang</label>
        <input type="text" name="judul_tentang" class="form-control">
    </div>
    <div class=" form-group">
        <label>Deskripsi Tentang</label>
        <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="editor"><?php echo set_value('keterangan') ?></textarea>
    </div>
    <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
    </form>
</div>