<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign In</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

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

    .social-btn:hover { border-color: #845adf; background: #f4f2ff; color: #845adf; }

    .social-btn svg { width: 18px; height: 18px; fill: currentColor; }

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

    input::placeholder { color: #b0b0c8; }
    input:focus { border-color: #845adf; background: #fff; }

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

    .btn-signin:hover { background: #845adf; }
    .btn-signin:active { transform: scale(.98); }

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
      background: rgba(255,255,255,.06);
      top: -60px;
      right: -60px;
    }
    .right::after {
      content: '';
      position: absolute;
      width: 160px;
      height: 160px;
      border-radius: 50%;
      background: rgba(255,255,255,.05);
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
      color: rgba(255,255,255,.82);
      line-height: 1.6;
      position: relative;
      z-index: 1;
    }

    .btn-signup {
      margin-top: 8px;
      padding: 12px 32px;
      background: transparent;
      color: #fff;
      border: 2px solid rgba(255,255,255,.7);
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

    .btn-signup:hover { background: rgba(255,255,255,.15); border-color: #fff; }

    /* ── RESPONSIVE ── */
    @media (max-width: 620px) {
      .card { flex-direction: column; min-height: unset; }
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

    <!-- LEFT: Sign In -->
    <div class="left">
      <h1>Sign In</h1>

      <div class="social-row">
        <!-- Google -->
        <a href="#" class="social-btn" title="Google">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.805 10.023H21V10H12v4h5.651C16.831 16.398 14.603 18 12 18c-3.314 0-6-2.686-6-6s2.686-6 6-6c1.528 0 2.919.577 3.978 1.522L18.879 4.62C17.166 3.03 14.703 2 12 2 6.477 2 2 6.477 2 12s4.477 10 10 10c5.522 0 10-4.477 10-10 0-.682-.073-1.347-.195-1.977z"/>
          </svg>
        </a>
        <!-- GitHub -->
        <a href="#" class="social-btn" title="GitHub">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.013-1.703-2.782.604-3.369-1.34-3.369-1.34-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.004.07 1.532 1.032 1.532 1.032.892 1.53 2.341 1.087 2.912.832.092-.647.35-1.088.636-1.338-2.221-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.269 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.295 2.748-1.026 2.748-1.026.546 1.378.202 2.397.1 2.65.64.7 1.028 1.595 1.028 2.688 0 3.847-2.337 4.695-4.566 4.942.359.309.678.919.678 1.852 0 1.337-.012 2.416-.012 2.744 0 .267.18.578.688.48A10.003 10.003 0 0022 12c0-5.523-4.477-10-10-10z"/>
          </svg>
        </a>
        <!-- LinkedIn -->
        <a href="#" class="social-btn" title="LinkedIn">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM9 17H6.477v-7H9v7zM7.694 8.717c-.771 0-1.286-.514-1.286-1.2s.514-1.2 1.371-1.2c.771 0 1.286.514 1.286 1.2s-.514 1.2-1.371 1.2zM18 17h-2.442v-3.826c0-1.058-.651-1.302-.895-1.302s-1.058.163-1.058 1.302V17h-2.523v-7h2.523v.977C13.93 10.407 14.581 10 15.802 10 17.023 10 18 10.977 18 13.174V17z"/>
          </svg>
        </a>
        <!-- Facebook -->
        <a href="#" class="social-btn" title="Facebook">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987H7.898V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
          </svg>
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

    <!-- RIGHT: Hello Friend -->
    <div class="right">
      <h2>Hello, Friend!</h2>
      <p>Register with your personal details to use all of site features</p>
      <a href="{{ route('dashboard') }}" class="menu-link"> 
        <button class="btn-signup">Sign Up</button>
    </a>
      
    </div>

  </div>
</body>
</html>