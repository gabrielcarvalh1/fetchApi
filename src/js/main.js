const cep = document.querySelector('#cep');
const nome  = document.querySelector('#nome');
const logradouro = document.querySelector('#logradouro');
const localidade = document.querySelector('#localidade');
const senha = document.querySelector('#senha');
const btn_cadastro = document.querySelector("#btn_cadastro");
const btnDarkTheme = document.querySelector('#btnDarkTheme');
const btnLightTheme = document.querySelector('#btnLightTheme');


cep.addEventListener('blur', (e) => {
    let cepFormated = cep.value.replace('-','');
    const options = {
        method: 'GET',
        headers: {'Content-Type': 'application/json',},
        mode: 'cors'
    };
    fetch(`https://viacep.com.br/ws/${cepFormated}/json/`, options)
        .then(response => response.json())
        .then(dados => {
            printDados(dados);
            converteDados(dados);
        });
});
// O processo é lento mas desistir não acelera

function printDados(dados){
    logradouro.value = dados.logradouro 
    localidade.value = dados.localidade 
};


function converteDados(dados) {
    let arr = [];

    for (let chave in dados) {
        arr.push({ [chave]: dados[chave] });
    }
    console.log(arr)
    console.log(`Rua: ${arr[1].logradouro}, Cidade: ${arr[4].localidade},Bairro ${arr[3].bairro}`);
};
btn_cadastro.addEventListener('click', () => {
    if(cep.value == '' || nome.value == '' || logradouro.value == '' || localidade.value == ''){
        alert('Todos os campos devem ser preenchidos, por gentileza confira novamente ⚠')
    }
});


//Dark theme
btnDarkTheme .addEventListener('click', () => {
    let text = document.querySelectorAll('.text');
    text.forEach( function texts(text){
        text.style.color = '#FFFFFF'
    });

    let main_div = document.querySelector('.main-div')
    main_div.style.backgroundColor = "#4c565de7"

});

//Light Theme

btnLightTheme .addEventListener('click', () => {
    let text = document.querySelectorAll('.text');
    text.forEach( function texts(text){
        text.style.color = '#151515'
    });
  
    let main_div = document.querySelector('.main-div')
    main_div.style.backgroundColor = "#f2f2f2ef"

});