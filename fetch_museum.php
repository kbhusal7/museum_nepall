<?php
try {
    require_once 'include/db.php';
    $sql_museum = "SELECT * FROM tbl_museum;";
    $museum_query = mysqli_query($con, $sql_museum);

    $museums = array();
    if (mysqli_num_rows($museum_query) > 0) {
        while ($row = mysqli_fetch_assoc($museum_query)) {
            $museums[] = array(
                'id' => $row['id'], // Assuming museum ID is available
                'name' => $row['m_name'], // Assuming museum name is available
            );
        }
    }
    echo json_encode($museums);
} catch (Exception $e) {
    die('Database connection error' . '<br>' . $e->getMessage());
}
?>
<script>
function fetchMuseums() {
  console.log("Fetching museums...");
  // AJAX request to fetch museums
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4) {
      if (this.status == 200) {
        console.log("Response received:", this.responseText);
        // Parse JSON response and populate dropdown
        var museums = JSON.parse(this.responseText);
        populateDropdown(museums);
      } else {
        console.error("Error fetching museums. Status:", this.status);
      }
    }
  };
  xhr.open("GET", "fetch_museum_dropdown.php", true);
  xhr.send();
}

function populateDropdown(museums) {
  // Populate dropdown with museum names
  var select = document.getElementById("museumDropdown");
  select.innerHTML = ""; // Clear previous options
  museums.forEach(function(museum) {
    var option = document.createElement("option");
    option.value = museum.id; // Assuming museum ID is available
    option.text = museum.name; // Assuming museum name is available
    select.appendChild(option);
  });

  // Show the dropdown
  select.style.display = "block";
}
</script>