<?php
require('../database.php');
$sql="select * from queries";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td><b>First Name</b></td>
<td><b>Email</b></td>
<td><b>Question</b></td>';


//while ($row=mysqli_fetch_assoc($res))
if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
        $html.='<tr><td>'.$row['nme'].
        '</td><td>'. $row['email'].
        '</td><td>'.$row['question'].'</td><td>';
    }
    echo $html;
}
$html.='</table>';
header("Content-Type: application/xls"); 
header("Content-Disposition: attachment; filename=queries.xls") ;  
 
header("Pragma: no-cache"); 
header("Expires: 0");

?>