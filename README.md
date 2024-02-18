# Comércio Eletrônico
## Como executar o projeto de comércio eletrônico
1. Baixe o arquivo zip
2. Extraia o arquivo e copie a pasta E-commerce
3. Cole dentro do diretório raiz (para xampp xampp/htdocs, para wamp wamp/www, para lamp var/www/HTML)
4. Abra o PHPMyAdmin (http://localhost/phpmyadmin)
5. Crie um banco de dados com o nome cse411project
6. Importe o arquivo cse411project.sql (fornecido dentro do pacote zip na pasta de arquivos SQL)
7. Execute o script http://localhost/E-Commerce (frontend)
8. Para o painel de administração http://localhost/E-Commerce/admin (painel de administração)

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

## Diagrama de Caso de Uso
![diagrama de caso de uso](https://user-images.githubusercontent.com/38730778/212703312-55414fe9-00ba-4bed-9e07-d563418e7870.png)
*Diagrama de Caso de Uso*
<br>

## Capturas de Tela
### Cliente
![login](https://user-images.githubusercontent.com/38730778/212703316-c140da99-981e-427b-9477-fe4f061bf084.png)
*Login Para Cliente*
<br>
![cadastro](https://user-images.githubusercontent.com/38730778/212703317-38974276-8918-4746-89b0-f6188fe255ed.png)
*Cadastro Para Cliente*
<br>

![pagina inicial](https://user-images.githubusercontent.com/38730778/212703310-c01ac1f3-498f-42dd-964f-d2f628d8d7e9.png)
*Página Inicial Para Cliente*
<br>

![pesquisa](https://user-images.githubusercontent.com/38730778/212703321-557a1a1a-13c4-4e3f-ac7a-42a37aafdfe4.png)
*Pesquisa Para Cliente*
<br>

![carrinho](https://user-images.githubusercontent.com/38730778/212703324-16f46ab5-0460-4994-bb73-2c88071235c3.png)
*Carrinho Para Cliente*
<br>

![todos os pedidos](https://user-images.githubusercontent.com/38730778/212703327-e8beb5a3-d7f2-4ed9-b2da-a629814c8669.png)
*Perfil do Cliente*

### Administração
![login admin](https://user-images.githubusercontent.com/38730778/212703330-5de29026-2d09-4eb4-8e74-9d69d4952c3f.png)
*Login Para Administração*
<br>

![home admin](https://user-images.githubusercontent.com/38730778/212703331-21dda697-2c3a-42d2-b1e3-68eeab121f3d.png)
*Página Inicial Para Administração*
<br>

![home admin 2](https://user-images.githubusercontent.com/38730778/212703336-15ff5b20-dea0-4bbb-84f3-3de019e0df7e.png)
*Página Inicial Para Administração*
<br>

![adicionar produto](https://user-images.githubusercontent.com/38730778/212703342-ca77ae89-8d16-4cf2-afcc-61bdcc0afc42.png)
*Adicionar Produto Para Administração*
<br>

![gerenciar produto](https://user-images.githubusercontent.com/38730778/212703345-d45d7391-dad2-42e1-be0f-c08eec429198.png)
*Gerenciar Produto Para Administração*
<br>

![status do pedido](https://user-images.githubusercontent.com/38730778/212703340-c458de31-59fe-4864-a4a7-b96f26926758.png)
*Status do Pedido Para Administração*
<br>

![produto entregue](https://user-images.githubusercontent.com/38730778/212703287-2f5290bf-6ae5-4da2-8c9f-31b54168d833.png)
*Todos os Produtos Entregues*
<br>

![todos os usuarios](https://user-images.githubusercontent.com/38730778/212703295-9e49def9-6eb5-4c14-b935-2e26e8de457e.png)
*Lista de Todos os Usuários*
<br>

![relatorio de vendas](https://user-images.githubusercontent.com/38730778/212703299-6dd270c1-7afc-4915-8cbf

-df9bdc47d3b0.png)
*Relatório de Vendas*