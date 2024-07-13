<style>
	header.masthead, section.masthead{
		background-image: url('Images/back.jpg');
		background-size: cover;
	}
	header.masthead .container{
		background:#0000006b;
	}
	#colr{
		background-color: white;
	}
	#bn{
		background: white;
		color: gray;
	}
	#chatus{
		position: fixed;
		bottom: 110px;
		right: 30px;
		filter: drop-shadow(10px 10px 10px);
	}
	.whatsapp{
		position: fixed;
		bottom: 40px;
		right: 30px;
		filter: drop-shadow(10px 10px 10px);
	}
	#chatus:hover, .whatsapp:hover{
		transform: scale(1.3);
		z-index: 5;
	}
	/*
	#tipText{
		position: absolute;
		left: 50%;
		top: 0%;
		transform: translateX(-50%);
		background-color: #000;
		color: #fff;
		white-space: nowrap;
		padding: 10px 15px;
		border-radius: 7px;
		visibility: hidden;
		opacity: 0;
		transition: opacity 0.5s ease;
	}
	#tipText::before{
		content: "";
		position: absolute;
		left: 50%;
		top: 100%;
		transform: translateX(-50%);
		border: 15px solid;
		border-color: #000 #0000 #0000 #0000;
	}
	#chatus:hover #tipText{
		top: -130%;
		visibility: visible;
		opacity: 1;
	}
	*/
</style>
<!-- Masthead-->
<header class="masthead">
	<div>
		<div class="masthead-heading text-uppercase">Welcome To Tour Hub</div>
		<div style="font-size: 30px; width: 800px; margin-left: 20%;">Want to buy products related to touring?<br>Click the button below!</div><br>
		<a class="btn btn-secondary btn-xl text-uppercase" href="products.php">Buy Now</a>
	</div>
</header>
<div id="chatus">
	<!--<span id="tipText">Chat US</span>-->
		<a href="bot.php">
			<img src="Images/chatus.png" width="50px" alt=""></a><br/>
		
		</a>
</div>
<div class="whatsapp">
	<a href="https://wa.me/923471222429">
		<img src="Images/whatsapp.png" width="50px" alt=""></a><br/>
	</a>
</div>
<!-- Services-->
<div style="background-image: url(''); background-size: cover; backdrop-filter: blur(px);"><br><br><br>
	<div class="container">
		<h2 class="text-center">Tour Packages</h2>
	<div class="d-flex w-100 justify-content-center">
		<hr class="border-secondary" style="border:3px solid;" width="15%">
	</div>
	<div class="row">
		<?php
		$packages = $conn->query("SELECT * FROM `packages` order by rand() limit 6");
			while($row = $packages->fetch_assoc() ):
				$cover='';
				if(is_dir(base_app.'uploads/package_'.$row['id'])){
					$img = scandir(base_app.'uploads/package_'.$row['id']);
					$k = array_search('.',$img);
					if($k !== false)
						unset($img[$k]);
					$k = array_search('..',$img);
					if($k !== false)
						unset($img[$k]);
					$cover = isset($img[2]) ? 'uploads/package_'.$row['id'].'/'.$img[2] : "";
				}
				$row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));

				$review = $conn->query("SELECT * FROM `rate_review` where package_id='{$row['id']}'");
				$review_count =$review->num_rows;
				$rate = 0;
				while($r= $review->fetch_assoc()){
					$rate += $r['rate'];
				}
				if($rate > 0 && $review_count > 0)
				$rate = number_format($rate/$review_count,0,"");
		?>
			<div class="col-md-4 p-4 ">
				<div class="card w-100 rounded-0">
					<img class="card-img-top" src="<?php echo validate_image($cover) ?>" alt="<?php echo $row['title'] ?>" height="200rem" style="object-fit:cover">
					<div class="card-body">
					<h5 class="card-title truncate-1 w-100"><?php echo $row['title'] ?></h5><br>
					<div class=" w-100 d-flex justify-content-start">
						<div class="stars stars-small">
								<input disabled class="star star-5" id="star-5" type="radio" name="star" <?php echo $rate == 5 ? "checked" : '' ?>/> <label class="star star-5" for="star-5"></label> 
								<input disabled class="star star-4" id="star-4" type="radio" name="star" <?php echo $rate == 4 ? "checked" : '' ?>/> <label class="star star-4" for="star-4"></label> 
								<input disabled class="star star-3" id="star-3" type="radio" name="star" <?php echo $rate == 3 ? "checked" : '' ?>/> <label class="star star-3" for="star-3"></label> 
								<input disabled class="star star-2" id="star-2" type="radio" name="star" <?php echo $rate == 2 ? "checked" : '' ?>/> <label class="star star-2" for="star-2"></label> 
								<input disabled class="star star-1" id="star-1" type="radio" name="star" <?php echo $rate == 1 ? "checked" : '' ?>/> <label class="star star-1" for="star-1"></label> 
						</div>
                    </div>
					<?php
