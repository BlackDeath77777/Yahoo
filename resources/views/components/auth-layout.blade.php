<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>{{ $title }} - {{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="welcome.css">
  <style>
    body {
        background-color: #494b52ff;
      /* background-image: url('{{ asset('images/blue.jpg') }}');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed; */
    }

    .navbar {
      background-color: #252525;
    }

    .navbar-brand {
      color: gold;
      font-weight: bold;
    }

    .nav-link {
      color: white;
    }

    .nav-link.active {
      color: gold !important;
    }

    .welcome {
      text-align: center;
      color: gold;
      padding: 20px 20px;
    }

    .section-title {
      text-align: center;
      color: gold;
      margin-top: 40px;
      margin-bottom: 20px;
    }

    .card {
      background: #252525;
        border: 1px solid gold;
        border-radius: 15px;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        color: #ffd700;
    }

    footer {
      background-color: #252525;
      padding: 10px;
      text-align: center;
      color: gold;
    }

    .border-gold {
      border-color: gold !important;
    }
    .btn-signup {
      background-color: gold;
      color: #252525;
      font-weight: bold;
      border-radius: 8px;
    }

    .btn-signup:hover {
      background-color: #ffd700;
      color: black;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark border-bottom border-3 border-gold">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Infinity</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="browse_projects">Browse Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="upload">Upload</a></li>
          <li class="nav-item"><a class="nav-link" href="community">Community</a></li>
          <li class="nav-item"><a class="nav-link" href="contacts">Contact</a></li>
        </ul>
        <!-- <button class="btn btn-signup">Sign Up</button> -->
      </div>
    </div>
  </nav>

    <main class="bg-img">
        {{ $slot }}
    </main>

  <!-- Footer -->
  <footer class="border-top border-3 border-gold fixed-bottom">
    <p>Designed by ME 😎👌 | Infinity Project Archive &copy; 2025</p>
  </footer>
   
  </script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
