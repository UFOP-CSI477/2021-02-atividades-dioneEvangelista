# **CSI606-2021-02 - Remoto - Trabalho Final - Resultados**

## *Aluna(o): Dione Willy Evangelista*

--------------

### Resumo

 O trabalho tem o objetivo de aplicar os conhecimentos adquiridos na matéria de Sistemas Web I e conhecimentos prévios para a criação de uma aplicação de uma loja virtual de jogos de nome Shop-Game. A compra de produtos em lojas virtuais, principalmente de jogos já é uma prática comum e que abre margem para a criação de sites intuitivos e que buscam facilitar o processo de compra do consumidor. A aplicação que será desenvolvida tem o intuito de conseguir aplicar funcionalidades básicas, comuns em lojas de e-commerce como Amazon, Magazine Luiza, Mercado Livre entre outros (como Cadastro do usuário, Carrinho de Compras, Criação do Pedido e Histórico do Pedido). Com o desenvolvimento do mesmo foi possível adquirir grandes conhecimentos de desenvolvimento Web e o quão poderosas são as ferramentas e infinitas as possibilidades de aplica-lás para resolução de problemas do dia a dia.
 
 Apresentação do projeto pode ser visualizada pelo Youtube através do link: https://www.youtube.com/watch?v=5hqs_Jpy-RQ

### 1. Funcionalidades implementadas
  - Cadastro de Usuários com credenciais para autenticação na aplicação.
  (Utilizado o JSON Web Token para implementação da autenticação).
  - Edição do perfil dos usuários cadastrados.
  - Criptografia de senha de autenticação para melhor segurança.
  (Utilizado a biblioteca bcrypt.js para registro do password do usuário no banco dde dados de forma criptografada).
  - Carrinho de Compras: Adição e remoção de itens do carrinho de compras com cálculo automático dos valores dos produtos.
  - Histórico de Pedidos realizado pelo usuário e acesso a detalhes dos pedidos realizados anteriormente.
  
### 2. Funcionalidades previstas e não implementadas
  - Implementação de pagamento via integração com o Paypal.

### 3. Outras funcionalidades implementadas
- Uso so EsLint para facilitação da identificação de inconsistências no código (Voltada para manutenção do código pelo desenvolvedor, não para o cliente.)

### 4. Principais desafios e dificuldades
Os principais desafios além da próprio uso dinâmico do react e das funções foi o uso da Redux para controle dos estados, foi necessário consulta e utilização de vídeos explicativos para entender como era realizada a comunicação entre o ACTION, STORE e REDUCER, sendo de dificil compreendimento para usuários inesperientes (como o meu caso, sendo realizadas as implementações gradativamente). 

O principal desafio foi a integração com a API do Paypal que não foi possível realização, a ideia proposta era através de um button chamado pelo script da API do Paypal, redirecionar o usuário para que o mesmo efetua-se o pagamento na plataforma.
As dificuldades foram realizar a chamada da API com os dados de autenticação necessários, por fim foi decidido remover a tentativa de implantação desta funcionalidade do projeto (também devido as limitações de tempo) - Linha 31 do arquivo server.js, pasta backend.

### 5. Instruções para instalação e execução
Node.js, Editor de Texto, MongoDB Compass.
Todos esses softwares tem instaladores (Setups) disponíveis para download gratuitamente:
Link para download do Nodejs: https://nodejs.org/en/download/
Link para download do editor de texto Visual Studio Code (Pode ser utilizado qualquer outro):https://code.visualstudio.com/download
Link para download do MongoDB Compass (banco de dados + interface Compass): https://www.mongodb.com/try/download/compass


Segue em anexo ao projeto na pasta collections as coleções de dados que podem ser inseridas (Import data) no MongoDB Compass, basta criar um banco de dados com o mesmo nome (shop-game) e importar os 3 arquivos para se ter os mesmos dados utilizados no exemplo da apresentação. 
Caso o usuário queira criar um novo banco de dados e as importações basta seguir os passos abaixo pois a utilização da chamada SEED irá criar as collections dentro de um banco de dados (Com o MongoDB Compass já instalado) com o nome já correto (recomendado).

Necessário iniciar o back-end da aplicação no diretório padrão do projeto, executar o comando no terminal:
npm start*
Para verificarmos que o servidor está ativo podemos consultar no navegador através do endereço: http://localhost:5000/
O mesmo exibirá a informação: Server is ready

Posteriormente para inserção dos dados de maneira prática no banco de dados, utilizar o comando no navegador: 
http://localhost:5000/api/users/seed    (Cria a collection users no banco de dados)
http://localhost:5000/api/products/seed (Cria a collection products no banco de dados)

A collection orders são criadas no momento da criação de um pedido na aplicação, não sendo necessário utilizar o comando no navegador.
Os dados dos usuários base e dos produtos base contidos no arquivo data.js serão inseridos no banco de dados.

No diretório do projeto, você pode executar, na pasta frontend:
npm start*
Executa o aplicativo no modo de desenvolvimento.
Abra [http: // localhost: 3000] (http: // localhost: 3000) para visualizá-lo no navegador.

Você pode saber mais na [documentação do aplicativo Criar React] (https://facebook.github.io/create-react-app/docs/getting-started).
Para aprender o React, verifique a [documentação do React] (https://reactjs.org/)
### 6. Referências
Axios (2014). The axios project. Disponível em: <https://axios-http.com >. Acesso em: 04 de abr. 2022.

MongoDB (2021). Mongodb atlas. Disponível em: <https://www.mongodb.com/cloud/atlas >. Acesso em: 08 de abr. 2022.

Redux (2015-2022). Getting Started with Redux. Disponível em: <https://redux.js.org/>. Acesso em: 15 de mar. 2022.
