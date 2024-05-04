<?php
function patternOne($n){
    for($row=1;$row<=$n;$row++){
        for($col=1;$col<=$n;$col++){
            echo "*";
        }
        echo "<br>";
    }
}
function patterntwo($n){
    for($row=1;$row<=$n;$row++){
        for($col=1;$col<=$row;$col++){
            echo "*";
        }
        echo "<br>";
    }
}
function patternthree($n){
    for($row=1;$row<=$n;$row++){
        for($col=1;$col<=$n;$col++){
            echo $col<=($n-$row)?" "." ":" * ";
        }
        echo "<br>";
    }
}

function patternFour($n){
    for($row=1;$row<=(2*$n-1);$row++){
        $tolCol=$row>$n?2*$n-$row:$row;
        for($col=1;$col<=$tolCol;$col++){
            echo " * ";
        }
        echo "<br>";
    }
}

patternOne(5);

patterntwo(5);

patternthree(5);

patternFour(5);

?>