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
