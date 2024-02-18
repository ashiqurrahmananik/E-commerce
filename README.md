# Comércio Eletrônico
## Como executar o projeto de comércio eletrônico
1. Baixe o arquivo zip
2. Extraia o arquivo e copie a pasta E-commerce
3. Cole dentro do diretório raiz (para xampp xampp/htdocs, para wamp wamp/www, para lamp var/www/HTML)
4. Baixe o arquivo TCPDF (https://github.com/tecnickcom/tcpdf)
5. Extraia e cole na raiz do projecto e renomeie para "pdf"
6. Abra o PHPMyAdmin (http://localhost/phpmyadmin)
7. Crie um banco de dados com o nome cse411project
8. Importe o arquivo cse411project.sql (fornecido dentro do pacote zip na pasta de arquivos SQL)
9. Execute o script http://localhost/E-Commerce (frontend)
10. Para o painel de administração http://localhost/E-Commerce/admin (painel de administração)

<br>
<a href="https://www.buymeacoffee.com/ashiquranik"><img src="https://img.buymeacoffee.com/button-api/?text=Me compre um café&emoji=&slug=ashiquranik&button_colour=5F7FFF&font_colour=ffffff&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00" /></a>
<br>

## Credenciais para o painel de administração:
- nome de usuário: admin
- Senha: admin

## Requisitos do Usuário:
### Administração
1. O administrador pode fazer login
2. O administrador pode gerenciar produtos
    - Adicionar produto
    - Remover produto
    - Atualizar produto
3. O administrador pode visualizar lista de produtos
4. O administrador pode visualizar lista de pedidos
5. O administrador pode gerenciar pedidos
    - Confirmar pedido
    - Cancelar pedido
    - Entregar pedido
    - Remover pedido
6. O administrador pode visualizar lista de usuários
7. O administrador pode gerar relatório de vendas
8. Ver arquivo PDF enviado pelos clientes

### Cliente
1. O cliente pode fazer login
2. O cliente pode visualizar produtos
3. O cliente pode pesquisar produtos
4. O cliente pode adicionar produtos ao carrinho
5. O cliente pode fazer pedidos
6. O cliente pode fazer pagamentos
7. O cliente pode visualizar detalhes do pedido
8. Gerar documento de arquivo PDF

## Requisitos Funcionais:
### Administração
1. Login
2. Pesquisar informações de qualquer produto e sua descrição
3. Visualizar todas as informações do produto
4. Visualizar todos os pedidos
5. Adicionar, excluir e modificar informações do produto
6. Após cada Adição, Edição, exclusão bem-sucedida, uma mensagem de confirmação será mostrada no canto da página.
7. Logout
8. Ver arquivo PDF enviado pelos clientes

### Cliente
1. Login
2. Pesquisar informações de qualquer produto e sua descrição
3. Visualizar todas as informações do produto
4. Logout

