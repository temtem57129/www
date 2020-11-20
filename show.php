<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kantawit11.mysql.database.azure.com', 'kantawit123@kantawit11', 'OGUlot28', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">name</div></th>
    <th width="350"> <div align="center">comment </div></th>
    <th width="150"> <div align="center">link </div></th>
    <th width="150"> <div align="center">Action </div></th>
    <th width="150"> <div align="center">Update</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['comment'];?></td>
    <td><?php echo $Result['link'];?></td>
    <td><?php echo '<a href="delete.php?id='.$Result['id'].'">
Delete</a>'?></td>
    <td><?php echo '<a href="insert.php?id='.$Result['id'].'">
Update</a>'?></td>

  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<p>
<a href="https://kantawit.azurewebsites.net/form.html">click update</a>
</body>
</html>
