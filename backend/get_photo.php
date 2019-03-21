<?php

require_once "base_connect.php";
if ($base_connect)
{
    $order = $_POST['order'];

 
    $stmt = $query ->query("SELECT * from photo_desc WHERE category like '$order' AND visibility = 1 ORDER BY 'sequence'");
    
    
    if($stmt)
    {
        $arrayName = array();
        $i = 0;
        foreach($stmt as $rows)
        {
            $arrayName[$i++] = $rows;
        }
   
        $rows = json_encode($arrayName);
        echo $rows;
    } 
} else echo json_encode($base_connect);  
?>