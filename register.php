<?php
require_once 'php_validation_function.php';
if (isset($_POST['submit'])) {
    $err = [];

    if (verifyForm($_POST, 'Rname')) {

        $name = $_POST["Rname"];
    } else {
        $err['Rname'] = 'Enter your name';
    }
    if (verifyForm($_POST, 'Remail')) {
        $email = $_POST['Remail'];
    } else {
        $err['Remail'] = 'Enter your valid email';
    }

    if (verifyForm($_POST, 'phone')) {
        $phone = $_POST['phone'];
    } else {
        $err['phone'] = 'Enter your valid phone no. ';
    }


    if (!verifyForm($_POST, 'Rcpassword')) {
        $err['Rcpassword'] = "password doesn't match ";
    }

    if (verifyForm($_POST, 'Rpassword') && $_POST['Rpassword'] == $_POST["Rcpassword"]) {
        // $password = $_POST['Rpassword'];
        $T_password = md5($_POST['Rpassword']);
        // print($T_password);
    } else {
        $err['Rpassword'] = 'Enter your valid password';
    }

    if (count($err) == 0) {

        try {
            require_once"include/db.php";
            // $db_name = 'museum';
            // $db_host = 'localhost';
            // $db_username = 'root';
            // $db_password = '';

            // $con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
            $registration_sql =
                "insert into tbl_user(name,email,password,phone,status)values( '".$name."','".$email."','".$T_password."','".$phone."',1)";
            $registration_query = mysqli_query($con, $registration_sql);
             print_r($registration_sql);
             print_r($registration_query);
             header("location:index.php");
        } catch (Exception $e) {
            die('database connection error' . '<br>' . $e->getmessage());
        }
    }
}




?>




<div class="center-1">
    <div class="container-1" id="container2">
        <label for="show" class="close-btn" onclick="toggleR()" id="cut1"><i class="fa fa-times" aria-hidden="true">x</i></label>
        <div class="text">Register Now</div>
        <form action="register.php" method='post' id="signup" name="signup">
            <div class="data-1">
                <label for="Name">Name</label>
                <input type="text" name='Rname' id="Rname">

                <span id="err">
                    <?php if (isset($err['Rname'])) {
                        echo $err['Rname'];
                    }  ?>
                    <div class="space"> </div>
            </div>
            <div class="data-1">
                <label for="Email">Email</label>
                <input type="text" name='Remail' id="Remail">


                <span id="err">
                    <?php if (isset($err['Remail'])) {
                        echo $err['Remail'];
                    }  ?>
                    <div class="space"> </div>
            </div>
            
<div class="data-1">
    <label>Phone</label>
   <br />
    
    <select name="country" id="countrySelect"  style="width:25%; height:33px;" >
        <option value=''>Select Country</option>
    </select>


                <input type="text" name="phone" id="phone" style="overflow:auto; width:65%;" placeholder="">

                <span id="err">
                    <?php if (isset($err['phone'])) {
                        echo $err['phone'];
                    }  ?>
                    <div class="space"> </div>
            </div>
            <div class="data-1">
                <label for="password">Password</label>


                <input type="password" name='Rpassword' id="Rpassword">
                <span name="err_password" id="err">
                    <?php if (isset($err['Rpassword'])) {
                        echo $err['Rpassword'];
                    }  ?>
                    <div class="space"> </div>
            </div>
            <div class="data-1">
                <label for="Password">confirm Password</label>

                <input type="password" name='Rcpassword' id="Rcpassword">
                <span id="err">
                    <?php if (isset($err['Rcpassword'])) {
                        echo $err['Rcpassword'];
                    }  ?>
                    <div class="space"> </div>


            </div>
            <div class="btn1">
                <button type="submit" name="submit">Submit</button>
                <button type="button" onclick="cancelit()">Cancel</button>
                <div class="login" id="login" onclick="toggleL();">Already a member?<a href="#" onclick="toggleL(); cancelit();"> Login now</a></div>
            </>

        </form>
    </div>
</div>



<!--  err message red css -->
<style type="text/css">
    .red-border {
        border: 1px solid red;
    }

    label.error {
        color: red;
    }

    #err {
        color: red;
    }
    .data-1 .small-box-p
   {
    width:10px;
    height:10px;
   }
