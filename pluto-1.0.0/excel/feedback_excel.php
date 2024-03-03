<?php
require('../database.php');
$sql="select * from feedback";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td><b>Full Name</b></td>
<td><b>Message</b></td>';

//while ($row=mysqli_fetch_assoc($res))
if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
        $html.='<tr><td>'.$row['nme'].
        '</td><td>'. $row['msg'].
        '</td></tr>';
    }
    echo $html;
}
$html.='</table>';
header("Content-Type: application/xls"); 
header("Content-Disposition: attachment; filename=feedback.xls") ;   
header("Pragma: no-cache"); 
header("Expires: 0");

?>