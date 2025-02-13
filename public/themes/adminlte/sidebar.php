<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url('admin/content'); ?>" class="brand-link">
        <img src="<?php echo base_url('assets/images/logo-small.png'); ?>" class="brand-image img-circle elevation-3" style="opacity: 1.0">
        <span class="brand-text font-weight-light">
            <?php echo html_escape($this->settings_lib->item('site.subtitle')); ?>
        </span>
    </a>
    
    <!-- </?php
    
    if (!isset($_SESSION)) {
        session_start();
    }


    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 'User ID not set';
    $id_sekolah = isset($_SESSION['id_sekolah']) ? $_SESSION['id_sekolah'] : 'School ID not set';
    ?>

    <p><strong>User ID:</strong> </?php echo htmlspecialchars($user_id); ?></p>
    <p><strong>School ID:</strong> </?php echo htmlspecialchars($id_sekolah); ?></p> -->

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/images/anonym.png'); ?>" class="img-circle elevation-2">
            </div>
            <div class="info">
                <?php
                	$userDisplayName = isset($current_user->display_name) && !empty($current_user->display_name) ? $current_user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->username : $current_user->email);
                	// echo gravatar_link($current_user->email, 96, null, $userDisplayName);
                ?>
                <a href="#" class="d-block"><?php echo $userDisplayName; ?></a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <?php echo Contextslte::render_menu('text', 'normal'); ?>
        </nav>
    </div>
</aside>