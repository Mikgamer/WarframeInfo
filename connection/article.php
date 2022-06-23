<?php

$result = mysqli_query($connection, "SELECT * FROM article ORDER BY IdArt DESC")
or die("Bad query! ".mysql_error());


?>