<h1 style="color: white;">Welcome, <?php echo $_settings->userdata('firstname')." ".$_settings->userdata('lastname') ?>!</h1>
<hr>
<div class="row">
  <div class="col-12 col-sm-3 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-gradient-navy elevation-1"><i class="fas fa-th-list"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Category List</span>
          <span class="info-box-number">
            <?php 
              $category = $conn->query("SELECT * FROM category_list where delete_flag = 0 and `status` = 1")->num_rows;
              echo format_num($category);
            ?>
            <?php ?>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-3 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-gradient-dark border elevation-1"><i class="fas fa-users-cog"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Registered Users</span>
          <span class="info-box-number">
            <?php 						
              $user = $conn->query("SELECT * FROM users where `type` = 2 ")->num_rows;
              echo format_num($user);
            ?>
            <?php ?>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-3 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-blog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Published Post</span>
          <span class="info-box-number">
            <?php 
              $posts = $conn->query("SELECT * FROM post_list where `status` = 1 and delete_flag = 0 ")->num_rows;
              echo format_num($posts);
            ?>
            <?php ?>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-3 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-gradient-secondary elevation-1"><i class="fas fa-blog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Unpublished Post</span>
          <span class="info-box-number">
            <?php 
              $posts = $conn->query("SELECT * FROM post_list where `status` = 0 and delete_flag = 0 ")->num_rows;
              echo format_num($posts);
            ?>
            <?php ?>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </div>