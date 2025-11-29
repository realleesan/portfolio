document.addEventListener('DOMContentLoaded', function() {
    // Get all filter buttons and project cards
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    // Function to clean up duplicate status tags
    function cleanupStatusTags() {
        document.querySelectorAll('.project-card').forEach(card => {
            // Get all status elements in this card
            const statusElements = card.querySelectorAll('.project-status');
            
            // If there are multiple status elements, keep only the first one
            if (statusElements.length > 1) {
                for (let i = 1; i < statusElements.length; i++) {
                    statusElements[i].remove();
                }
            }
            
            // Make sure the status is positioned correctly
            const status = card.querySelector('.project-status');
            if (status && status.parentElement !== card) {
                card.insertBefore(status, card.firstChild);
            }
        });
    }

    // Add click event listener to each filter button
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            button.classList.add('active');
            
            // Get the filter value from data-filter attribute
            const filterValue = button.getAttribute('data-filter');
            
            // Filter projects
            projectCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'block';
                    // Add animation class
                    card.style.animation = 'fadeIn 0.5s ease forwards';
                } else {
                    // Hide cards that don't match the filter
                    card.style.animation = 'fadeOut 0.3s ease forwards';
                    // After animation completes, set display to none
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 250);
                }
            });
            
            // Clean up status tags after filtering
            setTimeout(cleanupStatusTags, 300);
        });
    });

    // Add animation styles dynamically
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeOut {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(20px); }
        }
    `;
    document.head.appendChild(style);
    
    // Initial cleanup
    cleanupStatusTags();
});
