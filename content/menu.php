   
<nav class="navbar navbar-expand-lg navbar-light py-3 border-bottom">
    <div class="container">
  <a class="navbar-brand txt-logo" href="https://Cashkar.in/">
      <span class="col-4">
      <img class="imclass" src="https://cashkar.in/images/Cashkar Logo.webp" height="58.8px" width="auto" alt="logo of Cashkar"  style="margin:-17px -8px -18px -3px!important;" />
      <!--Gadgetzco-->
      </span>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <!--<li class="nav-item active" >-->
      <!--  <a class="nav-link txt-edit mr-3" href="https://cashkar.in/sell-mobile/">Sell</a>-->
      <!--</li>-->
      <style>
          .sll{
              color:rgba(0,0,0,0.9)!important;
          }
      </style>
      <li class="nav-item dropdown fnt-700">
            <a class="nav-link dropdown-toggle txt-edit mr-3 sll" href="#" id="sell_drpdwn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sell</a>
            <div class="dropdown-menu" aria-labelledby="sell_drpdwn">
              <a class="dropdown-item" href="https://cashkar.in/sell-mobile/">Mobile</a>
              <a class="dropdown-item" href="https://cashkar.in/sell-ipad-and-tablets/">Ipad & Tablets</a>
            </div>
       </li>
        <li class="nav-item active fnt-700" >
        <a class="nav-link txt-edit mr-3" href="https://cashkar.in/blogs/how-to-sell-mobile-online/">How To Sell</a>
      </li>
       <li class="nav-item active fnt-700" >
        <a class="nav-link txt-edit mr-3" href="https://cashkar.in/blogs/">BLOG</a>
      </li>
    <li class="nav-item active fnt-700" >
        <a class="nav-link txt-edit mr-3" href="https://cashkar.in/#faq">FAQ</a>
      </li>
      <li class="nav-item active fnt-700" >
        <a class="nav-link txt-edit mr-3" href="https://cashkar.in#about">ABOUT US</a>
      </li>
      <?php 
      if(isset($_SESSION['USER_LOGIN'])){
          ?>
          <li class="nav-item fnt-700">
        <a class="nav-link txt-edit mr-4" href="https://cashkar.in/user/"><i class="fa fa-user-circle" style="font-size:19px;"> </i></a>
      </li>
      <?php
      }
      if(isset($_SESSION['VENDOR_LOGIN'])){
          ?>
          <li class="nav-item fnt-700">
        <a class="nav-link txt-edit mr-4" href="https://cashkar.in/vendor/profile.php"><i class="fa fa-user-circle" style="font-size:20.3px;"> </i></a>
      </li>
          <?php
      }
      ?>
    </ul>
    <style>
        .fnt-700{
            font-weight:500;
        }
    </style>
  </div>
  </div>
</nav>