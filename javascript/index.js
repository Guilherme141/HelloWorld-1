var imagens = document.getElementById('imgs');
var imagem1 = document.getElementById('img');
var imagem2 = document.getElementById('img2');
var imagem3 = document.getElementById('img3')

var contador = 1;

function apresentacaoImagens(){
    if (contador === 1){

        imagem1.style.transform = 'translate(-300px,0px)' // Joga imagem para o lado
        imagem1.style.opacity = '0'

        imagem2.style.transform = 'translate(-30px,-30px)'
        imagem2.classList.add('apareceImg2')

        imagem3.style.transform = 'translate(-30px,-30px)'

        contador += 1 
    }else if(contador === 2){
        imagem1.style.transform = 'translate(0px)'
        imagem2.style.transform = 'translate(-300px,-30px)' // Joga imagem para o lado
        imagem2.style.opacity = '0'

        imagem3.style.transform = 'translate(-60px,-60px)'
        imagem3.classList.add('apareceImg3')

        contador += 1
    }else if(contador === 3){
        imagem2.style.transform = 'translate(0px)'
        imagem3.style.transform = 'translate(-300px,-60px)' // Joga imagem para o lado
        imagem3.style.opacity = '0'                    
        imagem2.classList.remove('apareceImg2')
       
        setTimeout(() =>{
            imagem3.classList.remove('apareceImg3')
            imagem3.style.transform = 'translate(0px)'
    
            setTimeout(() => {
                imagem1.style.opacity = '1'
                imagem2.style.opacity = '1'
                imagem3.style.opacity = '1'
            },450)
    
            contador = 1
        },450)      
    }
}   

setInterval(apresentacaoImagens,3000)



