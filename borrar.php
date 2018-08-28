<?php
        error_reporting(0);

        $ci = $_GET['ci'];

        $db = new SQLite3('db/opos.db');

        $sql = "DELETE FROM miembro WHERE ci='$ci'";

        $ret = $db->query($sql);

        $sqlc = "DELETE FROM cenVota WHERE ci='$ci'";

        $retc = $db->query($sqlc);

        $sqlh = "DELETE FROM miembro WHERE ci='$ci'";

        $reth = $db->query($sqlh);

        $sqlp = "DELETE FROM miembro WHERE ci='$ci'";

        $retp = $db->query($sqlp);

        header('location:lista.php');

?>
