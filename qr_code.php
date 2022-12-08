<?php
include "sqlconnect.php";
$sql= $connection->query("SELECT CURRENT_USER;") ;
$sql->execute();
$ligne = $sql->fetchall();

$user = $ligne[0][0];

preg_match('/(.*)@/', $user, $output_array);
?>
<html>
    <header>

    </header>
    <body>
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php
        echo $output_array[1]."/".time();
        ?>">
    </body>
</html>
