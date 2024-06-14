<?= $this->extend('auth/template') ?>
<?= $this->Section('content') ?>

<div class="container" id="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <!--  R E G I S T R A S I -->
            <div class="form-container sign-up">
                <form action="<?= url_to('register') ?>" method="post">
                    <?= csrf_field() ?>
                    <h1>Create Account</h1>
                    <span>or use your email for registeration</span>
                    <!-- username -->
                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                    <!-- email -->
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                    <!-- password -->
                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    <button type="submit">Sign Up</button>
                </form>
            </div>

            <!--  L O G I N   -->
            <div class="form-container sign-in">
                <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>
                    <h1>Sign In</h1>
                    <span>or use your email password</span>
                    <!-- email -->
                    <?php if ($config->validFields === ['email']) : ?>
                        <!-- <label for="login"><?= lang('Auth.email') ?></label> -->
                        <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    <?php else : ?>
                        <!-- <label for="login"><?= lang('Auth.emailOrUsername') ?></label> -->
                        <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    <?php endif; ?>
                    <!-- password -->
                    <!-- <label for="password"><?= lang('Auth.password') ?></label> -->
                    <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                    <?php if ($config->allowRemembering) : ?>
                        <!-- <label class="form-check-label"> -->
                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                        <?= lang('Auth.rememberMe') ?>
                        </label>
                    <?php endif; ?>

                    <!-- L U P A   P A S S W O R D -->
                    <a href="#">Forget Your Password?</a>

                    <button type="submit">Sign In</button>
                </form>
            </div>


            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Enter your personal account details to Login of site assigment.</p>
                        <button class="hidden" id="login">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Hello!</h1>
                        <p>Register your personal account details to Login of site assigment.</p>
                        <button class="hidden" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('') ?>