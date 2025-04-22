<!--
    Este es el archivo principal de la vista de la aplicación Evently.
    Contiene la estructura HTML y el estilo CSS para la interfaz de usuario.
    La vista está diseñada para ser responsiva y se adapta a diferentes tamaños de pantalla.
    Utiliza un diseño de tres columnas para mostrar diferentes secciones de la aplicación.
    
    La vista está dividida en tres contenedores principales:
        1. Contenedor de navegación (contenedor1): Muestra el logo y el menú de navegación.
        2. Contenedor de eventos (contenedor2): Muestra un saludo al usuario y las secciones de eventos en curso y completados.
        3. Contenedor de perfiles y etiquetas (contenedor3): Incluye un buscador y muestra perfiles y etiquetas recomendadas.
-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Evently</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>

    <body>
        <div class="contenedor" id="contenedor1">
            <img src="logo.jpg" alt="logo_Evently" style="height: 100px; width: 100px; border-radius: 20px;">
            <div class="menu">
                <h2>Inicio</h2>
                <br>
                <h2>Mis Eventos</h2>
                <br>
                <h2>Perfil</h2>
                <br>
                <button class="crear">CREAR EVENTO</button>
            </div>
        </div>

        <div class="contenedor" id="contenedor2">
            <table>
                <tr>
                    <td><h1>Bienvenido, User!</h1></td>
                    <td><h1>Eventos</h1></td>
                </tr>

                <tr>
                    <td><h3>En curso</h3></td>
                    <td><h3>Completado</h3></td>
                </tr>
            </table>
        </div>

        <div class="contenedor" id="contenedor3">
            <input type="text" class="buscador" placeholder="Busca Eventos">
            <div class="perfiles">
                <table style="border: 1px; border-color: aliceblue;">
                    <tr>
                        <h2>Perfiles para ti</h2>
                    </tr>

                    <tr>
                        <td><h3>Ejemplo</h3><p>@Ejemplo</p></td>
                        <td><button class="mas">MÁS</button></td>
                    </tr>

                    <tr>
                        <td><h3>Ejemplo</h3><p>@Ejemplo</p></td>
                        <td><button class="mas">MÁS</button></td>
                    </tr>

                    <tr>
                        <td><h3>Ejemplo</h3><p>@Ejemplo</p></td>
                        <td><button class="mas">MÁS</button></td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <h2>Etiquetas para ti</h2>
                    </tr>

                    <tr>
                        <h3>#futbol</h3>
                        <p>10 eventos</p>
                    </tr>

                    <tr>
                        <h3>#musica</h3>
                        <p>10 eventos</p>
                    </tr>

                    <tr>
                        <h3>#videojuegos</h3>
                        <p>10 eventos</p>
                    </tr>
                    
                    <tr>
                        <h3>#fornite</h3>
                        <p>10 eventos</p>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>