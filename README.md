<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Descrição do projeto (PT1 - Prévia)

Aqui esta minha aplicação em laravel... Feito com muito carinho atendendo todas as demandas...

Esse projeto de chama Controle de series, ou melhor, "Series Controller", desenvolvido um CRUD para anotar, pesquisar e armazenar suas series favoritas, as com funcionalidades:
- Adição: adicionar uma serie com sua quantidade de temporada e quantos episodios existem naquele cenário, de sua preferencia.
- Edição: É possivel editar o nome da sua serie, clicando no botao azul, caso tenha errado o nome ou nao colocou letra MAISCULAS.
- Exclusão: Caso nao queira mais alguma serie da lista é possivel remover ela da tal, apertando no botao vermelho ao lado do botao azul.
- Pesquisa: Vamos dizer que você esta com uma lista gigante, grande o suficiente para nao achar a sua serie, com essa ferramenta facilita muito tudo isso, caso queira achar uma serie mais facil, basta pesquisar que aparerá na sua frente para realizar as modificações.
- Seleção das temporadas: Cada serie armazena suas temporadas e episódios, aperta no nome da sua serie será automaticamente redirecionado para as temporadas e episódios da respectiva serie.
- Alert: Alertas são exibidos durante sua jornada no Series Controller, aonde aponta erros feitos pelo usuário e para indicar ações em sucesso.


## Tecnologias utilizadas

Utilizei o laravel como framework para fazer tudo acontecer no ambiente, usando o XAMPP para criar um servidor e o composer, usei o BOOTSTRAP integrado com SAAS, instalando com NODE.JS no NPM diretamente na pasta, usado o blade para executar as routes / paginas da aplicação e como armazenamento de informações utilizei o SQLITE direto no codigo com migrations.

## Linha de pensamento

De primeiro momento imaginei uma aplicação residencial vamos dizer assim, aonde conseguia selecionar quais lugares da sua casa ira fazer tal ação, poderia ser uma tarefa, ou um checklist, mas estava navegando pelo internet e me bateu vontade de assistir serie, logo veio na cabeça de criar essa aplicação...
Dentro do framework, Separei todos os blades para garantir o layout padrão, dividir o CSS diretamente no arquivo para nao confundir quem vai usar ou ler, a parte de pesquisar, vou sendo sincero, deu um trabalho, pois estava querendo fazer uma instancia dentro de algo ja criado, isso estava corrompendo o banco de dados e não estava legal.
Banco de dados: Optei pelo SQLITE, durante minha pesquisa, percebi que era possivel fazer todas as suas tabelas e manipulações direto no framwork, com o MySql, teria que jogar dentro de um servidor e instanciar dentro do codigo, talvez poderia dar errado na hora do teste pela conexão externa, entao por segurança e facilidade, optei pelo SQLITE.

## Como executar o projeto


### Referencias

- **https://www.jlgregorio.com.br/2022/09/06/introducao-ao-laravel-framework-parte-08-crud/**
- **https://imasters.com.br/php/laravel-11-guia-completo-para-criar-uma-api-restful-crud**
- **https://www.youtube.com/watch?v=rqtZ0EmciJ8**
