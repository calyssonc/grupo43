
<p align="center">
  <img alt="GitHub" src="https://img.shields.io/github/license/calyssonc/grupo43">
  
 
</p>
<h1 align="center">
    <img alt="Escodoa_Banner" title="Escodoa_Banner" src="public\image\Banner_inicial.jpg" />
</h1>

<h4 align="center"> 
	🚧  Escodoa ♻️ Em construção 🚀 🚧
</h4>

<p align="center">
 <a href="#-sobre-o-projeto">Sobre</a> •
 <a href="#-funcionalidades">Funcionalidades</a> •
 <a href="#-layout">Layout</a> • 
 <a href="#-como-executar-o-projeto">Como executar</a> • 
 <a href="#-tecnologias">Tecnologias</a> • 
 <a href="#-contribuidores">Contribuidores</a> • 
 <a href="#-autor">Autor</a> • 
 <a href="#user-content--licença">Licença</a>
</p>


## 💻 Sobre o projeto

♻️  A Escodoa é uma aplicação WEB criada para ajudar crianças com necessidade de material escolar, com a iniciativa de doações desses materiais em carência.

 A aplicação consiste em, a escola e o responsável pela criança, se cadastrarem na plataforma e após isso o responsável pela criança irá selecionar os  materiais em carência. O doador anônimo ou não pode ir ate o perfil da escola, escolher a criança, ver sua necessidade e escolher oque doar . 


