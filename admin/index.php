<?php
include_once 'dbconfig.php';
?>
<?php include_once 'head.php'; ?>

    <div class="clearfix"></div>

    <div class="container">
        <a href="add-tour.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add New Tour</a>
    </div>

    <div class="clearfix"></div><br />

    <div class="container">
        <table class='table table-hover table-responsive'>
            <tr>
                <th>#</th>
                <th>Tour Name Name</th>
                <th>Description</th>
                <th>Price</th>
                <th colspan="2" align="center">Actions</th>
            </tr>
            <?php
            $query = "SELECT * FROM tbl_tours";
            $records_per_page=3;
            $newquery = $crud->paging($query,$records_per_page);
            $crud->dataview($newquery);
            ?>
            <tr>
                <td colspan="7" align="center">
                    <div class="pagination-wrap">
                        <?php $crud->paginglink($query,$records_per_page); ?>
                    </div>
                </td>
            </tr>

        </table>


    </div>

<?php include_once 'footer.php'; ?>