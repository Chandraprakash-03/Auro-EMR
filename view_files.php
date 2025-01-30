<?php
include("adformheader.php");
include("dbconnection.php");

if (isset($_GET['delid'])) {
    // SQL query to delete the record based on file ID
    $sql = "DELETE FROM resources WHERE id = '$_GET[delid]'";
    $qsql = mysqli_query($con, $sql);
    if (mysqli_affected_rows($con) == 1) {
        echo "<script>alert('File record deleted successfully..');</script>";
    }
}

?>
<div class="container-fluid">
    <div class="block-header">
        <h2 class="text-center">View Uploaded Files</h2>
    </div>

    <div class="card">
        <section class="container">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th width="25%"><div align="center">Title</div></th>
                        <th width="25%"><div align="center">Role</div></th>
                        <th width="25%"><div align="center">File Type</div></th>
                        <th width="15%"><div align="center">File</div></th>
                        <th width="10%"><div align="center">Action</div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // SQL query to select all uploaded files
                    $sql = "SELECT * FROM resources";
                    $qsql = mysqli_query($con, $sql);
                    while ($rs = mysqli_fetch_array($qsql)) {
                        // Display the uploaded file details
                        echo "<tr>
                            <td><strong>{$rs['title']}</strong></td>
                            <td>{$rs['role_id']}</td>
                            <td>{$rs['file_type']}</td>
                            <td><a href='{$rs['file_path']}' target='_blank'>View File</a></td>
                            <td align='center'>";
                        if (isset($_SESSION['adminid'])) {
                            echo "<a href='view_files.php?delid={$rs['id']}' class='btn btn-sm btn-raised bg-blush'>Delete</a>";
                        }
                        echo "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</div>

<?php
include("adformfooter.php");
?>
