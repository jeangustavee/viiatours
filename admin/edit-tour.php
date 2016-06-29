<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
{
    $id = $_GET['edit_id'];
    $tname = $_POST['tour_name'];
    $tdesc = $_POST['tour_desc'];
    $tprice = $_POST['tour_price'];
    $timage = $_POST['tour_image'];

    if($crud->update($id,$tname,$tdesc,$tprice,$timage))
    {
        $msg = "<div class='alert alert-info'>
    <strong>WOW!</strong> Record was updated successfully - <a href='index.php'>View all tours</a>!
    </div>";
    }
    else
    {
        $msg = "<div class='alert alert-warning'>
    <strong>SORRY!</strong> ERROR while updating record !
    </div>";
    }
}

if(isset($_GET['edit_id']))
{
    $id = $_GET['edit_id'];
    extract($crud->getID($id));
}

?>
<?php include_once 'head.php'; ?>

    <div class="clearfix"></div>

    <div class="container">
        <?php
        if(isset($msg))
        {
            echo $msg;
        }
        ?>
    </div>

    <div class="clearfix"></div><br />

    <div class="container">

        <form method='post'>

            <table class='table table-bordered'>

                <tr>
                    <td>Tour Name</td>
                    <td><input type='text' name='tour_name' class='form-control' value="<?php echo $tour_name; ?>" required></td>
                </tr>

                <tr>
                    <td>Description</td>
                    <td><input type='text' name='tour_desc' class='form-control' value="<?php echo $tour_desc; ?>" required></td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td><input type='text' name='tour_price' class='form-control' value="<?php echo $tour_price; ?>" required></td>
                </tr>

                <tr>
                    <td>Image Path</td>
                    <td><input type='text' name='tour_image' class='form-control' value="<?php echo $tour_image; ?>" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="btn-update">
                            <span class="glyphicon glyphicon-edit"></span>  Update this Tour
                        </button>
                        <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
                    </td>
                </tr>

            </table>
        </form>


    </div>

<?php include_once 'footer.php'; ?>