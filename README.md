# PWII-HEITOR-SILVA

Aulas de Programação Web II com os professores João Siles e Ricardo Palhares

  

Olá sou Heitor da Silva Casares, tenho 16 anos, e gosto de Dragon Ball :).

Adoro o João Siles.

  

## Configurando o ambiente GitHub

  

- Entrando na sua conta Git

Primeiramente, entre no site do [GitHub](https://github.com/) e entre com sua conta no site, colocando seu email e senha:

  

![Tela de Login do GitHub](https://samory.sistemasresponsivos.com.br/wp-content/uploads/2020/12/login_github.png)

 Depois de entrar em sua conta Git acesse seu repositório, e depois clique no botão Code e copie o código https:

![Tela de Login do GitHub](https://a.imagem.app/BjI1Wv.png)

 - Configurações do terminal

Agora navegue até o disco local C: e procure pela pasta xampp:

![Tela de Login do GitHub](https://a.imagem.app/BjIElJ.png)

Dentro de xampp procure pela pasta htdocs e entre nela:

![Tela de Login do GitHub](https://a.imagem.app/BjIve1.png)

Agora dentro desta pasta clique com o botão direito do mouse e escolha a opção "Git Bash here" para abrir o terminal Git dentro desta pasta, e em seguida coloque o seguinte comando ao abrir o terminal:

    git clone link https copiado do seu repositório
  
 Após esse comando, coloque esse outro comando:

    cd nome da pasta do seu repositório
Depois desse comando o path do seu terminal deve estar assim:

![Tela de Login do GitHub](https://a.imagem.app/BjIVft.png)

Esse main indica que você está na sua branch principal do seu repositório, mas falta configurar seu **email e nome de usuário** dentro do terminal Git, vamos conferir

 - Configurando o Nome e Email dentro do Terminal Git

Primeiro vamos retirar todos os Nomes e Emails que existem na máquina, segue os comandos abaixo:

    git config --global --unset-all user.name
    git config --global --unset-all user.email

