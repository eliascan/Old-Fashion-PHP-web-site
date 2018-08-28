<?php

    $db = new SQLite3('db/opos.db');

        //VARIABLE POST
    $cedula = filter_input(INPUT_POST, 'cedula', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT idUsu, cargo FROM usuario WHERE ci='$cedula' AND clave='$password' LIMIT 1";

    $ret = $db->query($sql);

    while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
                    $fila = $row['idUsu'];
                    $cargo = $row['cargo'];
    }


    if ($fila > 0 && $cargo == 'Admin') {
        session_start();
        $_SESSION['cargo'] = $cargo;

        header('Location:lista.php');
    }
    elseif ($fila > 0 && $cargo == 'Secretaria') {
        session_start();
        $_SESSION['cargo'] = $cargo;

        header('Location:listaSe.php');
    }
    else {
        header('Location:index.php?flag=1');
    }


?>
