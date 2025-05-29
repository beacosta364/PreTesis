// Toggle para los botones de la sidebar
document.querySelectorAll('.element-slidebar-btn').forEach(btn=> {
    btn.addEventListener('click', function() {
        this.parentElement.classList.toggle('active')
    });
});


document.addEventListener('click', function(event) {
    const sidebar = document.querySelector('.slidebar');
    const menuButton = document.querySelector('.menu-hamburger');

    // Si el menú está visible
    if (sidebar.classList.contains('hidden')) {
        // Si el clic fue fuera del sidebar y fuera del botón del menú
        if (!sidebar.contains(event.target) && !menuButton.contains(event.target)) {
            sidebar.classList.remove('hidden');
        }
    }
});

// Mostrar el sidebar cuando se hace clic en el botón
document.querySelector('.menu-hamburger').addEventListener('click', function(e) {
    const sidebar = document.querySelector('.slidebar');
    sidebar.classList.toggle('hidden');
    e.stopPropagation();
});


// Toggle para el menú
//  document.getElementById('menu-toggle').addEventListener('click', function() {
//      let slidebar = document.getElementById('slidebar');
//      slidebar.classList.toggle('hidden');
//  });

