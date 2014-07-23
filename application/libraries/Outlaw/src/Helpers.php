<?php

function button_to($html_class, $url, $data, $label){
    $result = '';
    $result .= "<form method='post' action='$url' style='display: inline;'>";
    foreach($data as $key=>$value){
        $result .= "<input type='hidden' name='$key' value='$value'>";
    }    
    $result .= "<button class='$html_class'>$label</button>";
    $result .= "</form>";
    echo $result;  
}

function hidden($name, $value){
    echo "<input type='hidden' name='$name' value='$value' />";
}

function look($v){
    exit(var_export($v));
}
