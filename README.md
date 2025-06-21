# Sistema de Login PHP

Este projeto é um sistema simples de login desenvolvido em PHP, utilizando controle de sessões e rotas básicas. O objetivo é demonstrar como criar uma autenticação de usuários e proteger páginas internas de um site.

## Funcionalidades

- **Controle de sessão:** Utiliza `session_start()` para gerenciar o login do usuário.
- **Sistema de rotas:** O arquivo `index.php` faz o roteamento das páginas com base na URL e no status de autenticação do usuário.
- **Validação de login:** O usuário só acessa as páginas internas se estiver autenticado; caso contrário, é redirecionado para a tela de login.
- **Logout:** Possibilidade de encerrar a sessão do usuário.
- **Proteção de arquivos:** Uso de uma constante de controle para evitar acesso direto aos arquivos internos.
- **Mensagens de erro:** Exibe mensagens amigáveis caso o login falhe ou campos obrigatórios não sejam preenchidos.

## Estrutura de Pastas

```
sisloginphp/
│
├── public/
│   ├── index.php
│   ├── login.php
│   ├── home.php
│   ├── page1.php
│   ├── page2.php
│   ├── page3.php
│   └── logout.php
│
└── inc/
    └── usuarios.php
```

## Como usar

1. Clone este repositório.
2. Configure os usuários no arquivo `inc/usuarios.php`.
3. Execute o projeto em um servidor local (ex: XAMPP, WAMP, Laragon).
4. Acesse `http://localhost/sisloginphp/public` no navegador.

---

Desenvolvido para fins de estudo e demonstração.
