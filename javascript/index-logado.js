var botaoCriar = document.getElementById('criar')
var modal = document.getElementById('modal')
var fechar = document.getElementById('fechar')

botaoCriar.onclick = function(){
    modal.style.opacity="1";
    modal.style.top="200px"
};


fechar.onclick = function(){
    modal.style.opacity="0";
    modal.style.top="-150%"
};