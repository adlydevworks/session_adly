<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';
include 'koneksi1.php';
$menu = mysqli_query($koneksi1, "SELECT * FROM `daftar_menu`");

 ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php';
         ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               <?php include 'topbar.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah menu</h1>
                    </div>

        
                    <!-- Content Row -->
                    <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>

                                <form action="proses_tambah_menu.php" method="POST">
                                <!-- Card Body -->
                                <div class="card-body">
                                   <div class="row mb-3">
                                    <div class="col-4">Nama Menu</div>
                                    <div class="col-8"><input type="text" name="nama_menu" class="form-control"></div>
                                   </div>
                                   <div class="row mb-3">
                                    <div class="col-4">kode Menu</div>
                                    <div class="col-8"><input type="text" name="kode_menu" class="form-control"></div>
                                   </div>
                                   <div class="row mb-3">
                                    <div class="col-4">harga</div>
                                    <div class="col-8"><input type="number" name="harga" class="form-control"></div>
                                   </div>
                                   <div class="row mb-3">
                                    <div class="col-4">stok</div>
                                    <div class="col-8"><input type="number" name="stok" class="form-control"></div>
                                   </div>
                                   <div class="row mb-3">
                                    <div class="col-4">Jenis</div>
                                    <div class="col-8"><input type="text" name="jenis" class="form-control"></div>
                                   </div>
                                   <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-8"><input type="submit" class="btn btn-success"></div>
                                   </div>
                                </div>
                            </div>
                        </div>

                    <!-- Content Row -->
                    </form>
                    

                    <!-- Content Row -->
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'footer.php';
             ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
   <?php include 'script.php';
     ?>

</body>

</html>
