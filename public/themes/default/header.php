<?php if ($this->session->userdata('role_id') != 1): ?>
    <nav class="navbar navbar-expand">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <div class="btn-group">
                    <a href="<?php echo site_url(LOGIN_URL); ?>" class="btn btn-primary">Login</a>
                </div>
            </li>
        </ul>
    </nav>
<?php endif; ?>
