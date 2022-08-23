<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/bootstrap.min.css">
</head>

<body>
    <section class="text-center">
        <div class="p-5 bg-image" style="background-color:midnightblue; height: 15vw;"></div>
        <div class="col-md-8 m-auto">
            <div class="card mx-4 mx-md-5 shadow-5-strong mb-5" style="
            margin-top: -100px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(30px);
            ">
                <div class="card-body py-5 px-md-5">

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <h2 class="fw-bold mb-5">Selamat Datang!</h2>

                            <?= form_open('Login/login_admin') ?>
                            <form action="">
                                <div class="form-outline mb-3">
                                    <input type="text" name="username" class="form-control" placeholder="Username" />
                                </div>

                                <div class="form-outline mb-5">
                                    <input type="password" name="password" class="form-control" placeholder="Password" />
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary mb-4">
                                        Log in
                                    </button>
                                </div>
                            </form>
                            <?= form_close() ?>

                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>