<?php
// process_evaluation_form.php
$jsonFilePath = 'staff_evaluations.json';

$instructorId = $_POST['instructorId'];
$teachingEffectiveness = $_POST['teachingEffectiveness'];
$subjectMatterExpertise = $_POST['subjectMatterExpertise'];
$courseOrganization = $_POST['courseOrganization'];
$studentSupport = $_POST['studentSupport'];
$researchDevelopment = $_POST['researchDevelopment'];
$classroomManagement = $_POST['classroomManagement'];
$technologyUse = $_POST['technologyUse'];
$overallRating = $_POST['overallRating'];
$provideFeedback = isset($_POST['provideFeedback']) ? 1 : 0;

// Prepare the evaluation data to be saved
$evaluationData = array(
    'instructor_id' => $instructorId,
    'teaching_effectiveness' => $teachingEffectiveness,
    'subject_matter_expertise' => $subjectMatterExpertise,
    'course_organization' => $courseOrganization,
    'student_support' => $studentSupport,
    'research_development' => $researchDevelopment,
    'classroom_management' => $classroomManagement,
    'technology_use' => $technologyUse,
    'overall_rating' => $overallRating,
    'provide_feedback' => $provideFeedback
);

// Load the existing data from the JSON file
$existingData = file_exists($jsonFilePath) ? json_decode(file_get_contents($jsonFilePath), true) : array();

// Check if an entry for the given instructor ID exists
$instructorIndex = array_search($instructorId, array_column($existingData, 'instructor_id'));

if ($instructorIndex !== false) {
    // Update the existing entry with the new evaluation data
    $existingData[$instructorIndex]['evaluation_data'] = $evaluationData;
} else {
    // Create a new entry with the instructor ID and evaluation data
    $existingData[] = array('instructor_id' => $instructorId, 'evaluation_data' => $evaluationData);
}

// Save the updated data to the JSON file
file_put_contents($jsonFilePath, json_encode($existingData, JSON_PRETTY_PRINT));

// Redirect to a success page or display a success message
header("Location: success.php");
exit;
?>