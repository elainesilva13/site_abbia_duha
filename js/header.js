$(document).ready(function() {
    adicionaEstrelas()
});


function adicionaEstrelas(){
    for(let delay = 0; delay <= 6; delay+=0.2){
        let novaDiv = document.createElement('div')
        novaDiv.className = 'star'
        var top = Math.floor(Math.random() * 100);
        var left = Math.floor(Math.random() * 100);
        novaDiv.style = `top: ${top}px; left: ${left}%; animation-delay: ${delay}s`;
        novaDiv.innerHTML = '*'
        $('#stars').append(novaDiv)

    }

}