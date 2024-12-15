<?php require("views/partials/header.php") ?>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card p-5 mt-5">
                <?php if (isset($_SESSION["user-not-found"])){ ?>
                    <div class="alert-danger p-3 my-2">
                        <?php echo $_SESSION["user-not-found"]?>
                    </div>
                <?php }?>
                <div class="d-flex gap-3">
                    <a href="/" class="btn btn-outline-secondary">Back to home</a>
                    <h4>Login Form</h4>
                </div>
                <form action="/login/process" method="POST">
                    
                    <div class="form-group my-3">
                        <label for="email">Email Address:</label>
                        <input type="email" name="email" id="email" placeholder="Example@gmail.com" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="pwd">Password:</label>
                        <input type="password" name="pwd" id="pwd" placeholder="Password" class="form-control" required>
                    </div>
                    <?php if(isset($_SESSION["wrong-pwd"])) { ?>
                        <p class="text-danger"><?php echo $_SESSION["wrong-pwd"]; ?></p>
                    <?php }?>
                    <p>You don't have account yet? <a href="/register">Register</a></p>
                    <div class="d-flex gap-3 justify-content-end">
                        <a class="btn btn-outline-secondary" href="/login">Cancel</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php require("views/partials/footer.php") ?>