<?php


    echo "Hello world!<br>Im Amal<br>Whats Up..";

$connection = new MongoClient('mongodb://user:pass@ds051605.mlab.com:51605/db');
if($connection)
    echo "true";
else
    echo "fasle";


?>
