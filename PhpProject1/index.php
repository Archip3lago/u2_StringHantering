<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $m = "Mattias är ganska överviktig. ";
        $m2 = "Mattias luktar blommor ibland. ";
        $k = "Morötter är äckligt. ";
        $k2 = "Det är väldigt äckligt med morötter. ";   
        $k3 = $k;
        $k3 .= $k2;
        
        $v1 = "inte saker";
        $v2 = "andra saker";
        
        $martinsuger = $m. $m2;
        echo $martinsuger;
        echo '<br>' . $k3 . '<br>';
        
        echo str_replace("blommor", "parfym", $m2); 
        echo '<br>';
        echo strchr($m2, "k");
        echo '<br>';
        echo substr($m2, 8, 2);
        echo '<br>';
        echo strpos($martinsuger, "är");
        echo '<br>';
        
        
        
        if($v1 == "saker"){
            echo $v2;
            echo '<br>';
        }else{
            echo $v1;
            echo '<br>';
        }
        
        ?>
    </body>
</html>
