document.addEventListener('DOMContentLoaded', function() {
    console.log('Le DOM est chargé.'); // Log message to console

    // Add click event listener to each section element
    document.querySelectorAll('section').forEach(function(section) {
        section.addEventListener('click', function() {
            alert('Vous avez cliqué sur la section : ' + section.id); // Display alert message
        });
    });


// Function to toggle side menu visibility
function toggleMenu() {
    var sideMenu = document.getElementById('sideMenu');
    sideMenu.classList.toggle('show'); // Toggle the 'show' class
}

    // Select the title element
    const titleElement = document.getElementById('page-title');
    // Get the text content of the title
    const titleText = titleElement.textContent.trim();
    // Clear the text content of the title
    titleElement.textContent = '';
    // Split the title text into an array of characters
    const titleCharacters = titleText.split('');

    // Loop through each character in the title text
    titleCharacters.forEach((char, index) => {
        // Create a span element for the character
        const charSpan = document.createElement('span');
        // Set the text content of the span to the current character
        charSpan.textContent = char;
        // Append the span to the title element
        titleElement.appendChild(charSpan);

        // Set a timeout to display each character with a delay
        setTimeout(() => {
            // Display the current character by removing the 'hidden' class
            charSpan.classList.remove('hidden');
        }, 100 * index); // Adjust the delay as needed (100 milliseconds here)
    });

    // Toggle the side menu visibility
    const sideMenu = document.getElementById('sideMenu');
    const menuBtn = document.getElementById('menu-btn');
    menuBtn.addEventListener('click', function() {
        sideMenu.classList.toggle('show');
    });

    // Display text with color transition
    const introText = document.getElementById('intro-text');
    introText.textContent = ''; // Clear the text initially
    const text = "Welcome to my website!";
    const colors = ["#cbd5e0", "#60a5fa"]; // Light mode text and link color
    let colorIndex = 0; // Start with the first color

    // Loop through each letter in the text
    for (let i = 0; i < text.length; i++) {
        // Create a span element for each letter
        const letterSpan = document.createElement('span');
        letterSpan.textContent = text[i];
        
        // Set the color for the letter
        letterSpan.style.color = colors[colorIndex];

        // Append the span to the intro text
        introText.appendChild(letterSpan);

        // Increment color index or reset to 0
        colorIndex = (colorIndex + 1) % colors.length;
    }
});

// Toggle dark/light mode when the switch is clicked
document.getElementById('mode-toggle').addEventListener('change', function() {
    if (this.checked) {
        // Apply dark mode styles
        document.body.classList.add('dark-mode');
    } else {
        // Remove dark mode styles
        document.body.classList.remove('dark-mode');
    }
});



document.getElementById('mode-toggle-btn').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
});

// Add your custom JavaScript code here

function toggleMenu() {
    const sideMenu = document.getElementById('sideMenu');
    if (sideMenu.style.left === '-250px') {
        sideMenu.style.left = '0';
    } else {
        sideMenu.style.left = '-250px';
    }
}
// JavaScript for Mode Toggle
const modeToggle = document.getElementById('mode-toggle');
const modeToggleBtn = document.getElementById('mode-toggle-btn');

modeToggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});



document.addEventListener('DOMContentLoaded', function() {
    // Show the introduction after 20 seconds
    setTimeout(function() {
        document.getElementById('introduction').style.display = 'block';
    }, 20000);

    // Hide the introduction after 25 seconds
    setTimeout(function() {
        document.getElementById('introduction').style.display = 'none';
    }, 25000);
});