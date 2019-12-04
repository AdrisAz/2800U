<?php
session_start();
$connect=mysqli_connect("localhost","root","admin","OFM")
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <title>Ontario Food Mart Products</title>
</br>
  <center><h1 class="pro-page">Ontario Food Mart Products</h1></center>
</br>
  <div class="topnav">
    <input type="button" class="Navbar" value="Home" onclick="location.href='index.php';">
    <input type="button" class="active" value="Products" onclick="location.href='index2.php';">
    <input type="button" class="Navbar" value="Login" onclick="location.href='Login.html';">
    <input type="button" class="Navbar" value="Sign up" onclick="location.href='Signup.html';">
  </div>
</head>
<body>


 <?php
 if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["name"],
                     'item_price'          =>     $_POST["price"],
                     'item_quantity'          =>     $_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
           }
           else
           {
                echo '<script>alert("Item Already Added")</script>';
           }
      }
      else
      {
           $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["name"],
                'item_price'          =>     $_POST["price"],
                'item_quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["shopping_cart"][$keys]);
                }
           }
      }
 }
 ?>




           <br/>

           <div class="container" style="width:1000px">
                <h3 class="center"></h3><br />
                <?php
                $query = "SELECT * FROM products ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                     while($row = mysqli_fetch_array($result))
                     {
                ?>

                <div class="col-md-4">
                     <form method="post" action="index2.php?action=add&id=<?php echo $row["id"]; ?>">

                          <div style=" background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                               <img src="<?php echo $row["image"]; ?>" class="images"> <br />
                               <h4 class="text"><?php echo $row["name"]; ?></h4>
                               <h4 class="text">$ <?php echo $row["price"]; ?></h4>
                               <input type="text" name="quantity" class="quantity" value="1" >
                               <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                               <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

                          </div>

                     </form>
                </div>
                <?php
                     }
                }
                ?>
                <div style="clear:both"></div>
                <br />
                <h3>Order Details</h3>
                <div class="table-responsive">
                     <table class="table table-bordered">
                          <tr>
                               <th width="40%">Item Name</th>
                               <th width="10%">Quantity</th>
                               <th width="20%">Price</th>
                               <th width="15%">Total</th>
                               <th width="5%">Action</th>
                          </tr>
                          <?php
                          if(!empty($_SESSION["shopping_cart"]))
                          {
                               $total = 0;
                               foreach($_SESSION["shopping_cart"] as $keys => $values)
                               {
                          ?>
                          <tr>
                               <td><?php echo $values["item_name"]; ?></td>
                               <td><?php echo $values["item_quantity"]; ?></td>
                               <td>$ <?php echo $values["item_price"]; ?></td>
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                               <td><a href="index2.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                          </tr>
                          <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                               }
                          ?>
                          <tr>
                               <td colspan="3" align="right">Total</td>
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>
                               <td align="right"> <input type="submit" onclick="location.href='Cart.html';">  </td>
                          </tr>
                          <?php
                          }
                          ?>
                     </table>
                </div>
           </div>
           <br/>
</body>
</html>
