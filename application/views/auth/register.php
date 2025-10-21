

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                <h1 class="text-white mt-5 size-12">Create Acount</h1>
                
                <span>Silahkan Masukan Data anda..!</span>
<div class="form-group">
                <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="Full Name" value="<?= set_value('name'); ?>"> 
                                                <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
                 

                <div class="form-group">
                <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>"> 
                                                <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
                
                  <div class="form-group">
                <input type="password" class="form-control form-control-user" name="password1" id="passwowrd1" placeholder="Password"> <?= form_error('password1', '<small class="text-danger pl-3" >', '</small>'); ?>
              
                  <div class="form-group">
                <input type="password" class="form-control form-control-user" name="password2" id="passwowrd2" placeholder="Repeat Password"> 
                </div>
                 <button type="submit" class="btn btn-success btn-user btn-block">
                                            Sign Up
                                        </button>
                
                
            </form>
            </div>
                  </div>
                   </div>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Halo...</h1>
                    <p>Terima Kasih Sudah Mendaftar,  Silahkan Masuk </p>
                    <a class="small text-white btn btn-primary" href="<?= base_url('auth'); ?>">Masuk..!</a>      
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>