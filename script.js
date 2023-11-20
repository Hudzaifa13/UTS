document.addEventListener("DOMContentLoaded", function () {
    const cartIcon = document.querySelector(".shopping");
    const quantityElements = document.querySelectorAll(".quantity");
    const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");

    let orderQuantities = Array.from({ length: quantityElements.length }, () => 0);

    // Sidebar elements
    const sidebar = document.querySelector(".sidebar");
    const cartItemsList = document.querySelector(".cart-items");

    function updateCartDisplay(index) {
        quantityElements[index].textContent = orderQuantities[index];
        updateSidebar();
    }

    function addToCart(index) {
        orderQuantities[index]++;
        updateCartDisplay(index);
    }

    function updateSidebar() {
        // Clear existing items
        cartItemsList.innerHTML = "";

        // Display items in the sidebar
        orderQuantities.forEach((quantity, index) => {
            if (quantity > 0) {
                const listItem = document.createElement("li");
                listItem.textContent = `Item ${index + 1}: ${quantity}`;
                cartItemsList.appendChild(listItem);
            }
        });

        // Show/hide the sidebar based on the total quantity
        const totalQuantity = orderQuantities.reduce((total, quantity) => total + quantity, 0);
        sidebar.style.display = totalQuantity > 0 ? "block" : "none";
    }

    addToCartButtons.forEach((button, index) => {
        button.addEventListener("click", () => addToCart(index));
    });

    // Close sidebar when clicking outside of it
    document.addEventListener("click", function (event) {
        if (!sidebar.contains(event.target) && event.target !== cartIcon) {
            sidebar.style.display = "none";
        }
    });

    // Open sidebar when clicking on the cart icon
    cartIcon.addEventListener("click", function () {
        sidebar.style.display = "block";
    });
});
