<style>
    #txt{
        text-transform: uppercase;
        text-decoration: none;
        color: white;
        font-weight: bold;  
    }
</style>
<?php
// connecting to the database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// getting user message through AJAX
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

// Initialize variables
$data = "";
$pro = "";

if ($getMesg == "0") {
    $data = "Please press the related options:<br><br>1. Want to know about the packages details<br>2. Want to know about the products details<br>3. How does the forum work?<br>4. How does this chat work?<br>5. Want to contact to the live agent<br>0. Back";
    echo $data;
} elseif ($getMesg == "5") {
    $page = isset($_GET['page']) ? $_GET['page'] : 'default';
    $redirectUrl = $page != 'home' ? './#contact' : '#contact';
    echo '<a href="' . $redirectUrl . '" id="txt">Click here to contact</a>';
} else {
    if($getMesg=="1"){
        $data=3;
        $pro ="Please choose/write the related options/keyword:<br><br>
        Want to know how many national tours. Please enter (national tours)<br>
        Want to know how many international tours. Please enter (international tours)<br>
        0. Back";
   }
   elseif($getMesg=="national tours"){
        $data = 27;
        $pro = "Want to know about Fairy Meadows and Nanga Parbat Base Camp price. Please enter keyword 'nanga parbat price'<br>
        Want to know about Kalash & Chitral Valley price. Please enter keyword  'chitral price'<br>
        Want to know about Kumrat Valley and Katora Lake price. Please enter keyword 'kumrat price'<br>
        Want to know about Hunza Valley & Khunjrab Pass price. Please enter keyword 'khunjrab price'<br>
        Want to know about Naran Shogran price. Please enter keyword 'naran price'<br>
        Want to know about Murree Patriata price. Please enter keyword 'murree price'<br>
        Want to know about Fairy Meadows Skardu price. Please enter keyword 'skardu price'<br>
        Want to know about Swat price. Please enter keyword 'swat price'<br>
        Want to know about Hunza price. Please enter keyword 'hunza price'<br>
        0. Back";
   }
   elseif($getMesg=="nanga parbat price"){
    $data = 38;
    $pro = "0. Back";
   }
   elseif($getMesg=="chitral price"){
    $data = 39;
    $pro = "0. Back";
   }
   elseif($getMesg=="kumrat price"){
    $data = 40;
    $pro = "0. Back";
   }
   elseif($getMesg=="khunjrab price"){
    $data = 41;
    $pro = "0. Back";
   }
   elseif($getMesg=="naran price"){
    $data = 42;
    $pro = "0. Back";
   }
   elseif($getMesg=="murree price"){
    $data = 43;
    $pro = "0. Back";
   }
   elseif($getMesg=="skardu price"){
    $data = 44;
    $pro = "0. Back";
   }
   elseif($getMesg=="swat price"){
    $data = 45;
    $pro = "0. Back";
   }
   elseif($getMesg=="hunza price"){
    $data = 46;
    $pro = "0. Back";
   }
   elseif($getMesg=="international tours"){
    $data = 28;
    $pro = "Want to know about Hajj price. Please enter keyword 'hajj price'<br>
    Want to know about Umrah price. Please enter keyword  'umrah price'<br>
    Want to know about Nepal price. Please enter keyword 'nepal price'<br>
    Want to know about Canada price. Please enter keyword 'canada price'<br>
    Want to know about Malaysia price. Please enter keyword 'malaysia price'<br>
    Want to know about Egypt price. Please enter keyword 'egypt price'<br>
    Want to know about Switzerland price. Please enter keyword 'switzerland price'<br>
    0. Back";
   }

   elseif($getMesg=="hajj price"){
    $data = 15;
    $pro = "0. Back";
   }
   elseif($getMesg=="umrah price"){
    $data = 17;
    $pro = "0. Back";
   }
   elseif($getMesg=="nepal price"){
    $data = 32;
    $pro = "0. Back";
   }
   elseif($getMesg=="canada price"){
    $data = 33;
    $pro = "0. Back";
   }
   elseif($getMesg=="malaysia price"){
    $data = 34;
    $pro = "0. Back";
   }
   elseif($getMesg=="egypt price"){
    $data = 35;
    $pro = "0. Back";
   }
   elseif($getMesg=="switzerland price"){
    $data = 36;
    $pro = "0. Back";
   }
   else if ($getMesg == "2") {
    $page = isset($_GET['page']) ? $_GET['page'] : 'default';
    $redirectUrl = $page != 'home' ? './products.php' : '#products';
    echo '<a href="' . $redirectUrl . '" id="txt">Click here to see the products</a>';
   }
   else if ($getMesg == "3") { 
    $data=29;
    $pro="Please choose/write the related options/keyword:<br><br>
    How many categories there in the forum. Please enter (forum categories)<br>
    0. Back";
    }
    elseif($getMesg=="forum categories"){
    $data = 30;
    $pro = "0. Back";
   }
   else if ($getMesg == "4") { 
    $data= 31;
    $pro="0. Back";
   }
   
   else{
    $data="";
   }

    // Checking user query in the database
    $check_data = "SELECT replies FROM chatbot WHERE id= '$data'";
    $run_query = mysqli_query($conn, $check_data) or die("Error");

    if (mysqli_num_rows($run_query) > 0) {
        $fetch_data = mysqli_fetch_assoc($run_query);
        $replay = $fetch_data['replies'];
        echo $replay . "<br><br>" . $pro;
    } else {
        //echo "Sorry, I can't understand you!";
    }
}
?>
<!--?php
//connecting to database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
if($getMesg=="0")
{
    $data="Please press the related options:<br><br>

    1. Want to know about the packages details<br>
    2. Want to know about the products details<br>
    3. How does the forum work?<br>
    4. How does this chat work?<br>
    5. Want to contact to the live agent<br>
    0. Back";
    echo $data;
}

