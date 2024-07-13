<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Hub</title>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" >
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        body{
            background-image: url('Images/back.jpg');
            backdrop-filter: blur(4px);
            filter: drop-shadow(20px 20px 20px);
            background-size: cover;
        }
        #btn:hover{
            background: black;
            border-radius: 30px 40px 40px 30px;
            font-size: 17px;
            font-weight: bold;
            padding: 10px 4px 10px 4px;
        }
	    #chatus{
		    position: fixed;
		    bottom: 160px;
		    right: 30px;
		    filter: drop-shadow(10px 10px 10px);
    	}
	    .whatsapp{
		    position: fixed;
		    bottom: 90px;
		    right: 30px;
		    filter: drop-shadow(10px 10px 10px);
	    }
	    #chatus:hover, .whatsapp:hover{
		    transform: scale(1.3);
		    z-index: 5;
	    }
        .title{
            background-color: red;
        }
    </style>
</head>

<body>
    <header style="background-color: #3B444B; width: 1363px; height: 56px; line-height: 56px;">
    
    <div style="color: white;">
    
    <a href="http://localhost/tourism/" style=" margin-left: 30px; text-decoration: none; color: white; font-weight: bold;  font-size: 20px;"> Tour Hub </a>
    <a href="http://localhost/tourism/" style="text-decoration: none; color: #B2BEB5; margin-left: 650px;" id="btn"> HOME </a>
    <a href="./?page=packages" style="text-decoration: none; color: #B2BEB5; margin-left: 15px;" id="btn"> PACKAGES </a>
    <a href="http://localhost/tourism/odfs/" style="text-decoration: none; color: #B2BEB5; margin-left: 15px;" id="btn"> FORUM </a>
    <a href="http://localhost/tourism/#about" style="text-decoration: none; color: #B2BEB5; margin-left: 15px;" id="btn"> ABOUT </a>
    <a href="http://localhost/tourism/#contact" style="text-decoration: none; color: #B2BEB5; margin-left: 15px;" id="btn"> CONTACT </a><font color="white" style="font-size: 20px; font-weight: bold; cursor: pointer;">&nbsp; | </font>
    <a href="http://localhost/tourism/admin/login.php" style="text-decoration: none; color: #B2BEB5; margin-left: 10px;" id="btn"> LOGIN AS ADMIN </a>
    
</div>


<div id="chatus">
	<a href="bot.php">
		<img src="Images/refresh.png" width="50px" alt=""></a><br/>
	</a>
</div>
<div class="whatsapp">
	<a href="https://wa.me/923471222429">
		<img src="Images/whatsapp.png" width="50px" alt=""></a><br/>
	</a>
</div>

    </header>
    <br>
    <div class="wrapper" style="width: 85%;">
        <div class="title">Chat US</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div id="wlcmsg" class="msg-header">
                    <p>Welcome to Tour Hub!
                        <br>Please choose the related options:<br><br>
                        1. Want to know about the packages details<br>
                        2. Want to know about the products details<br>
                        3. How does the forum work?<br>
                        4. How does this chat work?<br>
                        5. Want to contact to the live agent<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Choose the options from above" required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
    <br><footer style="background-color: #2A3439; width: 1363px; height: 63px; line-height: 63px;">
    <div>
<h5 style="color: white; text-align: center;"> Copyright © 2023 - Tour Hub </h5>
</div></footer>
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                
                $value = $("#data").val();
                
           
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // Start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // When chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>