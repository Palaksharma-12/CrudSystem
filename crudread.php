<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<a href="crudform.php"class="btn btn-primary float-right">Add Data</a>
<div class="container">  
<table class="text-gray table table-bordered">
    <tr class="bg-info">
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>State</th>
        <th>Address</th>
        <th>National Parties</th>
        <th colspan="2">Action</th>
    </tr>

<?php
include 'connection.php';

$sql = "SELECT * FROM votes";
$data = mysqli_query($conn,$sql);
 if(mysqli_num_rows($data) >0){
    while($result = mysqli_fetch_assoc($data))
    {
        ?>
        <tr>
            <td><?php echo $result['voter_name']?></td>
            <td><?php echo $result['voter_email']?></td>
            <td><?php echo $result['contact']?></td>
            <td><?php echo $result['state']?></td>
            <td><?php echo $result['address']?></td>
            <td><?php echo $result['political_parties']?></td>
            <td><a href="crudform.php?id=<?php echo $result['id']?>&name=<?php echo $result['voter_name']?>&email=<?php echo $result['voter_email']?>
            &mobile=<?php echo $result['contact']?> &state=<?php echo $result['state']?>&address=<?php echo $result['address']?>&political_parties=<?php echo $result['political_parties']?>&" class="btn btn-success">Update</a></td>
            
            <td><a href="cruddelete.php?id=<?php echo $result['id']?>" onclick="return confirm('ARE YOU WANT TO DELETE ?')" class ="btn btn-danger">Delete</a></td>
        </tr>
        <?php
        

    }
 }

?>
</table>
</div>