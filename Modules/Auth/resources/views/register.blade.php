<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Furnixar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
        }

        .register-card {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        /* LEFT PANEL (Gradient & Illustration) */
        .left-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            overflow: hidden;
        }

        .left-panel img {
            max-width: 80%;
            height: auto;
            object-fit: contain;
            margin-bottom: 20px;
            transition: transform 0.5s ease;
        }

        .brand-logo {
            font-size: 2.5rem;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .brand-tagline {
            opacity: 0.8;
            font-size: 0.95rem;
        }

        /* RIGHT PANEL (Form) */
        .right-panel {
            flex: 1;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }

        .form-heading {
            font-size: 2rem;
            font-weight: 900;
            margin-bottom: 5px;
            color: #333;
        }

        .sub-text {
            color: #777;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }

        .field-wrap {
            position: relative;
            margin-bottom: 18px;
        }

        .field-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .form-input {
            width: 100%;
            padding: 13px 15px 13px 45px;
            border-radius: 10px;
            border: 1px solid #eee;
            background: #f8f9ff;
            transition: 0.3s;
        }

        .form-input:focus {
            background: #fff;
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
            outline: none;
        }

        .btn-register {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            border: none;
            background: linear-gradient(to right, #6366f1, #8b5cf6);
            color: #fff;
            font-weight: 700;
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-register:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .login-row {
            text-align: center;
            margin-top: 25px;
            font-size: 0.9rem;
        }

        .login-row a {
            color: #6366f1;
            text-decoration: none;
            font-weight: 700;
        }

        /* --- RESPONSIVENESS --- */
        @media (max-width: 992px) {
            .left-panel img {
                max-width: 90%;
            }
        }

        @media (max-width: 768px) {
            .left-panel {
                display: none;
                /* Mobile screens-il illustration hide cheyyunnu */
            }

        

            .form-container {
                background: #fff;
                padding: 40px 30px;
                border-radius: 20px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            }
        }
    </style>
</head>

<body>

    <div class="register-card">
        <div class="left-panel">
            <img src="{{ asset('assets/img/illustrations/login-page.jpg') }}"
                alt="Register Illustration">
            <div class="text-center">
                <div class="brand-logo">Furnixar</div>
                <div class="brand-tagline">Join our smart furniture community </div>
            </div>
        </div>

        <div class="right-panel">
            <div class="form-container">
                <h2 class="form-heading">Create Account</h2>
                <p class="sub-text">Enter your details to get started.</p>

                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf

                    <div class="field-wrap">
                        <i class="bi bi-person field-icon"></i>
                        <input type="text" name="name" class="form-input" placeholder="Full Name" required>
                    </div>

                    <div class="field-wrap">
                        <i class="bi bi-envelope field-icon"></i>
                        <input type="email" name="email" class="form-input" placeholder="Email Address" required>
                    </div>

                    <div class="field-wrap">
                        <i class="bi bi-lock field-icon"></i>
                        <input type="password" name="password" class="form-input" placeholder="Password" required>
                    </div>

                    <div class="field-wrap">
                        <i class="bi bi-shield-check field-icon"></i>
                        <input type="password" name="password_confirmation" class="form-input"
                            placeholder="Confirm Password" required>
                    </div>

                    <button type="submit" class="btn-register" id="registerBtn">
                        <span id="btnText">Register Now</span>
                        <div id="btnLoader" class="spinner-border spinner-border-sm d-none"></div>
                    </button>
                </form>

                <div class="login-row">
                    Already have an account?
                    <a href="{{ route('login') }}">Login Here</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Form submission loader
        document.getElementById("registerForm").addEventListener("submit", function () {
            const btn = document.getElementById("registerBtn");
            const text = document.getElementById("btnText");
            const loader = document.getElementById("btnLoader");

            btn.disabled = true;
            text.classList.add("d-none");
            loader.classList.remove("d-none");
        });
    </script>

</body>

</html>