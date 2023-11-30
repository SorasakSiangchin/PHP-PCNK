
<?php 
  include '../../js/function_db.php';
  $sql = "SELECT * FROM university WHERE uni_id = '".$_POST['id']."'";
  $result = selectSql($sql);
  foreach ($result as $row) {};
 ?>

<div class="card w-100">
  <div class="card-body">
  <form>
  <div class="f orm-group">
    <label for="exampleFormControlInput1">
        เพิ่มชื่อมหาวิทยาลัย
    </label>
    <input type="email" id="uni_name" value="<?php echo $row['uni_name'] ?>" class="form-control" placeholder="ชื่อ">
    <br/>
    <button type="button" class="btn btn-secondary" onclick="showlist()">
        กลับ
    </button>
    <button type="button" class="btn btn-success" onclick="edit('<?php echo $row['uni_id'] ?>')">
        บันทึก
    </button>
  </div>
</form>
  </div>
</div>