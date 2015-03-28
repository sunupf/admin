<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>System Under Test Login</title>
  
  <!--  Load CSS -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="uk-slidenav-position" data-uk-slideshow="{animation:'swipe'}">
    <ul class="uk-slideshow uk-slideshow-fullscreen">
      <li>
        <img src="assets/images/slider1.jpg" alt="Fitur">
        <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
          <div>
            <h2>Manage Your Task</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, placeat modi culpa maxime ipsa 
            ipsum officiis dolorem mollitia reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Eaque libero iure ducimus quibusdam omnis nemo, sint voluptatum id beatae, 
            repellendus doloremque excepturi sit a suscipit consequuntur unde recusandae officia officiis.</p>
          </div>
        </div>
      </li>
      <li>
        <img src="assets/images/slider2.jpg" alt="Fitur">
        <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
          <div>
            <h2>Set Due Date</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, placeat modi culpa maxime ipsa 
            ipsum officiis dolorem mollitia reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Eaque libero iure ducimus quibusdam omnis nemo, sint voluptatum id beatae, 
            repellendus doloremque excepturi sit a suscipit consequuntur unde recusandae officia officiis.</p>
          </div>
        </div>
      </li>
      <li>
        <img src="assets/images/slider3.jpg" alt="Fitur">
        <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
          <div>
            <h2>Improve Your Work</h2>
            <p>Neque est recusandae delectus qui, 
            voluptas nihil ea, nulla exercitationem repellendus. Maiores, placeat modi culpa maxime ipsa 
            ipsum officiis dolorem mollitia reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Eaque libero iure ducimus quibusdam omnis nemo, sint voluptatum id beatae, 
            repellendus doloremque excepturi sit a suscipit consequuntur unde recusandae officia officiis.</p>
          </div>
        </div>
      </li>
    </ul>
    <ul class="uk-dotnav uk-flex uk-flex-center uk-dotnav-contrast uk-position-bottom uk-text-center">
        <li data-uk-slideshow-item="0"><a href=""></a></li>
        <li data-uk-slideshow-item="1"><a href=""></a></li>
        <li data-uk-slideshow-item="2"><a href=""></a></li>
    </ul>
  </div>
  
  <!--  Login Form -->
  <div id='login-form'>
    <div>     
      <form action="{{ route('userAuth') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="uk-form-row uk-form-icon uk-width-1-1">
          <i class="uk-icon-user"></i>
          <input type="email" placeholder="Email" name="email" class="uk-width-1-1">
        </div>
        <div class="uk-form-row uk-form-icon uk-form-password uk-width-1-1">
          <i class="uk-icon-key"></i>
          <input type="password" class="uk-width-1-1" name="password" placeholder="Password">
          <a href="" class="uk-form-password-toggle" data-uk-form-password>Show</a>
        </div>
        <input type="submit" class="uk-form-row uk-button uk-width-1-1 uk-button-primary" value="Login"/>

        <div class="uk-form-row register-label">Haven't any account?</div>

        <a class="uk-form-row uk-button uk-width-1-1 uk-button-success register-button">Register</a>
      </form>
    </div>
  </div>
  
  <!--  Load js -->
  <script src="assets/js/app.js"></script>
</body>
</html>