Projeto desenvolvido durante a **Season 1 Online 2021 do PROGRAMA DE FORMAÇÃO GRUPO FCAMARA** oferecida pela [FCamara](https://www.fcamara.com.br/).
O Programa de formação é uma experiência online que dura 2 semanas, e tem como  objetivo formar pessoas, não apenas técnicos, pois a Fcamara acredita no capital humano.

---

## ⚙️ Funcionalidades

- [x] Escolas, responsáveis e doadores podem se cadastrar na plataforma web.
  - [x] o doador Podem pesquisar a escolas.
  - [x] O doador pode escolher crianças para fazerem a doação.
  - [x] Escolas podem se cadastrar.
  - [ ] Escolas podem colocar sua lista de materiais.
  - [ ] Filtro por localidade(Facilita para o doador).
    
---

## 🎨 Layout

O layout da aplicação está disponível no Figma:

<a href="https://www.figma.com/file/3ICXPDFiph0syb2LbamKxE/Hackathon?node-id=127%3A1551">
  <img alt="Made by Grupo 43" src="https://img.shields.io/badge/Acessar%20Layout%20-Figma-%2304D361">
</a>


### Mobile 
🚧 Em desenvolvimento 🚧

<p align="top"style="display: flex; align-items: flex-start; justify-content: center;">
  <img alt="Mobile_Index" title="Mobile_Index" src="public\image\mobile_Index.png"width="150" >

  <img alt="Mobile_Perfil_Doador" title="Mobile_Perfil_Doador" src="public\image\mobile_Perfil_Doador.png" width="162px">

   <img alt="mobile_Perfil_Escola" title="mobile_Perfil_Escola" src="public\image\mobile_Perfil_Escola.png" width="170px"> 

<img alt="mobile_Perfil_Beneficiado" title="mobile_Perfil_Beneficiado" src="public\image\mobile_Perfil_Beneficiado.png" width="170px"> 

</p>

### Web

🚧 Em desenvolvimento 🚧

<p align="center" style="display: flex; align-items: flex-start; justify-content: center;">

  <img alt="Perfil_Escola" title="Perfil_Escola" src="public\image\Perfil_Escola.png" width="400px">

  <img alt="Perfil_Beneficiado" title="Perfil_Beneficiado" src="public\image\Perfil_Beneficiado.png" width="400px" >

  <img alt="Perfil_Doador" title="Perfil_Doador" src="public\image\Perfil_Doador.png" width="400px" >
</p>

---

## 🚀 Como executar o projeto

Este projeto é divido em três partes:
1. Backend (pasta server) 
2. Frontend (pasta web)
3. Mobile (Pagina Web Responsiva)

💡Tanto o Frontend quanto o Mobile precisam que o Backend esteja sendo executado para funcionar.

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Node.js](https://nodejs.org/en/). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

#### 🎲 Rodando o Backend (servidor)

```bash

# Clone este repositório
$ git clone git@github.com:tgmarinho/README-Escodoa.git

# Acesse a pasta do projeto no terminal/cmd
$ cd README-Escodoa

# Vá para a pasta server
$ cd server

# Instale as dependências
$ npm install

# Execute a aplicação em modo de desenvolvimento
$ npm run dev:server

# O servidor inciará na porta:3333 - acesse http://localhost:3333 

```
<p align="center">
  <a href="https://github.com/tgmarinho/README-Escodoa/blob/master/Insomnia_API_Escodoajson.json" target="_blank"><img src="https://insomnia.rest/images/run.svg" alt="Run in Insomnia"></a>
</p>


#### 🧭 Rodando a aplicação web (Frontend)

```bash

# Clone este repositório
$ git clone git@github.com:tgmarinho/README-Escodoa.git

# Acesse a pasta do projeto no seu terminal/cmd
$ cd README-Escodoa

# Vá para a pasta da aplicação Front End
$ cd web

# Instale as dependências
$ npm install

# Execute a aplicação em modo de desenvolvimento
$ npm run start

# A aplicação será aberta na porta:3000 - acesse http://localhost:3000

```

---

## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

#### **Website**  ([React](https://reactjs.org/)  +  [TypeScript](https://www.typescriptlang.org/))

-   **[React Router Dom](https://github.com/ReactTraining/react-router/tree/master/packages/react-router-dom)**
-   **[React Icons](https://react-icons.github.io/react-icons/)**
-   **[Axios](https://github.com/axios/axios)**
-   **[Leaflet](https://react-leaflet.js.org/en/)**
-   **[React Leaflet](https://react-leaflet.js.org/)**
-   **[React Dropzone](https://github.com/react-dropzone/react-dropzone)**

> Veja o arquivo  [package.json](https://github.com/tgmarinho/README-Escodoa/blob/master/web/package.json)

#### [](https://github.com/tgmarinho/Escodoa#server-nodejs--typescript)**Server**  ([NodeJS](https://nodejs.org/en/)  +  [TypeScript](https://www.typescriptlang.org/))

-   **[Express](https://expressjs.com/)**
-   **[CORS](https://expressjs.com/en/resources/middleware/cors.html)**
-   **[KnexJS](http://knexjs.org/)**
-   **[SQLite](https://github.com/mapbox/node-sqlite3)**
-   **[ts-node](https://github.com/TypeStrong/ts-node)**
-   **[dotENV](https://github.com/motdotla/dotenv)**
-   **[Multer](https://github.com/expressjs/multer)**
-   **[Celebrate](https://github.com/arb/celebrate)**
-   **[Joi](https://github.com/hapijs/joi)**

> Veja o arquivo  [package.json](https://github.com/tgmarinho/README-Escodoa/blob/master/server/package.json)

#### [](https://github.com/tgmarinho/Escodoa#mobile-react-native--typescript)**Mobile**  ([React Native](http://www.reactnative.com/)  +  [TypeScript](https://www.typescriptlang.org/))

-   **[Expo](https://expo.io/)**
-   **[Expo Google Fonts](https://github.com/expo/google-fonts)**
-   **[React Navigation](https://reactnavigation.org/)**
-   **[React Native Maps](https://github.com/react-native-community/react-native-maps)**
-   **[Expo Constants](https://docs.expo.io/versions/latest/sdk/constants/)**
-   **[React Native SVG](https://github.com/react-native-community/react-native-svg)**
-   **[Axios](https://github.com/axios/axios)**
-   **[Expo Location](https://docs.expo.io/versions/latest/sdk/location/)**
-   **[Expo Mail Composer](https://docs.expo.io/versions/latest/sdk/mail-composer/)**

> Veja o arquivo  [package.json](https://github.com/tgmarinho/README-Escodoa/blob/master/mobile/package.json)

#### [](https://github.com/tgmarinho/Escodoa#utilit%C3%A1rios)**Utilitários**

-   Protótipo:  **[Figma](https://www.figma.com/)**  →  **[Protótipo (Escodoa)](https://www.figma.com/file/3ICXPDFiph0syb2LbamKxE/Hackathon?node-id=127%3A1551)**
-   API:  **[IBGE API](https://servicodados.ibge.gov.br/api/docs/localidades?versao=1)**  →  **[API de UFs](https://servicodados.ibge.gov.br/api/docs/localidades?versao=1#api-UFs-estadosGet)**,  **[API de Municípios](https://servicodados.ibge.gov.br/api/docs/localidades?versao=1#api-Municipios-estadosUFMunicipiosGet)**
-   Maps:  **[Leaflet](https://react-leaflet.js.org/en/)**
-   Editor:  **[Visual Studio Code](https://code.visualstudio.com/)**  → Extensions:  **[SQLite](https://marketplace.visualstudio.com/items?itemName=alexcvzz.vscode-sqlite)**
-   Markdown:  **[StackEdit](https://stackedit.io/)**,  **[Markdown Emoji](https://gist.github.com/rxaviers/7360908)**
-   Commit Conventional:  **[Commitlint](https://github.com/conventional-changelog/commitlint)**
-   Teste de API:  **[Insomnia](https://insomnia.rest/)**
-   Ícones:  **[Feather Icons](https://feathericons.com/)**,  **[Font Awesome](https://fontawesome.com/)**
-   Fontes:  **[Ubuntu](https://fonts.google.com/specimen/Ubuntu)**,  **[Roboto](https://fonts.google.com/specimen/Roboto)**


---

## 👨‍💻 Autores
<table>
  <tr>
    <td align="center"><a href="https://www.linkedin.com/in/kayller-kaique/"><img style="border-radius: 50%;" src="public\image\Autores\Kayller.jpeg" width="100px;" alt=""/><br /><sub><b>Kayller Kaique</b></sub></a><br /><a href="https://www.linkedin.com/in/kayller-kaique/" title="Kayller_Perfil">👨‍🚀</a></td>
    <td align="center"><a href="https://www.linkedin.com/in/alyssondesenvolvimentoandroid/"><img style="border-radius: 50%;" src="public\image\Autores\Cicero.png" width="100px;" alt=""/><br /><sub><b>Cícero Alysson</b></sub></a><br /><a href="https://www.linkedin.com/in/alyssondesenvolvimentoandroid/" title="Cicero_Perfil">👨‍🚀</a></td>
    <td align="center"><a href="https://www.linkedin.com/in/dafne-vasques-970175147/"><img style="border-radius: 50%;" src="public\image\Autores\Dafne.png" width="110px;" alt=""/><br /><sub><b>Dafne Vasques</b></sub></a><br /><a href="https://www.linkedin.com/in/dafne-vasques-970175147/" title="Dafne_Perfil">👨‍🚀</a>  <a href="https://www.linkedin.com/in/dafne-vasques-970175147/"</a></td> 
    <td align="center"><a href="https://www.linkedin.com/in/carlos-eduardo-martins-filho-8a38b3174/"><img style="border-radius: 50%;" src="public\image\Autores\Kadu.png" width="90px;" alt=""/><br /><sub><b>Carlos Eduardo</b></sub></a><br /><a href="https://www.linkedin.com/in/carlos-eduardo-martins-filho-8a38b3174/" title="Carlos_Perfil">👨‍🚀</a></td>
    <td align="center"><a href="https://www.linkedin.com/in/yan-phillipe-silva-de-barros-820aa1ba/"><img style="border-radius: 50%;" src="public\image\Autores\Yan.png" width="105px;" alt=""/><br /><sub><b>Yan Phillipe</b></sub></a><br /><a href="https://www.linkedin.com/in/yan-phillipe-silva-de-barros-820aa1ba/" title="Yan_Perfil">🚀</a></td>
    <td align="center"><a href="https://www.linkedin.com/in/guydo-ventura-b7b60520a/"><img style="border-radius: 50%;" src="public\image\Autores\Guydo Ventura.png" width="100px;" alt=""/><br /><sub><b>Guydo Ventura</b></sub></a><br /><a href="https://www.linkedin.com/in/guydo-ventura-b7b60520a/" title="Guydo_Perfil">🚀</a></td>
    
  </tr>
</table>


## 📝 Licença

Este projeto esta sobe a licença [MIT](./LICENSE).

---

🧡 Nós somos aqueles que deixam o dia mais brilhante. 🧡 