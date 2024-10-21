<?= $this->extend('registrasi/template'); ?>
<?= $title = "Registrasi | Labs"; ?>
<?= $this->section('content'); ?>

<section style="background-color: #508bfc; width:100%; height:100%;">
    <div class="container py-5 h-100">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg mt-5" style="border-radius: 1rem;">
                    <div class="card-header">
                        <h3 class="mb-5 text-center mt-5">Registrasi</h3>
                    </div>
                    <div class="card-body">
                        <!-- message -->
                        <?= view('Myth\Auth\Views\_message_block') ?>


                        <form action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><?= lang('Auth.email') ?></label>
                                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label"><?= lang('Auth.username') ?></label>
                                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail1" name="username" aria-describedby="usernameHelp" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">

                            </div>


                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><?= lang('Auth.password') ?></label>
                                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="exampleInputPassword1" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword2" class="form-label"><?= lang('Auth.repeatPassword') ?></label>
                                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                            </div>

                            <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit"><?= lang('Auth.register') ?></button>
                        </form>

                        <hr class="my-2">

                        <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>