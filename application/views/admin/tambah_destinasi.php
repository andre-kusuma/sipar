<div class="container">
    <?php echo form_open_multipart('/admin/destinasi/simpan_destinasi') ?>
    <div class=" form-group">
        <label>Masukkan Nama Destinasi</label>
        <input type="text" name="nama_destinasi" class="form-control">
    </div>
    <div class="row">
        <div class="col-sm-12">
            <!-- select -->
            <div class="form-group">
                <label>Kategori</label>
                <select name="id_kategori" class="form-control">
                    <?php foreach ($kategori as $kat) { ?>
                        <option value="<?php echo $kat['id_kategori'] ?>"><?php echo $kat['nama_kategori'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
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
        <label>Deskripsi</label>
        <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="editor"><?php echo set_value('keterangan') ?></textarea>
    </div>
    <div class=" form-group">
        <label>Masukkan Foto</label>
        <input type="file" name="foto" class="form-control" multiple="">
    </div>
    <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
    </form>
</div>