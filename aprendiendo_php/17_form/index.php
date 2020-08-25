<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP && HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Nombre: </label>
        <p><input type="text" name="name" disabled="disabled" /></p>
        <label for="lastname">Apellido:</label>
        <p> <input type="text" name="lastname" autofocus="autofocus" maxlength=5 required="required"/></p>
        <label for="adress">Adress:</label>
        <p> <input type="text" name="adress" pattern="[A-Z]+" placeholder="introduce your adress" /></p>
        
        <label for="buton">Button: </label>
        <p><input type="button" name="buton" value="click here" /></p>
        
        <label for="sex">Sex: </label>
        <p>
            Man<input type="checkbox" name="sex" value="man" checked="checked"/>
            Woman<input type="checkbox" name="sex" value="woman" />
            
        </p>

        <label for="color">Color: </label>
        <p>
            Color: <input type="color" name="color"/>
        </p>

        <label for="date">Date: </label>
        <p><input type="date" name="date"/></p>

        <label for="correo">Email: </label>
        <p><input type="email" name="correo"/></p>

        <label for="archivo">File: </label>
        <p><input type="file" name="archivo" multiple="multiple"/></p>

        <label for="numero">Number: </label>
        <p><input type="number" name="numero"/></p>

        <label for="pass">Password: </label>
        <p><input type="password" name="pass"/></p>

        <label for="continente">Continent: </label>
        <p>
            Europa<input type="radio" name="continente" value="Europa"/>
            Asia<input type="radio" name="continente" value="Asia"/>
            Oceania<input type="radio" name="continente" value="Oceania"/>    
        </p>

        <label for="web">Web Site: </label>
        <p><input type="url" name="web"/></p>        
        
        <textarea>
        
        </textarea><br/>

        Peliculas:
        <select name="films">
            <option value="spiderman">Spiderman</option>
            <option value="superman">Superman</option>
            <option value="batman">Batman</option>
            <option value="lobezno">lobezno</option>
        </select>
        <br/>



        <input type="submit" value="Send"/>
    </form>
</body>
</html>