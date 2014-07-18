<?php

echo "Welcdome";

include 'reader.php';
$excel = new Spreadsheet_Excel_Reader();

$excel->read('sample.xls');
var_dump($excel);
echo "Welcdome";

echo "Welcdome";
echo "Welcdome";

echo "Welcdome";
echo "Welcdome";

echo $excel->sheets[0][1];
echo "Welcdome";

echo "Welcdome";
echo "Welcdome";

echo "Welcdome";
echo "Welcdome";
$x=1;
    while($x<=$excel->sheets[0]['numRows']) {
      echo "IN";
      echo "\t<tr>\n";
      $y=1;
      while($y<=$excel->sheets[0]['numCols']) {
        $cell = isset($excel->sheets[0]['cells'][$x][$y]) ? $excel->sheets[0]['cells'][$x][$y] : '';
        echo "\t\t<td>$cell</td>\n"; 
        $y++;
      } 
      echo "\t</tr>\n";
      $x++;
    }



?>