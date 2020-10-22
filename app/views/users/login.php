<?php require APPROOT . '/views/inc/header.php'; ?>   
</header>
    <section class="section">
            <div class="container">
                
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                            <h4>Login</h4>
                        </div>
                        <form class="" action="<?php echo URLROOT; ?>/users/login" method="post">
                        <div class="modal-body">
                        
                            <div class="form-group">
                                
                                <input type="email" name="user_email" autocomplete="off" class="form-control border border-primary<?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" placeholder="Email Address" style="background-color: #ffffff;" required>
                                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                
                                <input type="password" name="user_password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" style="background-color: #ffffff;" placeholder="Password" required>
                                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                <i class="form-group__bar"></i>
                            </div>
                                

                                <div class="m-t-30">
                                    <button type="submit" class="btn brn-sm btn-primary btn-static">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
          </div>
    </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>                       