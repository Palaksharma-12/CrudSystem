<?php
include 'connection.php';
if(isset($_POST['submit']))
{

$name =$_POST['name'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$state =$_POST['state'];
$address =$_POST['address'];
$parties =$_POST['parties'];

$sql = "INSERT INTO votes (voter_name,voter_email,contact,state,address,political_parties)VALUES('$name','$email','$mobile','$state','$address','$parties')";
$check =mysqli_query($conn,$sql);
if($check){
    ?>
    <script type="text/javascript">
    alert("data inserted successfully");
    window.location="crudread.php";
    </script>
    <?php
    }else{
        ?>
        <script type = "text/javascript">
            alert("Data not inserted");
            window.location ="crudadd.php"
            </script>
            <?php
    }
}

if(isset($_POST['update']))
{
$id = $_POST['id'];
$name =$_POST['name'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$state =$_POST['state'];
$address =$_POST['address'];
$parties =$_POST['parties'];

$sql = "UPDATE votes SET  voter_name ='$name',voter_email='$email',contact='$mobile',state='$state',address='$address',political_parties='$parties' WHERE id ='$id'";
$check =mysqli_query($conn,$sql);
if($check){
?>
<script type="text/javascript">
alert("data updated successfully");
window.location="crudread.php";
</script>
<?php
}else{
    ?>
    <script type = "text/javascript">
        alert("Data not updated");
        window.location ="crudadd.php"
        </script>
        <?php
}

}
?>