if ($getMesg == "5") {
    $page = isset($_GET['page']) ? $_GET['page'] : 'default';
    $redirectUrl = $page != 'home' ? './#contact' : '#contact';
    echo '<a href="' . $redirectUrl . '" id="txt">Click here to contact</a>';
}


else{
    if($getMesg=="1"){
        $data=3;
        $pro ="Please choose/write the related options/keyword:<br><br>
        Want to know how many national tours. Please enter (national tours)<br>
        Want to know how many international tours. Please enter (international tours)<br>
        0. Back";
   }
   elseif($getMesg=="national tours"){
        $data = 27;
        $pro = "Want to know about Fairy Meadows and Nanga Parbat Base Camp price. Please enter keyword 'nanga parbat price'<br>
        Want to know about Kalash & Chitral Valley price. Please enter keyword  'chitral price'<br>
        Want to know about Kumrat Valley and Katora Lake price. Please enter keyword 'kumrat price'<br>
        Want to know about Hunza Valley & Khunjrab Pass price. Please enter keyword 'khunjrab price'<br>
        Want to know about Naran Shogran price. Please enter keyword 'naran price'<br>
        Want to know about Murree Patriata price. Please enter keyword 'murree price'<br>
        Want to know about Fairy Meadows Skardu price. Please enter keyword 'skardu price'<br>
        Want to know about Swat price. Please enter keyword 'swat price'<br>
        Want to know about Hunza price. Please enter keyword 'hunza price'<br>
        0. Back";
   }
   elseif($getMesg=="nanga parbat price"){
    $data = 38;
    $pro = "0. Back";
   }
   elseif($getMesg=="chitral price"){
    $data = 39;
    $pro = "0. Back";
   }
   elseif($getMesg=="kumrat price"){
    $data = 40;
    $pro = "0. Back";
   }
   elseif($getMesg=="khunjrab price"){
    $data = 41;
    $pro = "0. Back";
   }
   elseif($getMesg=="naran price"){
    $data = 42;
    $pro = "0. Back";
   }
   elseif($getMesg=="murree price"){
    $data = 43;
    $pro = "0. Back";
   }
   elseif($getMesg=="skardu price"){
    $data = 44;
    $pro = "0. Back";
   }
   elseif($getMesg=="swat price"){
    $data = 45;
    $pro = "0. Back";
   }
   elseif($getMesg=="hunza price"){
    $data = 46;
    $pro = "0. Back";
   }
   elseif($getMesg=="international tours"){
    $data = 28;
    $pro = "Want to know about Hajj price. Please enter keyword 'hajj price'<br>
    Want to know about Umrah price. Please enter keyword  'umrah price'<br>
    Want to know about Nepal price. Please enter keyword 'nepal price'<br>
    Want to know about Canada price. Please enter keyword 'canada price'<br>
    Want to know about Malaysia price. Please enter keyword 'malaysia price'<br>
    Want to know about Egypt price. Please enter keyword 'egypt price'<br>
    Want to know about Switzerland price. Please enter keyword 'switzerland price'<br>
    0. Back";
   }

   elseif($getMesg=="hajj price"){
    $data = 15;
    $pro = "0. Back";
   }
   elseif($getMesg=="umrah price"){
    $data = 17;
    $pro = "0. Back";
   }
   elseif($getMesg=="nepal price"){
    $data = 32;
    $pro = "0. Back";
   }
   elseif($getMesg=="canada price"){
    $data = 33;
    $pro = "0. Back";
   }
   elseif($getMesg=="malaysia price"){
    $data = 34;
    $pro = "0. Back";
   }
   elseif($getMesg=="egypt price"){
    $data = 35;
    $pro = "0. Back";
   }
   elseif($getMesg=="switzerland price"){
    $data = 36;
    $pro = "0. Back";
   }
   else if ($getMesg == "2") {
    $page = isset($_GET['page']) ? $_GET['page'] : 'default';
    $redirectUrl = $page != 'home' ? './products.php' : '#products';
    echo '<a href="' . $redirectUrl . '" id="txt">Click here to see the products</a>';
   }
   else if ($getMesg == "3") { 
    $data=29;
    $pro="Please choose/write the related options/keyword:<br><br>
    How many categories there in the forum. Please enter (forum categories)<br>
    0. Back";
    }
    elseif($getMesg=="forum categories"){
    $data = 30;
    $pro = "0. Back";
   }
   else if ($getMesg == "4") { 
    $data= 31;
    $pro="0. Back";
   }
   
   else{
    $data="";
   }

//checking user query to database query
//$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$check_data = "SELECT replies FROM chatbot WHERE id= '$data'";

$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['replies'];
    echo $replay . "<br><br>" . $pro;
    
}else{
    echo "";
    //echo "Sorry, I can't be able to understand you!<br>Please read the option again and provide me the specific keyword or option provided";
}

}

?>