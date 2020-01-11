 <?php
 include "connection.php";
 $data=mysqli_query($connect, "SELECT * from mn_makanan where jns_makanan=1");
 if ($data === FALSE) {
 die(mysql_error());
 }
 $no=1;
 while($hasil=mysqli_fetch_array($data)){ 
 
 echo "<tr>
 <td>$no</td>
 <td>$hasil[nama_makanan]</td>
 </tr>";
 $no++;
 }
 ?>