
<h1 align="center">
<a href="http://rafaux.com/jobs/doaup/public/dashboard">
   📚Doaup!📚
</h1>



<h1 align="center">
    <img alt="Doaup_Banner" title="Doaup_Banner" src="public\image\Banner_inicial.jpg" />
</h1>

---

<h4 align="center"> 
  <a href="http://rafaux.com/jobs/doaup/public/dashboard">
	🚧  Em construção 🚧
</h4>

<p align="center">
 <a href="#-Sobre-o-projeto">Sobre</a> •
 <a href="#%EF%B8%8F-funcionalidades">Funcionalidades</a> •
 <a href="#-Layout">Layout</a> • 
 <a href="#-Como-executar-o-projeto">Como executar</a> • 
 <a href="#-Tecnologias">Tecnologias</a> • 
 <a href="#-Autores">Autores</a> • 
 <a href="#user-content--licença">Licença</a>
</p>

---

## 💻 Sobre o projeto

♻️  A Doaup é uma aplicação WEB criada para ajudar crianças com necessidade de material escolar, com a iniciativa de doações desses materiais em carência.

 A aplicação consiste em, a escola e o responsável pela criança, se cadastrarem na plataforma e após isso o responsável pela criança irá selecionar os  materiais em carência. O doador anônimo ou não pode ir ate o perfil da escola, escolher a criança, ver sua necessidade e escolher oque doar . 


