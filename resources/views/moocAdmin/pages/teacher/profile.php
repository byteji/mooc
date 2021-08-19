<?php 
   
    require_once('../authen.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ข้อมูลส่วนตัว| CE Mooc</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon.ico">
  <!-- stylesheet -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit" >
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- Datatables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include_once('../includes/sidebar.php') ?>
    <div class="content-wrapper pt-3">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header border-0 pt-4">
                                <h4> 
                                    <i class="fas fa-users"></i> 
                                    ข้อมูลส่วนตัว
                                </h4>
                                <a href="./" class="btn btn-info mt-3">
                                    <i class="fas fa-list"></i>
                                    กลับหน้าหลัก
                                </a>
                            </div>
                            
                            <div class="card-body">
                            <div class="row">
                            <div class="col-md-6 ">
                                <div class="px-5">

                                <div class="row mb-2">
                                        <p class="col-xl-3 text-muted">ตำแหน่งวิชาการ</p>
                                        <div class="col-xl-4">
                                            <a href="#">ผู้ช่วยศาสตราจารย์ ดร.</a>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <p class="col-xl-3 text-muted">ชื่อ - นามสกุล:</p>
                                        <div class="col-xl-4">
                                            <a href="../teacher/profile.php?id=1">อภิสิทธิ์ รัตนาตรานุรักษ์</a>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <p class="col-xl-3 text-muted">อีเมล:</p>
                                        <div class="col-xl-4">
                                            <p>jojojoy@gmail.com</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                      <p class="col-xl-3 text-muted">เบอร์โทรศัพท์:</p>
                                        <div class="col-xl-4">
                                            <p>0868085595</p>
                                        </div>
                                    </div>

                                 </div>
                             </div>

                         <div class="col-md-6 ">
                                <div class="px-5">
                                    <div class="row mb-2">
                                        <p class="col-xl-3 text-muted">สอนอยู่ที่</p>
                                        <div class="col-xl-4">
                                            <a href="../teacher/profile.php?id=1"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <p class="col-xl-3 text-muted">อีเมล :</p>
                                        <div class="col-xl-4">
                                            <p>jojojoy@gmail.com</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                      <p class="col-xl-3 text-muted">เบอร์โทรศัพท์:</p>
                                        <div class="col-xl-4">
                                            <p>0868085595</p>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                         </div>

                         

                                <div class="card-title d-block w-100 py-3"> 
                                    <i class="fas fa-address-card"></i>
                                     วิชาที่สอน
                                </div>
                                <table id="logs" class="table table-hover" width="100%"></table>
                            </div>
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
<script src="../../assets/js/adminlte.min.js"></script>

<!-- datatables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
    $(function() {
        $.ajax({
            type: "GET",
            url: "../../service/teacher/profile.php"
           
            
        }).done(function(data) {
            let tableData = []
            data.response.forEach(function (item, index){
                tableData.push([    
                    `<a href="../orders/info.php?o_id=${item.o_id}" class="btn btn-outline-primary p-1 "> ${item.o_id} </button>`,

                    `<img src="${item.p_image}" class="img-fluid" width="150px">`,

                    `${item.p_name}`,
                     `<span class="text-muted small"> 1 ชั่วโมงที่ผ่านมา <br> 10 พ.ค. 64 · 16:56 น.</span>`,

                    `<span class="badge badge-success"> ${item.status ? 'เปิดสอน': 'หมดเวลา'} </span>  `,
                    `<img src="${item.signature}" class="img-fluid" width="150px">`,

                    `<span class="text-muted"> ${item.ps} </span>  `,

                    
                    `<a href="../orders/info_teacher.php?o_id=${item.o_id}" class="btn btn-info">

                        <i class="fas fa-search"></i> ดูข้อมูล
                    </a>`
                ])
            })
            initDataTables(tableData)
        }).fail(function() {
            Swal.fire({ 
                text: 'ไม่สามารถเรียกดูข้อมูลได้', 
                icon: 'error', 
                confirmButtonText: 'ตกลง', 
            }).then(function() {
                location.assign('../dashboard')
            })
        })

        function initDataTables(tableData) {
            $('#logs').DataTable( {
                data: tableData,
                columns: [
                    { title: "รหัสวิชา", className: "align-middle"},
                    { title: "รูปภาพ", className: "align-middle"},
                    { title: "รายละเอียด" , className: "align-middle"},
                    { title: "วันที่สอน", className: "align-middle"},
                    { title: "สถานะ" , className: "align-middle"},
                    { title: "ลายเซ็น", className: "align-middle"},  //
                   { title: "หมายเหตุ", className: "align-middle"},
                    { title: "จัดการ", className: "align-middle"}
                ],
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal( {
                            header: function ( row ) {
                                var data = row.data()
                                return 'ผู้ใช้งาน: '+data[1]
                            }
                        }),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                            tableClass: 'table'
                        })
                    }
                },
                language: {
                    "lengthMenu": "แสดงข้อมูล _MENU_ แถว",
                    "zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
                    "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": 'ค้นหา',
                    "paginate": {
                        "previous": "ก่อนหน้านี้",
                        "next": "หน้าต่อไป"
                    }
                }
            })
        }

    })
</script>
</body>
</html>
