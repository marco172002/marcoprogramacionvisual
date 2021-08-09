<?php

if (isset($_SESSION ["A"])) {
    $_SESSION ["A"]++;
    // echo "<h1>El valor de la sesión numero es: " . $_SESSION['a'] . "</h1>";
    //echo "<a href='aumentar.php'>Aumentar</a><br>";
    // echo "<a href='disminuir.php'>Disminuir</a><br>";
} else {
    $_SESSION ["A"] = 0;
}
unset($_SESSION [" "]);

header("Location: sesion_index.php");
