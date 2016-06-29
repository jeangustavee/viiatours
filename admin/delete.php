<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
    $id = $_GET['delete_id'];
    $crud->delete($id);
    header("Location: delete.php?deleted");
}

?>

<?php include_once 'head.php'; ?>

    <div class="clearfix"></div>

    <div class="container">

        <?php
        if(isset($_GET['deleted']))
        {
            ?>
            <div class="alert alert-success">
                <strong>Success!</strong> tour was deleted...
            </div>
            <?php
        }
        else
        {
            ?>
            <div class="alert alert-danger">
                <strong>Sure !</strong> to remove the following tour ?
            </div>
            <?php
        }
        ?>
    </div>

    <div class="clearfix"></div>

    <div class="container">

        <?php
        if(isset($_GET['delete_id']))
        {
            ?>
            <table class='table table-bordered'>
                <tr>
                    <th>#</th>
                    <th>Tour Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image Path</th>
                </tr>
                <?php
                $stmt = $DB_con->prepare("SELECT * FROM tbl_tours WHERE id=:id");
                $stmt->execute(array(":id"=>$_GET['delete_id']));
                while($row=$stmt->fetch(PDO::FETCH_BOTH))
                {
                    ?>
                    <tr>
                        <td><?php print($row['id']); ?></td>
                        <td><?php print($row['tour_name']); ?></td>
                        <td><?php print($row['tour_desc']); ?></td>
                        <td><?php print($row['tour_price']); ?></td>
                        <td><?php print($row['tour_image']); ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        }
        ?>
    </div>

    <div class="container">
        <p>
            <?php
            if(isset($_GET['delete_id']))
            {
            ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; YES</button>
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
        </form>
        <?php
        }
        else
        {
            ?>
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to listing</a>
            <?php
        }
        ?>
        </p>
    </div>
<?php include_once 'footer.php'; ?>