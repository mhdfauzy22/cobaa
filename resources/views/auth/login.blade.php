<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">
  <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/libs/dropzone/dist/dropzone.css" rel="stylesheet">
  <link href="../assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="../assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/theme.min.css">
  <title>Sign In | Boson POS</title>
</head>

<body class="bg-light">
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <div class="card smooth-shadow-md">
          <div class="card-body p-6">
          <div class="mb-4 text-center">
              <p class="mb-6" style="color: #5340d9; font-size: 24px; font-weight: bold;">Boson POS</p>
            </div>

            <!-- form login -->
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" placeholder="Masukan Email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" placeholder="Masukan Password" id="password" class="form-control" name="password" required>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              <div class="d-lg-flex justify-content-between align-items-center mb-4">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="rememberme" name="remember">
                  <label class="form-check-label" for="rememberme">Remember me</label>
                </div>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
              <div class="d-md-flex justify-content-between mt-4">
                <div class="mb-2 mb-md-0">
                  <a href="{{ route('password.request') }}" class="fs-5">Forgot your password?</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="../assets/libs/feather-icons/dist/feather.min.js"></script>
  <script src="../assets/libs/prismjs/prism.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
  <script src="../assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
  <script src="../assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
  <script src="../assets/js/theme.min.js"></script>
</body>
</html>