Projeto desenvolvido durante a **Season 1 Online 2021 do PROGRAMA DE FORMAÇÃO GRUPO FCAMARA** oferecida pela [FCamara](https://www.fcamara.com.br/).
O Programa de formação é uma experiência online que dura 2 semanas, e tem como  objetivo formar pessoas, não apenas técnicos, pois a Fcamara acredita no capital humano.

---

## ⚙️ Funcionalidades

- [x] Escolas, responsáveis e doadores podem se cadastrar na plataforma web.
  - [x] o
  O doador pode pesquisar a escolas.
  - [x] O doador pode escolher crianças para fazerem a doação.
  - [x] Escolas podem se cadastrar.
  - [x] Escolas podem colocar sua lista de materiais.
  - [x] Filtro por localidade(Facilita para o doador).
  - [ ] Gamificação de Xp para doadores. 

---

## 🎨 Layout

O layout da aplicação está disponível no Figma:

<a href="https://www.figma.com/file/3ICXPDFiph0syb2LbamKxE/Hackathon?node-id=127%3A1551">
  <img alt="Made by Grupo 43" src="https://img.shields.io/badge/Acessar%20Layout%20-Figma-%2304D361?color=orange&style=plastic">
</a>


### Mobile (Responsividade)
🚧 Em desenvolvimento 🚧

<p align="top"style="display: flex; align-items: flex-start; justify-content: center;">
  <img alt="Mobile_Index" title="Mobile_Index" src="public\image\MobileDoaup.gif"width="200" >


</p>

### Web

🚧 Em desenvolvimento 🚧

<p align="center" style="display: flex; align-items: flex-start; justify-content: center;">

  <img alt="Perfil_Escola" title="Perfil_Escola" src="public\image\WebDoaup.gif" width="">


---

## 🚀 Como executar o projeto

💡O Frontend precisa que o Backend esteja sendo executado para funcionar.

---

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Xampp](https://www.apachefriends.org/pt_br/index.html) (banco de dados MySQL), [Composer](https://getcomposer.org/) (é uma ferramenta para o gerenciamento de dependências em PHP) e o [GitHub](https://github.com/). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/).

#### 🎲 Rodando o Projeto 

```bash

# Clone este repositório
$ git clone https://github.com/calyssonc/grupo43

# Acesse a pasta do projeto no terminal do seu PC
$ cd grupo43

# Digitar no terminal(Para baixar todas as dependencias do projeto)"Vai demorar um pouco".
$ composer install

# Digitar no terminal
$ copy .env.example .env

# Digitar no terminal
$ php artisan key:generate

# Configurando banco de dados no código.
("Exemplo")
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 ("Caminho do seu banco de dados").
DB_PORT=3306 ("Porta configurada do seu banco de dados").
DB_DATABASE=laravel ("O nome do DB criado").
DB_USERNAME=root ("Configuração pessoal").
DB_PASSWORD= ("Sua senha do banco de dados").

# Digitar no terminal, dentro da pasta do projeto(Cadastrando as tabelas e relacionamentos no DB)
$ php artisan migrate

# Digitar no terminal
php artisan serve

# O servidor inciará na porta:8000 - acesse http://localhost:8000

```


---

## 🛠 Tecnologias

> As seguintes ferramentas foram usadas na construção do projeto:

#### **Website**  ([PHP]()  +  [Blade]() + [Laravel]())

-   **[Laravel](https://laravel.com/)** (Framework).
-   **[tailwindcss](https://tailwindcss.com/)** (Biblioteca de estilos).
-   **[Mysql](https://www.mysql.com/)** (Banco de dados).
-   **[Eloquent](https://laravel.com/docs/5.0/eloquent)** (ORM).

#### **Utilitários**

-   Protótipo:  **[Figma](https://www.figma.com/)**  →  **[Protótipo (Doaup)](https://www.figma.com/file/3ICXPDFiph0syb2LbamKxE/Hackathon?node-id=127%3A1551)**

-   Trello:  **[Trello](https://trello.com/b/CmdF2Q6t/dev)**
-   Editor:  **[Visual Studio Code](https://code.visualstudio.com/)** 
-   Linguagem de marcação: **[Markdown](https://docs.pipz.com/central-de-ajuda/learning-center/guia-basico-de-markdown#open)**
-   Diagramas e UML:  **[Drawio](https://drive.google.com/file/d/1jb0uTJ3C2xzzjFBaJ_n0w4e7omlB2vtf/view?pli=1)**
-   Userflow:  **[Lucidchart](https://lucid.app/lucidchart/52921965-3807-456f-b99e-866596fe45b5/edit?shared=true&page=0_0#)**
-   Ferramenta de teste e documentação de rotas:  **[Postman](https://documenter.getpostman.com/view/15121348/TzCQc76w)**
-   Plataforma de Artigos de design UX:  **[Behance](https://www.behance.net/gallery/116822585/Artigo-DoaUP-Hackathon-FCamara-2021)**


---

## 👨‍💻 Autores
<table>
  <tr>
    <td align="center"><a href="https://www.linkedin.com/in/kayller-kaique/"><img style="border-radius: 50%;" src="public\image\Autores\Kayller.jpeg" width="100px;" alt=""/><br /><sub><b>Kayller Kaique</b></sub></a><br /><a href="https://www.linkedin.com/in/kayller-kaique/" title="Kayller_Perfil">🦥</a></td>
    <td align="center"><a href="https://www.linkedin.com/in/alyssondesenvolvimentoandroid/"><img style="border-radius: 50%;" src="public\image\Autores\Cicero.png" width="100px;" alt=""/><br /><sub><b>Cícero Alysson</b></sub></a><br /><a href="https://www.linkedin.com/in/alyssondesenvolvimentoandroid/" title="Cicero_Perfil">🧟‍♂️</a></td>
    <td align="center"><a href="https://www.linkedin.com/in/dafne-vasques-970175147/"><img style="border-radius: 50%;" src="public\image\Autores\Dafne.png" width="110px;" alt=""/><br /><sub><b>Dafne Vasques</b></sub></a><br /><a href="https://www.linkedin.com/in/dafne-vasques-970175147/" title="Dafne_Perfil">👨‍🚀</a>  <a href="https://www.linkedin.com/in/dafne-vasques-970175147/"</a></td> 
    <td align="center"><a href="https://www.linkedin.com/in/carlos-eduardo-martins-filho-8a38b3174/"><img style="border-radius: 50%;" src="public\image\Autores\Kadu.png" width="90px;" alt=""/><br /><sub><b>Carlos Eduardo</b></sub></a><br /><a href="https://www.linkedin.com/in/carlos-eduardo-martins-filho-8a38b3174/" title="Carlos_Perfil">👾</a></td>
    <td align="center"><a href="https://www.linkedin.com/in/yan-phillipe-silva-de-barros-820aa1ba/"><img style="border-radius: 50%;" src="public\image\Autores\Yan.png" width="105px;" alt=""/><br /><sub><b>Yan Phillipe</b></sub></a><br /><a href="https://www.linkedin.com/in/yan-phillipe-silva-de-barros-820aa1ba/" title="Yan_Perfil">🚀</a></td>
    <td align="center"><a href="https://www.linkedin.com/in/guydo-ventura-b7b60520a/"><img style="border-radius: 50%;" src="public\image\Autores\Guydo Ventura.png" width="100px;" alt=""/><br /><sub><b>Guydo Ventura</b></sub></a><br /><a href="https://www.linkedin.com/in/guydo-ventura-b7b60520a/" title="Guydo_Perfil">👾</a></td>

  </tr>
</table>

## 📝 Licença

Este projeto esta sobe a licença.
<p align="">
  <a href="https://github.com/calyssonc/grupo43/blob/DEV/LICENSE">
  <img alt="lICENSE" src="https://img.shields.io/github/license/calyssonc/grupo43?color=orange&style=plastic">
</p>

---

🧡 Nós somos aqueles que deixam o dia mais brilhante. 🧡 
<a href="https://github.com/calyssonc/grupo43/blob/DEV/LICENSE">