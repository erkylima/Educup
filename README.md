# Educup Cursos


## Instalação
Clone o repo:
```shell
git clone https://github.com/erkylima/Educup.git
```

Instale os packages do composer :
```shell
composer update
```

Copie e renomeie .env.example para .env, atualize as variaveis de ambiente e defina uma api key:
```shell
php artisan key:generate
```

Depois disso rode todas as migration e seed:
```shell
php artisan migrate
```
```shell
php artisan db:seed
```

Ou se seu banco de dados é novo digite apenas o comando simples:
```shell
php artisan migrate:refresh --seed
```

Observe que a propagação do banco de dados é obrigatória, pois criará as funções e permissões necessárias para o usuário CRUD fornecido pelo projeto.

Visite <div style="display: inline">http://seu.com/login</div> para entrar usando abaixo credenciais:

### Demo
URL: https://stisla.rehmat.works

#### Demo Admin Login
*  Email: erkylima@gmail.com
*  Password: 1234

#### Demo Editor Login
*  Email: editor@example.com
*  Password: 1234

#### Demo User Login
*  Email: user@example.com
*  Password: 1234

P.S.: A modificação de senha e a exclusão do usuário estão desativadas no modo de demonstração.

### Contribuição:
A contribuição é bem-vinda e muito apreciada. Bifurque o repositório, faça suas atualizações e inicie uma solicitação de recebimento. Aprovarei todos os pedidos, desde que sejam construtivos e sigam as práticas padrão do Laravel.
