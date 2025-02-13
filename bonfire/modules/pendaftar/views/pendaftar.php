<?php
$errorClass   = empty($errorClass) ? ' error' : $errorClass;
$controlClass = empty($controlClass) ? 'span6' : $controlClass;
$fieldData = array(
    'errorClass'    => $errorClass,
    'controlClass'  => $controlClass,
);
?>

<style type="text/css">
    .wrapper {
        width: 100%;
    }

    nav.navbar {
        display: none;
    }

    .register-box {
        margin-top: 1%;
        margin-bottom: 1%;
    }

    .register-card-body {
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

    <div class="container register-box">
        <div class="card">
            <h3 class="pl-4 pt-4 pb-2">Register</h3>
            <div class="card-body register-card-body">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <?php echo form_open_multipart('pendaftar/daftar'); ?>


                <!-- Nama Sekolah -->
                <label for="nama_sekolah">Nama Sekolah</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah" value="<?php echo set_value('nama_sekolah'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-school"></span>
                        </div>
                    </div>
                </div>

                <!-- Alamat Sekolah -->
                <label for="alamat_sekolah">Alamat Sekolah</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="alamat_sekolah" placeholder="Alamat Sekolah" value="<?php echo set_value('alamat_sekolah'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-map-marker-alt"></span>
                        </div>
                    </div>
                </div>

                <!-- NIP -->
                <label for="nip">NIP</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nip" placeholder="NIP" value="<?php echo set_value('nip'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-id-badge"></span>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <label for="email">Email</label>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row justify-content-between">
                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-primary btn-block" name="register" value="Register">
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>
