function converter() {
  var input_moeda_1 = document.getElementById('t1-moeda')
  var valor_input_1 = input_moeda_1.options[input_moeda_1.selectedIndex].value
  var input_moeda_2 = document.getElementById('t2-moeda')
  var valor_input_2 = input_moeda_2.options[input_moeda_2.selectedIndex].value
  var valor_moeda_1 = document.getElementById('valor').value

  callAPI(valor_input_1, valor_input_2, valor_moeda_1)
}
function callAPI(input_moeda_1, input_moeda_2, value) {
  var url =
    'https://economia.awesomeapi.com.br/json/daily/' +
    input_moeda_1 +
    '-' +
    input_moeda_2
  console.log(url)
  fetch(url)
    .then(response => response.json())
    .then(
      data => calcularValor(data, value),
      data => console.log(data)
    )
    .catch(error => console.error(error))
}

function calcularValor(data, value) {
  var result = Number(data[0]['high']) * Number(value)
  document.getElementById('valorFinal').value = result.toFixed(3)
}
