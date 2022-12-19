<?= $this->extend('layout/main_auth') ?>

<?= $this->section('content') ?>
<div class="row justify-content-md-center mt-5">
    <div class="col-5 border border-success p-3 bg-white  border-2">
        
        <h2 class="text-center">Login</h2>
        
        <!-- Failed Login -->
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>

        <!-- Registered -->
        <?php if(session()->getFlashdata('register')):?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('register') ?>
            </div>
        <?php endif;?>

        <form action="<?= base_url('/auth/login/process') ?>" method="post">
            <div class="form-group mb-3">
                <input type="email" name="email" placeholder="Email" value="" class="form-control" >
            </div>
            <div class="form-group mb-3">
                <input type="password" name="password" placeholder="Password" class="form-control" >
            </div>
            
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Signin</button>
            </div>     
        </form>
        
        <div class="mt-2">
            <a href="<?= base_url('auth/register') ?>" class="mt-5">Register</a>
        </div>

    </div>     
</div>
<?= $this->endSection() ?>