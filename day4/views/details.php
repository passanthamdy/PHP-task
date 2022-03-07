<?php
$id= $_GET["item"];
if($details_tb->where('id',$id)->exists()){
    $item = $details_tb->where('id',$id)->first();
}else {
    die("item not found!");
}

?>
<html>
<h3> <?php echo $item->product_name; ?></h3>
<h5>Country: <?php echo $item->CouNtry; ?>  </h5>
<h5>Price: <?php echo $item->list_price?> </h5>
<h5>Category: <?php echo $item->category?> </h5>
<h5>Rating: <?php echo $item->Rating?> </h5>

<div>
<img src="images/<?php echo $item->Photo;?>" alt="product img">

</div>

</html>