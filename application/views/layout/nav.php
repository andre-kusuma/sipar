<div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html"><span>Home Page</span></a></li>
          <li><a href="support.html"><span>Support</span></a></li>
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="blog.html"><span>Blog</span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li>
          <?php if($this->session->userdata('level') == null){ ?>
          <li><a href="<?php echo base_url().'login' ?>"><span>Login </span></a></li>
          <?php }else { ?>
          <li><a href="<?php echo base_url().'login/logout' ?>"><span>Logout </span></a></li>
          <?php } ?>
        </ul>
      </div>