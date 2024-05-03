<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evaluation Submitted - Bohol Island State University</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/bisu_image.png" alt="University Logo" class="logo me-3" style="height: 50px;">
          <span class="fs-4">Bohol Island State University</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Evaluations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Resources</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title text-center mb-4">Thank you for your evaluation!</h1>
                
                <?php if (isset($_GET['provideFeedback']) && $_GET['provideFeedback'] == '1'): ?>
                  <div class="text-center mt-4">
                    <p>If you'd like to provide additional feedback, please click the button below:</p>
                    <a href="feedback_form.php" class="btn btn-primary">Provide Feedback</a>
                  </div>
                <?php endif; ?>
                <div class="text-center mt-4">
                  <p>Next steps:</p>
                  <ul class="list-unstyled">
                    <li>The evaluation results will be available within the next few weeks.</li>
                    <li>For more information, please visit the <a href="#">Evaluations</a> section of our website.</li>
                  </ul>



                  
                </div>
                <div class="text-center mt-4">
                  <a href="../index.html" class="btn btn-secondary">Back to Home</a>
                  <a href="evaluation_form.php" class="btn btn-primary">Start a New Evaluation</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <!-- ... (existing footer) -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>