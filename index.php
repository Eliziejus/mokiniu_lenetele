<?php


$mokiniai = array(
    0 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Eliziejus",
        "pavarde" => "Capas",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 10,
        ]


    ),
    1 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Petras",
        "pavarde" => "Petraitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 10,
        ]


    ),
    2 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Jonas",
        "pavarde" => "Jonaitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 10,
        ]


    ),
    3 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Martynas",
        "pavarde" => "Martinaitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 10,
        ]


    ),
    4 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Laura",
        "pavarde" => "Laurinaitė",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 10,
        ]


    ),
    5 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Marius",
        "pavarde" => "Mariauskas",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 10,
        ]


    ),
    6 => array(
        "Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Gvidas",
        "pavarde" => "Gvidaitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 10,
        ]


    ),
    7 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Matas",
        "pavarde" => "Mataitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 10,
        ]


    ),
    8 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Valdas",
        "pavarde" => "Valdaitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 10,
        ],



    ),
    9 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date("l jS \of F Y h:i:s A"),
        "vardas" => "Danielius",
        "pavarde" => "Danieliauskas",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 10,
            "Informatika" => 7,
            "Anglu" => 10,
        ]


    )
)


?>

<head>
    <title></title>
    <style>
        table {
            width: 100%;
        }

        table, th {
            border: 4px solid darkblue;
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
            <th>Duomenu formavimo data</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Kontroliniu darbu vidurkis</th>

        </tr>

        <?php
        $sum = 0;

        foreach ($mokiniai as $array => $a) {
            echo "<tr>";

            foreach ($a as $b => $k) {

                echo "<th>$k</th>";




            }
            



        }


        ?>

    </table>
</div>
</body>




