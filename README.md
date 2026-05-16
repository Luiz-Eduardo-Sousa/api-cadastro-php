# 📋 Sistema de Cadastro de Usuários

Aplicação simples desenvolvida com **PHP** e **Laravel** para cadastro de usuários. O projeto tem como objetivo oferecer uma base clara e funcional para registrar informações essenciais de forma intuitiva, com foco em **nome**, **e-mail** e **data de nascimento**.

Este repositório é ideal para quem deseja estudar uma estrutura básica em Laravel, iniciar uma aplicação de cadastro ou evoluir a solução com novas funcionalidades ao longo do tempo.

---

## ✨ Funcionalidades atuais

Atualmente, o sistema permite:

- cadastrar usuários com **nome**, **e-mail** e **data de nascimento**;
- manter um fluxo de uso simples e direto;
- servir como base para expansão futura.

> **Importante:** neste momento, o projeto cobre apenas o cadastro básico de usuários.

---

## 🚀 Instalação e configuração

Para executar o projeto localmente, siga os passos abaixo:

```bash
git clone <git@github.com:Luiz-Eduardo-Sousa/api-cadastro-php.git>
cd <api-cadastro-php>
composer install
cp .env.example .env
php artisan key:generate
```

 Depois, configure o banco de dados no arquivo .env:

- DB_DATABASE=seu_banco
- DB_USERNAME=seu_usuario
- DB_PASSWORD=sua_senha

 Em seguida, execute as migrações e inicie o servidor:

php artisan migrate
php artisan serve

 A aplicação estará disponível em:

http://127.0.0.1:8000

## Exemplo de resposta da API

A API retorna uma lista de usuários cadastrados e um resumo com o total de registros.

```json
{
  "data": [
    {
      "id": 8,
      "name": "Jordane Schoen",
      "date_of_birth": "2020-12-27",
      "email": "dwnj@em.com",
      "creatd_at": "2026-05-14T19:13:45.000000Z",
      "updated_at": "2026-05-15T16:33:32.000000Z"
    }
  ],
  "infos": {
    "total_users": 8
  }
}
```

## ✅ Conclusão

Este projeto oferece uma base simples, útil e fácil de entender para cadastro de usuários em Laravel. Se você procura um ponto de partida objetivo para uso, estudo ou expansão, este repositório foi pensado para isso.
