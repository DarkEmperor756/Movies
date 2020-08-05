<?php

										
											$cnn=mysqli_connect("localhost","root","","movie");
											$qry="select * from bollywood";
											$result=$cnn->query($qry);
											//echo $qry;
											$str="<table class='table' table-bordered table-hover'>";
											$x=1;
											while($row=$result->fetch_assoc())
											{
											   if($x==1)
											   {
											      $str.="<tr>";
											   }
											   $x++;
											   $str.="<br><td><h5 align='center'>"."<img src=".$row["movieimage"]."'height='200' width='300'>"."<br><br>".$row["moviename"]."<br><br>"."<a href=".$row["movielink"]."><input type='submit' name='submit' class='btn btn-round btn-primary' value='Download'></a>"."</h5></td>";
											   if($x==4)
											   {  
											   $str.= "</tr>";
											   $x=1;
											   }  "<br>"; 
											}
											$str.="</table>";
											echo $str;

										

										?>