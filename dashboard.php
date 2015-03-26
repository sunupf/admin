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
          <a href="#" class="title">Quickly</a>
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
        <li><a href="#">QUICKLY <i class="uk-icon-chevron-circle-down"></i></a></li>
        <li class="uk-active"><a href="#"><span>Quickly Requirement</span><i class="uk-icon-chevron-circle-down"></i></a></li>
      </ul>
    </div>
    <div id="content">
      <div class='container'>
        <h3>
          ACTIVITIES
          <a href="#add-activity" data-uk-modal class="add icon-action"><i class="uk-icon-plus">Add</i></a>
          <a href="#"><i class="uk-icon-search"></i></a>
        </h3>
        <ul class="sut-list">
          <li>
            <a href="#" class="uk-animation-slide-right icon-action delete"><i class="uk-icon-trash"></i></a>
            <a href="#" class="uk-animation-slide-right icon-action edit"><i class="uk-icon-pencil"></i></a>
            <h4>Quickly Requirement</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo debitis excepturi expedita praesentium minima similique, facilis hic tempora quas dolore.</p>
            <div class="uk-progress">
              <div class="uk-progress-bar" style="width: 100%;"> 10 of 10 Todo (100%) </div>
            </div>
          </li>
          <li>
            <a href="#" class="uk-animation-slide-right icon-action delete"><i class="uk-icon-trash"></i></a>
            <a href="#" class="uk-animation-slide-right icon-action edit"><i class="uk-icon-pencil"></i></a>
            <h4>Quickly Implementation</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo debitis excepturi expedita praesentium minima similique, facilis hic tempora quas dolore.</p>
            <div class="uk-progress">
              <div class="uk-progress-bar" style="width: 40%;"> 4 of 10 Todo (40%) </div>
            </div>
          </li>
        </ul>
        
      </div>
      <div class='container'>
        <h3>
          Quickly Requirement
          <a href="#add-sub-activity" class="add icon-action" data-uk-modal><i class="uk-icon-plus">Add</i></a>
          <a href="#"><i class="uk-icon-search"></i></a>
        </h3>
        <ul class="sut-list-activity">
          <li class="uk-clearfix">
            <a href="#" class="check">
              <i class="uk-animation-fade uk-icon-circle-o"></i>
              <i class="uk-animation-fade uk-icon-check-circle"></i>
            </a>
            <div>
              <h4>Quickly Requirement</h4>
              <span>Due : 01 Dec 2015</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni numquam maxime aliquid, aliquam harum minus quibusdam eveniet minima, neque ratione animi repellendus rerum deserunt sequi a iusto. Impedit quia, quisquam a dolor vel placeat necessitatibus perspiciatis, eveniet iusto blanditiis provident.</p>
            </div>
            <a href="#" class="uk-animation-slide-right icon-action delete"><i class="uk-icon-trash"></i></a>
            <a href="#" class="uk-animation-slide-right icon-action edit"><i class="uk-icon-pencil"></i></a>
          </li>
          <li class="uk-clearfix">
            <a href="#" class="check">
              <i class="uk-animation-fade uk-icon-circle-o"></i>
              <i class="uk-animation-fade uk-icon-check-circle"></i>
            </a>
            <div>
              <h4>Quickly Requirement</h4>
              <span>Due : 01 Dec 2015</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni numquam maxime aliquid, aliquam harum minus quibusdam eveniet minima, neque ratione animi repellendus rerum deserunt sequi a iusto. Impedit quia, quisquam a dolor vel placeat necessitatibus perspiciatis, eveniet iusto blanditiis provident.</p>
            </div>
            <a href="#" class="uk-animation-slide-right icon-action delete"><i class="uk-icon-trash"></i></a>
            <a href="#" class="uk-animation-slide-right icon-action edit"><i class="uk-icon-pencil"></i></a>
          </li>
          <li class="uk-clearfix">
            <a href="#" class="check active">
              <i class="uk-animation-fade uk-icon-circle-o"></i>
              <i class="uk-animation-fade uk-icon-check-circle"></i>
            </a>
            <div>
              <h4>Quickly Requirement</h4>
              <span>Due : 01 Dec 2015</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni numquam maxime aliquid, aliquam harum minus quibusdam eveniet minima, neque ratione animi repellendus rerum deserunt sequi a iusto. Impedit quia, quisquam a dolor vel placeat necessitatibus perspiciatis, eveniet iusto blanditiis provident.</p>
            </div>
            <a href="#" class="uk-animation-slide-right icon-action delete"><i class="uk-icon-trash"></i></a>
            <a href="#" class="uk-animation-slide-right icon-action edit"><i class="uk-icon-pencil"></i></a>
          </li>
          <li class="uk-clearfix">
            <a href="#" class="check">
              <i class="uk-animation-fade uk-icon-circle-o"></i>
              <i class="uk-animation-fade uk-icon-check-circle"></i>
            </a>
            <div>
              <h4>Quickly Requirement</h4>
              <span>Due : 01 Dec 2015</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni numquam maxime aliquid, aliquam harum minus quibusdam eveniet minima, neque ratione animi repellendus rerum deserunt sequi a iusto. Impedit quia, quisquam a dolor vel placeat necessitatibus perspiciatis, eveniet iusto blanditiis provident.</p>
            </div>
            <a href="#" class="uk-animation-slide-right icon-action delete"><i class="uk-icon-trash"></i></a>
            <a href="#" class="uk-animation-slide-right icon-action edit"><i class="uk-icon-pencil"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <div id="add-todo" class="uk-modal">
      <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <form class="uk-form uk-form-stacked">
          <div class="uk-modal-header">
            <h3>ADD TODO</h3> 
          </div>
            <div class="uk-form-row">
                <label class="uk-form-label" for="todo-title">Title : </label>
                <div class="uk-form-controls">
                  <input type="text" class="uk-form-large uk-width-100" id="todo-title" placeholder="Title">
                </div>
            </div>
          <div class="uk-modal-footer">
            <input type="submit" class="uk-button uk-button-primary uk-button-large uk-width-100" value="Create">
          </div>
        </form>
      </div>
    </div>
    <div id="add-activity" class="uk-modal">
      <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <form class="uk-form uk-form-stacked">
          <div class="uk-modal-header">
            <h3>ADD ACTIVITY</h3> 
          </div>
            <div class="uk-form-row">
              <label class="uk-form-label" for="activity-title">Title : </label>
              <div class="uk-form-controls">
                <input type="text" class="uk-form-large uk-width-100" id="activity-title" placeholder="Title">
              </div>
            </div>
            <div class="uk-form-row">
              <label class="uk-form-label" for="activity-description">Description : </label>
              <div class="uk-form-controls">
                <textarea class="uk-form-large uk-width-100" id="activity-description" placeholder="Description" rows="4"></textarea>
              </div>
            </div>
          <div class="uk-modal-footer">
            <input type="submit" class="uk-button uk-button-primary uk-button-large uk-width-100" value="Create">
          </div>
        </form>
      </div>
    </div>
    <div id="add-sub-activity" class="uk-modal">
      <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <form class="uk-form uk-form-stacked">
          <div class="uk-modal-header">
            <h3>ADD SUB ACTIVITY</h3> 
          </div>
            <div class="uk-form-row">
              <label class="uk-form-label" for="subactivity-title">Title : </label>
              <div class="uk-form-controls">
                <input type="text" class="uk-form-large uk-width-100" id="subactivity-title" placeholder="Title">
              </div>
            </div>
            <div class="uk-form-row">
              <label class="uk-form-label" for="subactivity-due">Title : </label>
              <div class="uk-form-controls">
                <input type="text" class="uk-form-large uk-width-100" id="subactivity-due" placeholder="Due date" data-uk-datepicker="{format:'DD-MM-YYYY'}">
              </div>
            </div>
            <div class="uk-form-row">
              <label class="uk-form-label" for="subactivity-description">Description : </label>
              <div class="uk-form-controls">
                <textarea class="uk-form-large uk-width-100" id="subactivity-description" placeholder="Description" rows="4"></textarea>
              </div>
            </div>
          <div class="uk-modal-footer">
            <input type="submit" class="uk-button uk-button-primary uk-button-large uk-width-100" value="Create">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--  Load js -->
  <script src="assets/js/dashboard.js"></script>
</body>
</html>