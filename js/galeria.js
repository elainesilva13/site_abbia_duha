document.addEventListener("DOMContentLoaded", function() {
    const magazine = $('#magazine');

    function initializeMagazine() {
        magazine.turn({
            width: window.innerWidth > 768 ? 1000 : window.innerWidth, 
            height: 600,
            autoCenter: true,
            display: window.innerWidth > 768 ? 'double' : 'single', 
        });
    }

    initializeMagazine();

    window.addEventListener('resize', function() {
        magazine.turn('resize'); 
        initializeMagazine(); 
    });

    const nextPageButton = document.getElementById('next-page');
    const prevPageButton = document.getElementById('prev-page');

    nextPageButton.addEventListener('click', function() {
        magazine.turn("next");
    });

    prevPageButton.addEventListener('click', function() {
        magazine.turn("previous");
    });
});
