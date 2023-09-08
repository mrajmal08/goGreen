<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thanks Page</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container text-center mt-5">
    <h1>Thanks for Your Submission</h1>
    <p>Your order has been places succesfully</p>
    <button class="btn btn-primary" onclick="redirectToHome()">OK</button>
  </div>

  <!-- Include Bootstrap JS (Popper.js and Bootstrap JS) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <script>
    function redirectToHome() {
      // You can specify the URL to redirect to when the "OK" button is clicked.
      window.location.href = "/"; // Replace 'home.html' with your desired URL.
    }
  </script>
</body>
</html>
