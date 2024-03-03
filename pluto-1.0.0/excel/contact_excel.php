<?php
require('../database.php');
$sql="select * from contact";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td><b>First Name</b></td>
<td><b>Email</b></td>
<td><b>Subject</b></td>
<td><b>Message</b></td>';

//while ($row=mysqli_fetch_assoc($res))
if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
        $html.='<tr><td>'.$row['fullname'].
        '</td><td>'. $row['email'].
        '</td><td>'.$row['sub'].'</td><td>'
        .$row['msg'].
        '</td></tr>';
        
        
    }
    echo $html;
}
$html.='</table>';
header("Content-Type: application/xls"); 
header("Content-Disposition: attachment; filename=contactus.xls") ;  
 
header("Pragma: no-cache"); 
header("Expires: 0");

?>