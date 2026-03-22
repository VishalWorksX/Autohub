document.addEventListener("DOMContentLoaded", function() {
    // Array of cities
    const cities = ["Delhi", "Mumbai", "Pune", "Bengluru", "Kolkata", "Chennai", "Hyderabad", "Amdavad", "Indore", "Noida"];
  
    // Select the dropdown element
    const citySelect = document.getElementById("citySelect");
  
    // Populate the dropdown with cities
    cities.forEach(function(city) {
      const option = document.createElement("option");
      option.text = city;
      option.value = city.toLowerCase().replace(/\s+/g, "-"); // Convert city name to lowercase and replace spaces with hyphens
      citySelect.appendChild(option);
    });
  
    // Event listener for when a city is selected
    citySelect.addEventListener("change", function() {
      const selectedCity = citySelect.value;
      if (selectedCity) {
        console.log("Selected city:", selectedCity);
      } else {
        console.log("Please select a city");
      }
    });
  });
  
 //tabs
 function searchCars() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('searchInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("searchList");
  li = ul.getElementsByTagName('li');

  // Clear previous search results
  ul.innerHTML = "";

  // If the search input is not empty
  if (filter) {
      // Show the search list container
      ul.style.display = 'block';
      // Filter the list items
      for (i = 0; i < data.length; i++) {
          txtValue = data[i];
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              // Create a list item for each matching result
              var listItem = document.createElement('li');
              listItem.textContent = txtValue;
              // Open a new window when the item is clicked
              listItem.onclick = function() {
                  window.location.href = "tata/Nexon/Nexon.php"; // Change the URL to the Tata Nexon page
              };
              ul.appendChild(listItem);
          }
      }
  } else {
      // Hide the search list container if the search input is empty
      ul.style.display = 'none';
  }
}


  
  