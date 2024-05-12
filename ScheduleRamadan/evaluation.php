<?php
include 'database.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data and store evaluations
    $quran_evaluation = $_POST["quran_evaluation"];
    $salat_evaluation = $_POST["salat_evaluation"];
    $activity_evaluation = $_POST["activity_evaluation"];
    $recipes_evaluation = $_POST["recipes_evaluation"];
    $family_evaluation = $_POST["family_evaluation"];
    $routine_evaluation = $_POST["routine_evaluation"];

    // Store evaluation data in a file or database
    // Example: File Storage
    $file = fopen("evaluations.txt", "a");
    fwrite($file, "Quran: " . $quran_evaluation . "\n");
    fwrite($file, "Salat: " . $salat_evaluation . "\n");
    fwrite($file, "Activity: " . $activity_evaluation . "\n");
    fwrite($file, "Recipes: " . $recipes_evaluation . "\n");
    fwrite($file, "Family: " . $family_evaluation . "\n");
    fwrite($file, "Routine: " . $routine_evaluation . "\n\n");
    fclose($file);

    // Redirect back to the previous page after submission
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
} else {
    // If the form is not submitted, redirect to homepage or error page
    header("Location: index.php");
    exit();
}
?>
