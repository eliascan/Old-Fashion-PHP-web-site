<?php
            session_start();

        if ($_SESSION['cargo'] != 'Admin') {

                header('location:index.php?flag=2');
        }

        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");

        $db = new SQLite3('db/opos.db');

        $sql = "SELECT * FROM miembro m, datosPoli p, cenVota c WHERE m.ci=p.ci AND m.ci=c.ci";

        $ret = $db->query($sql);

        $outp = "";
    while($row = $ret->fetchArray(SQLITE3_ASSOC)){
            if ($outp != "") {$outp .= ",";}
            $outp .= '{"idMiembro":"' . $row["idMiembro"] . '",';
            $outp .= '"Nombres":"' . $row["nombres"] . '",';
            $outp .= '"Apellidos":"' . $row["apellidos"]  . '",';
            $outp .= '"Sector":"' . $row["secParti"]  . '",';
            $outp .= '"Participar":"' . $row["participar"]  . '",';
            $outp .= '"CV":"' . $row["nombreCV"] . '",';
            $outp .= '"Cedula":"'. $row["ci"] . '"}';
    }
            $outp ='{"records":['.$outp.']}';
            $db->close();
    echo $outp;
?>
