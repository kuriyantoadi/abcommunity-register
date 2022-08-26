<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <div class="container my-5">
        <div class="card p-5 shadow">
            <form action="" method="post">
                <h2>
                    <span class="step-icon"><i class="bi bi-person"></i></span>
                    <span class="step-text mt-2">Data Member</span>
                </h2>
                <?php foreach ($tampil as $row) { ?>


                    <table class="table table-bordered table-responsive table-striped">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><?= $row->nama_lengkap ?></td>
                        </tr>
                        <tr>
                            <td>Id Anggota</td>
                            <td><?= $row->id_anggota ?></td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td><?= $row->tmpt_lahir ?>, <?= $row->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>No Hp</td>
                            <td><?= $row->tmpt_lahir ?>, <?= $row->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?= $row->jk ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $row->email ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $row->alamat ?></td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td><?= $row->kelurahan ?></td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td><?= $row->kota ?></td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td><?= $row->provinsi ?></td>
                        </tr>

                    <?php } ?>
                    </table>
                    <center>
                        <a href="<?= site_url('Admin/dashboard'); ?>" class="btn btn-sm btn-warning shadow-sm">Kembali</a>
                    </center>


            </form>
        </div>
    </div>
</body>

</html>