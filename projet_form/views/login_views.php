<?php
session_start();
?>
<!DOCTYPE html>

    <?php
    include_once "../config/headerlogin_config.php";
    include_once "../models/login_models.php";
    ?>

<html>
<body>


<?php


?><h2>Groupe 2</h2>
<table>
    <tr>
        <td>User:</td>
        <td>Groupe:</td>
    </tr>
<?php
foreach($lesinfos_group  as $lesinfos_groups )
{
?>

    <tr>
        <td><?php echo $lesinfos_groups['username'] ?></td>
        <td><?php echo $lesinfos_groups['name'] ?></td>
    </tr>

<?php
}

?>


</table>
</body>
</html>
