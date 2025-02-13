<style type="text/css">
    .wrapper {
        width: 100%;
    }

    nav.navbar {
        display: none;
    }

    .login-box {
        margin-top: 5%;
    }

    .login-card-body {
        padding: 20px 20px 25px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    section {
        position: relative;
        background-color: black;
        height: 100%;
        min-height: 25rem;
        width: 100%;
        overflow: hidden;
        background-image: url('<?php echo base_url('assets/images/bg-login1.jpg'); ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    /* section video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-height: 100%;
        min-width: 100%;
        height: auto;
        width: auto;
        z-index: 0;
        -ms-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    } */

    section .overlay-wcs {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.2;
        z-index: 1;
    }

    section .container {
        position: relative;
        z-index: 2;
    }
</style>

<section class="content">
    <div class="overlay-wcs"></div>


    <div class="container login-box">
        <div class="login-logo">
            <img src="<?php echo base_url('assets/images/logo-crop.png'); ?>" width="80%"><br>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <h3 class="pb-3">Login</h3>
                <?php if (!empty($error) || Template::message()): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <?php echo form_open(LOGIN_URL); ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="login" placeholder="Username" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-sm-12 pb-4">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember_me" id="remember" value="1">
                            <label for="remember">
                                <?php echo lang('us_remember_note'); ?>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        Belum punya akun? <a href="<?= base_url('register') ?>">Register</a>
                    </div>
                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-primary btn-block" name="log-me-in" value="<?php echo lang('us_let_me_in'); ?>">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    document.body.classList.add('login-page');
</script>