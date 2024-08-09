---

## 📚 Introdução

O **RealsBet** é um sistema de gerenciamento que permite controlar usuários, afiliados e comissões. Ele inclui funcionalidades para o cadastro, listagem, edição e inativação de usuários e afiliados, além de permitir a adição e exclusão de comissões e consulta detalhada das mesmas.

## 🚀 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

✔ [PHP](https://www.php.net/)  
✔ [Laravel 11](https://laravel.com/docs/11.x)  
✔ [Composer](https://getcomposer.org/)  
✔ [Blade UI Kit](https://blade-ui-kit.com/)  
✔ [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)  
✔ [Faker](https://github.com/fakerphp/faker)  
✔ [Laravel Breeze](https://laravel.com/docs/11.x/starter-kits#breeze)  
✔ [Flowbite](https://flowbite.com/)  
✔ [Tailwindcss](https://tailwindcss.com/)  

## 📋 Pré-requisitos

Antes de rodar o projeto, você precisará ter as seguintes ferramentas instaladas:

* [Git](https://git-scm.com)
* [PHP 8.3](https://www.php.net/)
* [Composer](https://getcomposer.org/)
* [Laravel 11](https://laravel.com/docs/11.x)

## ⚙ Configuração

Para clonar e rodar o projeto localmente, siga os passos abaixo:

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/realsbet.git
   ```

2. Acesse o diretório do projeto:
   ```bash
   cd realsbet
   ```

3. Instale as dependências:
   ```bash
   composer install
   ```

4. Configure o arquivo `.env` (copie de `.env.example`):
   ```bash
   cp .env.example .env
   ```

5. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

6. Execute as migrações:
   ```bash
   php artisan migrate
   ```

7. (Opcional) Popule o banco de dados com dados iniciais:
   ```bash
   php artisan db:seed
   ```

8. Inicie o servidor:
   ```bash
   php artisan serve
   ```

   O projeto estará disponível em [http://localhost:8000](http://localhost:8000).

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## ✍ Autor

<img alt="Seu Nome" title="Seu Nome" src="https://github.com/allanrodriguesmachado.png" width="100">

<p align="left">
    <a href="https://www.linkedin.com/in/allanrodriguesmachado/" target="_blank">
        <img align="center" src="https://img.shields.io/badge/LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" alt="Seu Nome" />
    </a>
</p>


---