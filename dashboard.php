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
    <div id="projects">
      <h3>PROJECTS <a href="#search_project"><i class="uk-icon-search"></i></a></h3>
      <ul class="uk-list uk-list-space">
        <li class="active"><a href="#">Quickly</a><i class="uk-animation-slide-right uk-icon-ellipsis-h"></i></li>
        <li><a href="#">Fastly</a><i class="uk-animation-slide-right uk-icon-ellipsis-h"></i></li>
        <li><a href="#">Rapidly</a><i class="uk-animation-slide-right uk-icon-ellipsis-h"></i></li>
        <li><a href="#">Speedy</a><i class="uk-animation-slide-right uk-icon-ellipsis-h"></i></li>
        <li><a href="#">Express</a><i class="uk-animation-slide-right uk-icon-ellipsis-h"></i></li>
      </ul>
    </div>
    <a href="#" class='add project'><i class="uk-icon-plus"></i> Add</a>
  </div>
  <div id="main">
    <div id="navigation">
      <ul class="uk-breadcrumb">
        <li><a href="#">DASHBOARD</a></li>
        <li><a href="#">QUICKLY <i class="uk-icon-chevron-circle-down"></i></a></li>
        <li><a href="#">SPECIFICATION</a></li>
        <li class="uk-active"><a href="#"><span>FS1 - USER CAN LOGIN TO THE SYSTEM</span><i class="uk-icon-chevron-circle-down"></i></a></li>
      </ul>
    </div>
    <div id="content">
      <div class='container'>
        <h3>
          PROJECTS 
          <a href="#" class="add icon-action"><i class="uk-icon-plus">Add</i></a>
          <a href="#"><i class="uk-icon-search"></i></a>
        </h3>
        <ul class="sut-list">
          <li>
            <a href="#" class="uk-animation-slide-right icon-action delete"><i class="uk-icon-trash"></i></a>
            <a href="#" class="uk-animation-slide-right icon-action edit"><i class="uk-icon-pencil"></i></a>
            <h4>Quickly</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo debitis excepturi expedita praesentium minima similique, facilis hic tempora quas dolore.</p>
            <div class="uk-progress">
              <div class="uk-progress-bar" style="width: 40%;"> 4 of 10 Requirements (40%) </div>
            </div>
          </li>
          <li>
            <a href="#" class="uk-animation-slide-right icon-action delete"><i class="uk-icon-trash"></i></a>
            <a href="#" class="uk-animation-slide-right icon-action edit"><i class="uk-icon-pencil"></i></a>
            <h4>Fastly</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo debitis excepturi expedita praesentium minima similique, facilis hic tempora quas dolore.</p>
            <div class="uk-progress">
              <div class="uk-progress-bar" style="width: 40%;"> 4 of 10 Requirements (40%) </div>
            </div>
          </li>
        </ul>
        
      </div>
      <div class='container'>
        <h3>
          QUICKLY
        </h3>
      </div>
      <div class='container'>Lorem ipsum dolor sit.</div>
      <div class='container'>Lorem ipsum dolor sit.</div>
      <div class='container'>Lorem ipsum dolor sit.</div>
    </div>
  </div>
  <!--  Load js -->
  <script src="assets/js/dashboard.js"></script>
</body>
</html>