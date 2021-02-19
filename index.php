<?php
$klase = "5b";
$kodas = rand();
$vardas = "Eliziejus";
$pavarde = "Capas";
strtoupper($vardas);
strtoupper($pavarde);
$data = date("h:i A, F Y, l jS ");
$vidurkis = 0;
$sum = 0;
$kontro_ivertinimas = [
    "Matematika" => 5,
    "Informacines techonologijos" => 9,
    "Anglu" => 10
];
$sum = array_sum($kontro_ivertinimas);
$kiekis = count($kontro_ivertinimas);
$vidurkis = $sum / $kiekis;


$mokiniai = [

    $klase,
    $kodas,
    $vardas,
    $pavarde,
    $vidurkis,
    $data,


];

?>

<head>
    <style>
        table, th {
            border: 1px solid red;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
<div>
    <table>
        <tr>
            <th>Klase</th>
            <th>Kodas</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Kontroliniu darbu vidurkis</th>
            <th>Duomenu formavimo data</th>

        </tr>
        <tr>
            <?php


            for ($i = 0; $i < count($mokiniai); $i++) {
                echo "<th>$mokiniai[$i]</th>";

            }


            ?>
        </tr>
    </table>
</div>
</body>




