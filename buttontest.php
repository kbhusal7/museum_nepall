
<?php
// Initialize variables
// Default button classes and attributes

$buttonclass3= "purple-button disabled"; // For Ticket Details button
$disabledAttr = "disabled"; // For Ticket Details button
$buttonclass2 = "purple-button disabled"; // For Final Ticket button
$disabledAttr3="disabled";

// Check if necessary session variables exist for Ticket Details and Final Ticket buttons
if ((isset($_SESSION["MN"]) && isset($_SESSION["date"]) && isset($_SESSION["TP"])) &&
    (isset($_SESSION["NS"]) || isset($_SESSION["NC"]) || isset($_SESSION["FC"]))) {
    
    // Ticket Booking button: Always active, no change in class or attributes
    // Ticket Details button logic
    $buttonClass2 = "purple-button"; // Button class for active state
    $disabledAttr = ""; // No 'disabled' attribute

  
    
    
    // Check if payment_type is set
    if (isset($_SESSION["payment_type"])) {
        // Final Ticket button remains active if payment_type is set
        $buttonclass3 = "purple-button";
        $disabledAttr3 = "purple-button"; // No change in deactive state class
    } else {
        // Final Ticket button is disabled if payment_type is not set
        $buttonclass3 = "purple-button disabled";
        $disabledAttr3 = "disabled";// Button class for deactive state
    }
} else {
    // If necessary session variables are not set, all buttons are disabled
    $buttonClass2 = "purple-button disabled";
    $buttonClass3 = "purple-button disabled"; // Button class for disabled state
    $disabledAttr = "disabled"; // Add 'disabled' attribute
    // Button class for Final Ticket button
    
    $disabledAttr3 = "disabled"; 
}
?>



<center>
    <br>
    <!-- Ticket Booking button -->
    <button class="purple-button" onclick="toggleTB()">Ticket Booking</button>
    <!-- Ticket Details button -->
    <button class="<?php echo $buttonClass2; ?>" onclick="toggleTD()" <?php echo $disabledAttr; ?>>Ticket Details</button>
    <!-- Final Ticket button -->
    <button class="<?php echo $buttonclass3; ?>" onclick="toggleTF()" <?php echo $disabledAttr3; ?>>Final Ticket</button>
    <br>
</center>



<style>
    .purple-button {
        background-color: #8a2be2; /* Adjust to your desired shade of purple */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin: 5px;  /* Add some spacing between buttons for better alignment */
    }

    .purple-button.disabled {
        opacity: 0.5; /* Reduce opacity for disabled state */
        cursor: not-allowed; /* Change cursor to 'not-allowed' for disabled state */
    }

    .purple-button:hover:not(.disabled) {
        background-color: #824492; /* Slightly darker shade on hover */
    }
</style>
