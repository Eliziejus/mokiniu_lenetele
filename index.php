<?php


$mokiniai = array(
    0 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date(" F Y jS  |h:i:s A|"),
        "vardas" => "Grybas",
        "pavarde" => "Grybauskas",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 10,
            "Anglu" => 5,
        ]


    ),
    1 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date(" F Y jS  |h:i:s A|"),
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
        "data" => date(" F Y jS  |h:i:s A|"),
        "vardas" => "Jonas",
        "pavarde" => "Jonaitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 7,
            "Anglu" => 10,
        ]


    ),
    3 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date(" F Y jS  |h:i:s A|"),
        "vardas" => "Martynas",
        "pavarde" => "Martinaitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 10,
            "Informatika" => 9,
            "Anglu" => 10,
        ]


    ),
    4 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date(" F Y jS  |h:i:s A|"),
        "vardas" => "Laura",
        "pavarde" => "Laurinaitė",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 10,
            "Anglu" => 10,
        ]


    ),
    5 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date(" F Y jS  |h:i:s A|"),
        "vardas" => "Marius",
        "pavarde" => "Mariauskas",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 7,
            "Informatika" => 9,
            "Anglu" => 5,
        ]


    ),
    6 => array(
        "Klase" => "5b",
        "Kodas" => rand(),
        "data" => date(" F Y jS  |h:i:s A|"),
        "vardas" => "Gvidas",
        "pavarde" => "Gvidaitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 9,
            "Anglu" => 5,
        ]


    ),
    7 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date(" F Y jS  |h:i:s A|"),
        "vardas" => "Matas",
        "pavarde" => "Mataitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 5,
            "Informatika" => 10,
            "Anglu" => 8,
        ]


    ),
    8 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date(" F Y jS  |h:i:s A|"),
        "vardas" => "Valdas",
        "pavarde" => "Valdaitis",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 10,
            "Informatika" => 9,
            "Anglu" => 2,
        ],



    ),
    9 => array
    ("Klase" => "5b",
        "Kodas" => rand(),
        "data" => date(" F Y jS  |h:i:s A|"),
        "vardas" => "Danielius",
        "pavarde" => "Danieliauskas",
        "Kontrolinio darbu ivertinimai" => [
            "Matematika" => 10,
            "Informatika" => 5,
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
            border: 2px solid darkblue;
            border-collapse: collapse;
            padding: 8px;
        }

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
        foreach ( $mokiniai as $array => $a ) {
            $sum = 0;
            echo "<tr>";
            echo "<th>" . $a['Klase'] . "</th>";
            echo "<th>" . $a['Kodas'] . "</th>";
            echo "<th>" . $a['data'] . "</th>";
            echo "<th>" . strtoupper($a['vardas']) . "</th>";
            echo "<th>" . strtoupper($a['pavarde']) . "</th>";
            foreach ($a['Kontrolinio darbu ivertinimai'] as $b => $pazymiai) {

                $sum = $sum + $pazymiai;

            }
            $sum = $sum / sizeof($a['Kontrolinio darbu ivertinimai']);
            echo "<th>";
            echo round($sum);
            echo "</th>";
            echo '</th>';

        }


        ?>

    </table>
</div>
</body>