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
        margin-bottom: 10%;
    }

    .register-card-body {
        padding: 20px 20px 25px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
        max-height: 80vh;
        overflow-y: auto;
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

    select.form-control {
        max-height: 150px;
        overflow-y: auto;
    }

    .form-group {
        margin-bottom: 15px;
    }
</style>

<section class="content">
    <div class="overlay-wcs"></div>

    <div class="container register-box">
        <div class="register-logo">
            <img src="<?php echo base_url('assets/images/logo-crop.png'); ?>" width="80%"><br>
        </div>

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

                <?php echo form_open(REGISTER_URL); ?>

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

                <!-- Display Name -->
                <label for="display_name">Display Name</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="display_name" placeholder="Display Name" value="<?php echo set_value('display_name'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-id-card"></span>
                        </div>
                    </div>
                </div>

                <!-- Username -->
                <label for="username">Username</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <!-- Jenis Kelamin -->
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="input-group mb-3">
                    <select class="form-control" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-venus-mars"></span>
                        </div>
                    </div>
                </div>

                <!-- Role ID -->
                <div class="form-group">
                    <label for="role_id">Role</label>
                    <select class="form-control" name="role_id" required>
                        <option value="">Select Role</option>
                        <?php foreach ($role_options as $role_id => $role_name) : ?>
                            <option value="<?php echo $role_id; ?>"><?php echo $role_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- NIP -->
                <div id="nip-container" style="display: none;">
                    <label for="nip">NIP</label>
                    <div class="input-group mb-3" id="nip-field">
                        <input type="number" class="form-control" name="nip" placeholder="NIP" value="<?php echo set_value('nip'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user-tie"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Telepon -->
                <div id="telepon-container" style="display: none;">
                    <label for="telepon">Telepon</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo set_value('telepon'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NIS -->
                <div id="nis-container" style="display: none;">
                    <label for="nis">NIS</label>
                    <div class="input-group mb-3" id="nis-field">
                        <input type="number" class="form-control" name="nis" placeholder="NIS" value="<?php echo set_value('nis'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-users"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <label for="password">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <!-- Password Again -->
                <label for="pass_confirm">Confirm Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="pass_confirm" placeholder="Confirm Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <!-- Country -->
                <label for="country">Country</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="country" placeholder="Country" value="Indonesia" readonly>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-globe"></span>
                        </div>
                    </div>
                </div>

                <!-- Sekolah ID -->
                <div class="form-group">
                    <label for="sekolah_id">Sekolah</label>
                    <select class="form-control" name="sekolah_id" id="sekolah_id" required>
                        <option value="">Select Sekolah</option>
                        <?php foreach ($sekolah_options as $sekolah_id => $sekolah_name) : ?>
                            <option value="<?php echo $sekolah_id; ?>"><?php echo $sekolah_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Kelas ID -->
                <div class="form-group" id="kelas-field">
                    <label for="kelas_id">Kelas</label>
                    <select class="form-control" name="kelas_id" id="kelas_id">
                        <option value="">Select Kelas</option>
                        <?php foreach ($kelas_options as $kelas_id => $kelas_data) : ?>
                            <option value="<?php echo $kelas_id; ?>"><?php echo $kelas_data['text']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Sub Kelas ID -->
                <div class="form-group" id="sub-kelas-field" style="display: none;">
                    <label for="sub_kelas_id">Sub Kelas</label>
                    <select class="form-control" name="sub_kelas_id" id="sub_kelas_id">
                        <option value="">Select Sub Kelas</option>
                    </select>
                </div>

                <!-- Guru ID -->
                <div class="form-group" id="guru-field" style="display: none;">
                    <label for="guru_id">Guru</label>
                    <select class="form-control" name="guru_id" id="guru_id">
                        <option value="">Select Guru</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="row justify-content-between">
                    <div class="col-sm-8">
                        Sudah punya akun? <a href="<?php echo LOGIN_URL; ?>">Login</a>
                    </div>
                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-primary btn-block" name="register" value="Register">
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    document.body.classList.add('register-page');

    document.addEventListener('DOMContentLoaded', function() {
        const roleSelect = document.querySelector('select[name="role_id"]');
        const sekolahSelect = document.getElementById('sekolah_id');
        const nipContainer = document.getElementById('nip-container');
        const nisContainer = document.getElementById('nis-container');
        const teleponContainer = document.getElementById('telepon-container');
        const kelasField = document.getElementById('kelas-field');
        const subKelasField = document.getElementById('sub-kelas-field');
        const guruField = document.getElementById('guru-field');
        const kelasSelect = document.getElementById('kelas_id');
        const subKelasSelect = document.getElementById('sub_kelas_id');
        const guruSelect = document.getElementById('guru_id');

        const ROLE_GURU = '10';
        const ROLE_SISWA = '11';

        function toggleFields() {
            const selectedRole = roleSelect.value;
            const selectedSekolah = sekolahSelect.value;

            // Hide all fields initially
            [nipContainer, nisContainer, teleponContainer, kelasField, subKelasField, guruField].forEach(field => field.style.display = 'none');

            // Show relevant fields based on role
            if (selectedRole === ROLE_GURU) {
                nipContainer.style.display = 'block';
                teleponContainer.style.display = 'block';
            } else if (selectedRole === ROLE_SISWA) {
                [nisContainer, kelasField].forEach(field => field.style.display = 'block');
                // Only show guru field if sekolah is selected
                if (selectedSekolah) {
                    guruField.style.display = 'block';
                }
                // Only show sub-kelas if kelas is selected
                if (kelasSelect.value) {
                    subKelasField.style.display = 'block';
                }
            }

            // Toggle required attribute
            nipContainer.querySelector('input').required = selectedRole === ROLE_GURU;
            teleponContainer.querySelector('input').required = selectedRole === ROLE_GURU;
            nisContainer.querySelector('input').required = selectedRole === ROLE_SISWA;
            kelasSelect.required = selectedRole === ROLE_SISWA;
            subKelasSelect.required = selectedRole === ROLE_SISWA && kelasSelect.value !== '';
            guruSelect.required = selectedRole === ROLE_SISWA && selectedSekolah !== '';
        }

        // Initial toggle on page load
        toggleFields();

        // Add event listener for role selection change
        roleSelect.addEventListener('change', toggleFields);

        // Add event listener for sekolah selection change
        sekolahSelect.addEventListener('change', function() {
            var sekolah_id = this.value;
            if (sekolah_id && roleSelect.value === ROLE_SISWA) {
                // AJAX call to get guru options
                $.ajax({
                    url: '<?php echo base_url("users/get_guru_options"); ?>',
                    type: 'GET',
                    data: {
                        sekolah_id: sekolah_id
                    },
                    dataType: 'json',
                    success: function(data) {
                        guruSelect.innerHTML = '<option value="">Select Guru</option>';
                        if (Object.keys(data).length > 0) {
                            for (var key in data) {
                                guruSelect.innerHTML += '<option value="' + key + '">' + data[key] + '</option>';
                            }
                            guruField.style.display = 'block';
                            guruSelect.required = true;
                        } else {
                            guruField.style.display = 'none';
                            guruSelect.required = false;
                        }
                    }
                });
            } else {
                guruSelect.innerHTML = '<option value="">Select Guru</option>';
                guruField.style.display = 'none';
                guruSelect.required = false;
            }
            toggleFields(); // Re-run to update required fields
        });

        // Add event listener for kelas selection change
        kelasSelect.addEventListener('change', function() {
            var kelas_id = this.value;
            if (kelas_id && roleSelect.value === ROLE_SISWA) {
                $.ajax({
                    url: '<?php echo base_url("users/get_sub_kelas_options"); ?>',
                    type: 'GET',
                    data: {
                        kelas_id: kelas_id
                    },
                    dataType: 'json',
                    success: function(data) {
                        subKelasSelect.innerHTML = '<option value="">Select Sub Kelas</option>';
                        if (Object.keys(data).length > 0) {
                            for (var key in data) {
                                subKelasSelect.innerHTML += '<option value="' + key + '">' + data[key] + '</option>';
                            }
                            subKelasField.style.display = 'block';
                            subKelasSelect.required = true;
                        } else {
                            subKelasField.style.display = 'none';
                            subKelasSelect.required = false;
                        }
                    }
                });
            } else {
                subKelasSelect.innerHTML = '<option value="">Select Sub Kelas</option>';
                subKelasField.style.display = 'none';
                subKelasSelect.required = false;
            }
            toggleFields(); // Re-run to update required fields
        });
    });
</script>