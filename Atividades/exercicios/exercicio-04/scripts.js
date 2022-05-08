function Usuario(nome, sobrenome, idade, logs, bairro, cidade){
  this.nome=nome;
  this.sobrenome=sobrenome;
  this.idade=idade;
  this.logs=logs;
  this.bairro=bairro;
  this.cidade=cidade;
}

  function carregarDadosForm(){
    const nome = document.form_dados.nome.value;
    const sobrenome = document.form_dados.sobrenome.value;
    const idade = document.form_dados.idade.value;
    const rua = document.form_dados.rua.value;
    const bairro = document.form_dados.bairro.value;
    const cidade = document.form_dados.cidade.value;

    const usuario = new Usuario(nome,sobrenome,idade, rua, bairro, cidade);
    console.log(usuario);
  }

  let id;
function changeDate()
{
document.getElementById("changedate").innerHTML= `<h2> ${Date()} </h2>`;
}
function timeDate(){
id=setInterval(changeDate);
}
function stopDate(){
  clearInterval(id);
}

