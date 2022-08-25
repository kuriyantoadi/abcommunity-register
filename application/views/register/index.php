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
    <div class="container">
        <div class="card p-5">
            <?= form_open('Register/register_up') ?>
            <h2>
                <span class="step-icon"><i class="bi bi-person"></i></span>
                <span class="step-text mt-2">Data Member</span>
            </h2>
            <section>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label for="nomor_identitas" class="form-label">Nomor Identitas (KTA/SIM) *</label>
                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" placeholder="Nomor Identitas">
                </div>
                <div class="mb-3">
                    <label for="nomor_identitas" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nomor Identitas">
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir *</label>
                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="Tempat Lahir">
                </div>
                <div class="mb-3">
                    <label for="nomor_hp" class="form-label">Nomor Handphone/WA *</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone">
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir *">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin *</label>
                    <select class="form-select" id="jk" name="jk">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email *">
                </div>
            </section>
            <h2>
                <span class="step-icon"><i class="bi bi-geo-alt"></i></span>
                <span class="step-text mt-2">Alamat</span>
            </h2>
            <section>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="nama_jalan" class="form-label">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan">
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota/Kabupaten</label>
                    <input type="text" class="form-control" id="kota" name="kota">
                </div>
                <div class="mb-3">
                    <label for="nomor_rumah" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi">
                </div>

            </section>


            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="https://abcommunity.web.id/2022/07/28/beranda/" class="btn btn-danger">Kembali</a>

            <?= form_close() ?>
        </div>
    </div>
</body>

</html>