// scripts.js

// Função para adicionar ícones às redes sociais automaticamente
function addSocialIcons() {
    const socialIcons = document.querySelectorAll('.social-icon');
    socialIcons.forEach(iconLink => {
        const iconClass = iconLink.getAttribute('data-icon');
        const iconElement = document.createElement('i');
        iconElement.className = iconClass;
        iconLink.appendChild(iconElement);
    });
}

// Chame a função para adicionar os ícones assim que a página estiver carregada
document.addEventListener('DOMContentLoaded', () => {
    addSocialIcons();
});

// Função para calcular a idade com base na data de nascimento
function calcularIdade(dataNascimento) {
    const hoje = new Date();
    const dataNasc = new Date(dataNascimento);
    const diff = Math.abs(hoje - dataNasc);
    return Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));
}

const dataNascimento = "2000-02-07";

const idade = calcularIdade(dataNascimento);
document.getElementById("idade").textContent = idade;

function atualizarDataHora() {
    const dataHoraElement = document.getElementById("data-hora");
    const dataHoraAtual = new Date();

    const dataFormatada = dataHoraAtual.toLocaleDateString();
    const horaFormatada = dataHoraAtual.toLocaleTimeString();

    dataHoraElement.innerHTML = `${dataFormatada} - ${horaFormatada}`;
}

// Atualiza a data e a hora a cada segundo (1000 milissegundos)
setInterval(atualizarDataHora, 1000);


