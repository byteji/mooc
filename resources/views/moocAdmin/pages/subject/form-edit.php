<?php 
    /**
     * Page Manager
    */
    require_once('../authen.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>จัดการรายวิชา | CE Mooc</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon.ico">
  <!-- stylesheet -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit" >
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include_once('../includes/sidebar.php') ?>
    <div class="content-wrapper pt-3">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-0 pt-4">
                                <h4> 
                                    <i class="fas fa-book"></i> 
                                    รายการวิชา
                                </h4>
                                <a href="./" class="btn btn-info mt-3">
                                    <i class="fas fa-list"></i>
                                    กลับหน้าหลัก
                                </a>
                            </div>
                            <form id="formData">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="cat_name">ประเภทวิชา</label>
                                            <select class="custom-select mb-3" name="cat_name">
                                                <option disabled>Select Course Types</option>
                                                <option selected value="sClass">Software</option>
                                                <option value="mClass">Hardware</option>
                                                <option value="fClass">General</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label for="p_name">ชื่อวิชา</label>
                                            <input type="text" class="form-control" name="p_name" id="p_name" placeholder="ชื่อวิชา" value=" ">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="price">อาจาร์ยผู้สอน</label>
                                            <input type="text" class="form-control" name="price" id="price" placeholder="ชื่อ" value=" ">
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label for="url">Url วิชา</label>
                                            <input type="text" class="form-control" name="url" id="url" placeholder="Url วิชา" value=" ">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="customFile">รูปปก</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">เลือกรูปภาพ</label>
                                            </div>
                                            <img src="../../assets/images/projects/02.PNG" alt="Image Profile" class="img-fluid p-3">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="detail">รายละเอียด</label>
                                            <textarea id="detail" class="textarea" name="detail" placeholder="Place some text here">
                                                <!-- โค้ดตรงส่วนนี้ จะต้องถูกส่งมาจาก Server เพื่อแก้ไข -->
                                                <h2 class="font-weight-bold" style="text-align: center;">
                                                    najajajajaj
                                                </h2>
                                               


                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block mx-auto w-75" name="submit">บันทึกข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('../includes/footer.php') ?>
</div>

<!-- scripts -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../../assets/js/adminlte.min.js"></script>

<script>
    $(function() {
        $('#detail').summernote({
            height: 500,
        });

        $('#formData').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'PUT',
                url: '../../service/subject/update.php',
                data: $('#formData').serialize()
            }).done(function(resp) {
                Swal.fire({
                    text: 'อัพเดทข้อมูลเรียบร้อย',
                    icon: 'success',
                    confirmButtonText: 'ตกลง',
                }).then((result) => {
                    location.assign('./');
                });
            })
        });
    });
</script>
</body>
</html>
