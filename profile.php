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
    <div id="content" class="profile">
      <div class='container uk-animation-fade'> 
        <form class="uk-form uk-form-stacked">
          <h3>PROFILE</h3>
          <div class="uk-form-row">
            <label class="uk-form-label" for="name">Name : </label>
            <div class="uk-form-controls uk-form-icon uk-width-100">
              <i class="uk-icon-user"></i>
              <input type="text" class="uk-form-large uk-width-100" id="name" placeholder="Name">
            </div>
          </div>
          <div class="uk-form-row">
            <label class="uk-form-label" for="email">Email : </label>
            <div class="uk-form-controls uk-form-icon uk-width-100">
              <i class="uk-icon-envelope"></i>
              <input type="text" class="uk-form-large uk-width-100" id="email" disabled placeholder="Email" value="sunupf@gmail.com">
            </div>
          </div>
          <div class="uk-form-row">
            <label class="uk-form-label" for="birthdate">Birthdate : </label>
            <div class="uk-form-controls uk-form-icon uk-width-100">
              <i class="uk-icon-calendar"></i>
              <input type="text" class="uk-form-large uk-width-100" id="birthdate" placeholder="Birthdate" data-uk-datepicker="{format:'DD-MM-YYYY'}">
            </div>
          </div>
          <div class="uk-form-row">
            <label class="uk-form-label" for="about">About : </label>
            <div class="uk-form-controls">
              <textarea class="uk-form-large uk-width-100" id="about" placeholder="About" rows="4"></textarea>
            </div>
          </div>
          
          <h3>PASSWORD</h3>
          <div class="uk-form-row">
            <label class="uk-form-label" for="password">Password : </label>
            <div class="uk-form-controls uk-form-icon uk-form-password uk-width-100">
              <i class="uk-icon-key"></i>
              <input type="password" id="password" class="uk-width-1-1 uk-form-large" placeholder="Password">
              <a href="" class="uk-form-password-toggle" data-uk-form-password>Show</a>
            </div>
          </div>
          <br />
          <div class="uk-form-row">
            <input type="submit" class="uk-button uk-button-primary uk-button-large uk-width-100" value="Update">
          </div>
        </form>
      </div>
      <div class='container uk-animation-slide-right' id='avatar'>
        <h3>AVATAR</h3>
        <div>
          <p>Current Avatar :</p>
          <img src="http://www.gravatar.com/avatar/<?php echo md5('sunupf@gmail.com'); ?>?s=256" alt="Sunu's Avatar">
        </div>
        <form>
          <div class="uk-form-row uk-form-file">
            <button class="uk-button">Browse File</button>
            <input type="file" name="user-avatar">
          </div>
          Choose Your Avatar Image!
          <div class="uk-form-row">
            <input type="submit" class="uk-button uk-button-primary uk-button-large uk-width-100" value="Update">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--  Load js -->
  <script src="assets/js/dashboard.js"></script>
</body>
</html>