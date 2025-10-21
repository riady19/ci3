

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <h1 class="text-white">Login Page</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Silahkan Masukan Email dan Password</span>
                <div class="form-group">

                <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>"> 
                                                <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
                  </div>
                  <div class="form-group">
                <input type="password" class="form-control form-control-user" name="password" id="passwowrd" placeholder="Password"> <?= form_error('password', '<small class="text-danger pl-3" >', '</small>'); ?>
                </div>
                 <button type="submit" class="btn btn-success btn-user btn-block">
                                            Login
                                        </button>
                <a href="#">Forget Your Password?</a>
                
            </form>
          
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hai...</h1>
                    <p>Selamat Datang, Belum Punya Akun.. Silahakan Daftar</p>
                    <a   class="small text-white btn btn-primary" href="<?= base_url('auth/register'); ?>">Daftar>></a>      
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>