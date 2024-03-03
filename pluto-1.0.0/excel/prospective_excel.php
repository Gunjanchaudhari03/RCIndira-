<?php
require('../database.php');
$sql="select * from prospectiveform";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td><b>First Name</b></td>
<td><b>Father Name</b></td>
<td><b>Last Name</b></td>
<td><b>Mobile Number</b></td>
<td><b>BG</b></td>
<td><b>DOB</b></td>
<td><b>Email</b></td>
<td><b>Address</b></td>
<td><b>Emergency No</b></td>
<td><b>Gender</b></td>
<td><b>Education </b></td>
<td><b>Moto of joining Club</b></td>
<td><b>About you</b></td></tr>';
while ($row=mysqli_fetch_assoc($res))
{
    $html.='<tr><td>'.$row['firstName'].
    '</td><td>'. $row['fatherSpousename'].
    '</td><td>'.$row['lastName'].'</td><td>'
    .$row['mobNo'].
    '</td><td>'.$row['bloodgroup'].
    '</td><td>'.$row['dob'].
    '</td><td>'.$row['email'].
    '</td><td>'.$row['ad'].'</td><td>'.$row['emergencyNo'].'</td><td>'.$row['gender'].'</td><td>'.$row['eduQua'].'</td><td>'.$row['moto'].'</td><td>'.$row['aboutYou'].'</td><td>';
    echo $html;
    
}
$html.='</table>';
header("Content-Type: application/xls"); 
header("Content-Disposition: attachment; filename=prospectivedata.xls") ;  
 
header("Pragma: no-cache"); 
header("Expires: 0");

?>