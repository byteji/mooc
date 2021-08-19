<?php 
    /**
     * Page Manager
     * */
    require_once('../authen.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>คนสำเร็จวิชา| AppzStory</title>
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
    <div class="content-wrapper pt-4">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header border-0 pt-4">
                                <h4> 
                                    <i class="fas fa-address-card"></i> 
                                    ข้อมูลวิชา certification ID : <?php echo $_GET['o_id'] ?>
                                </h4>
                            </div>
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card shadow-sm">
                                            <div class="card-header pt-4">
                                                <h3 class="card-title"> 
                                                    <i class="fas fa-address-card"></i> 
                                                    รายละเอียดวิชา
                                                </h3>
                                            </div>
                                            
                                            <div class="card-body px-5">
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted"> ชื่อวิชา :</p>
                                                    <div class="col-xl-9">
                                                        <span class="col-xl-3 text-muted"> naja  </span> 
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted">สถานะ :</p>
                                                    <div class="col-xl-9">
                                                        <p class="badge badge-success p-2"> เปิดสอน </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted">certification ID :</p>
                                                    <div class="col-xl-9">
                                                        <p class="btn btn-outline-primary p-1"> <?php echo $_GET['o_id'] ?> </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted">เปิดสอน :</p>
                                                    <div class="col-xl-9">
                                                        <span class="text-muted small"> 1 ชั่วโมงที่ผ่านมา <br> 10 พ.ค. 64 · 16:56 น.</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted">หมดอายุ :</p>
                                                    <div class="col-xl-9">
                                                        <p>ไม่มีหมดอายุ</p>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                <p class="col-xl-3 text-muted"> series:</p>
                                                    <div class="col-xl-9">
                                                        <p> 01 </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted">รายละเอียดเพิ่มเติม :</p>
                                                    <div class="col-xl-9">
                                                        <p>-</p>
                                                    </div>
                                                </div>
                                               
   

                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-lg-6">
                                        <div class="card shadow-sm">
                                            <div class="card-header pt-4">
                                                <h3 class="card-title"> 
                                                    <i class="fas fa-address-card"></i> 
                                                    อาจาร์ยผู้สอน
                                                </h3>
                                            </div>
                                            <div class="card-body px-5">
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted">ชื่ออาจาร์ย :</p>
                                                    <div class="col-xl-9">
                                                        <a href="../users/profile.php?id=1">ผศ.ดร.อภิสิทธิ์ รัตนาตรานุรักษ์</a>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted">อีเมล :</p>
                                                    <div class="col-xl-9">
                                                        <p>jojojojojoj@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted">เบอร์โทรศัพท์ :</p>
                                                    <div class="col-xl-9">
                                                        <p>0868085595</p>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <p class="col-xl-3 text-muted">IP Address :</p>
                                                    <div class="col-xl-9">
                                                        <p>58.8.153.208</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header border-0 pt-4">
                                <h3 class="card-title"> 
                                    <i class="fas fa-address-card"></i> 
                                    รายชื่อนักเรียน
                                </h3>
                            </div>
                            <div class="card-body">
                                <table id="logs" class="table table-hover" width="100%"></table>
                                <div class="row justify-content-end">
                                    <div class="col-md-6 col-lg-5 col-xl- text-right">
                                        <div class="table-responsive">
                                            <table class="table">
                                            <tr>
                                                <th>คนผ่าน</th>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <th>คนไม่ผ่าน </th>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <th>จากทั้งหมด</th>
                                                <td>0</td>
                                            </tr>
                                          
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
            url: "../../service/orders/info_teacher.php"
        }).done(function(data) {
            let tableData = []
            data.response.forEach(function (item, index){
                tableData.push([    
                    `<a href="${item.url}" target="_blank" class="btn btn-outline-primary p-1"> ${item.p_id} </a>`,
                    `${item.fisrt_name }`, 
                    `${item.price}`,
                    `${item.series}`,
                    `${item.updated_at}`,
      
                    `<span class="text-right badge badge-success p-2"">${item.status}</span>`,
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
                paging:   false,
                ordering: false,
                info:     false,
                searching:     false,
                data: tableData,
                columns: [
                    { title: "รหัสวิชา", className: "align-middle"},
                    { title: "รายชื่อนักเรียน", className: "align-middle"},
                    { title: "คะแนน", className: "align-middle text-md-right"},
                    { title: "ภาคเรียนการศึกษา", className: "align-middle text-md-right"},
                    { title: "วันที่สำเร็จการศึกษา", className: "align-middle text-md-right"},
                    { title: "สถานะ", className: "align-middle text-md-right"},
                ],
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal( {
                            header: function ( row ) {
                                return 'รายการวิชา'
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
