<div class="container">
    <?php echo form_open_multipart('/admin/pengguna/simpan_pengguna') ?>
        <div class=" form-group">
            <label>Masukkan Nama Pengguna</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class=" form-group">
            <label>Masukkan Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class=" form-group">
            <label>Masukkan Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>
        <div class=" form-group">
            <label>Masukkan Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class=" form-group">
            <label>Masukkan Level</label>
            <select name="level" class="form-control">
                <option>Admin</option>
                <option>Member</option>
            </select>
        </div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
    </form>
</div>