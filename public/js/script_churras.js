let inputAdultos = document.getElementById('adultos')
let inputCriancas = document.getElementById('criancas')
let inputDuracao = document.getElementById('duracao')
let inputResultado = document.querySelector('.resultado')
var qtdDuracao = 0


function calcular() {
    let qtdAdultos = parseFloat(inputAdultos.value)
    let qtdCriancas = parseFloat(inputCriancas.value)
    qtdDuracao = parseFloat(inputDuracao.value)

    let qtdCarne = calcCarne(qtdDuracao) * qtdAdultos + ((calcCarne(qtdDuracao) / 2) * qtdCriancas)
    let qtdCerveja = calcCerveja(qtdDuracao) * qtdAdultos
    let qtdBebidas = calcBebidas(qtdDuracao) * qtdAdultos + ((calcBebidas(qtdDuracao) / 2) * qtdCriancas)

    insereHtml(qtdCarne, qtdCerveja, qtdBebidas)

}

function calcCarne(qtdDuracao) {
    if (qtdDuracao < 6) {
        return 400
    } else {
        return 650
    }
}

function calcCerveja(qtdDuracao) {
    if (qtdDuracao < 6) {
        return 1200
    } else {
        return 2000
    }
}

function calcBebidas(qtdDuracao) {
    if (qtdDuracao < 6) {
        return 1000
    } else {
        return 1500
    }
}

function insereHtml(carne, cerveja, bebidas) {
    inputResultado.innerHTML = `<p>${Math.ceil(carne / 1000)} kg de carne</p>`
    inputResultado.innerHTML += `<p>${Math.ceil(cerveja / 350)} latas de cerveja</p>`
    inputResultado.innerHTML += `<p>${Math.ceil(bebidas / 1000)} litros de bebidas </p>`
}