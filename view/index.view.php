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

$mokinys1= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Eliziejus','Capas',[7,7,8]);
$mokinys2= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Petras','Petrauskas',[10,7,8]);
$mokinys3= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Jonas','Petrauskas',[10,7,8]);
$mokinys4= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Marius','Petrauskas',[10,7,8]);
$mokinys5= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Gvidas','Petrauskas',[10,7,8]);
$mokinys6= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Grybas','Petrauskas',[10,7,8]);
$mokinys7= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Danielius','Petrauskas',[10,7,8]);
$mokinys8= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Eisa','Petrauskas',[10,7,8]);
$mokinys9= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Egidijus','Petrauskas',[10,7,8]);
$mokinys10= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Tomas','Petrauskas',[2,7,7]);

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

            $sum1=0;
            $sum2=0;
            $sum3=0;
            $sum4=0;
            $sum5=0;
            $sum6=0;
            $sum7=0;
            $sum8=0;
            $sum9=0;
            $sum10=0;
            echo "<tr>";
            echo "<th>" . $list1['klase'] . "</th>";
            echo "<th>" . $list1['kodas'] . "</th>";
            echo "<th>" . $list1['data'] . "</th>";
            echo "<th>" . strtoupper($list1['vardas']) . "</th>";
            echo "<th>" . strtoupper($list1['pavarde']) . "</th>";
            foreach ($list1['vertinimai'] as $b1) {	

                $sum1 = $sum1 + $b1;	

            }	
            $sum1 = $sum1 / sizeof($list1['vertinimai']);	
            echo "<th>";	
            echo round($sum1,);
            echo "</tr>";
            echo "<tr>";
            echo "<th>" . $list2['klase'] . "</th>";
            echo "<th>" . $list2['kodas'] . "</th>";
            echo "<th>" . $list2['data'] . "</th>";
            echo "<th>" . strtoupper($list2['vardas']) . "</th>";
            echo "<th>" . strtoupper($list2['pavarde']) . "</th>";
foreach ($list2['vertinimai'] as $b2) {	

                $sum2 = $sum2 + $b2;	

            }	
            $sum2 = $sum2 / sizeof($list2['vertinimai']);	
            echo "<th>";	
            echo round($sum2,);
            echo "</tr>";
            echo "<th>" . $list3['klase'] . "</th>";
            echo "<th>" . $list3['kodas'] . "</th>";
            echo "<th>" . $list3['data'] . "</th>";
            echo "<th>" . strtoupper($list3['vardas']) . "</th>";
            echo "<th>" . strtoupper($list3['pavarde']) . "</th>";
foreach ($list3['vertinimai'] as $b3) {	

                $sum3 = $sum3 + $b3;	

            }	
            $sum3 = $sum3 / sizeof($list3['vertinimai']);
            echo "<th>";	
            echo round($sum3,);
            echo "</tr>";
            echo "<th>" . $list4['klase'] . "</th>";
            echo "<th>" . $list4['kodas'] . "</th>";
            echo "<th>" . $list4['data'] . "</th>";
            echo "<th>" . strtoupper($list4['vardas']) . "</th>";
            echo "<th>" . strtoupper($list4['pavarde']) . "</th>";
foreach ($list4['vertinimai'] as $b4) {	

                $sum4 = $sum4 + $b4;	

            }	
            $sum4 = $sum4 / sizeof($list4['vertinimai']);
            echo "<th>";	
            echo round($sum4,);
            echo "</tr>";
            echo "<th>" . $list5['klase'] . "</th>";
            echo "<th>" . $list5['kodas'] . "</th>";
            echo "<th>" . $list5['data'] . "</th>";
            echo "<th>" . strtoupper($list5['vardas']) . "</th>";
            echo "<th>" . strtoupper($list5['pavarde']) . "</th>";
foreach ($list5['vertinimai'] as $b5) {	

                $sum5 = $sum5 + $b5;	

            }	
            $sum5 = $sum5 / sizeof($list5['vertinimai']);
            echo "<th>";	
            echo round($sum5,);
            echo "</tr>";
            echo "<th>" . $list6['klase'] . "</th>";
            echo "<th>" . $list6['kodas'] . "</th>";
            echo "<th>" . $list6['data'] . "</th>";
            echo "<th>" . strtoupper($list6['vardas']) . "</th>";
            echo "<th>" . strtoupper($list6['pavarde']) . "</th>";
foreach ($list6['vertinimai'] as $b6) {	

                $sum6= $sum6+ $b6;	

            }	
            $sum6 = $sum6 / sizeof($list6['vertinimai']);
            echo "<th>";	
            echo round($sum6,);
            echo "</tr>";
            echo "<th>" . $list7['klase'] . "</th>";
            echo "<th>" . $list7['kodas'] . "</th>";
            echo "<th>" . $list7['data'] . "</th>";
            echo "<th>" . strtoupper($list7['vardas']) . "</th>";
            echo "<th>" . strtoupper($list7['pavarde']) . "</th>";
foreach ($list7['vertinimai'] as $b7) {	

                $sum7 = $sum7 + $b7;	

            }	
            $sum7 = $sum7 / sizeof($list7['vertinimai']);
            echo "<th>";	
            echo round($sum7,);
            echo "</tr>";
            echo "<th>" . $list8['klase'] . "</th>";
            echo "<th>" . $list8['kodas'] . "</th>";
            echo "<th>" . $list8['data'] . "</th>";
            echo "<th>" . strtoupper($list8['vardas']) . "</th>";
            echo "<th>" . strtoupper($list8['pavarde']) . "</th>";
foreach ($list8['vertinimai'] as $b8) {	

                $sum8 = $sum8 + $b8;	

            }	
            $sum8 = $sum8 / sizeof($list8['vertinimai']);
            echo "<th>";	
            echo round($sum8,);
            echo "</tr>";
            echo "<th>" . $list9['klase'] . "</th>";
            echo "<th>" . $list9['kodas'] . "</th>";
            echo "<th>" . $list9['data'] . "</th>";
            echo "<th>" . strtoupper($list9['vardas']) . "</th>";
            echo "<th>" . strtoupper($list9['pavarde']) . "</th>";
foreach ($list9['vertinimai'] as $b9) {	

                $sum9 = $sum9 + $b9;	

            }	
            $sum9 = $sum9 / sizeof($list9['vertinimai']);
            echo "<th>";	
            echo round($sum9,);
            echo "</tr>";
            echo "<th>" . $list10['klase'] . "</th>";
            echo "<th>" . $list10['kodas'] . "</th>";
            echo "<th>" . $list10['data'] . "</th>";
            echo "<th>" . strtoupper($list10['vardas']) . "</th>";
            echo "<th>" . strtoupper($list10['pavarde']) . "</th>";
foreach ($list10['vertinimai'] as $b10) {	

                $sum10 = $sum10 + $b10;	

            }	
            $sum10 = $sum10 / sizeof($list10['vertinimai']);
            echo "<th>";	
            echo round($sum10,);
            echo "</tr>";
        ?>

    </table>
</div>
</body>