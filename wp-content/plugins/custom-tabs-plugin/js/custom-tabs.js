// making the tab link clickable and reloaing the same component
document.addEventListener('DOMContentLoaded', function() {
  var tabLinks = document.querySelectorAll('.tab-link');
  var tabContents = document.querySelectorAll('.tab-content');

  tabLinks.forEach(function(link) {
      link.addEventListener('click', function(event) {
          // event.preventDefault();

          // Remove active class from all tab links and contents
          tabLinks.forEach(function(link) {
              link.classList.remove('active');
          });
          tabContents.forEach(function(content) {
              content.style.display = 'none';
          });

          // Add active class to the clicked tab link
          this.classList.add('active');

          // Display the corresponding tab content
          var targetContentId = this.getAttribute('href').substring(1); // Remove the #
          var targetContent = document.getElementById(targetContentId);
          if (targetContent) {
              targetContent.style.display = 'block';
          }
      });
  });
});

