<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="evaluate.css">
    <title>Instructor Ratings</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            padding: 40px;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
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
              <a class="nav-link" href="evaluation_form.php">Home</a>
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

    <h1>Instructor Ratings</h1>

    <?php
    // Sample instructor names
    $instructorNames = array(
        "12345678" => "John Doe",
        "91011121" => "Jane Smith",
        "31415161" => "Michael Johnson",
        "17181920" => "Emily Davis",
        "21222324" => "David Wilson"
    );

    // Read JSON data from a file
    $jsonFilePath = 'staff_evaluations.json';
    $jsonData = file_get_contents($jsonFilePath);

    // Decode the JSON data
    $data = json_decode($jsonData, true);

    // Initialize a variable to store the total ratings for each instructor
    $totalRatings = array();

    // Loop through the data and accumulate the ratings
    foreach ($data as $item) {
        $instructorId = $item['instructor_id'];
        $evaluationData = $item['evaluation_data'];

        // If the instructor is not in the $totalRatings array, initialize it
        if (!isset($totalRatings[$instructorId])) {
            $totalRatings[$instructorId] = array(
                'teaching_effectiveness' => 0,
                'subject_matter_expertise' => 0,
                'course_organization' => 0,
                'student_support' => 0,
                'research_development' => 0,
                'classroom_management' => 0,
                'technology_use' => 0,
                'overall_rating' => 0,
                'total_rating' => 0 // Added a new key for total rating
            );
        }

        // Accumulate the ratings
        $totalRatings[$instructorId]['teaching_effectiveness'] += $evaluationData['teaching_effectiveness'];
        $totalRatings[$instructorId]['subject_matter_expertise'] += $evaluationData['subject_matter_expertise'];
        $totalRatings[$instructorId]['course_organization'] += $evaluationData['course_organization'];
        $totalRatings[$instructorId]['student_support'] += $evaluationData['student_support'];
        $totalRatings[$instructorId]['research_development'] += $evaluationData['research_development'];
        $totalRatings[$instructorId]['classroom_management'] += $evaluationData['classroom_management'];
        $totalRatings[$instructorId]['technology_use'] += $evaluationData['technology_use'];
        $totalRatings[$instructorId]['overall_rating'] += $evaluationData['overall_rating'];

        // Calculate the total rating for the instructor
        $totalRating = $evaluationData['teaching_effectiveness'] +
                       $evaluationData['subject_matter_expertise'] +
                       $evaluationData['course_organization'] +
                       $evaluationData['student_support'] +
                       $evaluationData['research_development'] +
                       $evaluationData['classroom_management'] +
                       $evaluationData['technology_use'] +
                       $evaluationData['overall_rating'];

        $totalRatings[$instructorId]['total_rating'] += $totalRating;
    }
    ?>

    <table>
        <tr>
            <th>Instructor Name</th>
            <th>Teaching Effectiveness</th>
            <th>Subject Matter Expertise</th>
            <th>Course Organization</th>
            <th>Student Support</th>
            <th>Research Development</th>
            <th>Classroom Management</th>
            <th>Technology Use</th>
            <th>Overall Rating</th>
            <th>Total Rating</th>
        </tr>
        <?php
        // Loop through the total ratings and display the instructor name and ratings
        foreach ($totalRatings as $instructorId => $ratings) {
            // Get the instructor name based on the instructor ID
            $instructorName = isset($instructorNames[$instructorId]) ? $instructorNames[$instructorId] : "Unknown Instructor";
            echo "<tr>";
            echo "<td>$instructorName</td>";
            echo "<td>" . $ratings['teaching_effectiveness'] . "</td>";
            echo "<td>" . $ratings['subject_matter_expertise'] . "</td>";
            echo "<td>" . $ratings['course_organization'] . "</td>";
            echo "<td>" . $ratings['student_support'] . "</td>";
            echo "<td>" . $ratings['research_development'] . "</td>";
            echo "<td>" . $ratings['classroom_management'] . "</td>";
            echo "<td>" . $ratings['technology_use'] . "</td>";
            echo "<td>" . $ratings['overall_rating'] . "</td>";
            echo "<td>" . $ratings['total_rating'] . "</td>"; // Display the total rating
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>