</style>


<!-- ajax vlidation in login form -->
<script>
    // starting of jquery
    $(document).ready(function() {


        $('#signup').validate({

            rules: {
                Rname: {
                    required: true,
                    maxlength: 10,

                },
                Remail: {
                    required: true,
                    email: true,

                },
                Rpassword: {
                    required: true,
                    minlength: 8,
                },

                Rcpassword: {
                    required: true,
                    minlength: 8,
                    equalto: '#Rpassword',
                    maxlength: 10,



                },
                phone: {
                    required: true,
                    minlength: 9,
                    maxlength: 10,
                    number: true
                },

            },
            messages: {

                Rname: {
                    required: "Enter name",
                    maxlength: "max length is 10 charcters",
                },
                Remail: {
                    required: " email must required",
                    email: " email should  be valid",


                },
                Rpassword: {
                    required: " Enter password",
                    minlength: "password should be at least 8 character",

                },
                Rcpassword: {
                    required: " Enter password",
                    equalto: "password should be match",
                    minlength: "password should be at least 8 character",
                    // maxlength: "max length is 20 ",

                },
                phone: {
                    required: " Enter Phone  is required",
                    minlength: " Enter Phone  Min Length is 10",
                    maxlength: " Enter Phone  Max Length is  15",
                    number: " Enter Phone no  is number",
                },

            },


        });


        // var phone = document.signup.Rcall;


        // $('#call').keyup(function() {
        //     console.log($(this).val());
        //     //     var inputVal = $(this).val();
        //     // var characterReg = /^([1-9]d{10})$/;
        //     // if(!characterReg.test(inputVal)) {
        //     //     $(this).after('<span class="error error-keyup-4">Format xxx-xxx-xxxx</span>');
        //     // }

        // });




    });
    const countries = [
    { name: "United States of America", isoCode: "USA", dialCode: "+1" },
    { name: "Australia", isoCode: "AUS", dialCode: "+61" },
    { name: "Nepal", isoCode: "NEP", dialCode: "+977" },
    { name: "India", isoCode: "IND", dialCode: "+91" },
    { name: "Canada", isoCode: "CA", dialCode: "+1" },
    { name: "China", isoCode: "CHN", dialCode: "+86" }
];

// Populate select dropdown with countries
const countrySelect = document.getElementById("countrySelect");
countries.forEach(country => {
    const option = document.createElement("option");
    option.text = country.name + " (" + country.dialCode + ")";
    option.value = country.dialCode;
    countrySelect.appendChild(option);
});

// Function to get country by dial code
function getCountryByDialCode(dialCode) {
    return countries.find(country => country.dialCode === dialCode);
}


// Event listener to update phone placeholder based on selected country
countrySelect.addEventListener("change", function() {
    const selectedDialCode = this.value;
    const selectedCountry = getCountryByDialCode(selectedDialCode);
    const phoneInput = document.getElementById("phone");
    if (selectedCountry) {
        phoneInput.placeholder = "Enter phone number (e.g. " + selectedCountry.dialCode + " XXX-XXX-XXXX)";
    } else {
        phoneInput.placeholder = "Enter phone number";
    }
});
  // Function to concatenate dial code with phone number
  function updatePhoneNumber() {
            const selectedDialCode = document.getElementById("countrySelect").value;
            const phoneNumber = document.getElementById("phone").value.trim();
            const formattedPhoneNumber = selectedDialCode + phoneNumber;
            document.getElementById("phone").value = formattedPhoneNumber;
        }

        // Event listener to concatenate dial code with phone number when country is selected
        document.getElementById("countrySelect").addEventListener("change", updatePhoneNumber);

        // // Event listener to concatenate dial code with phone number when phone number is entered
        // document.getElementById("phone").addEventListener("input", updatePhoneNumber);

         // Function to update placeholder with selected country's ISO code
         function updatePlaceholder() {
            const selectedOption = document.getElementById("countrySelect").selectedOptions[0];
            const selectedCountry = selectedOption.textContent.trim().split(" ")[1]; // Extract ISO code
            document.getElementById("phone").placeholder = "Enter phone number (e.g. " + selectedCountry + " XXX-XXX-XXXX)";
        }



</script>