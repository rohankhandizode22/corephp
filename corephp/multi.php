<!DOCTYPE html>
<body>
    <table border="1">
        <tr>
            <th>S.no</th> <th> Countery </th> <th> Capital</th>
            <th> National Game</th>
        </tr>
        <?php 
     $arr=[
        "india"=> ["cap"=>"delhi","ng"=>"Hockey"],
        "usa" => ["cap"=>"Wasignton","ng"=>"Baseball"],
        "england" => ["cap"=>"London","ng"=>"Cricket"],
        "england1" => ["cap"=>"London","ng"=>"Cricket"]
     ];
     $ind=1;
       foreach($arr as $c=>$v){
          echo "<tr> <td>$ind </td> <td> $c </td>";
            foreach($v as $v1){
                echo "<td> $v1</td>";
            }
          echo "</tr>";
          $ind++;
       }
        ?>
    </table>
</body>