// Select the search input and product list container
const inputSearch = document.querySelector('.input-search');
const btnSearch = document.querySelector('.btn-search');
const productList = document.getElementById('product-list');

// Function to perform the product search
function searchProducts(query) {
    fetch(`../modele/DAO/searchProducts.php?query=${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(products => {
            displayProducts(products);
        })
        .catch(error => console.error('Error:', error));
}

// Function to display products
function displayProducts(products) {
    productList.innerHTML = '';  // Clear the current list
    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.innerHTML = `<h3>${product.name}</h3><p>${product.price}</p>`;
        productList.appendChild(productElement);
    });
}

// Event listener for the search button click
btnSearch.addEventListener('click', () => {
    const query = inputSearch.value.trim();
    if (query) {
        searchProducts(query);
    }
});

// Optional: Instant search as the user types (uncomment to enable)
inputSearch.addEventListener('input', () => {
    const query = inputSearch.value.trim();
    if (query.length > 2) {  // Optionally use a minimum length before firing a search
        searchProducts(query);
    }
});