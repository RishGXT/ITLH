<?php
$arr = 
        [
        array(

            "name" => "MacBook Pro",
            "desc" => "awesome Laptop",
            "price" => NULL,
            "img" => "fake_macbook.jpg"
            )

array(

            "name" => "MacBook Pro1",
            "desc" => "awesome Laptop1",
            "price" => NULL,
            "img" => "fake_macbook.jpg"
            )
        ]; 
       

       echo "<br>";
    asort($arr);

foreach ($arr as $key => $value) {
    echo "$key => $value";
    echo "<br>";
}



/*var_dump($arr);


$sortArrs = 
        array(
            "MacBook Pro",
            "awesome Laptop",
            NULL,
            "fake_macbook.jpg"
            );

        foreach($sortArrs as $sort)
{
    echo "$sort";
}
*/

?>
   