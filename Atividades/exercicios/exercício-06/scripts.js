var pessoa;
function Pessoa(pnome,snome,rua,bairro,cidade,estado,tel,email,inputfile)
{
  this.pnome=pnome;
  this.snome=snome;
  this.rua=rua;
  this.bairro=bairro;
  this.cidade=cidade;
  this.estado=estado;
  this.email=email;
  this.tel=tel;
  this.inputfile=inputfile;
}

function preencheDados(){
  var p = new Pessoa;
  p.pnome= document.getElementById("pnome").value;
  p.snome= document.getElementById("snome").value;
  p.rua= document.getElementById("rua").value;
  p.bairro= document.getElementById("bairro").value;
  p.cidade= document.getElementById("cidade").value;
  p.estado= document.getElementById("estado").value;
  p.email= document.getElementById("email").value;
  p.tel= document.getElementById("tel").value;
  p.inputfile= document.getElementById("inputfile").value;

if(p.pnome == "" || p.snome== "" || p.rua== "" || p.bairro== "" || p.cidade== "" ||p.estado== "" ||p.inputfile== "")
window.alert("Preencher dados corretamente, algum campo está vazio")
else
  window.alert("Dados preenchidos com sucesso!")
}