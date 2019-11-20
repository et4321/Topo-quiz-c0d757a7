<?php


$goed = 0;
$fout = 0;



$landen["Japan"] = "Tokyo";
$landen["Mexico"] = "Mexico City";
$landen["USA"] = "Washington D.C.";
$landen["India"] = "New Delhi";
$landen["Korea"] = "Seoul";
$landen["China"] = "Peking";
$landen["Argentina"] = "Buenos Aires";
$landen['Egypte'] = "Cairo";
$landen["UK"] = "London";



foreach ($landen as $land=>$stad){
    echo"Wat is de Hoofstad van: $land" .PHP_EOL;
    $antwoord = readline();
    

    if ($antwoord === $stad){
        echo"correct!" .PHP_EOL;
        $goed++;
         
    }

    else {
        echo"fout" .PHP_EOL;
        $fout++;
    }

}

echo"Je resulataten voor de Toets zijn: $goed Goed en $fout Fout."
?>


