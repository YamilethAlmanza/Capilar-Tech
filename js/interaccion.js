<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Capilar Tech – Inicio</title>
  <!-- Enlace al CSS obligatorio -->
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <header class="encabezado contenedor">
    <h1>Capilar Tech</h1>
    <nav class="menu">
      <ul>
        <li><a href="index.html" class="activo">Inicio</a></li>
        <li><a href="catalogo.html">Catálogo</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main class="contenedor">
    <ol>
      <li><a href="#limpieza">Limpieza correcta</a></li>
      <li><a href="#hidratacion">Hidratación y nutrición</a></li>
      <li><a href="#proteccion">Protección térmica y solar</a></li>
      <li><a href="#puntas">Mantenimiento de puntas</a></li>
    </ol>

    <section id="limpieza" class="bloque">
      <h2>Limpieza correcta</h2>
      <img src="img/limpieza.jpg" alt="Lavado capilar suave" class="img‑resp">
      <p>Lava con agua tibia, masajea solo raíces con champú y enjuaga muy bien para evitar residuos.</p>
    </section>

    <section id="hidratacion" class="bloque">
      <h2>Hidratación y nutrición</h2>
      <img src="img/hidratacion.jpg" alt="Aplicación de mascarilla" class="img‑resp">
      <p>Usa acondicionador o mascarilla según tu tipo de cabello; déjalo actuar 3‑5 min y enjuaga con agua fresca.</p>
    </section>

    <section id="proteccion" class="bloque">
      <h2>Protección térmica y solar</h2>
      <img src="img/proteccion.jpg" alt="Protector antes de plancha" class="img‑resp">
      <p>Aplica protector antes de usar plancha/secador; usa gorra al exponerte al sol por mucho tiempo.</p>
    </section>

    <section id="puntas" class="bloque">
      <h2>Mantenimiento de puntas</h2>
      <img src="img/cortes.jpg" alt="Corte de puntas abiertas" class="img‑resp">
      <p>Corta cada 6‑8 semanas para frenar el daño; adapta el corte a tu largo y estilo.</p>
    </section>
  </main>

  <!-- Enlace al JavaScript -->
  <script src="js/interaccion.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Capilar Tech – Catálogo de Productos</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <header class="encabezado contenedor">
    <h1>Capilar Tech</h1>
    <nav class="menu">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="catalogo.html" class="activo">Catálogo</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main class="contenedor">
    <h2 style="margin: 2rem 0; text-align:center;">Nuestros Productos</h2>
    <div class="cuadricula">
      <figure class="tarjeta">
        <img src="img/limpieza.jpg" alt="Champú suave" class="img‑resp">
        <figcaption>Champú de limpieza profunda</figcaption>
        <button class="btn" onclick="verDetalle()">Ver detalle</button>
      </figure>
      <figure class="tarjeta">
        <img src="img/hidratacion.jpg" alt="Mascarilla hidratante" class="img‑resp">
        <figcaption>Mascarilla hidratante intensiva</figcaption>
        <button class="btn" onclick="verDetalle()">Ver detalle</button>
      </figure>
      <figure class="tarjeta">
        <img src="img/proteccion.jpg" alt="Protector térmico" class="img‑resp">
        <figcaption>Protector térmico y solar</figcaption>
        <button class="btn" onclick="verDetalle()">Ver detalle</button>
      </figure>
      <figure class="tarjeta">
        <img src="img/cortes.jpg" alt="Aceite reparador puntas" class="img‑resp">
        <figcaption>Aceite reparador de puntas</figcaption>
        <button class="btn" onclick="verDetalle()">Ver detalle</button>
      </figure>
    </div>
  </main>

  <script src="js/interaccion.js"></script>
</body>
</html>
function verDetalle(){
  location.href = 'detalle.html';
}
const formContacto = document.getElementById('formContacto');
if(formContacto){
  formContacto.addEventListener('submit', e => {
    e.preventDefault();
    const nombre = document.getElementById('nombre').value.trim();
    const correo = document.getElementById('correo').value.trim();
    const mensaje = document.getElementById('mensaje').value.trim();
    if(!nombre || !correo || !mensaje){
      alert('⚠️ Completa todos los campos obligatorios.');
    } else {
      alert('✅ Mensaje enviado correctamente. ¡Gracias por contactarnos!');
      formContacto.reset();
    }
  });
}