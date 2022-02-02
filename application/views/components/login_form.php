
<div class="login_form" id="login_form">
    <div class="text-center mb-5">
        <h2>ลงชื่อเข้าใช้งานระบบประชาสัมพันธ์</h2>
    </div>
    <form class="form" id="myForm" action="<?php echo BASEURL; ?>/authen/userLogin" method="POST">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div id="authen">
                    <div class="form-group">
                        <label for="loginEmail" class="text-success mt-2">Username</label>
                        <input type="email" class="form-control" name="email" id="loginEmail" aria-describedby="emailHelp" placeholder="email" autofocus autocomplete="off" value="<?php if(!empty($data['email'])): echo $data['email']; endif; if(isset($_COOKIE['user_login'])): echo $_COOKIE['user_login']; endif;?>"/>
                    </div>
                    <div class="text-danger mt-2">
                        <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
                    </div>
                    <div class="form-group mt-2">
                        <label for="loginPassword" class="text-success mt-2">Password</label>
                        <input type="password" class="form-control passwd_style" name="password" id="loginPassword" maxlength="15"  placeholder="password" autocomplete="off"  value="<?php if(!empty($data['password'])): echo $data['password']; endif; if(isset($_COOKIE['user_password'])): echo $_COOKIE['user_password']; endif;?>"/>
                    </div>
                    <div class="text-danger mt-2">
                        <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck" name="remember" <?php if(isset($_COOKIE['user_login'])): echo "checked"; endif;?>/>
                            <label class="form-check-label" for="dropdownCheck">
                            Remember me
                            </label>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" id="SignIn" class="btn btn-primary btnAuthen"><i class="far fa-envelope"></i>ลงชื่อเข้าใช้งาน</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>