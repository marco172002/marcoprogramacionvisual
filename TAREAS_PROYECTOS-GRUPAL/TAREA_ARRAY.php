
<body>
<table border="1" align="center">
    <thead>
        <tr>
            <?php
              $array = array("ACCION ","AVENTURA","DEPORTES");
                foreach ($array as $NOMBRE => $NOMBREresibidos) {
                  echo '<th>'.$NOMBREresibidos.'</th>';
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $array = array("GTA","Assains Creed" , "PES19");
            foreach ($array as $ACCION => $ACCIONRecibido){
                echo '<td>'.$ACCIONRecibido.'</td>';
            }
            ?>
        </tr>
        <tr>
            <?php
            $array = array("Call Of Duty", "Crash Bandicoot","FIFA19" );
            foreach ($array as $AVENTURA => $AVENTURARecibido){
                echo '<td>'.$AVENTURARecibido.'</td>';
            }
            ?>
        </tr>
        <tr>
            <?php
            $array = array(  "PUG", "Pince Of Percia", "MOTO G19");
            foreach ($array as $DEPORTE => $DEPORTERecibido){
                echo '<td>'.$DEPORTERecibido.'</td>';
            }
            ?>
        </tr>
    </tbody>
</table>
