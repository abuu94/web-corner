<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Field Training Portal</title>

         <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body class="d-flex flex-column h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Open Class</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarsExample06"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample06">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                >Resources</a
              >
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Projects</a></li>
                <li><a class="dropdown-item" href="#">Labs</a></li>
                <li><a class="dropdown-item" href="#">Tutorials</a></li>
                <li><a class="dropdown-item" href="#">Mentors</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-flex gap-2">
            <a href="signup.php" class="btn btn-outline-light btn-sm">Signup</a>
            <a href="login.php" class="btn btn-light btn-sm">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-shrink-0">
      <div class="container mt-5">
        <h2 class="mb-4">Login</h2>
        <form method="POST" class="card p-4 shadow-sm">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" />
          </div>

          <a href="home.php" class="btn btn-success">Login</a>
          <p>Don't have an account? <a href="signup.php">Signup here</a></p>
        </form>
      </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark text-light text-center">
      <div class="container">
        <span>&copy; 2026 Field Training Portal</span>
      </div>
    </footer>
       <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
