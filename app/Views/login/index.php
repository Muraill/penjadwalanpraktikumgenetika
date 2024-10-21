<?= $this->extend('login/template'); ?>
<?= $title = "Login | Labs"; ?>
<?= $this->section('content'); ?>

<section style="background-color: #508bfc; width:100%; height:100%;">
    <div class="container py-5 h-100">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg mt-5" style="border-radius: 1rem;">
                    <div class="card-header">
                        <h3 class="mb-5 text-center mt-5">Log-In</h3>
                    </div>
                    <div class="card-body">
                        <!-- message -->
                        <?= view('Myth\Auth\Views\_message_block') ?>


                        <form action="<?= url_to('login') ?>" method="post">
                            <?= csrf_field() ?>

                            <?php if ($config->validFields === ['email']) : ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail1" name="login" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><?= lang('Auth.emailOrUsername') ?></label>
                                    <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail1" name="login" aria-describedby="emailHelp" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                            <?php endif; ?>


                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><?= lang('Auth.password') ?></label>
                                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="exampleInputPassword1" placeholder="<?= lang('Auth.password') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>

                            <?php if ($config->allowRemembering) : ?>
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1">
                                        <input type="checkbox" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?> name="remember" id="exampleCheck1"><?= lang('Auth.rememberMe') ?>
                                    </label>
                                </div>
                            <?php endif; ?>


                            <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit"><?= lang('Auth.loginAction') ?></button>
                            <a href="/" class="btn btn-info btn-sm btn-lg btn-block">Kembali</a>
                        </form>

                        <hr class="my-2">

                        <?php if ($config->allowRegistration) : ?>
                            <p class="text-center"><a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                        <?php endif; ?>
                        <?php if ($config->activeResetter) : ?>
                            <p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                        <?php endif; ?>


                        <!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                        <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;" type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>