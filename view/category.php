<?php
<<<<<<< HEAD

echo "<li class='submenuunit'><a href='all'>All</a></li><br>";
foreach($arr as $value) {
    echo "<li class='submenuunit'>
    <a href='category?id=".$value['id']."'>".$value['name'].'</a>
    </li>
    <br>';
}

?>
=======
echo "<li class='submenuunit'><a href='all'>ALL</a></li>";
    foreach ($arr as $value) {
        echo "<li class='submenuunit'>
                <a href='category?id={$value['id']}'>{$value['name']}</a>
              </li>";
    }


?>

>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
