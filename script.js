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