<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Open Class - Field Training Portal</title>

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

    <!-- Hero Section -->
    <main class="flex-shrink-0">
      <div class="container mt-4">
        <div class="p-5 mb-4 bg-dark text-white rounded shadow">
          <h1 class="display-4 fw-bold">Welcome to Open Class</h1>
          <p class="lead">
            A learning portal designed to introduce new Field students to
            <strong>Open Source Technologies</strong>. Here you will explore
            Linux, Git, Docker, Python, and other essential tools for modern
            software development.
          </p>
          <p>
            <a href="about.html" class="btn btn-primary btn-lg">Learn More</a>
            <a href="signup.html" class="btn btn-outline-light btn-lg"
              >Get Started</a
            >
          </p>
        </div>

        <!-- Feature Cards -->
        <div class="row mb-4">
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-primary">Open Source Basics</h5>
                <p class="card-text">
                  Understand the philosophy of open source and how it empowers
                  innovation.
                </p>
                <a href="#" class="btn btn-sm btn-outline-primary">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-success">Hands-on Labs</h5>
                <p class="card-text">
                  Practice with real tools like Git, Docker, and Linux in guided
                  labs.
                </p>
                <a href="#" class="btn btn-sm btn-outline-success">Start Lab</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-warning">Mentorship</h5>
                <p class="card-text">
                  Learn from experienced mentors who guide you through your
                  field training journey.
                </p>
                <a href="#" class="btn btn-sm btn-outline-warning"
                  >Meet Mentors</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark text-light text-center">
      <div class="container">
        <span>&copy; 2026 Open Class - Field Training Portal</span>
      </div>
    </footer>

  

  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>


