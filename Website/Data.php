<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    
    // Create or open the file in append mode
    $file = fopen("newsletter_data.txt", "a") or die("Unable to open file!");
    
    // Write the data to the file
    fwrite($file, "Name: $Name, Email: $Email\n");
    
    // Close the file
    fclose($file);
    
    // Redirect back to the form page
    header("Location: ".$_SERVER['REQUEST_URI']);
    exit();
}
?>
