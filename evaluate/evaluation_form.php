<!-- evaluation_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Evaluation System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="evaluate.css">
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
              <a class="nav-link" href="../index.html">Home</a>
            </li>
            <li class="nav-item">
    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#evaluationsModal">Evaluations</a>
</li>




            <li class="nav-item">
              <a class="nav-link" href="">Resources</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>



  
  <main>
    <section class="hero">
        <div class="container py-5">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h1>Welcome to the Staff Evaluation System</h1>
              <p class="lead">Our comprehensive platform for efficient and transparent staff evaluations at <strong>Bohol Island State University</strong>.</p>
              <!-- Start Evaluation Button -->
<div class="container py-5">
  <div class="text-center">
    <button type="button" class="btn btn-primary"
     id="startEvaluation" data-bs-toggle="modal"
      data-bs-target="#verificationModal">Start Evaluation</button>
  </div>
</div>
            </div>
            <div class="col-md-6">
              <img src="images/office_teachers.webp" alt="Hero Image" class="img-fluid">
              
            </div>
          </div>
        </div>
      </section>

    <section class="features">
      <div class="container py-5">
        <h2 class="text-center mb-4">Key Features</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Multi-Source Feedback</h5>
                <p class="card-text">Gather feedback from various sources, including self-evaluation, peers, students, and supervisors.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Performance Metrics</h5>
                <p class="card-text">Track performance metrics aligned with the university's goals and values.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-body>
                <h5 class="card-title">Professional Development</h5>
                <p class="card-text">Identify areas for growth and access relevant training and learning opportunities.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <footer class="bg-dark text-white py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; 22024 Bohol Island State University. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <a href="#" class="text-white">Privacy Policy</a>
          <span class="mx-2">|</span>
          <a href="#" class="text-white">Terms of Use</a>
        </div>
      </div>
    </div>
  </footer>

  </main>

<!-- Evaluations Modal -->
<div class="modal fade" id="evaluationsModal" tabindex="-1" aria-labelledby="evaluationsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="evaluationsModalLabel">LOG IN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="evaluationsUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="evaluationsUsername" name="evaluationsUsername" required>
                    </div>
                    <div class="mb-3">
                        <label for="evaluationsPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="evaluationsPassword" name="evaluationsPassword" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="Proceed to Result">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>








  
<!-- Verification Form (Pop-up) -->
<div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="verificationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verificationModalLabel">Evaluation Verification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role" required>
              <option value="">Select Role</option>
              <option value="student">Student</option>
              <option value="faculty">Faculty</option>
              <option value="staff">Staff</option>
            </select>
          </div>




        <div class="text-center">
          <button type="submit" class="btn btn-primary">Proceed to Evaluation</button>
        </div>
      </form>
    </div>
  </section>

        </form>
      </div>
    </div>
  </div>
</div>



<!--    
<img src="images/teacher and student.jpg" alt="gif">
 -->




