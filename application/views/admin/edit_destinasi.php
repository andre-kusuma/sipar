<div class="container">
    <?php echo form_open_multipart('admin/destinasi/do_edit_destinasi') ?>
        <div class=" form-group">
            <label>Masukkan Nama Destinasi</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $destinasi['id_destinasi'] ?>">
            <input type="text" name="nama_destinasi" class="form-control" value="<?php echo $destinasi['nama_destinasi'] ?>">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- select -->
                <div class="form-group">
                <label>Kategori</label>
                <select name="id_kategori" class="form-control">
                <?php foreach($kategori as $kat) { ?> 
                    <option <?= ($kat['id_kategori']==$destinasi['id_kategori']) ? 'selected' :'' ?> value="<?php echo $kat['id_kategori'] ?>"><?php echo $kat['nama_kategori'] ?></option>
                <?php } ?>
                </select>
                </div>
            </div>
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
            <label>Deskripsi</label>
            <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="editor"><?php echo $destinasi['keterangan'] ?></textarea>
        </div>
        <div class=" form-group">
        <img style="width: 200px" src="<?php echo base_url() ?>assets/foto/<?php echo $destinasi['foto'] ?>"><br>
            <label>Masukkan Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <input type="submit" name="simpan" value="SAVE" class="btn btn-info">
    </form>
</div>