<?php require("views/partials/header.php") ?>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card p-5 mt-5">
                <div class="d-flex gap-3">
                    <a href="/" class="btn btn-outline-secondary">Back to home</a>
                    <h4>Register Form</h4>
                </div>
                <form action="/register/process" method="POST">
                    <div class="form-group my-3">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="email">Email Address:</label>
                        <input type="email" name="email" id="email" placeholder="Example@gmail.com" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="pwd">Password:</label>
                        <input type="password" name="pwd" id="pwd" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="comfirm-pwd">Comfirm Password:</label>
                        <input type="password" name="comfirm-pwd" id="comfirm-pwd" placeholder="Comfirm Password" class="form-control" required>
                        <?php if(isset($_SESSION['wrong-pwd'])){ ?>
                            <p class="text-danger"><?php echo $_SESSION['wrong-pwd']; ?></p>
                        <?php };?>
                    </div>
                    <p>You already have an account? <a href="/login">Login now</a></p>
                    <div class="d-flex gap-3 justify-content-end">
                        <a class="btn btn-outline-secondary" href="/register">Cancel</a>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php require("views/partials/footer.php") ?>