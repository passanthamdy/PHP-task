<?php

echo "<table border='1'>";
$record_index = 0;
foreach ($all_requrds as $item) {
    if ($record_index === 0) {
        echo "<tr>";
        echo "<td> Name </td>";
        echo "<td> Price </td>";
        echo "<td> Country </td>";

        echo "</tr>";
    }
    echo "<tr>";
   
        echo "<td>".$item->product_name ."</td>";
        echo "<td>".$item->list_price ."</td>";
        echo "<td>".$item->CouNtry ."</td>";
    echo "</tr>";

    $record_index ++;
}
echo "</table>";
?>
<div> 
    <a href="<?php echo $previous_link;  ?>"> << Prev </a> | <a href="<?php echo $next_link;  ?>">  Next >> </a>
</div>
<div>
<p><?php if(_Debug_Mode_==0) echo $all_records_sql ?></p>
<br>
</div>
