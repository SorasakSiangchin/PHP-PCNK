<?php 
    include "../../js/function_db.php";

    if($_POST["status"] == "r"){
        $sql = "SELECT * FROM users JOIN university ON university.uni_id = users.use_uni_id WHERE use_email<>''";

    if($_POST['searchs'] != "")
    {
        $sql .= " AND use_email LIKE '%".$_POST['searchs']."%'";
    };

    if($_POST['uniFilter'] != "")
    {
        $sql .= " AND use_uni_id = '".$_POST['uniFilter']."'";
    };

    $result= selectSql($sql);
?>

<div class="table-responsive-sm w-100">
    <table class="table table-striped border border-dark">
        <thead class="table table-dark">
            <tr>
                <th>email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Number Phone</th>
                <th>University</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
   
        <?php 
            foreach ($result as $row) {  ?>
            <tr>
            <td><?php echo $row['use_email'] ?></td>
            <td><?php echo $row['use_fname'] ?></td>
            <td><?php echo $row['use_lname'] ?></td>
            <td><?php echo $row['use_phone'] ?></td>
            <td>
          
             <?php echo $row['uni_name'] ?>

             </td>
            <td>
                <button class="btn btn-warning" onclick="showEditUser('<?php echo $row['use_email'] ?>')">
                    edit
                </button>
                <button class="btn btn-danger" onclick="delUser('<?php echo $row['use_email'] ?>')">
                    delete
                </button>
            </td>
            </tr>
        <?php  }?>
    
    </tbody>
    </table>
    
</div>


<?php 

    } elseif ($_POST["status"] == "c") {
        $sql = "INSERT INTO users(use_email,use_fname,use_lname,use_phone,use_uni_id) 
                VALUES ('".$_POST['use_email']."','".$_POST['use_fname']."','".$_POST['use_lname']."','".$_POST['use_phone']."','".$_POST['use_uni_id']."')";
        in_up_delSql($sql);
        echo "ok";
    }
    
    elseif ($_POST["status"] == "u") {
        $sql = "UPDATE users SET 
            use_email='".$_POST['email']."' ,
            use_fname='".$_POST['use_fname']."' ,
            use_lname='".$_POST['use_lname']."' ,
            use_phone='".$_POST['use_phone']."' ,
            use_uni_id='".$_POST['use_uni_id']."'
            WHERE use_email = '".$_POST['email']."'";
        
        in_up_delSql($sql);
        echo "ok";
    }
    elseif ($_POST["status"] == "d") {
        $sql = "DELETE FROM users WHERE use_email = '".$_POST['email']."'";
        in_up_delSql($sql);
        echo "ok";
    }
 ?>