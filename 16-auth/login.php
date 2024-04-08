<?php
$title = "Login";
// require_once 'layout/header.php';
?>


<section class="login-bg">
    <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
        <div class="container">
            <div class="row justify-content-center d-flex mt-5">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="border rounded-4 p-5">
                        <h1 class="mb-4">LOGIN</h1>
                        <form method="POST" action="login_process.php">
                            <div class="mb-3">
                                <label for="email" class="form-label text-white fw-bold">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label text-white fw-bold">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-warning btn-rounded">Se Connecter</button>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>