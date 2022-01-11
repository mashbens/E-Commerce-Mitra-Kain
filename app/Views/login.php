<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<head>
    <title>Mitre Kain | Login Form</title>
</head>
<div class="container">
    <br> <br> <br>



    <?php
    $username = [
        'name' => 'username',
        'id' => 'username',
        'value' => null,
        'class' => 'form-control'
    ];

    $password = [
        'name' => 'password',
        'id' => 'password',
        'class' => 'form-control'
    ];

    $session = session();
    $errors = $session->getFlashdata('errors');

    ?>
    <h3>Login Form</h3>
    <?php if ($errors != null) : ?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Terjadi Kesalahan</h4>
            <hr>
            <p class="mb-0">
                <?php
                foreach ($errors as $err) {
                    echo $err . '<br>';
                }
                ?>
            </p>
        </div>
    <?php endif ?>
    <?= form_open('Auth/login') ?>
    <div class="form-group">
        <?= form_label("Username", "username") ?>
        <?= form_input($username) ?>
    </div>

    <div class="form-group">
        <?= form_label("Password", "password") ?>
        <?= form_password($password) ?>
    </div>
    <br>
    <div class="text-right">
        <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?= form_close() ?>
    <br>

    <p>belum punya akun? registrasi<cite><a class="text-primary" href="<?= site_url('auth/register') ?>">disini!</a></p>
    </cite>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?= $this->endSection() ?>