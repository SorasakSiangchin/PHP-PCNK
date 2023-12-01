<?php 
  include '../../js/function_db.php';
  $sql = "SELECT * FROM users WHERE use_email = '".$_POST['email']."'";
  $result = selectSql($sql);
  foreach ($result as $row) {};
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
    <input type="number" id="use_uni_id" value="<?php echo $row['use_uni_id'] ?>" class="form-control" placeholder="มหาวิทยาลัย">
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