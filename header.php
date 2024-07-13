<style>
        #btn:hover{
            background: black;
            border-radius: 30px 40px 40px 30px;
            font-size: 17px;
            font-weight: bold;
            padding: 10px 4px 10px 4px;
        }
</style>
<header class="header" style="background-color: #343A40;">

   <div class="flex">

      <a href="http://localhost/tourism/" class="logo">Tour Hub</a>

      <nav class="navbar" style="background-color: #343A40; text-transform: uppercase;">
         <a href="http://localhost/tourism/" style="text-transform: uppercase; color: #B2BEB5" id="btn">Home</a>
         <a href="products.php" style="text-transform: uppercase; color: #B2BEB5" id="btn">view products</a>
         <a href="http://localhost/tourism/?page=packages" style="text-transform: uppercase; color: #B2BEB5" id="btn">Packages</a>
         <a href="http://localhost/tourism/odfs/" style="text-transform: uppercase; color: #B2BEB5" id="btn">forum</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart" style="text-transform: uppercase;"><i class="fa-solid fa-cart-shopping"></i> <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>