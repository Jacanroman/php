
 
 <!-- BARRA LATERAL-->
 <aside id="sidebar">

             <div id="search" class="block-aside">
                <h3>Search:</h3>

                <form action="search.php" method="POST">
                    
                    
                    <input type="text" name="search" id="search"/>
                    <input type="submit" value="Search" />
                </form>
            </div>




            <?php if(isset($_SESSION['user'])): ?>

                <div id="login-user" class="block-aside">
                    <h3>Bienvenido, <?=$_SESSION['user']['nombre'].' '.$_SESSION['user']['apellidos'];?></h3>
                    <!--botones-->
                    
                    <a href="new_entry.php" class="button button-orange">Crear entradas</a>
                    <a href="new_category.php" class="button button-green">Crear categorias</a>
                    <a href="my_data.php" class="button">Mis datos</a>
                    <a href="close.php" class="button button-red">Close Sesion</a>
                </div>
            <?php endif; ?>

            <!-- condicion para ocultar el login y el registro una vez 
            que estemos logueados -->
            <?php if(!isset($_SESSION['user'])): ?>



            <div id="login" class="block-aside">
                <h3>Log In:</h3>

                <?php if(isset($_SESSION['error_login'])): ?>
                    <div class="alert alert-error">
                        <?=$_SESSION['error_login']; ?>
                    </div>
                <?php endif; ?>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"/>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"/>

                    <input type="submit" value="Enter" />
                </form>
            </div>

            <div id="register" class="block-aside">
                
                <h3>Sign up:</h3>


                <!-- Mostrar errores -->
                <?php
                    if(isset($_SESSION['finish'])): ?>
                        <div class="alert alert-succes">
                            <?=$_SESSION['finish'] ?>
                        </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                        <div class="alert alert-error">
                            <?=$_SESSION['errores']['general'] ?>
                        </div>
                    <?php endif; ?>

                <form action="signup.php" method="POST">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"/>
                    <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'],'name'):''; ?>
                    
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" id="surname"/>
                    <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'],'surname'):''; ?>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"/>
                    <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'],'email'):''; ?>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"/>
                    <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'],'password'):''; ?>

                    <input type="submit" name="submit" value="Sign up" />
                </form>
                <?php deleteError(); ?>
            </div>
                    <?php endif; ?>
</aside>
