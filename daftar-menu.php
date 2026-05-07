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
                        <h1 class="h3 mb-0 text-gray-800">Daftar Menu restoran adly ngawi</h1>
                        <a href="tambah_menu.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Tambah Menu</a>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Menu</th>
                                            <th>Kode Menu</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Jenis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Menu</th>
                                            <th>Kode Menu</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Jenis</th>
                                            <th>Aksi</th>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach($menu as $no=>$menu) {
                                        ?>
                                            <tr>
                                                <td> <?= $no+1; ?></td>
                                                <td> <?= $menu['nama_menu']; ?></td>
                                                <td> <?= $menu['kode_menu']; ?></td>
                                                <td> <?= $menu['harga']; ?></td>
                                                <td> <?= $menu['stok']; ?></td>
                                                <td><?= $menu['Jenis']; ?></td>
                                                <td>
                                                    <a href="tambah_stok.php?id=<?=$menu['id'];?>" class="btn btn-primary">tambah stok</a>
                                                    <a href="hapus_menu.php?id=<?=$menu['id'];?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    

                    <!-- Content Row -->

                    

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