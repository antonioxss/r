console.log("Script externo executando...");
var div = document.createElement('div');
div.innerHTML = "<h1>Olá, mundo!</h1>";
div.style.position = 'absolute';
div.style.top = '0';
div.style.left = '0';
div.style.zIndex = '9999';
document.body.appendChild(div);
console.log("Elemento adicionado ao DOM!");
