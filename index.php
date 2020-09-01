<!-- GOAL: Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<p>



  <?php


    $testo = "Io sono il sergente maggiore Hartman, vostro capo istruttore, da questo momento potete parlare soltanto quando vi sarà richiesto e la prima e l ultima parola che dovrà uscire dalle vostre fogne sarà signore,tutto chiaro luridissimi vermi?";


    // echo $testo;
    // echo "</br>";
    // echo "</br>";
    // var_dump($testo);
    // echo "</br>";
    // echo "</br>";
    echo strlen($testo);
    echo "</br>";
    echo $_GET["badword"];
    echo "</br>";
    $badword = $_GET["badword"];
    echo "</br>";
    $testo_modificato = str_replace ( $badword, "***", $testo);
    echo $testo_modificato;



  ?>

</p>
