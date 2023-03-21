<nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="Interncrowd.html">
                <img src="image1.png" alt="Icon" width="40" height="30">
            </a>
        </div>

        <button class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="btn btn-danger  " data-bs-toggle="modal" data-bs-target="#SignUpModal">SignUp</button>

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SignUpModal">
    SignUp
  </button> -->

        <!-- Modal -->
        <form action="login.php" method="post">
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="loginModalLabel"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="login.php" method="post">

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        id="exampleFormControlInput1">
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <form action="signup.php" method="post">
            <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="SignUpModalLabel"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="login.php" method="post">

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Enter Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                                </div>
                                

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        id="exampleFormControlInput1">
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </nav>