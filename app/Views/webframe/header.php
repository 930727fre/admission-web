<?php $session=session() ?>
<link rel="stylesheet" href="<?= base_url('css/navbar.css') ?>">
<header>
      <nav>
        <ul class="menu">
          <?php $imagePath = base_url('images/caclogo.jpg'); ?>
          <li><img class="logo" src="<?php echo $imagePath; ?>" ></li>
          <li class="nav_title">大學甄選入學委員會</li>>
          <li><a href="/uploadController/findSchool">校系分則查詢</a></li>
          <li><a href="/PageController/onlinebrochure">網路購買簡章</a></li>
          <li><a href="/PageController/universityweb">各校資訊連結</a></li>
          <li><a href="#"></a></li>
          <li><a href="/signIn"><button type="button" class="btn btn-primary" <?php if ($session->get("signedIn")!=null && $session->get("signedIn")==true) { echo 'style="display:none"'; } ?>>登入</button></a></li>
          <li><a href="/signUp"><button type="button" class="btn btn-primary" <?php if ($session->get("signedIn")!=null && $session->get("signedIn")==true) { echo 'style="display:none"'; } ?>>註冊</button></a></li>
          <li><a href="/signOut"><button type="button" class="btn btn-primary" <?php if ($session->get("signedIn")==null) { echo 'style="display:none"'; } ?>>登出</button></a></li></ul>
      </nav>
</header>