<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Furnixar Admin</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap"
        rel="stylesheet" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ede8fb;
            padding: 0;
            overflow: hidden;
        }

        /* ── WRAPPER ── */
        .login-wrapper {
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: stretch;
            overflow: hidden;
        }


        /* LEFT — White Form Panel */
        .left-panel {
            background: #ffffff;
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 60px 50px;
            position: relative;
            z-index: 5;
        }

        .left-panel h1 {
            font-size: 2.2rem;
            font-weight: 900;
            color: #1a0f3d;
            margin-bottom: 4px;
        }

        .left-panel .sub-text {
            font-size: 0.88rem;
            color: #a09ac2;
            margin-bottom: 32px;
        }

        /* ── FORM FIX ── */
        .left-panel form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Input */
        .input-group-custom {
            position: relative;
            width: 100%;
            max-width: 320px;
            margin-bottom: 16px;
        }

        .input-group-custom .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #7c3aed;
            font-size: 1rem;
            z-index: 2;
        }

        .input-group-custom input {
            width: 100%;
            padding: 13px 46px 13px 46px;
            border-radius: 50px;
            border: 1.5px solid rgba(150, 130, 230, 0.28);
            background: rgba(210, 200, 250, 0.25);
            font-family: 'Nunito', sans-serif;
            font-size: 0.9rem;
            color: #2d1e6b;
            outline: none;
            transition: border-color .2s, box-shadow .2s;
        }

        .input-group-custom input::placeholder {
            color: #b0a8d8;
        }

        .input-group-custom input:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 4px rgba(139, 92, 246, .13);
            background: rgba(210, 200, 250, 0.35);
        }

        .input-group-custom .eye-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #c084fc;
            font-size: 1.1rem;
            z-index: 2;
            padding: 0;
            line-height: 1;
        }

        /* Options row */
        .opts-row {
            width: 100%;
            max-width: 320px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 22px;
        }

        .opts-row .form-check-label {
            font-size: 0.8rem;
            color: #a09ac2;
            cursor: pointer;
        }

        .opts-row .form-check-input {
            border-color: #a78bfa;
            cursor: pointer;
        }

        .opts-row .form-check-input:checked {
            background-color: #7c3aed;
            border-color: #7c3aed;
        }

        .opts-row .forgot-link {
            font-size: 0.8rem;
            font-weight: 700;
            color: #7c3aed;
            text-decoration: none;
        }

        .opts-row .forgot-link:hover {
            text-decoration: underline;
        }

        /* Sign In Button */
        .btn-signin {
            width: 100%;
            max-width: 320px;
            padding: 13px;
            background: linear-gradient(90deg, #9333ea, #6d28d9);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-family: 'Nunito', sans-serif;
            font-size: 0.92rem;
            font-weight: 900;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 0 8px 26px rgba(109, 40, 217, .45);
            position: relative;
            overflow: hidden;
        }

        .btn-signin::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, rgba(255, 255, 255, .22) 0%, transparent 55%);
        }

        .btn-signin:hover {
            box-shadow: 0 14px 32px rgba(109, 40, 217, .55);
            color: #fff;
        }

        .btn-signin:active {
            transform: translateY(1px);
        }

        .register-text {
            margin-top: 18px;
            font-size: 0.82rem;
            color: #a09ac2;
        }

        .register-text a {
            color: #7c3aed;
            font-weight: 800;
            text-decoration: none;
        }

        .register-text a:hover {
            text-decoration: underline;
        }

        /* ═══════════════════════════
           RESPONSIVE
        ═══════════════════════════ */
        @media (max-width: 480px) {
            .left-panel {
                padding: 40px 20px;
            }

            .input-group-custom,
            .opts-row,
            .btn-signin {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">

        <!-- ══ LEFT PANEL ══ -->
        <div class="left-panel">
            <h1>Hello!</h1>
            <p class="sub-text">Sign in to your account</p>
            <form action="" method="post">
                @csrf
                <div class="input-group-custom">
                    <span class="input-icon"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" id="email" name="email" placeholder="E-mail" required />
                </div>

                <div class="input-group-custom">
                    <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" id="password" name="password" placeholder="Password" required />
                    <button class="eye-toggle" type="button" id="eyeBtn">
                        <i class="bi bi-eye-fill" id="eyeIcon"></i>
                    </button>
                </div>

                <div class="opts-row">
                    <div class="form-check d-flex align-items-center gap-2 mb-0">
                        <input class="form-check-input mt-0" type="checkbox" id="rem" name="remember" />
                        <label class="form-check-label" for="rem">Remember me</label>
                    </div>
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>

                <button type="submit" class="btn-signin">Sign In</button>

            </form>

            <p class="register-text">Don't have an account? <a href="#">Create</a></p>
        </div>

    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePass() {
            const pw = document.getElementById('password');
            const ic = document.getElementById('eyeIcon');
            if (pw.type === 'password') {
                pw.type = 'text';
                ic.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
            } else {
                pw.type = 'password';
                ic.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
            }
        }
    </script>
</body>

</html>