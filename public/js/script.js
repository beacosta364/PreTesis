// Toggle para los botones de la sidebar
document.querySelectorAll('.element-slidebar-btn').forEach(btn=> {
    btn.addEventListener('click', function() {
        this.parentElement.classList.toggle('active')
    });
});

// Toggle para el menú
 document.getElementById('menu-toggle').addEventListener('click', function() {
     let slidebar = document.getElementById('slidebar');
     slidebar.classList.toggle('hidden');
 });