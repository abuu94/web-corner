<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Field Training Portal</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
      .contact-card {
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      }
      iframe {
        border-radius: 15px;
        border: 3px solid #0d6efd;
      }
    </style>
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
      <div class="container mt-4">
        <div class="alert alert-info d-flex align-items-center" role="alert">
          <strong>User Management</strong>
        </div>

        <div class="row align-items-center">
          <!-- Contact Info -->
          <div class="col-md-6 mb-4">
            <div class="p-4">
              <h3 class="text-success mb-3">Our Virtual Space</h3>
              <p>
                At <strong>Open Class</strong>, we are a team of learners and
                mentors connected online. We don’t have a physical office — our
                classroom is the internet itself. We collaborate, share
                knowledge, and teach each other through virtual sessions and
                coding meetups.
              </p>
              <p>
                <strong>Reach us online:</strong><br />
                Email:
                <a href="mailto:example@example.com">example@example.com</a
                ><br />
                WhatsApp: +255 777 000 000<br />
                Location: Virtual Space · Zanzibar, Tanzania
              </p>
            </div>
          </div>

          <!-- Map -->
          <div class="col-md-6 text-center">
            <h4 class="text-primary mb-3">Our Location - Zanzibar</h4>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.617720974788!2d39.1916!3d-6.1620!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd0b9e5b3b1b1%3A0x9b8b2e3b1b1b1b1b!2sZanzibar!5e0!3m2!1sen!2stz!4v1692450000000"
              width="100%"
              height="300"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark text-light text-center">
      <div class="container">
        <span>&copy; 2026 Field Training Portal</span>
      </div>
    </footer>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>
