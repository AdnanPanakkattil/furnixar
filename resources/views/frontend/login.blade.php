<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furnixar Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }

        .login-container {
            min-height: 100vh;
        }

        /* LEFT IMAGE */
        .login-image {
            height: 100vh;
            width: 100%;
            object-fit: cover;
        }

        /* RIGHT SIDE */
        .login-form {
            max-width: 420px;
            width: 100%;
        }

        .brand {
            color: #198754;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .btn-custom {
            background-color: #198754;
            border: none;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #157347;
        }

        input.form-control {
            border-radius: 10px;
        }

        .card-box {
            padding: 40px;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        /* MOBILE VIEW */
        @media (max-width: 768px) {
            .login-image-section {
                display: none;
            }

            .login-container {
                padding: 20px;
            }

            .card-box {
                padding: 25px;
            }
        }
    </style>

</head>

<body>

    <div class="container-fluid login-container">
        <div class="row h-100">

            <!-- LEFT IMAGE -->
            <div class="col-md-6 p-0 login-image-section">
                <img src="assets/homeimages/login-image1.jpg" class="login-image" alt="Furniture">
            </div>

            <!-- RIGHT FORM -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-form">

                    <div class="card-box">

                        <h4 class="brand mb-2">Furnixar</h4>

                        <h2 class="fw-bold">Welcome Back</h2>
                        <p class="text-muted mb-4">Login to your account</p>

                        <form>

                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg" placeholder="Email Address">
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control form-control-lg" placeholder="Password">
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <input type="checkbox" class="form-check-input"> Remember
                                </div>
                                <a href="#" class="text-success text-decoration-none">Forgot?</a>
                            </div>

                            <button class="btn btn-custom w-100 py-2 text-white">Login</button>

                            <div class="text-center mt-3">
                                Don't have an account?
                                <a href="#" class="text-success text-decoration-none">Register</a>
                            </div>

                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

</html>