
## Prova de Sistemas Web 1 - Sistema de Doação de Alimentos e Agasalhos

Aluno: Dione Willy Evangelista
Matricula: 18.1.8162

Ferramentas utilizadas:
- [Editor de código - Visual Code Studio].
- [Linguagem PHP, HTML, CSS].
- [Framework - Laravel].
- [Banco de dados - SQLite].
- [composer require doctrine/dbal]


## Usuário já cadastrado
Login: admin@example.com
Senha: 2edcbgt6

## Para instalar as ferramentas adicionais (SE NECESSARIO):
- Dbal - composer require doctrine/dbal
- Jetstream - composer require laravel/jetstream
- Livewire - composer require jetstream/livewire
Após a instalação dos dois rodar 
- npm - npm install && npm run dev


## Para adicionar as entidades caso excluir todas:

INSERT INTO entidades (id, nome, bairro, cidade, estado, created_at, updated_at, imgpath)
VALUES
(NULL,'Ação da Cidadania','Santo Cristo','Rio de Janeiro','RJ',NULL,NULL,'/img/entidades/acao_cidadania.jpg'), 
(NULL,'Banco de Alimentos','Perdizes','São Paulo','SP',NULL,NULL,'/img/entidades/bancodealimentos.png'),
(NULL,'G10 Favelas','Paraisopólis','São Paulo','SP',NULL,NULL,'/img/entidades/g10favelas.png'),
(NULL,'Stop Hunger','Alphaville','Barueri','SP',NULL,NULL,'/img/entidades/stophunger.png');

