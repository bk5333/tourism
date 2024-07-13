<style>
  #n:hover{
    background: black;
    border-radius: 30px 40px 40px 30px;
    font-size: 16px;
    font-weight: bold;
  }
	#icon{
		position: fixed;
		bottom: 20px;
		right: 20px;
	}
</style>


 <!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink">
            <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/tourism/">
 <!--<img src="uploads/1688754180_Black Pink Bold Elegant Monogram Personal Brand Logo.png" width="60" height="40" style="border-radius: 70%">-->
</a>
                <a class="navbar-brand" href="<?php echo $page !='home' ? './':''  ?>"><span class="text-waring" style="font-weight: bold;">Tour Hub</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" id="n" href="<?php echo $page !='home' ? './':''  ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" id="n" href="./?page=packages">Packages</a></li>
                        <li class="nav-item"><a class="nav-link" id="n" href="http://localhost/odfs/">Forum</a></li>
                        <li class="nav-item"><a class="nav-link" id="n" href="<?php echo $page !='home' ? './':''  ?>#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" id="n" href="<?php echo $page !='home' ? './':''  ?>#contact">Contact</a></li>
                        <?php if(isset($_SESSION['userdata'])): ?>
                          <li class="nav-item"><a class="nav-link" id="n" href="./?page=my_account"><i class="fa fa-user"></i> Hi, <?php  echo $_settings->userdata('firstname') ?>!</a></li>
                          <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i></a></li>
                        <?php else: ?>
                          <li class="nav-item"><a class="nav-link" href="javascript:void(0)" id="login_btn">Login</a></li><font color="white" style="font-size: 24px; font-weight: bold;"> | </font> 
                          <li class="nav-item"><a class="nav-link" href="http://localhost/tourism/admin/login.php">Login As Admin</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login_btn').click(function(){
      uni_modal("","login.php","large")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })
</script>