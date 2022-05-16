var reg_operacoes = [];

//Carrega dados api
function carregarInstAPI() {
  fetch("https://brasilapi.com.br/api/banks/v1")
        .then(response => response.json())
        .then(data => preencherSelectInstituicoes(data)
        )
}

//Cria filhos no select
function preencherSelectInstituicoes(dados) {
  let instituicoes = document.getElementById("instituicao_finan_s");
  for (let index in dados) {
      const { isbp, name  } = dados[index];
      let option = document.createElement("option");
      option.value = isbp;
      option.innerHTML = name;
      instituicoes.appendChild(option);
  }
}

function efetuar() {
  var chave = document.getElementById('chave_pix');
  var valor = document.getElementById('valor_pix');
  var data = document.getElementById('data_pix');
  var tipo_trans = document.getElementById('trans_tipo_s');

  if (chave.value == 0 || valor.value == 0 || data.value == 0) {
    window.alert('Existem campos vazios, preencha todos os campos');
  }
  else {
    const operacao = {
    Tipo: tipo_trans.value,
    Chave: chave.value,
    Valor: valor.value,
    Data: data.value
  }
  reg_operacoes.push(operacao);

  window.alert('Operação efetuada com sucesso!')
  chave.value = "";
  valor.value = "";
  data.value = "";
  }
}

function processar_hist() {

  var soma_pix_enviados = 0;
  var soma_pix_recebidos = 0;

  var saldoFinalEnviado = document.getElementById('saldo_total_enviado');
  var saldoFinalRecebido = document.getElementById('saldo_total_recebido');

  for(i in reg_operacoes){

    if(reg_operacoes[i].Tipo == 'enviar'){
      soma_pix_enviados += Number(reg_operacoes[i].Valor);
      saldoFinalEnviado.innerHTML = `Saldo enviado acumulado: ${soma_pix_enviados}`;
    }
    else if(reg_operacoes[i].Tipo == 'receber') {
      soma_pix_recebidos += Number(reg_operacoes[i].Valor);
      saldoFinalRecebido.innerHTML = `Saldo recebido acumulado: ${soma_pix_recebidos}`;
    }
  }

    // calcula e exibe no título o saldo final do cliente
    var soma = soma_pix_recebidos - soma_pix_enviados;
    saldo_total_movimentado.innerHTML = `Seu saldo atual: R$${soma}`;
    document.getElementById('saldo_total_movimentado').innerHTML= `Total: R$ ${soma}`;
}
