<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center my-3">
        Data Member
    </h1>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>No
                                        </th>
                                        <th>
                                            <center>Nama Lengkap
                                        </th>
                                        <th>
                                            <center>Alamat
                                        </th>
                                        <th>
                                            <center>No Hp
                                        </th>
                                        <th>
                                            <center>Pilihan
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($tampil as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->nama_lengkap ?></td>
                                            <td><?= $row->alamat ?></td>
                                            <td><?= $row->no_hp ?></td>

                                            <td>
                                                <div class="text-center" style="white-space: nowrap;">
                                                    <a href="<?= site_url('Admin/hapus_anggota/' . $row->id_anggota); ?>" class="btn btn-sm btn-danger shadow-sm" onclick="return confirm('Anda yakin menghapus data <?= $row->nama_lengkap ?> ?')">Hapus</a>
                                                    <!-- <a href="<?= site_url('Admin/hapus_anggota/' . $row->id_anggota); ?>" class="btn btn-sm btn-primary shadow-sm">Edit</a> -->
                                                    <!-- <a href="<?= site_url('Admin/hapus_anggota/' . $row->id_anggota); ?>" class="btn btn-sm btn-success shadow-sm">Lihat</a> -->
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/bootstrap/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.dt.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>assets/bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/bootstrap/js/adminlte.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>