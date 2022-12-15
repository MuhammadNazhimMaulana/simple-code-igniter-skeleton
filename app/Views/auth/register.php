<?= $this->extend('layout\main_auth') ?>

<?= $this->section('content') ?>
<div class="row justify-content-md-center mt-5">
    <div class="col-5 border border-success p-3 bg-white  border-2">
        
        <h2 class="text-center">Register</h2>
        
        <!-- Validation -->

        <?php if(session()->getFlashdata('msg_register')):?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('msg_register') ?>
            </div>
        <?php endif;?>

        <form action="<?= base_url('auth/register/process') ?>" method="post">
            <div class="form-group mb-3">
                <label for="InputForUsername" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="InputForUsername" value="<?= set_value('username') ?>">
            </div>
            <div class="form-group mb-3">
                <label for="InputForFirstName" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="InputForFirst Name" value="<?= set_value('first_name') ?>">
            </div>
            <div class="form-group mb-3">
                <label for="InputForLastName" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="InputForLastName" value="<?= set_value('last_name') ?>">
            </div>
            <div class="form-group mb-3">
                <input type="email" name="email" placeholder="Email" value="" class="form-control" >
            </div>
            <div class="form-group mb-3">
                <input type="password" name="password" placeholder="Password" class="form-control" >
            </div>
            
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Register</button>
            </div>     
        </form>

        <div class="mt-2">
            <a href="<?= base_url('auth/login') ?>" class="mt-5">Back to Login</a>
        </div>

    </div>     
</div>
<?= $this->endSection() ?>