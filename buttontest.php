<?php

// $buttonClass = "purple-button";
// $buttondeactive ="disabled";
// Check if necessary session variables exist
if ((isset($_SESSION["MN"]) && isset($_SESSION["date"]) && isset($_SESSION["TP"])) &&
    (isset($_SESSION["NS"]) || isset($_SESSION["NC"]) || isset($_SESSION["FC"]))) {
        $buttonClass = "purple-button";// Button class for active state
    $disabledAttr = ""; // No 'disabled' attribute
    if((isset($_SESSION["payment_type"])))
{
    $buttonActive="purple-button";
    $buttondeactive="";
}
else{
    $buttonActive="purple-button disabled";
    $buttondeactive="disabled";

}
} else {
    $buttonClass = "purple-button disabled"; // Button class for disabled state
    $disabledAttr = "disabled"; // Add 'disabled' attribute
}

?>


<center>
    <br>
    <!-- Ticket Booking button -->
    <button class="purple-button" onclick="toggleTB()">Ticket Booking</button>
    <!-- Ticket Details button -->
    <button class="<?php echo $buttonClass; ?>" onclick="toggleTD()" <?php echo $disabledAttr; ?>>Ticket Details</button>
    <!-- Final Ticket button -->
    <button class="<?php echo $buttonActive; ?>" onclick="toggleTF()" <?php echo $buttondeactive; ?>>Final Ticket</button>
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
