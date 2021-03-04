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

        function average($num1,$num2,$num3){
            $arr=[$num1,$num2,$num3];
            $ave=round(array_sum($arr)/count($arr),0);
            return $ave;
        }
use ProductsApp\Mokiniai;
use ProductsApp\Render;

$mokinys1= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Petras','Petrasukas',average(5,5,9));
$mokinys2= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Mindaugas','Minde',average(5,7,9));
$mokinys3= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Jonas','Link',average(5,7,10));
$mokinys4= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Matas','Matauskas',average(5,7,9));
$mokinys5= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Gvidas','Aš',average(9,7,8));
$mokinys6= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Metras','Jurgis',average(9,7,8));
$mokinys7= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Niekas','Niekauskas',average(2,7,8));
$mokinys8= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Jurgis','Kajauskas',average(10,7,8));
$mokinys9= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Vladas','Nesakysiu',average(9,7,8));
$mokinys10= new Mokiniai('5b',rand(),date(" F Y jS  |h:i:s A|"),'Valdas','NeTavoReikalas',average(9,3,8));


Render::Print($mokinys1->showData());
Render::Print($mokinys2->showData());
Render::Print($mokinys3->showData());
Render::Print($mokinys4->showData());
Render::Print($mokinys5->showData());
Render::Print($mokinys6->showData());
Render::Print($mokinys7->showData());
Render::Print($mokinys8->showData());
Render::Print($mokinys9->showData());
Render::Print($mokinys10->showData());

?>
    </table>
</div>
</body>