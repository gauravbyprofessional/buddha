<?php
$a=[11,23,9,2,87,45,76,89,90,1,0,12,56,87];

for($i=0;$i<count($a);$i++){
    for($j=0;$j<Count($a)-1;$j++){
        if($a[$j]<$a[$j+1]){
            $temp=$a[$j];
            $a[$j]=$a[$j+1];
            $a[$j+1]=$temp;
        }
    }

}
echo "<pre>";
print_r($a);
$text="Hey Gaurav! How are you";
$vowel=['a','e','i','o','u'];
$seachVowel=[];
$Ctext=strtolower($text);
for($i=0;$i<strlen($Ctext);$i++){
    if(in_array($Ctext[$i],$vowel)){
        if(!in_array($Ctext[$i],$seachVowel)){
            array_push($seachVowel,$Ctext[$i]);
        }
    }
}
print_r($seachVowel);
?>