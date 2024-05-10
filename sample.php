<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Example</title>
    <style>
        /* Style for modal dialog */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }
    </style>
</head>
<body>
    <button onclick="notificationPlay()">Click me!</button>

    <!-- Audio element for alert sound -->
    <audio id="alertSound" src="alert.mp3"></audio>

    <!-- Modal dialog -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <p>Your ticket has been successfully booked!</p>
        </div>
    </div>

    <!-- JavaScript code -->
    <script>
        function notificationPlay() {
            // Play the alert sound
            var audio = document.getElementById("alertSound");
            audio.play();

            // Display the modal dialog
            var modal = document.getElementById('myModal');
            modal.style.display = 'block';

            // Hide the modal after 3 seconds
            setTimeout(function () {
                modal.style.display = 'none';
            }, 3000);
        }
    </script>
</body>
</html>
