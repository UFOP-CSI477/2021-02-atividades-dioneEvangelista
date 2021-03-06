const data = {
    users: [
        {
          name: 'Dione',
          email: 'admin@example.com',
          password: '1234',
          isAdmin: true,
        },
        {
          name: 'Consumidor1',
          email: 'user@example.com',
          password: '1234',
          isAdmin: false,
        },
        {
            name: 'Consumidor2',
            email: 'user2@example.com',
            password:'1234',
            isAdmin: false,
          },
      ],
    products: [
        {
            _id: '1',
            name: 'Forza Horizon 5',
            category: 'Corrida',
            image: '/images/f1.jpg',
            price: 189.99,
            countInStock: 20,
            rating: 4.5,
            plataform: 'Xbox/Xbox-One series S e X',
            numReviews: 20,
            description: 'Sua maior aventura Horizon te espera! Lidere impressionantes expedições pelo mundo aberto vibrante e em constante evolução nas terras mexicanas. Participe de corridas divertidas e sem limites enquanto pilota centenas dos melhores carros do mundo.',
        },
        {
            _id: '2',
            name: 'GTA V',
            category: 'Ação',
            image: '/images/f2.jpg',
            price: 99.90,
            countInStock: 10,
            rating: 5.0,
            plataform: 'PS3/PS4/Xbox/Xbox-One/Xbox Series S e X',
            numReviews: 50,
            description: 'Entre nas vidas de três criminosos muito diferentes, Michael, Franklin e Trevor, enquanto eles arriscam tudo em uma série de assaltos ousados que podem garantir o resto de suas vidas. Explore o deslumbrante mundo de Los Santos e Blaine County na experiência definitiva de Grand Theft Auto V, apresentando amplas atualizações e melhorias técnicas tanto para jogadores novos quanto para os que estão retornando. Além de distâncias maiores de renderização e melhor resolução, os jogadores podem esperar diversas adições e melhorias.',
        },
        {
            _id: '3',
            name: 'The Witcher 3: Wild Hunt',
            category: 'Aventura',
            image: '/images/f3.jpg',
            price: 60.00,
            countInStock: 5,
            rating: 4.5,
            plataform: 'PS4/Xbox/Xbox-One/Xbox Series S e X',
            numReviews: 30,
            description: 'O lobo está de volta a caça! Enquanto a guerra se desenrola nos Reinos do Norte, você assume o maior contrato de sua vida - rastrear o Filho da Profecia, uma arma viva que pode alterar a forma do mundo.',
        }, {
            _id: '4',
            name: 'The Legend of Zelda: Breath of The Wild',
            category: 'Aventura',
            image: '/images/f4.jpg',
            price: 204.99,
            countInStock: 0,
            rating: 4.8,
            plataform: 'Nintendo Wii/Nintendo Switch',
            numReviews: 20,
            description: 'Esqueça tudo que você sabe sobre os jogos da série The Legend of Zelda. Entre em um mundo de descobertas, exploração e aventura em The Legend of Zelda: Breath of the Wild, o novo jogo da famosa série que veio para romper barreiras. Viaje pelos vastos campos, florestas e montanhas enquanto descobre o que aconteceu com o reino de Hyrule nesta deslumbrante aventura a céu aberto. E agora no Nintendo Switch, a sua jornada tem mais liberdade do que nunca.',
        },
        {
            _id: '5',
            name: 'God of War',
            category: 'Aventura',
            image: '/images/f5.jpg',
            price: 79.90,
            countInStock: 10,
            rating: 5.0,
            plataform: 'PS4',
            numReviews: 40,
            description: 'Com a vingança contra os deuses do Olimpo em um passado distante, Kratos agora vive como um mortal no reino dos deuses e monstros nórdicos. É nesse mundo duro e implacável que ele deve lutar para sobreviver... e ensinar seu filho a fazer o mesmo.',
        },
        {
            _id: '6',
            name: 'The Last of Us: Part II',
            category: 'Ação',
            image: '/images/f6.jpg',
            price: 200.00,
            countInStock: 15,
            rating: 4.5,
            plataform: 'PS4',
            numReviews: 25,
            description: 'Sobreviva a um mundo devastado! Uma história complexa e emocionante, vivencie os conflitos morais cada vez maiores criados pela busca implacável de Ellie por vingança. O ciclo de violência deixado em seu caminho desafiará suas noções de certo ou errado, bem ou mal e herói ou vilão.',
        },
        {
            _id: '7',
            name: 'Hades',
            category: 'Ação',
            image: '/images/f7.jpg',
            price: 135.99,
            countInStock: 12,
            rating: 4.2,
            plataform: 'PS4/Xbox/Xbox-One/Xbox Series S e X',
            numReviews: 15,
            description: 'Desafie o deus dos mortos enquanto você batalha para sair do Submundo neste jogo roguelike dos mesmos criadores de Bastion, Transistor e Pyre.',
        },
        {
            _id: '8',
            name: 'Celeste',
            category: 'Plataforma',
            image: '/images/f8.jpg',
            price: 65.00,
            countInStock: 25,
            rating: 3.0,
            plataform: 'PS4/Xbox/Xbox-One/Xbox Series S e X',
            numReviews: 15,
            description: 'Ajude Madeline a enfrentar seus demônios internos em sua jornada até o topo da Montanha Celeste, nesse jogo de plataforma super afiado dos criadores de TowerFall. Desbrave centenas de desafios meticulosos, descubra segredos complicados e desvende o mistério da montanha.',
        },
        {
            _id: '9',
            name: 'Halo Infinite',
            category: 'FPS',
            image: '/images/f9.jpg',
            price: 250.00,
            countInStock: 15,
            rating: 4.5,
            plataform: 'Xbox/Xbox-One/Xbox Series S e X',
            numReviews: 20,
            description: 'A lendária série Halo está de volta com a campanha Master Chief mais ampla de todos os tempos e uma experiência multijogador gratuita e inovadora.',
        },
        {
            _id: '10',
            name: 'Persona 5',
            category: 'JRPG',
            image: '/images/f10.jpg',
            price: 60.00,
            countInStock: 8,
            rating: 4.9,
            plataform: 'PS3/PS4',
            numReviews: 10,
            description: 'Para a alegria dos fãs de RPG! Descubra a história picaresca de uma jovem equipe de ladrões fantasmas nesta mais recente adição à aclamada série Persona. Durante o dia, aproveite a vida escolar na cidade grande, usando o seu tempo como quiser. Os laços que você formar com as pessoas que você conhecer irão crescer para um grande poder para ajudá-lo a cumprir o seu destino! Depois da escola, use a sua aplicação de celular, Metaverse Navigator para se infiltrar em Palácios--mundos surreais criados a partir de corações de adultos corruptos--e viva a sua vida dupla como um ladrão fantasma. Com o poder de Persona, faça estes criminosos mudarem roubando o Tesouro dos seus distorcidos desejos. Junte-se aos seus novos amigos na luta para reformar a sociedade com o seu prórpio senso de justiça!',
        },
        {
            _id: '11',
            name: 'Mario Odyssey',
            category: 'Plataforma',
            image: '/images/f11.jpg',
            price: 184.99,
            countInStock: 13,
            rating: 5.0,
            plataform: 'Nintendo Switch',
            numReviews: 35,
            description: 'Explore lugares incríveis longe do Reino Cogumelo com o Mario e o novo aliado Cappy em uma imensa aventura 3D ao redor do mundo. Use novas habilidades incríveis – como o poder de capturar e controlar objetos, animais, e inimigos – para coletar Power Moons, ligar a aeronave Odyssey e salvar a princesa Peach de se casar com o Bowser',
        },
        {
            _id: '12',
            name: 'Resident Evil: Village',
            category: 'FPS',
            image: '/images/f12.jpg',
            price: 205.00,
            countInStock: 18,
            rating: 4.0,
            plataform: 'PS4/Xbox/Xbox-One/Xbox Series S e X',
            numReviews: 15,
            description: 'Vivencie o horror de sobrevivência como nunca na 8ª sequência parte da franquia Resident Evil - Resident Evil Village. Com gráficos detalhados, ação intensa em primeira pessoa e uma narrativa primorosa, o terror nunca foi tão realista.',
        },
        {
            _id: '13',
            name: 'Ori and the Blind Forest',
            category: 'Plataforma',
            image: '/images/f13.jpg',
            price: 55.49,
            countInStock: 8,
            rating: 4.2,
            plataform: 'Xbox/Xbox-One/Xbox Series S e X',
            numReviews: 10,
            description: '"Ori and the Blind Forest" conta a história de um jovem órfão destinado a feitos heróicos através de um jogo de plataforma com um visual impressionante.',
        },
        {
            _id: '14',
            name: 'Sekiro: Shadows Die Twice',
            category: 'Ação',
            image: '/images/f14.jpg',
            price: 199.99,
            countInStock: 0,
            rating: 5.0,
            plataform: 'PS4/Xbox/Xbox-One/Xbox Series S e X',
            numReviews: 20,
            description: 'Em Sekiro você é o "lobo de um braço só", um guerreiro desonrado e desfigurado resgatado da beira da morte. Obrigado a proteger um jovem soberano descendente de uma antiga linhagem, você se torna alvo de muitos inimigos cruéis, incluindo o perigoso clã Ashina. Quando o jovem é capturado, nada o deterá em uma perigosa busca para reconquistar sua honra, nem mesmo a própria morte. Explore o período Sengoku do Japão, no final dos anos 1500, um período brutal de conflitos constantes de vida e morte, quando você se depara com inimigos impossíveis em um mundo sombrio e distorcido. Use um arsenal de próteses mortais e poderosas habilidades de ninja, misturando furtividade, combate transversal vertical e corpo a corpo visceral em um confronto sangrento.',
        },
        {
            _id: '15',
            name: 'Civilization VI',
            category: 'Estrategia',
            image: '/images/f15.jpg',
            price: 135.00,
            countInStock: 20,
            rating: 3.5,
            plataform: 'PS4/Xbox/Xbox-One/Xbox Series S e X',
            numReviews: 10,
            description: 'Civilization VI oferece novas maneiras de expandir seu império, avançar sua cultura e competir com os maiores líderes da história para criar uma civilização que irá sobreviver ao tempo. Jogue como um dos vinte líderes históricos, incluindo Pedro II',
        },
    ],
};
export default data;