// Search functionality for categories
document.getElementById('search').addEventListener('keyup', function() {
    var query = this.value.toLowerCase();
    var categories = document.querySelectorAll('.category');

    categories.forEach(function(category) {
        var categoryName = category.querySelector('p').innerText.toLowerCase();
        if (categoryName.includes(query)) {
            category.style.display = 'block';
        } else {
            category.style.display = 'none';
        }
    });
});