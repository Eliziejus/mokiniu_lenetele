<?php

namespace ProductsApp;

class Render{

    static public function Print($data){
    echo "<tr>";
    foreach($data as $datas){
        echo"<th>$datas</th>";

    }
    
        
    }
}


?>