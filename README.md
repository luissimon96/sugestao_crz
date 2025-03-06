# Sugestão CRZ

## Descrição do Projeto
Este projeto é uma aplicação PHP chamada Sugestão CRZ. O objetivo é fornecer uma solução para [descrever o objetivo da aplicação, por exemplo, "gerenciar sugestões de usuários"].

## Estrutura do Projeto
A estrutura do projeto é a seguinte:

```
sugestao_crz
├── src
│   ├── index.php          # Ponto de entrada da aplicação
│   └── web.config         # Configuração do servidor web para Azure
├── .github
│   └── workflows
│       └── deploy.yml     # Configuração do GitHub Actions para deploy
├── .gitignore             # Arquivos e diretórios a serem ignorados pelo Git
├── composer.json          # Configuração do Composer para gerenciamento de dependências
├── <VirtualHost *:80>.conf # Configuração do Apache para a aplicação
└── README.md              # Documentação do projeto
```

## Instalação
Para instalar as dependências do projeto, execute o seguinte comando:

```
composer install
```

## Uso
Para iniciar a aplicação, você pode usar um servidor embutido do PHP:

```
php -S localhost:8000 -t src
```

Acesse a aplicação em seu navegador através do endereço [http://localhost:8000](http://localhost:8000).

## Configuração do Servidor
### Apache
Para configurar o Apache, utilize o arquivo `<VirtualHost *:80>.conf` fornecido. Certifique-se de que o caminho do `DocumentRoot` e do `<Directory>` estejam corretos.

### Azure
Para configurar o Azure App Service, utilize o arquivo `web.config` fornecido na pasta `src`.

## Deploy
O deploy da aplicação será realizado automaticamente através do GitHub Actions para o Azure App Service. Certifique-se de que as credenciais e configurações necessárias estejam corretamente definidas no arquivo `.github/workflows/deploy.yml`.

## Contribuição
Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests.

## Licença
Este projeto está licenciado sob a [Licença MIT](LICENSE).