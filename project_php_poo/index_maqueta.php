<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div id="container">
        <!-- HEADER -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo" />
                <a href="index.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>
        
        <!-- NAVBAR -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoria1</a>
                </li>
                <li>
                    <a href="#">Categoria2</a>
                </li>
                <li>
                    <a href="#">Categoria3</a>
                </li>
                <li>
                    <a href="#">Categoria4</a>
                </li>
            </ul>
        </nav>
    
        <div id="content">

        <!-- BARRA LATERAL -->
            <aside id="lateral">

                <div id="login" class="block_aside">
                    <h3>Entry to the Web</h3>
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        <label for="password">Password</label>
                        <input type="password" name="password"/>
                        
                        <input type="submit" value="Send"/>
                    </form>

                    <ul>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Gestionar pedidos</a></li>
                        <li><a href="#">Gestionar categorias</a></li>
                    </ul>
                </div>

            </aside>
        <!-- CONTENIDO CENTRAL -->
            <div id="central">
                <h1>Productos Destacados</h1>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros </p>
                    <a href="" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros </p>
                    <a href="" class="button">Comprar</a>
                </div>
            
                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros </p>
                    <a href="" class="button">Comprar</a>
                </div>

            </div>

        </div>


        <!-- FOOTER -->
        <footer id="footer">
            <p>Design for Javier Candela &copy; <?=date('Y')?>
        </footer>
    </div>
</body>
</html>