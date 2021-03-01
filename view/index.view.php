<?php







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
        use ProductsApp\Mokiniai;

$mokinys1= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Eliziejus','Capas',8);
$mokinys2= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Petras','Petrauskas',9);
$mokinys3= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Jonas','Petrauskas',9);
$mokinys4= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Marius','Petrauskas',7);
$mokinys5= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Gvidas','Petrauskas',4);
$mokinys6= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Grybas','Petrauskas',7);
$mokinys7= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Danielius','Petrauskas',9);
$mokinys8= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Eisa','Petrauskas',10);
$mokinys9= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Egidijus','Petrauskas',1);
$mokinys10= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Tomas','Petrauskas',8,9,1);

$list1=(array)$mokinys1;
$list2=(array)$mokinys2;
$list3=(array)$mokinys3;
$list4=(array)$mokinys4;
$list5=(array)$mokinys5;
$list6=(array)$mokinys6;
$list7=(array)$mokinys7;
$list8=(array)$mokinys8;
$list9=(array)$mokinys9;
$list10=(array)$mokinys10;

        
            echo "<tr>";
            echo "<th>" . $list1['klase'] . "</th>";
            echo "<th>" . $list1['kodas'] . "</th>";
            echo "<th>" . $list1['data'] . "</th>";
            echo "<th>" . strtoupper($list1['vardas']) . "</th>";
            echo "<th>" . strtoupper($list1['pavarde']) . "</th>";
            echo "<th>" . $list1['vertinimai']. "</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>" . $list2['klase'] . "</th>";
            echo "<th>" . $list2['kodas'] . "</th>";
            echo "<th>" . $list2['data'] . "</th>";
            echo "<th>" . strtoupper($list2['vardas']) . "</th>";
            echo "<th>" . strtoupper($list2['pavarde']) . "</th>";
            echo "<th>" . $list2['vertinimai']. "</th>";
            echo "</tr>";
            echo "<th>" . $list3['klase'] . "</th>";
            echo "<th>" . $list3['kodas'] . "</th>";
            echo "<th>" . $list3['data'] . "</th>";
            echo "<th>" . strtoupper($list3['vardas']) . "</th>";
            echo "<th>" . strtoupper($list3['pavarde']) . "</th>";
            echo "<th>" . $list3['vertinimai']. "</th>";
            echo "</tr>";
            echo "<th>" . $list4['klase'] . "</th>";
            echo "<th>" . $list4['kodas'] . "</th>";
            echo "<th>" . $list4['data'] . "</th>";
            echo "<th>" . strtoupper($list4['vardas']) . "</th>";
            echo "<th>" . strtoupper($list4['pavarde']) . "</th>";
            echo "<th>" . $list4['vertinimai']. "</th>";
            echo "</tr>";
            echo "<th>" . $list5['klase'] . "</th>";
            echo "<th>" . $list5['kodas'] . "</th>";
            echo "<th>" . $list5['data'] . "</th>";
            echo "<th>" . strtoupper($list5['vardas']) . "</th>";
            echo "<th>" . strtoupper($list5['pavarde']) . "</th>";
            echo "<th>" . $list5['vertinimai']. "</th>";
            echo "</tr>";
            echo "<th>" . $list6['klase'] . "</th>";
            echo "<th>" . $list6['kodas'] . "</th>";
            echo "<th>" . $list6['data'] . "</th>";
            echo "<th>" . strtoupper($list6['vardas']) . "</th>";
            echo "<th>" . strtoupper($list6['pavarde']) . "</th>";
            echo "<th>" . $list6['vertinimai']. "</th>";
            echo "</tr>";
            echo "<th>" . $list7['klase'] . "</th>";
            echo "<th>" . $list7['kodas'] . "</th>";
            echo "<th>" . $list7['data'] . "</th>";
            echo "<th>" . strtoupper($list7['vardas']) . "</th>";
            echo "<th>" . strtoupper($list7['pavarde']) . "</th>";
            echo "<th>" . $list7['vertinimai']. "</th>";
            echo "</tr>";
            echo "<th>" . $list8['klase'] . "</th>";
            echo "<th>" . $list8['kodas'] . "</th>";
            echo "<th>" . $list8['data'] . "</th>";
            echo "<th>" . strtoupper($list8['vardas']) . "</th>";
            echo "<th>" . strtoupper($list8['pavarde']) . "</th>";
            echo "<th>" . $list8['vertinimai']. "</th>";
            echo "</tr>";
            echo "<th>" . $list9['klase'] . "</th>";
            echo "<th>" . $list9['kodas'] . "</th>";
            echo "<th>" . $list9['data'] . "</th>";
            echo "<th>" . strtoupper($list9['vardas']) . "</th>";
            echo "<th>" . strtoupper($list9['pavarde']) . "</th>";
            echo "<th>" . $list9['vertinimai']. "</th>";
            echo "</tr>";
            echo "<th>" . $list10['klase'] . "</th>";
            echo "<th>" . $list10['kodas'] . "</th>";
            echo "<th>" . $list10['data'] . "</th>";
            echo "<th>" . strtoupper($list10['vardas']) . "</th>";
            echo "<th>" . strtoupper($list10['pavarde']) . "</th>";
            echo "<th>" . $list10['vertinimai']. "</th>";
            echo "</tr>";
        ?>

    </table>
</div>
</body>