<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login Animation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      
      <!-- Tampilan pertama LOGIN -->
      <!-- <div class="login">
        <button type="submit" id="btn-login"><span>Login</span></button>
      </div> -->
      
      <!-- TAMPILAN FORM LOGIN -->
      
      <input type="checkbox" name="slide" id="slide" />
      <div class="login-content">
        <div class="content">
          <h1>Login</h1>
          <div class="form">
            <form action="#" method="get" accept-charset="utf-8">
              <div class="user">
                <input type="text" name="username" id="user" required="required"/>
                <label class="user-label">Username</label>
              </div>
              <div class="pass">
                <input type="password" name="password" id="pass" required="required" />
                <label class="pass-label">Password</label>
              </div>
              <div class="terms-pass">
                <input type="checkbox" id="check" />
                <div class="terms">
                  <label for="check">Remember me</label>
                </div>
                <span class="fpass">forgot password</span>
              </div>
              <button type="submit" id="login" onclick="popUp('Kelompok 3')">Login</button>
            </form>
            <span class="no">Don't have an account? <label for="slide" id="sreg" onclick="popUp('Kelompok 3')">Register</label></span>
          </div>
        </div>
      </div>
      
      <!-- TAMPILAN FORM REGISTRATION -->
      <div class="regist-content">
        <div class="content">
          <h1>Registration</h1>
          <div class="form">
            <form action="input.php" method="post" id="form-reg">
              <div class="name">
                <input type="text" name="nama" id="name" required="required"/>
                <label class="name-label">Name</label>
              </div>
              <div class="mail">
                <input type="mail" name="email" id="mail" required="required"/>
                <label class="mail-label">Email</label>
              </div>
              <div class="pass">
                <input type="password" name="password" id="pass" required="required" />
                <label class="pass-label">Password</label>
              </div>
              <div class="conf-pass">
                <input type="password" name="conpassword" id="conf-pass" required="required" />
                <label class="conf-pass-label">Confirm Password</label>
              </div>
              <div class="terms-pass">
                <input type="checkbox" id="check-reg" />
                <div class="terms-reg">
                  <label for="check-reg">I agree to <em>terms</em> &#38; <em>conditions</em></label>
                </div>
              </div>
              <button type="submit" id="register" onclick="popUp('Kelompok 3')">Register</button>
            </form>
            <span class="yes">Already have an account? <label for="slide" id="slog" onclick="popUp('Kelompok 3')">Login</label></span>
          </div>
        </div>
      </div>
      
    </div>

    <script src="nama-kelompok.js"></script>
  </body>
</html>