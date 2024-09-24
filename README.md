
# Projeto de Site em PHP

Este projeto foi desenvolvido como parte da atividade avaliativa da disciplina de Linguagem de Programação III do curso Técnico em Informática EAD do IFSul de Minas - campus Muzambinho.

## O que foi solicitado:

- Mínimo de 4 páginas PHP utilizando includes. **(2,0 pontos)**
- Uso correto de códigos HTML e CSS nas páginas. **(2,0 pontos)**
- Uma das páginas deve conter um formulário HTML para envio de dados e uma página para receber esses dados. **(3,0 pontos)**
- Os dados enviados pelo formulário HTML deverão ser gravados em um arquivo JSON. **(3,0 pontos)**

## Funcionalidades

- Navegue pelas diferentes páginas para ver sugestões de onde comer em São José da Barra - MG.
- Preencha o formulário de cadastro e veja seus dados armazenados em um arquivo JSON.


## Estrutura do Projeto

- `index.php`: Página inicial, onde o usuário pode acessar as principais seções do site.
- `estilo.css`: Arquivo de estilos para o layout das páginas.
- `almoco.php`: Página com informações sobre restaurante para almoço.
- `bar.php`: Página com informações sobre bar noturno.
- `cafe.php`: Página com informações sobre local de café da manhã.
- `cadastro.php`: Formulário HTML para coleta de informações dos usuários.
- `recebe_cadastro.php`: Página que recebe os dados enviados pelo formulário e armazena em um arquivo JSON.
- `topo.php` e `links.php`: Arquivos PHP incluídos em todas as páginas, fornecendo o menu e cabeçalho do site.
- `imagens/`: Pasta com imagens utilizadas nas páginas.
- `test/`: Pasta contendo os testes automatizados usando Selenium WebDriver.

## Requisitos

- **PHP** (versão 8.3.11 ou superior)
- **Composer** para gerenciamento de dependências PHP
- **XAMPP** ou outro servidor local de desenvolvimento com Apache e MySQL
- **Google Chrome** (versão 129 ou superior)
- **ChromeDriver** (compatível com a versão do Chrome instalada, no meu caso foi a versão 129)
- **Selenium WebDriver** (configurado como um servidor standalone)
  
## Instruções para Execução do Projeto

1. **Clone o Repositório**:
   ```bash
   git clone https://github.com/seu-repositorio/ElisSitePHP.git
   cd ElisSitePHP
   ```

2. **Instale as Dependências PHP**:
   Execute o Composer para instalar as dependências do Selenium WebDriver:
   ```bash
   composer install
   ```

3. **Configuração do Selenium**:
   Baixe e configure o ChromeDriver de acordo com a versão do Google Chrome instalada. Em seguida, inicie o servidor Selenium:
   ```bash
   java -jar selenium-server-4.24.0.jar standalone
   ```

4. **Execute o Servidor Local**:
   No XAMPP ou em outro servidor local, inicie o Apache:
   ```bash
   xampp-control
   ```

5. **Acesse o Site**:
   Abra o navegador e acesse o site:
   ```bash
   http://localhost/ElisSitePHP/index.php
   ```

6. **Executar Testes Automatizados**:
   Para rodar os testes do Selenium, execute o seguinte comando na pasta de testes:
   ```bash
   php test/indexTest.php
   php test/almocoTest.php
   php test/barTest.php
   php test/cafeTest.php
   php test/cadastroTest.php
   ```


https://github.com/user-attachments/assets/faf61fb5-9607-451e-8279-7827f255d8fc


