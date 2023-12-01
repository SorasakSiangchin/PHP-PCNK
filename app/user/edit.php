 <?php 
  include '../../js/function_db.php';
  $sql = "SELECT * FROM users WHERE use_email = '".$_POST['email']."'";
  $result = selectSql($sql);
  foreach ($result as $row) {};
 ?>

 <?php 
  $sql1 = "SELECT * FROM university WHERE uni_id<>0 ";
  $result1 = selectSql($sql1);
 ?>

<div class="card w-100">
  <div class="card-body">
  <form>
  <div class="f orm-group">
    <label for="exampleFormControlInput1">
        เพิ่มชื่อผู้ใช้งาน
    </label>
    <input type="email" disabled id="use_email" value="<?php echo $row['use_email'] ?>" class="form-control" placeholder="อีเมล">
    <br/>
    <input type="text" id="use_fname" value="<?php echo $row['use_fname'] ?>" class="form-control" placeholder="ชื่อจริง">
    <br/>
    <input type="text" id="use_lname" value="<?php echo $row['use_lname'] ?>" class="form-control" placeholder="นามสกุล">
    <br/>
    <input type="phone" id="use_phone" value="<?php echo $row['use_phone'] ?>" class="form-control" placeholder="เบอร์โทร">
    <br/>
    <select id="use_uni_id"  class="form-control">
        <?php  
        foreach ($result1 as $row1) {?>
            <option value="<?php echo $row1['uni_id'] ?> " <?php 
                if($row["use_uni_id"] == $row1['uni_id']){
                    echo "selected";
                };
             ?>><?php echo $row1['uni_name'] ?></option>
        <?php };
        ?>
    </select>
    <br/>
    <button type="button" class="btn btn-secondary" onclick="showUsers()">
        กลับ
    </button>
    <button type="button" class="btn btn-success" onclick="editUser('<?php echo $row['use_email'] ?>')">
        บันทึก
    </button>
  </div>
</form>
  </div>
</div>