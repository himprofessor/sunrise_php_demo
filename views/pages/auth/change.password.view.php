<?php require("views/partials/header.php") ?>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card p-5 mt-5">
                <div class="d-flex gap-3">
                    <a href="/" class="btn btn-outline-secondary">Back to home</a>
                    <h4>Change Password Form</h4>
                </div>
                <form action="/changePaswordd/process" method="POST">
                    <div class="form-group my-3">
                        <label for="old-pwd">Old Password:</label>
                        <input type="password" name="old-pwd" id="old-pwd" placeholder="Old password" class="form-control" required>
                    </div>
                    <?php
                        if(isset($wrongPwd)){
                    ?>
                        <p class="text-danger">
                            <?php echo $wrongPwd;?>
                        </p>
                    <?php
                        }
                    ?>
                    <div class="form-group my-3">
                        <label for="new-pwd">New Password:</label>
                        <input type="password" name="new-pwd" id="new-pwd" placeholder="New password" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="comfirm-pwd">Comfirm Password:</label>
                        <input type="password" name="comfirm-pwd" id="comfirm-pwd" placeholder="Comfirm Password" class="form-control" required>
                    </div>
                    <?php
                        if(isset($pwdNotMatch)){
                    ?>
                        <p class="text-danger">
                            <?php echo $pwdNotMatch;?>
                        </p>
                    <?php
                        }
                    ?>
                    <div class="d-flex gap-3 justify-content-end">
                        <a class="btn btn-outline-secondary" href="/login">Cancel</a>
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php require("views/partials/footer.php") ?>