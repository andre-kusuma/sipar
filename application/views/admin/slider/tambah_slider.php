<div class="container">
    <?php echo form_open_multipart('/admin/slider/simpan_slider') ?>
    <div class=" form-group">
        <label>Masukkan Foto Slider(harus beresolusi 935 x 307)</label>
        <input type="file" name="foto" class="form-control" multiple="">
    </div>
    <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
    </form>
</div>