<div id="evaluationFormContainer" style="display: none;">
  <section class="evaluation-form">
  
  <section class="evaluation-form">
    <div class="container py-5">
      <!-- Display success message if the verification form was submitted successfully -->
      <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class="alert alert-success" role="alert">
          Verification successful. You can now proceed with the evaluation form.
        </div>
      <?php } ?>

      <h2 class="text-center mb-4">Staff Evaluation Form</h2>
      <form id="evaluationForm" action="process_evaluation_form.php" method="POST">
        <input type="hidden" id="staffEvaluationId" name="staffEvaluationId" value="">


        <section class="instructor-selection">
    <div class="container py-5">
    <h2 class="text-center mb-4"><i class="fas fa-chalkboard-teacher me-2"></i>Select Instructor</h2>
      <form id="instructorForm" action="" method="GET">
        <div class="mb-3">
          <label for="instructorName" class="form-label">Instructor Name</label>
          <select class="form-select" id="instructorName" name="instructorId" required>
            <option value="">Select Instructor</option>
            <option value="12345678">John Doe</option>
            <option value="91011121">Jane Smith</option>
            <option value="31415161">Michael Johnson</option>
            <!-- Add more instructor options with their respective IDs -->
          </select>
        </div>



        
        <!-- Teaching Effectiveness -->
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">Teaching Effectiveness</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="teachingEffectiveness" class="form-label">Please rate the instructor's teaching effectiveness:</label>
              <div class="rating-bar">
                <div class="bar-container">
                  <div class="bar" style="width: 0%;"></div>
                </div>
                <div class="rating-labels">
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>
                </div>
                <input type="range" min="1" max="5" step="1" id="teachingEffectiveness" name="teachingEffectiveness" class="rating-input" required>
              </div>
            </div>
          </div>
        </div>

        <!-- Subject Matter Expertise -->
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">Subject Matter Expertise</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="subjectMatterExpertise" class="form-label">Please rate the instructor's subject matter expertise:</label>
              <div class="rating-bar">
                <div class="bar-container">
                  <div class="bar" style="width: 0%;"></div>
                </div>
                <div class="rating-labels">
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>
                </div>
                <input type="range" min="1" max="5" step="1" id="subjectMatterExpertise" name="subjectMatterExpertise" class="rating-input" required>
              </div>
            </div>
          </div>
        </div>

        <!-- Course Organization and Planning -->
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">Course Organization and Planning</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="courseOrganization" class="form-label">Please rate the instructor's course organization and planning:</label>
              <div class="rating-bar">
                <div class="bar-container">
                  <div class="bar" style="width: 0%;"></div>
                </div>
                <div class="rating-labels">
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>
                </div>
                <input type="range" min="1" max="5" step="1" id="courseOrganization" name="courseOrganization" class="rating-input" required>
              </div>
            </div>
          </div>
        </div>

        <!-- Student Support and Mentorship -->
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">Student Support and Mentorship</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="studentSupport" class="form-label">Please rate the instructor's student support and mentorship:</label>
              <div class="rating-bar">
                <div class="bar-container">
                  <div class="bar" style="width: 0%;"></div>
                </div>
                <div class="rating-labels">
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>
                </div>
                <input type="range" min="1" max="5" step="1" id="studentSupport" name="studentSupport" class="rating-input" required>
              </div>
            </div>
          </div>
        </div>

        <!-- Research and Professional Development -->
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">Research and Professional Development</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="researchDevelopment" class="form-label">Please rate the instructor's research and professional development:</label>
              <div class="rating-bar">
                <div class="bar-container">
                  <div class="bar" style="width: 0%;"></div>
                </div>
                <div class="rating-labels">
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>
                </div>
                <input type="range" min="1" max="5" step="1" id="researchDevelopment" name="researchDevelopment" class="rating-input" required>
              </div>
            </div>
          </div>
        </div>

        <!-- Classroom Management and Discipline -->
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">Classroom Management and Discipline</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="classroomManagement" class="form-label">Please rate the instructor's classroom management and discipline:</label>
              <div class="rating-bar">
                <div class="bar-container">
                  <div class="bar" style="width: 0%;"></div>
                </div>
                <div class="rating-labels">
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>
                </div>
                <input type="range" min="1" max="5" step="1" id="classroomManagement" name="classroomManagement" class="rating-input" required>
              </div>
            </div>
          </div>
        </div>

        <!-- Use of Technology and Instructional Resources -->
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">Use of Technology and Instructional Resources</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="technologyUse" class="form-label">Please rate the instructor's use of technology and instructional resources:</label>
              <div class="rating-bar">
                <div class="bar-container">
                  <div class="bar" style="width: 0%;"></div>
                </div>
                <div class="rating-labels">
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>
                </div>
                <input type="range" min="1" max="5" step="1" id="technologyUse" name="technologyUse" class="rating-input" required>
              </div>
            </div>
          </div>
        </div>

        <!-- Overall Evaluation and Comments -->
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">Overall Evaluation and Comments</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="overallRating" class="form-label">Overall Rating</label>
              <div class="rating-bar">
                <div class="bar-container">
                  <div class="bar" style="width: 0%;"></div>
                </div>
                <div class="rating-labels">
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>
                </div>
                <input type="range" min="1" max="5" step="1" id="overallRating" name="overallRating" class="rating-input" required>
              </div>
            </div>
           
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="provideFeedback" name="provideFeedback">
              <label class="form-check-label" for="provideFeedback">I'm willing to provide additional feedback or clarification.</label>
            </div>
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary" id="submitEvaluation">Submit Evaluation</button>
        </div>
      </form>
    </div>
  </section>
      </div>



      <footer class="bg-dark text-white py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; 22024 Bohol Island State University. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <a href="#" class="text-white">Privacy Policy</a>
          <span class="mx-2">|</span>
          <a href="#" class="text-white">Terms of Use</a>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>

const evaluationFormContainer = document.getElementById('evaluationFormContainer');


const verificationModal = document.getElementById('verificationModal');

const proceedButton = verificationModal.querySelector('.btn-primary');


const startEvaluationButton = document.getElementById('startEvaluation');
const mainContent = document.querySelector('main');

proceedButton.addEventListener('click', function() {
 
  evaluationFormContainer.style.display = 'block';

  const modal = bootstrap.Modal.getInstance(verificationModal);
  modal.hide();

  mainContent.style.display = 'none';
  startEvaluationButton.style.display = 'none';
 
});
    // Client-side form validation
    const form = document.getElementById('evaluationForm');
    form.addEventListener('submit', (event) => {
      event.preventDefault();

      // Validate form fields
      let isValid = true;
      const ratingInputs = document.querySelectorAll('.rating-input');
      ratingInputs.forEach((input) => {
        if (input.value === '') {
          isValid = false;
          input.classList.add('is-invalid');
        } else {
          input.classList.remove('is-invalid');
        }
      });

      if (isValid) {
      
        form.submit();
      }
    });

    // Update the rating bar based on user input
    const ratingInputs = document.querySelectorAll('.rating-input');
    ratingInputs.forEach((input) => {
      input.addEventListener('input', updateRatingBar);
    });

    function updateRatingBar(event) {
      const ratingInput = event.target;
      const ratingValue = parseInt(ratingInput.value);
      const ratingBar = ratingInput.closest('.rating-bar').querySelector('.bar');
      ratingBar.style.width = `${(ratingValue / 5) * 100}%`;
    }



    

// Add the necessary JavaScript to handle the modal behavior
const evaluationsModal = document.getElementById('evaluationsModal');
    const evaluationsModalInstance = new bootstrap.Modal(evaluationsModal);

    // Show the modal when the "Evaluations" link is clicked
    const evaluationsLink = document.querySelector('.nav-item a[href="#"][data-bs-target="#evaluationsModal"]');
    evaluationsLink.addEventListener('click', () => {
        evaluationsModalInstance.show();
    });

    // Handle form submission
    const evaluationsForm = document.querySelector('#evaluationsModal form');
    evaluationsForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const username = document.getElementById('evaluationsUsername').value;
        const password = document.getElementById('evaluationsPassword').value;

        // Check the credentials
        if (username === 'admin12345' && password === '@admin123') {
            // Redirect to rating_result.php
            window.location.href = 'rating_result.php';
        } else {
            alert('Invalid username or password.');
        }
    });
  </script>


</body>




</html>