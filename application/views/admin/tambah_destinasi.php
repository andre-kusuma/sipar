<div class="container">
    <?php echo form_open_multipart('/admin/destinasi/simpan_destinasi') ?>
        <div class=" form-group">
            <label>Masukkan Nama Destinasi</label>
            <input type="text" name="nama_destinasi" class="form-control">
        </div>
        <div class=" form-group">
            <label>Masukkan Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>
        <div class=" form-group">
            <label>Masukkan Tarif</label>
            <input type="text" name="tarif" class="form-control">
        </div>
        <div class=" form-group">
            <label>Masukkan Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
    </form>
</div>