<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <?php if (isset($current_user->role_id) && $current_user->role_id == 1): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('users/select_school'); ?>" role="button">Pilih Sekolah</a>
        </li>
        <?php endif; ?>
        <?php if (isset($current_user->role_id) && $current_user->role_id == 1): ?>
        <li class="nav-item">
            <a class="nav-link"
                style="font-weight: bold;"><?php echo isset($current_user->school_name) ? $current_user->school_name : 'Sekolah tidak terdaftar'; ?></a>
        </li>
        <?php endif; ?>
    </ul>

    <ul class=" navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <?php
            $userDisplayName = !empty($current_user->display_name) ? $current_user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->username : $current_user->email);
            ?>
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/images/anonym.png'); ?>"
                    class="user-image img-circle elevation-2">
                <span class="d-none d-md-inline"><?php echo $userDisplayName; ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header">
                    <img src="<?php echo base_url('assets/images/anonym.png'); ?>" class="img-circle elevation-2">
                    <p><?php echo $userDisplayName; ?><small><?php echo $current_user->email; ?></small></p>
                </li>
                <li class="user-footer">
                    <a href="<?php echo site_url('users/profile'); ?>" class="btn btn-default btn-flat">
                        <small><?php echo lang('bf_user_settings'); ?></small>
                    </a>
                    <a href="<?php echo site_url('logout'); ?>" class="btn btn-default btn-flat float-right">
                        <small><?php echo lang('bf_action_logout'); ?></small>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link position-relative" data-widget="control-sidebar" data-controlsidebar-slide="true"
                href="#" role="button" id="notificationBell">
                <i class="fas fa-bell"></i>
                <?php if (isset($new_notifications) && $new_notifications > 0): ?>
                <span class="notification-badge"><?php echo $new_notifications; ?></span>
                <?php endif; ?>
            </a>
        </li>
    </ul>
</nav>

<aside class="control-sidebar control-sidebar-light" style="overflow-y: auto; padding: 10px; width: 400px;">
    <div style="height: 45px; display: flex; justify-content: center; align-items: center; margin-bottom: 10px;">
        <h5 style="font-weight: bold;">Pengumuman</h5>
    </div>

    <div id="notificationContainer">
        <?php if (!empty($ujian)): ?>
        <?php if (isset($upcoming_exam) && $upcoming_exam): ?>
        <div class="alert alert-warning" role="alert">
            <i class="fas fa-exclamation-triangle"></i> Anda memiliki ujian yang akan dilaksanakan besok!
        </div>
        <?php endif; ?>

        <?php foreach ($ujian as $data): ?>
        <?php
            $tanggal_ujian = new DateTime($data->date . ' ' . $data->start_ujian);
            $hari_ini = new DateTime();
            $selisih_waktu = $tanggal_ujian->getTimestamp() - $hari_ini->getTimestamp();

            if ($selisih_waktu < 0) {
                $selisih_menit = abs($selisih_waktu) / 60;
                if ($selisih_menit <= 3 * 3600) {
                    $warna_background = '#ccffcc';
                } elseif (abs($selisih_waktu) <= 5 * 24 * 3600) {
                    $warna_background = '#ccffcc';
                } else {
                    continue;
                }
            } elseif ($selisih_waktu <= 24 * 3600 || $tanggal_ujian->format('Y-m-d') == $hari_ini->modify('+1 day')->format('Y-m-d')) {
                $warna_background = '#ffcccc';
            } elseif ($selisih_waktu <= 3600) {
                $warna_background = '#ffcccc';
            } else {
                $warna_background = '#cce7ff';
            }

            $notification_id = isset($data->id_paket_soal) ? $data->id_paket_soal : 'notification-' . uniqid();
            ?>
        <div class="notification-item" data-notification-id="<?php echo $data->id_nama_paket_soal; ?>"
            onclick="showNotificationId('<?php echo $data->id_nama_paket_soal; ?>')"
            style="background-color: <?php echo $warna_background; ?>; padding: 15px; margin-bottom: 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); cursor: pointer;">
            <h6 style="font-size: 16px; margin: 0;">
                Pengingat Ujian
                <?php if (!isset($data->is_read) || $data->is_read != 't'): ?>
                <span class="badge badge-danger">Baru</span>
                <?php endif; ?>
            </h6>
            <p style="font-size: 14px; margin: 5px 0;">
                Ujian <?php echo $data->nama_kegiatan; ?> akan dilaksanakan pada tanggal
                <?php echo date('d M Y', strtotime($data->date)); ?>
                pukul <?php echo $data->start_ujian; ?> sampai <?php echo $data->end_ujian; ?>
                Pembahasan dapat dilihat pada waktu <?php echo $data->waktu_pembahasan_ujian; ?>
            </p>
        </div>

        <?php endforeach; ?>
        <?php else: ?>
        <p style="padding: 8px 15px; text-align: center;">Tidak ada pengumuman ujian saat ini.</p>
        <?php endif; ?>
    </div>
</aside>

<style>
.position-relative {
    position: relative;
}

.notification-badge {
    position: absolute;
    top: 0px;
    right: -5px;
    padding: 3px 5px;
    border-radius: 50%;
    background: #dc3545;
    color: white;
    font-size: 10px;
    line-height: 1;
}

.badge {
    display: inline-block;
    padding: 0.35em 0.65em;
    font-size: .75em;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}

.badge-danger {
    background-color: #dc3545;
    color: white;
}

.notification-item {
    transition: background-color 0.3s;
}

.notification-item:hover {
    opacity: 0.9;
}
</style>

<script>
function showNotificationId(notificationId) {
    // Mengalihkan ke URL untuk memperbarui status
    window.location.href = `${site_url}/admin/ujian/simulasi/change_status/${notificationId}`;
}
</script>