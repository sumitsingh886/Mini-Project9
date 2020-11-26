<?php
$con=new mysqli('localhost','root','','miniproject');
$records = mysqli_query($con,"select * from item"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><img src="<?php echo $data['images']; ?>" width="100" height="100"></td>
    </tr>
    <?php
}
?>

    </table>