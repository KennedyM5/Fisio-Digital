
document.addEventListener("DOMContentLoaded", function () {
 // Defina a variável globalmente
var emmail = document.getElementById("email")
var xhr = new XMLHttpRequest();

xhr.open('GET', '/Fisio_Digital/home/loadUsuario.php', true);

xhr.onload = function () {
    if (xhr.status === 200) {
        // Analise a resposta JSON
        var dados = JSON.parse(xhr.responseText);

        // Agora você pode acessar os dados no JavaScript
        usuario = dados.nome;
        console.log(usuario); // Isso imprimirá o nome do usuário no console

        // Você pode chamar qualquer função que dependa da variável 'usuario' aqui
        //minhaFuncaoQueUsaUsuario();
    } else {
        console.error('Erro na solicitação AJAX');
    }
};

xhr.send();

function minhaFuncaoQueUsaUsuario() {
    emmail.innerHTML = `<p id="email">${usuario}</p>`
}
});

