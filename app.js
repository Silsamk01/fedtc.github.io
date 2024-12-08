// Function to toggle visibility of the "Learn More" section in the About Us section
function toggleMoreInfo() {
    const moreInfo = document.getElementById("more-info");
    if (moreInfo.style.display === "block") {
        moreInfo.style.display = "none";
    } else {
        moreInfo.style.display = "block";
    }
}


// Counter function to animate numbers
window.onload = function() {
    let counterNumber = document.getElementById('counter-number');
    let targetNumber = 30000;
    let currentNumber = 0;
    let increment = Math.ceil(targetNumber / 200); // Gradually increasing the number
    
    let counterInterval = setInterval(function() {
      currentNumber += increment;
      if (currentNumber >= targetNumber) {
        currentNumber = targetNumber;
        clearInterval(counterInterval);
      }
      counterNumber.innerText = currentNumber.toLocaleString(); // Format number with commas
    }, 30); // Update the number every 30ms for smooth animation
  };