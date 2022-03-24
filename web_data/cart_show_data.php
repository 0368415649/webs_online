<?php
    $result = mysqli_query($conn,$sql);
    $data  = mysqli_fetch_all($result,1);

       $s=' { "data" : [ '."\n" ;
        for( $i =0 ; $i < count($data); $i++){
            $s.='{'."\n";
                $s.= '"id" :"'.$data[$i]['id'].'",'."\n";
                $s.='"name":"'.($data[$i]['name']).'",'."\n";
                $s.='"link":"'.($data[$i]['link']).'",'."\n";
                $s.='"price":"'.($data[$i]['price']).'",'."\n";
                $s.='"category":"'.($data[$i]['category']).'",'."\n";
                $s.='"quantily":"'.($data[$i]['quantily']).'"'."\n";
            $s.='},'."\n";
        
           }
        $s= rtrim($s);
        $s= rtrim($s,',');
        
        $s.= "\n".']}';
        header('Content-Type: application/json');   
        echo $s;

    ?>