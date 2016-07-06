<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
    $tname = $_POST['tour_name'];
    $tdesc = $_POST['tour_desc'];
    $tprice = $_POST['tour_price'];
    $timage = $_POST['tour_image'];

    if($crud->create($tname,$tdesc,$tprice,$timage))
    {
        header("Location: add-tour.php?inserted");
    }
    else
    {
        header("Location: add-tour.php?failure");
    }
}
?>
<?php include_once 'head.php'; ?>
    <div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
    ?>
    <div class="container">
        <div class="alert alert-info">
            <strong>NICE!</strong> Tour was inserted successfully - <a href="index.php">View all tours</a>!
        </div>
    </div>
    <?php
}
else if(isset($_GET['failure']))
{
    ?>
    <div class="container">
        <div class="alert alert-warning">
            <strong>SORRY!</strong> ERROR while inserting tour !
        </div>
    </div>
    <?php
}
?>

    <div class="clearfix"></div><br />

    <div class="container">


        <form method='post'>

            <table class='table'>

                <tr>
                    <td>Tour Name</td>
                    <td><input type='text' name='tour_name' class='form-control' required></td>
                </tr>

                <tr>
                    <td>Tour Description</td>
                    <td><input type='text' name='tour_desc' class='form-control' required></td>
                </tr>

                <tr>
                    <td>Tour Price</td>
                    <td><input type='text' name='tour_price' class='form-control' required></td>
                </tr>

                <tr>
                    <td>Image Path</td>
                    <td><input type='text' name='tour_image' class='form-control' required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="btn-save">
                            <span class="glyphicon glyphicon-plus"></span> Add Tour
                        </button>
                        <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; View all tours</a>
                    </td>
                </tr>

            </table>
        </form>


    </div>

<?php include_once 'footer.php'; ?>