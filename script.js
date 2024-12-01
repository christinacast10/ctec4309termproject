const accordionBtns = document.querySelectorAll('.accordion-btn');

// Add event listeners to each accordion button
accordionBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    // Toggle the current button's associated content
    const content = btn.nextElementSibling;
    content.style.display = content.style.display === 'block' ? 'none' : 'block';
    
    // Optionally, you can close other open sections if needed:
    // accordionBtns.forEach(otherBtn => {
    //   if (otherBtn !== btn) {
    //     otherBtn.nextElementSibling.style.display = 'none';
    //   }
    // });
  });
});

//updateContentBasedOnLocation('Dallas', 'TX');

// Uncomment the following code for real IP-based location detection:
// IP address API
// fetch('https://api.ipify.org/?format=json')
//   .then(response => response.json())
//   .then(data => {
//     const userIp = data.ip;
//     getLocation(userIp);
//   })
//   .catch(error => console.error('Error fetching IP:', error));

// Fetch Location IP
// function getLocation(ip) {
//   fetch(`https://ipapi.co/${ip}/json/`)
//     .then(response => response.json())
//     .then(data => {
//       const userCity = data.city;
//       const userRegion = data.region;
//       updateContentBasedOnLocation(userCity, userRegion);
//     })
//     .catch(error => console.error('Error fetching location:', error));
// }

// UPDATE CONTENT
//function updateContentBasedOnLocation(city, region) {
  //const heroTitle = document.querySelector('.hero-title');
  //const reviewsSection = document.querySelector('.reviews-section');

  //if (city.toLowerCase() === 'dallas') {
    //heroTitle.textContent = 'Local Moving Services in Dallas';
    //reviewsSection.innerHTML = '<p>Showing reviews for local moves...</p>';
  //} else {
    //heroTitle.textContent = 'Long Distance Moving Services';
    //reviewsSection.innerHTML = '<p>Showing reviews for long-distance moves...</p>';
  //}
//}