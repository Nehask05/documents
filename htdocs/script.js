$(document).ready(function () {
    $("#propertyForm").on("submit", function (e) {
        e.preventDefault();

        const formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: "process.php", // Backend PHP file
            type: "POST",
            data: formData,
            success: function (response) {
                $("#response").html(response).removeClass("hidden"); // Display response
                $("#propertyForm")[0].reset(); // Reset form fields
            },
            error: function () {
                alert("An error occurred. Please try again.");
            }
        });
    });
});