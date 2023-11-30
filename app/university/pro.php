<?php
    include "../../js/function_db.php";
    if($_POST['status'] == "r"){  
        $sql = "SELECT * FROM university WHERE uni_id<>0";
        if($_POST['searchs'] != ""){
            $sql .= " AND uni_name LIKE '%".$_POST['searchs']."%'";
        };
    $result= selectSql($sql);
?>

<div class="table-responsive-sm w-100">
    <table class="table table-striped border border-dark">
        <thead class="table table-dark">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
   
      <?php 
        foreach ($result as $row) { ?>
        <tr>
            <td><?php echo $row['uni_id'] ?></td>
            <td><?php echo $row['uni_name'] ?></td>
            <td>
                <button class="btn btn-warning" onclick="shoeEdit('<?php echo $row['uni_id'] ?>')">
                    edit
                </button>
                <button class="btn btn-danger" onclick="del('<?php echo $row['uni_id'] ?>')">
                    delete
                </button>
            </td>
        </tr>
        <?php  }?>
    
    </tbody>
    </table>
    
</div>

<?php 
    }elseif($_POST['status'] == "c"){
        $sql = "INSERT INTO university(uni_name) VALUES ('".$_POST['uni_name']."')";
        in_up_delSql($sql);
        echo "ok";
    }
    elseif($_POST['status'] == "u"){

    }
    elseif($_POST['status'] == "d"){
        $sql = "DELETE FROM university WHERE uni_id = '".$_POST['id']."'";
        in_up_delSql($sql);
        echo "ok";
    }
 ?>