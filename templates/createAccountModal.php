<!--
Names: Group 10
Assignment: Total Recall
Class: CS361-400-W2018
-->

<!-- Modal begin -->
<div class="modal fade" id="createAccountModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button id="closeRegister" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Create an account</h4>
            </div>
            <div class="modal-body">

                <!-- Disply error when registration did not work -->

                <?php if (isset($registerError)): ?>

                    <div id="registerError" class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="alert alert-danger" role="alert">
                                <strong>Oops!</strong> <?php echo $registerError; ?>
                            </div>
                        </div>
                    </div>

                <?php endif ?>

                <!-- Registraion form -->

                <form action="register.php" method="post">
                    <div class="form-group row">
                        <label for="email" class="col-md-10 offset-md-1 col-form-label">E-mail</label>
                        <div class="col-md-10 offset-md-1">
                            <input type="email" class="form-control form-control-lg" name="email" placeholder="email address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-10 offset-md-1 col-form-label">Password</label>
                        <div class="col-md-10 offset-md-1">
                            <input type="password" class="form-control form-control-lg" name="password" placeholder="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-md-10 offset-md-1 col-form-label">Location</label>
                        <div class="col-md-10 offset-md-1">
                            <input type="location" class="form-control form-control-lg" name="location" placeholder="zip code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="severity" class="col-md-10 offset-md-1 col-form-label">Severity</label>
                        <div class="col-md-10 offset-md-1">
                            <input type="severity" class="form-control form-control-lg" name="severity" placeholder="severity">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <button class="btn btn-secondary btn-lg btn-block" type="submit">Create Account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>