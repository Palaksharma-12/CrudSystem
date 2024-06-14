<?php
include 'connection.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM votes WHERE id = '$id'";
$check = mysqli_query($conn,$sql);
if($check){
    ?>
    <script type="text/javascript">
    alert("data Deleted successfully");
    window.location="crudread.php";
    </script>
    <?php
    }else{
        ?>
        <script type = "text/javascript">
            alert("Data not Deleted");
            window.location ="crudadd.php"
            </script>
            <?php
    }
?>