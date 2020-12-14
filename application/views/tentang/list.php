<div class="clr"></div>
<div class="slider">
    <?php foreach ($slider as $slid) { ?>
        <div id="coin-slider"><a href="#"><img src="<?php echo base_url() ?>assets/slider/<?php echo $slid['foto'] ?>" width="935" height="307" alt="" /></a></div>
    <?php } ?>
    <div class="clr"></div>
</div>
<div class="clr"></div>
</div>
</div>
<div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <h2><a>&nbsp;&nbsp;&nbsp;Tentang Desa Jagaraga</a></h2>
            <hr>
            <?php foreach ($tentang as $ten) { ?>
                <div class="article">
                    <div class="clr"></div>
                    <p><strong><?php echo $ten['judul_tentang'] ?></strong></p>
                    <p><?php echo $ten['keterangan'] ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="sidebar">
            <div class="searchform">
                <form id="formsearch" name="formsearch" method="post" action="#">
                    <span>
                        <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
                    </span>
                    <input name="button_search" src="<?php echo base_url() ?>assets/template/images//search.jpg" class="button_search" type="image" />
                </form>
            </div>
            <div class="clr"></div>
            <div class="gadget">
                <h2 class="star"><span>Sidebar</span> Menu</h2>
                <div class="clr"></div>
                <ul class="sb_menu">
                    <li><a href="">Home</a></li>
                    <li><a href="tentang">Tentang</a></li>
                    <li><a href="kontak">Kontak</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="#">Web Templates</a></li>
                </ul>
            </div>
            <div class="gadget">
                <h2 class="star"><span>Daftar Wisata</span></h2>
                <div class="clr"></div>
                <ul class="ex_menu">
                    <?php foreach ($destinasi as $des) { ?>
                        <li><a href="#"><?php echo $des['nama_destinasi'] ?></a><br />
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="fbg">
    <div class="fbg_resize">
        <div class="col c1">
            <h2><span>Image</span> Gallery</h2>
            <?php foreach ($destinasi as $des) { ?>
                <a href="#"><img src="<?php echo base_url() ?>assets/foto/<?php echo $des['foto'] ?>" width="75" height="75" alt="" class="gal" /></a>
            <?php } ?>
        </div>
        <div class="col c2">
            <h2><span>List</span> Wisata</h2>
            <ul class="fbg_ul">
                <?php foreach ($destinasi as $des) { ?>
                    <li><a href="#"><?php echo $des['nama_destinasi'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col c3">
            <h2><span>Contact</span> Us</h2>
            <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
            <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
                <span>Telephone:</span> +123-1234-5678<br />
                <span>FAX:</span> +458-4578<br />
                <span>Others:</span> +301 - 0125 - 01258<br />
                <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
        </div>
        <div class="clr"></div>
    </div>
</div>