// Assuming $row is the associative array containing your data
$status = $row['status'];
$id = $row['id'];
?>
    				<p class="card-text truncate"><?php echo $row['description'] ?></p>
					<div class="w-100 d-flex justify-content-end">
					<?php if ($status == 0): ?>
    <span class="btn btn-sm btn-flat btn-secondary disabled" style="background-color: red;"> Booking Closed </span>
<?php else: ?>
    <a href="./?page=view_package&id=<?php echo md5($id) ?>" class="btn btn-sm btn-flat btn-secondary"> View Package <i class="fa fa-arrow-right"></i></a>
<?php endif; ?>

						<!--<a href="./?page=view_package&id=<?php echo md5($row['id']) ?>" class="btn btn-sm btn-flat btn-secondary">View Package <i class="fa fa-arrow-right"></i></a>-->
					</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<div class="d-flex w-100 justify-content-end">
		<a href="./?page=packages" class="btn btn-flat btn-secondary mr-4">Explore Package <i class="fa fa-arrow-right"></i></a>
	</div>
</section>
			</div></div>
<!-- About-->
<div id="colr">
<section class="page-section" id="about">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">About Us</h2>
			<div class="d-flex w-100 justify-content-center">
		<hr class="border-secondary" style="border:3px solid;" width="10%">
	</div><br><br>
		</div>
		<div>
			<div class="card w-100">
				<div class="card-body">
					<?php echo file_get_contents(base_app.'about.html') ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact--><center>
<section class="page-section" id="contact">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Contact Us</h2>
			<h3 class="section-subheading text-muted">Send us a message for inquiries.</h3>
		</div>
		<form id="contactForm">
			<div class="row align-items-stretch mb-5">
				<div class="col-md-5">
					<div class="form-group">
						<!-- Name input-->
						<input class="form-control" id="name" name="name" type="text" placeholder="Your Name" required />
					</div>
					<div class="form-group">
						<!-- Email address input-->
						<input class="form-control" id="email" name="email" type="email" placeholder="Your Email" data-sb-validations="required,email" />
					</div>
					<div class="form-group mb-md-0">
						<input class="form-control" id="subject" name="subject" type="subject" placeholder="Subject" required />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group form-group-textarea mb-md-0">
						<!-- Message input-->
						<textarea class="form-control" id="message" name="message" placeholder="Your Message" required></textarea>
					</div>
				</div>
			</div>
			<div class="text-center"><button class="btn btn-secondary btn-l text-uppercase" id="submitButton" type="submit">Send Message</button></div><br>
		</form>
	</div>
</section></center>
<script>
$(function(){
	$('#contactForm').submit(function(e){
		e.preventDefault()
		$.ajax({
			url:_base_url_+"classes/Master.php?f=save_inquiry",
			method:"POST",
			data:$(this).serialize(),
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("an error occured",'error')
				end_loader()
			},
			success:function(resp){
				if(typeof resp == 'object' && resp.status == 'success'){
					alert_toast("Inquiry sent",'success')
					$('#contactForm').get(0).reset()
				}else{
					console.log(resp)
					alert_toast("an error occured",'error')
					end_loader()
				}
			}
		})
	})
})
</script>