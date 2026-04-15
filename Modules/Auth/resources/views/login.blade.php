<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eeeeee;
            font-family: 'Nunito', sans-serif;
        }

        .card {
            display: flex;
            width: min(900px, 96vw);
            min-height: 480px;
            background: #fff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(80, 50, 160, 0.15);
        }

        /* ── LEFT PANEL ── */
        .left {
            flex: 1;
            padding: clamp(30px, 5vw, 60px) clamp(24px, 4vw, 52px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 18px;
        }

        .left h1 {
            font-size: clamp(22px, 3vw, 30px);
            font-weight: 800;
            color: #1a1a2e;
            letter-spacing: -0.5px;
        }

        .social-row {
            display: flex;
            gap: 12px;
        }

        .social-btn {
            width: 42px;
            height: 42px;
            border: 1.5px solid #d0d0e0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            background: #fff;
            transition: border-color .2s, background .2s;
            color: #555;
            text-decoration: none;
        }

        .social-btn:hover {
            border-color: #845adf;
            background: #f4f2ff;
            color: #845adf;
        }

        .social-btn svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
        }

        .divider {
            font-size: 13px;
            color: #9090a8;
            letter-spacing: .3px;
        }

        .input-group {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 13px 16px;
            border: 1.5px solid #e0e0ee;
            border-radius: 10px;
            font-size: 14px;
            font-family: inherit;
            color: #333;
            outline: none;
            transition: border-color .2s;
            background: #fafafe;
        }

        input::placeholder {
            color: #b0b0c8;
        }

        input:focus {
            border-color: #845adf;
            background: #fff;
        }

        .forgot {
            font-size: 13px;
            color: #9090a8;
            text-align: right;
            width: 100%;
            cursor: pointer;
        }

        .btn-signin {
            width: 100%;
            padding: 13px;
            background: #845adf;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            font-family: inherit;
            letter-spacing: 1.5px;
            cursor: pointer;
            text-transform: uppercase;
            transition: background .2s, transform .1s;
        }

        .btn-signin:hover {
            background: #845adf;
        }

        .btn-signin:active {
            transform: scale(.98);
        }

        /* ── RIGHT PANEL ── */
        .right {
            width: clamp(220px, 40%, 360px);
            background: linear-gradient(135deg, #845adf 0%, #845adf 55%, #845adf 100%);
            border-radius: 80px 0 0 80px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: clamp(28px, 5vw, 56px) clamp(24px, 4vw, 44px);
            gap: 16px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* decorative blob */
        .right::before {
            content: '';
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .06);
            top: -60px;
            right: -60px;
        }

        .right::after {
            content: '';
            position: absolute;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .05);
            bottom: -50px;
            left: -40px;
        }

        .right h2 {
            font-size: clamp(20px, 2.5vw, 26px);
            font-weight: 800;
            color: #fff;
            letter-spacing: -0.3px;
            position: relative;
            z-index: 1;
        }

        .right p {
            font-size: 14px;
            color: rgba(255, 255, 255, .82);
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }

        .btn-signup {
            margin-top: 8px;
            padding: 12px 32px;
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, .7);
            border-radius: 24px;
            font-size: 13px;
            font-weight: 700;
            font-family: inherit;
            letter-spacing: 1.5px;
            cursor: pointer;
            text-transform: uppercase;
            transition: background .2s, border-color .2s;
            position: relative;
            z-index: 1;
        }

        .btn-signup:hover {
            background: rgba(255, 255, 255, .15);
            border-color: #fff;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 620px) {
            .card {
                flex-direction: column;
                min-height: unset;
            }

            .right {
                width: 100%;
                border-radius: 0 0 28px 28px;
                padding: 36px 28px;
            }
        }
    </style>
</head>

<body>
    <div class="card">

        <div class="left">
            <h1>Sign In</h1>

            <div class="social-row">
                <a href="#" class="social-btn" title="Google">
                    <i class="bi bi-google"></i>
                </a>
                <a href="#" class="social-btn" title="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </div>

            <p class="divider">or use your email password</p>

            <div class="input-group">
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
            </div>

            <p class="forgot">Forget your Password?</p>

            <button class="btn-signin">Sign In</button>
        </div>

        <div class="right">
            <h2>Hello, Friend!</h2>
            <p>Register with your personal details to use all of site features</p>
            <a href="" class="menu-link">
                <button class="btn-signup">Sign Up</button>
            </a>

        </div>

    </div>
</body>

</html>