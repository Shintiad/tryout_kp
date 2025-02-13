<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo $data['title']; ?></h3>
                    </div>
                    <div class="card-body">
                        <p><?php echo $data['message']; ?></p>
                        <p>You will be notified via email once your account has been verified.</p>
                        <a href="<?php echo site_url(); ?>" class="btn btn-primary">Return to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    document.body.classList.add('waiting-page');
</script>