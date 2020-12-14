<div class="menu_nav">
  <ul>
    <li class="active"><a href="home"><span>Beranda</span></a></li>
    <li><a href="tentang"><span>Tentang</span></a></li>
    <li><a href="kontak"><span>Kontak</span></a></li>
    <?php if ($this->session->userdata('level') == null) { ?>
      <li><a href="<?php echo base_url() . 'login' ?>"><span>Login </span></a></li>
    <?php } else { ?>
      <li><a href="<?php echo base_url() . 'login/logout' ?>"><span>Logout </span></a></li>
    <?php } ?>
  </ul>
</div>