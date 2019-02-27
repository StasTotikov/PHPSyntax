<?php

$arr=['red','blue','coral','yellow','brown','gray','orange'];
for( $i=0;$i<4;$i++)
{
    $color=$arr[rand(0,6)];
    echo "<div  style="."\""."width:50px; height:50px; margin:7px; border:1px solid black; background:$color"."\""."></div>";
}


function func($num)
{
  
    $dayofmonth = cal_days_in_month(CAL_GREGORIAN, $num, 2019);;

    $day_count = 1;
    $num = 0;
    for($i = 0; $i < 7; $i++)
  
    {
      $dayofweek = date('w',
  
                        mktime(0, 0, 0, date('m'), $day_count, date('Y')));   
      $dayofweek = $dayofweek - 1;  
      if($dayofweek == -1) $dayofweek = 6; 
      if($dayofweek == $i) 
      {
        $week[$num][$i] = $day_count;  
        $day_count++;  
      }
  
    else
  
      {
        $week[$num][$i] = "";
      }
  
    }

    while(true) 
    {
      $num++;
      for($i = 0; $i < 7; $i++)
      {
        $week[$num][$i] = $day_count; 
        $day_count++;
        if($day_count > $dayofmonth) break; 
      }
      if($day_count > $dayofmonth) break;
  
    }
  

    echo "<table >";
  echo ' <tr>
  <td>ПН</td>
  <td>ВТ</td>
  <td>СР</td>
  <td>ЧТ</td>
  <td>ПТ</td>
  <td style="color:red;">СБ</td>
  <td style="color:red;">ВС</td>

</tr>';
    for($i = 0; $i < count($week); $i++)
    {
      echo "<tr>";
  
      for($j = 0; $j < 7; $j++)
  
      {
  
        if(!empty($week[$i][$j]))
  
        {
          if($j == 5 || $j == 6) 
               echo "<td><font color=red>".$week[$i][$j]."</font></td>";
  
          else echo "<td>".$week[$i][$j]."</td>"; 
        } 
        else echo "<td>&nbsp;</td>";  
      } 
      echo "</tr>";
    } 
    echo "</table>";
}



func(rand(1,12));