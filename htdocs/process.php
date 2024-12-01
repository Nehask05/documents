<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $propertyType = htmlspecialchars($_POST['propertyType']);
    $budget = htmlspecialchars($_POST['budget']);
    $comments = htmlspecialchars($_POST['comments']);

    echo "<h3>Inquiry Submitted Successfully</h3>";

    // Create a neat table to display the form data
    echo "<table border='1' style='border-collapse: collapse; width: 60%; margin: 20px 0;'>";
    echo "<thead>";
    echo "<tr style='background-color: #f2f2f2;'>";
    echo "<th style='padding: 10px; text-align: left;'>Field</th>";
    echo "<th style='padding: 10px; text-align: left;'>Details</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr><td style='padding: 10px;'><strong>Name</strong></td><td style='padding: 10px;'>$name</td></tr>";
    echo "<tr><td style='padding: 10px;'><strong>Email</strong></td><td style='padding: 10px;'>$email</td></tr>";
    echo "<tr><td style='padding: 10px;'><strong>Phone</strong></td><td style='padding: 10px;'>$phone</td></tr>";
    echo "<tr><td style='padding: 10px;'><strong>Property Type</strong></td><td style='padding: 10px;'>$propertyType</td></tr>";
    echo "<tr><td style='padding: 10px;'><strong>Budget</strong></td><td style='padding: 10px;'>₹$budget</td></tr>";
    echo "<tr><td style='padding: 10px;'><strong>Comments</strong></td><td style='padding: 10px;'>$comments</td></tr>";
    echo "</tbody>";
    echo "</table>";
} else {
    echo "Invalid request.";
}
?>