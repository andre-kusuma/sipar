<div class="container">
    <?php echo form_open_multipart('admin/slider/do_edit_slider') ?>
    <div class=" form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $slider['id_slider'] ?>">
    </div>
    <div class="row">
        <div class="col-sm-12">
            <!-- select -->
            <div class=" form-group">
                <img style="width: 500px" height="300px" src="<?php echo base_url() ?>assets/slider/<?php echo $slider['foto'] ?>"><br>
                <label>Edit Foto Slider(harus beresolusi 935 x 307)</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
            </form>
        </div>
    </div>
</div>