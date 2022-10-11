
const html = document.querySelector('html')
const body = document.getElementById('body')

//Criando as variáveis para cada cor (tema)
const inputVermelho = document.getElementById('input-vermelho')
const inputVerde = document.getElementById('input-verde')
const inputAzul = document.getElementById('input-azul')
const inputLilas = document.getElementById('input-lilas') 
const inputAmarelo = document.getElementById('input-amarelo')

//Inserindo uma class ao body
body.classList.add('body')

//Inseri a imagem da introdução logo ao carregar o site
document.getElementById('img-prancheta').src ='./img/index/prancheta-verde.png'

//Desabilita o click no botão verde
//Já que esse é o tema nativo do site
inputVerde.disabled = true;

//Funções para mudar as cores do site
function temaVermelho(){
    html.classList.toggle('tema-vermelho')
    html.classList.remove('tema-verde','tema-azul','tema-amarelo','tema-lilas')
    inputVerde.disabled = false, inputVermelho.disabled = true, inputAzul.disabled = false, inputLilas.disabled = false, inputAmarelo.disabled = false
    document.getElementById('img-prancheta').src = './img/index/prancheta-vermelha.png'
}
function temaVerde(){
    html.classList.toggle('tema-verde')
    html.classList.remove('tema-vermelho','tema-azul','tema-amarelo','tema-lilas')
    inputVerde.disabled = true, inputVermelho.disabled = false, inputAzul.disabled = false, inputLilas.disabled = false, inputAmarelo.disabled = false
    document.getElementById('img-prancheta').src = './img/index/prancheta-verde.png'
}
function temaAzul(){
    html.classList.toggle('tema-azul')
    html.classList.remove('tema-verde','tema-vermelho','tema-amarelo','tema-lilas')
    inputVerde.disabled = false, inputVermelho.disabled = false, inputAzul.disabled = true, inputLilas.disabled = false, inputAmarelo.disabled = false
    document.getElementById('img-prancheta').src = './img/index/prancheta-azul.png'
}
function temaAmarelo(){
    html.classList.toggle('tema-amarelo')
    html.classList.remove('tema-verde','tema-vermelho','tema-azul','tema-lilas')
    inputVerde.disabled = false, inputVermelho.disabled = false, inputAzul.disabled = false, inputLilas.disabled = false, inputAmarelo.disabled = true
    document.getElementById('img-prancheta').src = './img/index/prancheta-amarela.png'
}
function temaLilas(){
    html.classList.toggle('tema-lilas')
    html.classList.remove('tema-verde','tema-vermelho','tema-amarelo','tema-azul')
    inputVerde.disabled = false, inputVermelho.disabled = false, inputAzul.disabled = false, inputLilas.disabled = true, inputAmarelo.disabled = false
    document.getElementById('img-prancheta').src = './img/index/prancheta-lilas.png'
}

//Botão do tema Light/dark
const checkboxTema = document.getElementById('input-tema-principal')
//Se houver uma mudança, adicionará a class no html
checkboxTema.addEventListener('change', function(){
    html.classList.toggle('light-mode')
})

//Botão Menu Hamburguer
const checkboxMenu = document.getElementById('menu-hamburguer')
const menuLateral = document.getElementById('menu-lateral')
//se houver mudança, adicionará a classe do menu-aberto
checkboxMenu.addEventListener('change', function(){
    menuLateral.classList.toggle('menu-aberto')
    menuLateral.classList.toggle('animate__fadeInLeft')
})

// Botões dos tópicos do menu
//Criando uma variável para pegar todas as listas dos tópicos
const btnMenu = document.querySelectorAll('.menu-lista li')
btnMenu.forEach (item => {
    //caso houver um clique, acionamos a função scrollToIdOnClick
    item.addEventListener('click', scrollToIdOnClick)
})

//Função para mover o scroll
function scrollToIdOnClick(event){
    event.preventDefault()
    //Pegamos a função getScrollTopHret - 25, para haver uma margem do top da tela
    const positionId = getScrollTopHref(event.target) - 25
    scrollToPosition(positionId)
    checkboxMenu.click()
}

//Função para smooth scroll
function scrollToPosition(positionId){

    //Essa é uma framework de smoth scroll (x, y, velocidade)
    smoothScrollTo(0, positionId, 80)
}

//Função para analizar a posição do elemento em relação a tela
function getScrollTopHref (element){
    const id = element.getAttribute('href')
    return document.querySelector(id).offsetTop
}

//Função para scroll smooth (todos os navegadores) (framework)
function smoothScrollTo(endX, endY, duration) {
    const startX = window.scrollX || window.pageXOffset;
    const startY = window.scrollY || window.pageYOffset;
    const distanceX = endX - startX;
    const distanceY = endY - startY;
    const startTime = new Date().getTime();
  
    duration = typeof duration !== 'undefined' ? duration : 400;
  
    // Easing function
    const easeInOutQuart = (time, from, distance, duration) => {
      if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
      return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
    };
  
    const timer = setInterval(() => {
      const time = new Date().getTime() - startTime;
      const newX = easeInOutQuart(time, startX, distanceX, duration);
      const newY = easeInOutQuart(time, startY, distanceY, duration);
      if (time >= duration) {
        clearInterval(timer);
      }
      window.scroll(newX, newY);
    }, 1000 / 60); // 60 fps
  };

//botão scroll X
//variavel para pegar os botoes das setas
const btdireita = document.getElementById('botao-seta-direita')
const btesquerda = document.getElementById('botao-seta-esquerda')

function slide (direction){
    var container = document.getElementById('container-x');
    scrollCompleted = 0
    var slideVar = setInterval(function(){
        if(direction == 'left'){
            container.scrollLeft -= 100;
            container.dura
        } else {
            container.scrollLeft += 100;
        }
        scrollCompleted += 100;
        if(scrollCompleted >= 100){
            window.clearInterval(slideVar);
        }
    }, 50);
}

//Função para escrever o texto de boas vindas!
function typeWriter(elemento) {

    //dividindo o texto em cada única letra (cortando)
    const textoArray = elemento.innerHTML.split('')
    elemento.innerHTML= '';
    textoArray.forEach((letra, i) => {
        //para cada letra ser escrita no tempo de 100
        //precisamos multplicar cada letra(i) vezes 100
        setTimeout(() =>  elemento.innerHTML += letra, 100 * i)
    })
}

//Aplicando a função de escrita(tupeWrite) na class especificada
const titulo = document.querySelector('.capa h1')
console.log (titulo)
 typeWriter(titulo)


//Variável para pegar a animação conforme scroll
const dataAnimacao=document.querySelectorAll('[data-animacao]')

//Animação conforme scroll
function animacaoScroll(){
    //Pegando o tamnho da tela, altura x 3/4 
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4)  
    dataAnimacao.forEach(function(element){
        //Se a altura do elemento for maior que nosso resultado anterior adicionamos a class
        if((windowTop)>element.offsetTop){
            element.classList.add('animacao')
        }else{
            element.classList.remove('animacao')
        }
    })
}
window.addEventListener('scroll', function(){
    animacaoScroll()
})
