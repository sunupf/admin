<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>System Under Test Dashboard</title>
  
  <!--  Load CSS -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <link rel="stylesheet" href="bower_components/uikit/css/components/progress.almost-flat.min.css">
</head>
<body>
  <div id="sidebar">
    <div id="profile">
      <a href="profile.php">
        <img src="http://www.gravatar.com/avatar/<?php echo md5('sunupf@gmail.com'); ?>?s=40" alt="Sunu's Avatar">
        Sunu Pinasthika F
      </a>
    </div>
    <div id="todos">
      <h3>TODO LIST <a href="#search_project"><i class="uk-icon-search"></i></a></h3>
      <ul class="uk-list uk-list-space">
        <li class="active">
          <a href="dashboard.php" class="title">Quickly</a>
          <a href="#" class="uk-animation-slide-right icon-action delete"><i class="uk-icon-trash"></i></a>
          <a href="#" class="uk-animation-slide-right icon-action edit"><i class="uk-icon-pencil"></i></a>
        </li>
      </ul>
    </div>
    <a href="#add-todo" class='add todo' data-uk-modal><i class="uk-icon-plus"></i> Add</a>
  </div>
  <div id="main">
    <div id="navigation">
      <ul class="uk-breadcrumb">
        <li><a href="#">DASHBOARD</a></li>
        <li><a href="#">PROFILE</a></li>
      </ul>
    </div>
    <div id="content">
      <div class='container uk-animation-fade'>
        form update
      </div>
      <div class='container uk-animation-slide-right'>
        avatar
      </div>
    </div>
  </div>
  <!--  Load js -->
  <script src="assets/js/dashboard.js"></script>
</body>
</html>