document.addEventListener('DOMContentLoaded', function () {
    const categories = document.querySelectorAll('.category');

    document.addEventListener('click', function (event) {
        const target = event.target;

        // Check if the clicked element is a dropdown toggle
        if (target.classList.contains('dropdown-toggle')) {
            const dropdownMenu = target.nextElementSibling;

            // Toggle the 'show' class on the dropdown menu
            dropdownMenu.classList.toggle('show');
        } else {
            // Hide all dropdown menus when clicking outside of them
            categories.forEach(category => {
                const dropdownMenu = category.querySelector('.dropdown-menu');
                if (dropdownMenu && !category.contains(target)) {
                    dropdownMenu.classList.remove('show');
                }
            });
        }
    });

    categories.forEach(category => {
        category.addEventListener('click', () => {
            categories.forEach(cat => cat.classList.remove('selected'));
            category.classList.add('selected');
        });
    });
});
