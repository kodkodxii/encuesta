<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Encuesta — Tu Página Web Ideal</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>
  :root {
    --walnut: #3D2B1F;
    --oak: #8B6346;
    --cream: #F5F0E8;
    --linen: #EDE8DC;
    --sand: #D4C4A8;
    --accent: #C4723A;
    --dark: #1E1410;
    --white: #FDFAF5;
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    background: var(--cream);
    font-family: 'DM Sans', sans-serif;
    color: var(--walnut);
    min-height: 100vh;
  }

  /* HEADER */
  .header {
    background: var(--walnut);
    padding: 48px 24px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .header::before {
    content: '';
    position: absolute;
    top: -60px; left: 50%;
    transform: translateX(-50%);
    width: 320px; height: 320px;
    background: radial-gradient(circle, rgba(196,114,58,0.15) 0%, transparent 70%);
    pointer-events: none;
  }

  .header-label {
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: var(--accent);
    margin-bottom: 16px;
  }

  .header h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(28px, 5vw, 48px);
    font-weight: 400;
    color: var(--white);
    line-height: 1.2;
    margin-bottom: 14px;
  }

  .header h1 em {
    font-style: italic;
    color: var(--sand);
  }

  .header p {
    font-size: 15px;
    font-weight: 300;
    color: var(--sand);
    max-width: 480px;
    margin: 0 auto;
    line-height: 1.7;
  }

  .progress-bar-wrap {
    max-width: 560px;
    margin: 32px auto 0;
    height: 3px;
    background: rgba(255,255,255,0.1);
    border-radius: 2px;
  }

  .progress-bar-fill {
    height: 100%;
    background: var(--accent);
    border-radius: 2px;
    width: 0%;
    transition: width 0.5s ease;
  }

  .progress-label {
    font-size: 11px;
    color: rgba(255,255,255,0.35);
    letter-spacing: 2px;
    margin-top: 8px;
    text-align: right;
    max-width: 560px;
    margin-left: auto; margin-right: auto;
  }

  /* MAIN */
  .main {
    max-width: 640px;
    margin: 0 auto;
    padding: 48px 20px 80px;
  }

  /* STEP */
  .step {
    display: none;
    animation: slideIn 0.4s ease forwards;
  }
  .step.active { display: block; }

  @keyframes slideIn {
    from { opacity: 0; transform: translateY(18px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .step-number {
    font-size: 11px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--accent);
    font-weight: 500;
    margin-bottom: 10px;
  }

  .step h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(20px, 3.5vw, 28px);
    font-weight: 400;
    color: var(--walnut);
    line-height: 1.35;
    margin-bottom: 8px;
  }

  .step .hint {
    font-size: 13px;
    color: var(--oak);
    margin-bottom: 28px;
    font-weight: 300;
  }

  /* OPTIONS GRID */
  .options {
    display: grid;
    gap: 12px;
  }

  .options.cols-2 {
    grid-template-columns: 1fr 1fr;
  }

  @media (max-width: 480px) {
    .options.cols-2 { grid-template-columns: 1fr; }
  }

  .option {
    position: relative;
    cursor: pointer;
  }

  .option input {
    position: absolute;
    opacity: 0;
    pointer-events: none;
  }

  .option-card {
    display: flex;
    flex-direction: column;
    gap: 4px;
    padding: 18px 20px;
    border: 1.5px solid var(--sand);
    border-radius: 10px;
    background: var(--white);
    transition: all 0.2s ease;
    cursor: pointer;
  }

  .option-card:hover {
    border-color: var(--oak);
    background: var(--linen);
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(61,43,31,0.08);
  }

  .option input:checked + .option-card {
    border-color: var(--accent);
    background: #FEF6EE;
    box-shadow: 0 4px 16px rgba(196,114,58,0.15);
  }

  .option-icon {
    font-size: 22px;
    margin-bottom: 4px;
  }

  .option-title {
    font-size: 14px;
    font-weight: 500;
    color: var(--walnut);
  }

  .option-desc {
    font-size: 12px;
    font-weight: 300;
    color: var(--oak);
    line-height: 1.5;
  }

  /* SCALE */
  .scale-wrap {
    background: var(--white);
    border: 1.5px solid var(--sand);
    border-radius: 12px;
    padding: 24px 20px;
  }

  .scale-labels {
    display: flex;
    justify-content: space-between;
    font-size: 11px;
    color: var(--oak);
    letter-spacing: 1px;
    margin-bottom: 14px;
    text-transform: uppercase;
  }

  .scale-dots {
    display: flex;
    justify-content: space-between;
    gap: 8px;
  }

  .scale-dot {
    flex: 1;
    cursor: pointer;
  }

  .scale-dot input {
    position: absolute;
    opacity: 0;
    pointer-events: none;
  }

  .scale-dot-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
  }

  .scale-dot-circle {
    width: 36px; height: 36px;
    border-radius: 50%;
    border: 1.5px solid var(--sand);
    background: var(--white);
    display: flex; align-items: center; justify-content: center;
    font-size: 12px;
    font-weight: 500;
    color: var(--walnut);
    transition: all 0.2s;
    cursor: pointer;
  }

  .scale-dot input:checked + .scale-dot-inner .scale-dot-circle {
    background: var(--accent);
    border-color: var(--accent);
    color: white;
    box-shadow: 0 0 0 4px rgba(196,114,58,0.15);
  }

  /* TEXTAREA */
  .text-area {
    width: 100%;
    padding: 16px 18px;
    border: 1.5px solid var(--sand);
    border-radius: 10px;
    background: var(--white);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 300;
    color: var(--walnut);
    resize: vertical;
    min-height: 100px;
    outline: none;
    transition: border-color 0.2s;
  }

  .text-area:focus {
    border-color: var(--accent);
  }

  .text-area::placeholder { color: var(--sand); }

  /* DIVIDER */
  .divider {
    height: 1px;
    background: var(--sand);
    margin: 28px 0;
    opacity: 0.5;
  }

  /* BUTTONS */
  .btn-row {
    display: flex;
    gap: 12px;
    margin-top: 36px;
    align-items: center;
  }

  .btn-back {
    padding: 12px 22px;
    border: 1.5px solid var(--sand);
    border-radius: 8px;
    background: transparent;
    color: var(--oak);
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    letter-spacing: 0.5px;
    transition: all 0.2s;
  }

  .btn-back:hover {
    border-color: var(--oak);
    color: var(--walnut);
  }

  .btn-next {
    flex: 1;
    padding: 14px 28px;
    background: var(--walnut);
    color: var(--cream);
    border: none;
    border-radius: 8px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    letter-spacing: 0.5px;
    transition: all 0.2s;
  }

  .btn-next:hover {
    background: var(--accent);
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(196,114,58,0.25);
  }

  /* RESULTS */
  .results-wrap {
    display: none;
    animation: slideIn 0.5s ease forwards;
  }

  .results-header {
    text-align: center;
    padding: 12px 0 36px;
  }

  .results-header .checkmark {
    width: 64px; height: 64px;
    background: var(--accent);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px;
    font-size: 28px;
  }

  .results-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 400;
    color: var(--walnut);
    margin-bottom: 10px;
  }

  .results-header p {
    font-size: 14px;
    color: var(--oak);
    font-weight: 300;
    max-width: 400px;
    margin: 0 auto;
    line-height: 1.7;
  }

  .results-card {
    background: var(--white);
    border: 1.5px solid var(--sand);
    border-radius: 14px;
    padding: 28px;
    margin-bottom: 16px;
  }

  .results-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 16px;
    color: var(--walnut);
    margin-bottom: 16px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--linen);
  }

  .result-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 8px 0;
    border-bottom: 1px solid var(--linen);
    gap: 12px;
  }

  .result-row:last-child { border-bottom: none; }

  .result-q {
    font-size: 12px;
    color: var(--oak);
    font-weight: 300;
    flex: 1;
  }

  .result-a {
    font-size: 13px;
    color: var(--walnut);
    font-weight: 500;
    text-align: right;
    max-width: 55%;
  }

  .tag-list { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 8px; }

  .tag {
    display: inline-block;
    padding: 4px 10px;
    background: var(--linen);
    border: 1px solid var(--sand);
    border-radius: 20px;
    font-size: 11px;
    color: var(--walnut);
    font-weight: 500;
  }

  .recommendation-box {
    background: linear-gradient(135deg, var(--walnut), #5C3D28);
    border-radius: 14px;
    padding: 28px;
    color: var(--cream);
    margin-bottom: 16px;
    position: relative;
    overflow: hidden;
  }

  .recommendation-box::after {
    content: '✦';
    position: absolute;
    right: 24px; top: 24px;
    font-size: 32px;
    opacity: 0.1;
    color: var(--sand);
  }

  .recommendation-box h3 {
    font-family: 'Playfair Display', serif;
    font-size: 18px;
    font-weight: 400;
    color: var(--sand);
    margin-bottom: 8px;
  }

  .recommendation-box p {
    font-size: 13px;
    font-weight: 300;
    line-height: 1.7;
    color: rgba(245,240,232,0.8);
  }

  .rec-badge {
    display: inline-block;
    padding: 5px 14px;
    background: var(--accent);
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    color: white;
    margin-bottom: 12px;
    letter-spacing: 0.5px;
  }

  .btn-restart {
    width: 100%;
    padding: 14px;
    background: transparent;
    border: 1.5px solid var(--sand);
    border-radius: 8px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    color: var(--oak);
    cursor: pointer;
    transition: all 0.2s;
    margin-top: 8px;
  }

  .btn-restart:hover { border-color: var(--oak); color: var(--walnut); }

  .error-msg {
    color: var(--accent);
    font-size: 12px;
    margin-top: 8px;
    display: none;
  }
</style>
</head>
<body>

<div class="header">
  <div class="header-label">Cuestionario de Diseño Web</div>
  <p>Responde estas preguntas para ayudarnos a diseñar la presencia digital que mejor se adapte a tus objetivos.</p>
  <div class="progress-bar-wrap">
    <div class="progress-bar-fill" id="progressBar"></div>
  </div>
  <div class="progress-label" id="progressLabel">Paso 1 de 7</div>
</div>

<div class="main">

  <!-- PASO 1 -->
  <div class="step active" id="step-1">
    <div class="step-number">Paso 01</div>
    <h2>¿Cuál es tu principal objetivo al tener una página web?</h2>
    <p class="hint">Selecciona la opción que mejor describe lo que buscas lograr.</p>
    <div class="options" id="q1">
      <label class="option">
        <input type="radio" name="q1" value="ventas">
        <div class="option-card">
          <div class="option-icon">🛒</div>
          <div class="option-title">Vender en línea</div>
          <div class="option-desc">Quiero que mis clientes puedan comprar directamente desde la web.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q1" value="catalogo">
        <div class="option-card">
          <div class="option-icon">📖</div>
          <div class="option-title">Mostrar mi catálogo</div>
          <div class="option-desc">Quiero exhibir mis productos y que los clientes lleguen a mi tienda o contacten.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q1" value="marca">
        <div class="option-card">
          <div class="option-icon">✦</div>
          <div class="option-title">Posicionar mi marca</div>
          <div class="option-desc">Quiero que mi negocio sea reconocido y genere confianza antes de que compren.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q1" value="contacto">
        <div class="option-card">
          <div class="option-icon">📞</div>
          <div class="option-title">Generar contactos</div>
          <div class="option-desc">Quiero recibir llamadas, mensajes o cotizaciones a través de la web.</div>
        </div>
      </label>
    </div>
    <p class="error-msg" id="err-1">Por favor selecciona una opción.</p>
    <div class="btn-row">
      <button class="btn-next" onclick="nextStep(1)">Continuar →</button>
    </div>
  </div>

  <!-- PASO 2 -->
  <div class="step" id="step-2">
    <div class="step-number">Paso 02</div>
    <h2>¿A quién le vendes principalmente?</h2>
    <p class="hint">Puedes seleccionar más de una opción.</p>
    <div class="options cols-2" id="q2">
      <label class="option">
        <input type="checkbox" name="q2" value="familias">
        <div class="option-card">
          <div class="option-icon">🏠</div>
          <div class="option-title">Familias / hogar</div>
          <div class="option-desc">Salas, comedores, recámaras, decoración.</div>
        </div>
      </label>
      <label class="option">
        <input type="checkbox" name="q2" value="oficinas">
        <div class="option-card">
          <div class="option-icon">🏢</div>
          <div class="option-title">Empresas / oficinas</div>
          <div class="option-desc">Escritorios, sillas ergonómicas, mobiliario corporativo.</div>
        </div>
      </label>
      <label class="option">
        <input type="checkbox" name="q2" value="disenadores">
        <div class="option-card">
          <div class="option-icon">🎨</div>
          <div class="option-title">Diseñadores de interiores</div>
          <div class="option-desc">Profesionales que buscan proveedores para sus proyectos.</div>
        </div>
      </label>
      <label class="option">
        <input type="checkbox" name="q2" value="constructoras">
        <div class="option-card">
          <div class="option-icon">🏗️</div>
          <div class="option-title">Constructoras / desarrolladores</div>
          <div class="option-desc">Proyectos inmobiliarios a gran escala.</div>
        </div>
      </label>
    </div>
    <p class="error-msg" id="err-2">Por favor selecciona al menos una opción.</p>
    <div class="btn-row">
      <button class="btn-back" onclick="prevStep(2)">← Atrás</button>
      <button class="btn-next" onclick="nextStep(2)">Continuar →</button>
    </div>
  </div>

  <!-- PASO 3 -->
  <div class="step" id="step-3">
    <div class="step-number">Paso 03</div>
    <h2>¿Cuántos productos tienes aproximadamente?</h2>
    <p class="hint">Esto nos ayuda a definir la estructura del sitio.</p>
    <div class="options" id="q3">
      <label class="option">
        <input type="radio" name="q3" value="menos10">
        <div class="option-card">
          <div class="option-icon">📦</div>
          <div class="option-title">Menos de 10 productos</div>
          <div class="option-desc">Una selección pequeña, curada o de especialidad.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q3" value="10a50">
        <div class="option-card">
          <div class="option-icon">📦📦</div>
          <div class="option-title">Entre 10 y 50 productos</div>
          <div class="option-desc">Catálogo mediano con categorías definidas.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q3" value="mas50">
        <div class="option-card">
          <div class="option-icon">🗂️</div>
          <div class="option-title">Más de 50 productos</div>
          <div class="option-desc">Amplio inventario que requiere filtros y búsqueda.</div>
        </div>
      </label>
    </div>
    <p class="error-msg" id="err-3">Por favor selecciona una opción.</p>
    <div class="btn-row">
      <button class="btn-back" onclick="prevStep(3)">← Atrás</button>
      <button class="btn-next" onclick="nextStep(3)">Continuar →</button>
    </div>
  </div>

  <!-- PASO 4 -->
  <div class="step" id="step-4">
    <div class="step-number">Paso 04</div>
    <h2>¿Qué funciones te parecen importantes en tu sitio?</h2>
    <p class="hint">Selecciona todo lo que aplique.</p>
    <div class="options cols-2" id="q4">
      <label class="option">
        <input type="checkbox" name="q4" value="galeria">
        <div class="option-card">
          <div class="option-icon">🖼️</div>
          <div class="option-title">Galería de fotos</div>
          <div class="option-desc">Mostrar imágenes de alta calidad de mis muebles.</div>
        </div>
      </label>
      <label class="option">
        <input type="checkbox" name="q4" value="cotizacion">
        <div class="option-card">
          <div class="option-icon">📋</div>
          <div class="option-title">Formulario de cotización</div>
          <div class="option-desc">Que los clientes soliciten precios desde la web.</div>
        </div>
      </label>
      <label class="option">
        <input type="checkbox" name="q4" value="whatsapp">
        <div class="option-card">
          <div class="option-icon">💬</div>
          <div class="option-title">Botón WhatsApp</div>
          <div class="option-desc">Contacto directo y rápido con mis clientes.</div>
        </div>
      </label>
      <label class="option">
        <input type="checkbox" name="q4" value="blog">
        <div class="option-card">
          <div class="option-icon">✍️</div>
          <div class="option-title">Blog / tips de decoración</div>
          <div class="option-desc">Contenido para posicionarme en Google.</div>
        </div>
      </label>
      <label class="option">
        <input type="checkbox" name="q4" value="mapa">
        <div class="option-card">
          <div class="option-icon">📍</div>
          <div class="option-title">Mapa / ubicación</div>
          <div class="option-desc">Mostrar dónde está mi tienda física.</div>
        </div>
      </label>
      <label class="option">
        <input type="checkbox" name="q4" value="carrito">
        <div class="option-card">
          <div class="option-icon">🛒</div>
          <div class="option-title">Carrito de compras</div>
          <div class="option-desc">Venta en línea con proceso de pago completo.</div>
        </div>
      </label>
    </div>
    <p class="error-msg" id="err-4">Por favor selecciona al menos una opción.</p>
    <div class="btn-row">
      <button class="btn-back" onclick="prevStep(4)">← Atrás</button>
      <button class="btn-next" onclick="nextStep(4)">Continuar →</button>
    </div>
  </div>

  <!-- PASO 5 -->
  <div class="step" id="step-5">
    <div class="step-number">Paso 05</div>
    <h2>¿Con qué frecuencia cambiarías el contenido de tu sitio?</h2>
    <p class="hint">Esto define si necesitas o no un administrador de contenido (CMS).</p>
    <div class="options" id="q5">
      <label class="option">
        <input type="radio" name="q5" value="nunca">
        <div class="option-card">
          <div class="option-icon">🔒</div>
          <div class="option-title">Casi nunca</div>
          <div class="option-desc">El sitio sería fijo; solo cambiaría si hay algo muy importante.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q5" value="ocasional">
        <div class="option-card">
          <div class="option-icon">📅</div>
          <div class="option-title">Ocasionalmente</div>
          <div class="option-desc">Cada mes o dos meses actualizaría productos o precios.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q5" value="frecuente">
        <div class="option-card">
          <div class="option-icon">🔄</div>
          <div class="option-title">Con frecuencia</div>
          <div class="option-desc">Semana a semana agregaría productos o publicaría contenido.</div>
        </div>
      </label>
    </div>
    <p class="error-msg" id="err-5">Por favor selecciona una opción.</p>
    <div class="btn-row">
      <button class="btn-back" onclick="prevStep(5)">← Atrás</button>
      <button class="btn-next" onclick="nextStep(5)">Continuar →</button>
    </div>
  </div>

  <!-- PASO 6 -->
  <div class="step" id="step-6">
    <div class="step-number">Paso 06</div>
    <h2>¿Cómo describirías la imagen de tu marca?</h2>
    <p class="hint">Selecciona la que más se acerque a tu visión.</p>
    <div class="options cols-2" id="q6">
      <label class="option">
        <input type="radio" name="q6" value="moderno">
        <div class="option-card">
          <div class="option-icon">⬛</div>
          <div class="option-title">Moderno y minimalista</div>
          <div class="option-desc">Líneas limpias, sin adornos, espacios en blanco.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q6" value="calido">
        <div class="option-card">
          <div class="option-icon">🪵</div>
          <div class="option-title">Cálido y artesanal</div>
          <div class="option-desc">Madera, texturas naturales, calidez del hogar.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q6" value="lujo">
        <div class="option-card">
          <div class="option-icon">💎</div>
          <div class="option-title">Premium y elegante</div>
          <div class="option-desc">Alto standing, lujo accesible, presentación impecable.</div>
        </div>
      </label>
      <label class="option">
        <input type="radio" name="q6" value="practico">
        <div class="option-card">
          <div class="option-icon">✅</div>
          <div class="option-title">Funcional y accesible</div>
          <div class="option-desc">Lo importante es que sea fácil de usar y los precios estén claros.</div>
        </div>
      </label>
    </div>
    <p class="error-msg" id="err-6">Por favor selecciona una opción.</p>
    <div class="btn-row">
      <button class="btn-back" onclick="prevStep(6)">← Atrás</button>
      <button class="btn-next" onclick="nextStep(6)">Continuar →</button>
    </div>
  </div>

  <!-- PASO 7 -->
  <div class="step" id="step-7">
    <div class="step-number">Paso 07</div>
    <h2>¿Hay algo más que quieras que sepamos sobre tu negocio o tu sitio ideal?</h2>
    <p class="hint">Referencias, ideas, preocupaciones… todo ayuda.</p>
    <textarea class="text-area" id="q7" placeholder="Ej: Me gustaría que fuera similar a IKEA pero más personal, o quiero que se vea lujoso sin ser intimidante…" rows="5"></textarea>

    <div class="divider"></div>

    <div class="step-number" style="margin-top:0">Datos de contacto</div>
    <p class="hint" style="margin-bottom:18px">Para enviarte un resumen de tus respuestas.</p>
    <div style="display:grid; gap:12px;">
      <input class="text-area" style="min-height:auto;padding:14px 18px;" type="text" id="nombre" placeholder="Tu nombre o el nombre del negocio">
      <input class="text-area" style="min-height:auto;padding:14px 18px;" type="email" id="email" placeholder="Correo electrónico (opcional)">
    </div>

    <div class="btn-row">
      <button class="btn-back" onclick="prevStep(7)">← Atrás</button>
      <button class="btn-next" onclick="finalizarEncuesta()">Ver mis resultados ✦</button>
    </div>
  </div>

  <!-- RESULTADOS -->
  <div class="results-wrap" id="results">
    <div class="results-header">
      <div class="checkmark">✦</div>
      <h2>¡Gracias por completar la encuesta!</h2>
      <p>Aquí está un resumen de tus respuestas y una recomendación inicial para tu proyecto web.</p>
    </div>

    <div class="recommendation-box" id="recBox">
      <div class="rec-badge" id="recBadge">Recomendación</div>
      <h3 id="recTitle">Analizando…</h3>
      <p id="recDesc"></p>
    </div>

    <div class="results-card" id="resultSummary"></div>

    <button class="btn-restart" onclick="reiniciar()">↺ Reiniciar encuesta</button>
  </div>

</div>

<script>
  const TOTAL = 7;
  let current = 1;

  const labels = {
    q1: { ventas:'Vender en línea', catalogo:'Mostrar catálogo', marca:'Posicionar marca', contacto:'Generar contactos' },
    q2: { familias:'Familias / hogar', oficinas:'Empresas / oficinas', disenadores:'Diseñadores de interiores', constructoras:'Constructoras' },
    q3: { menos10:'Menos de 10', '10a50':'10 a 50', mas50:'Más de 50' },
    q4: { galeria:'Galería', cotizacion:'Cotización', whatsapp:'WhatsApp', blog:'Blog', mapa:'Mapa', carrito:'Carrito' },
    q5: { nunca:'Casi nunca', ocasional:'Ocasionalmente', frecuente:'Con frecuencia' },
    q6: { moderno:'Moderno / minimalista', calido:'Cálido / artesanal', lujo:'Premium / elegante', practico:'Funcional / accesible' },
  };

  function updateProgress(step) {
    const pct = ((step - 1) / TOTAL) * 100;
    document.getElementById('progressBar').style.width = pct + '%';
    document.getElementById('progressLabel').textContent = `Paso ${step} de ${TOTAL}`;
  }

  function getRadio(name) {
    const el = document.querySelector(`input[name="${name}"]:checked`);
    return el ? el.value : null;
  }

  function getChecks(name) {
    return [...document.querySelectorAll(`input[name="${name}"]:checked`)].map(e => e.value);
  }

  function showError(id) {
    document.getElementById('err-' + id).style.display = 'block';
  }

  function hideError(id) {
    document.getElementById('err-' + id).style.display = 'none';
  }

  function nextStep(from) {
    let valid = true;

    if (from === 1) { if (!getRadio('q1')) { showError(1); valid=false; } else hideError(1); }
    if (from === 2) { if (!getChecks('q2').length) { showError(2); valid=false; } else hideError(2); }
    if (from === 3) { if (!getRadio('q3')) { showError(3); valid=false; } else hideError(3); }
    if (from === 4) { if (!getChecks('q4').length) { showError(4); valid=false; } else hideError(4); }
    if (from === 5) { if (!getRadio('q5')) { showError(5); valid=false; } else hideError(5); }
    if (from === 6) { if (!getRadio('q6')) { showError(6); valid=false; } else hideError(6); }

    if (!valid) return;

    document.getElementById('step-' + from).classList.remove('active');
    current = from + 1;
    document.getElementById('step-' + current).classList.add('active');
    updateProgress(current);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  function prevStep(from) {
    document.getElementById('step-' + from).classList.remove('active');
    current = from - 1;
    document.getElementById('step-' + current).classList.add('active');
    updateProgress(current);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  function finalizarEncuesta() {
    const r = {
      objetivo: getRadio('q1'),
      clientes: getChecks('q2'),
      productos: getRadio('q3'),
      funciones: getChecks('q4'),
      actualizacion: getRadio('q5'),
      imagen: getRadio('q6'),
      notas: document.getElementById('q7').value,
      nombre: document.getElementById('nombre').value,
    };

    // Recomendación lógica
    let tipo = '', desc = '';

    const needsCatalog = r.productos !== 'menos10' || r.objetivo === 'catalogo' || r.funciones.includes('carrito');
    const highUpdate = r.actualizacion === 'frecuente';
    const sellsOnline = r.objetivo === 'ventas' || r.funciones.includes('carrito');

    if (sellsOnline && needsCatalog) {
      tipo = 'Tienda en línea con catálogo completo';
      desc = 'Basado en tus respuestas, te conviene un sitio tipo e-commerce con catálogo navegable, carrito de compras y sistema de pagos. Necesitarás un CMS robusto (Shopify, WooCommerce o similar) dado que planeas actualizar frecuentemente.';
    } else if (needsCatalog && !sellsOnline) {
      tipo = 'Sitio multipage con catálogo y contacto';
      desc = 'Un sitio con varias secciones: inicio, catálogo de productos por categoría, galería y formulario de cotización. No necesitas carrito de compras, solo que los clientes encuentren tus productos y te contacten. Un CMS básico sería suficiente si actualizas con regularidad.';
    } else {
      tipo = 'Landing page profesional de alto impacto';
      desc = 'Dado tu catálogo pequeño y objetivo de generar contactos o posicionar tu marca, una landing page bien diseñada puede ser muy efectiva. Incluiría secciones: hero, propuesta de valor, productos destacados, testimonios y contacto. Simple de mantener, rápida de cargar y de alto impacto visual.';
    }

    document.getElementById('recBadge').textContent = highUpdate ? '⚡ Requiere CMS' : '✦ Recomendación';
    document.getElementById('recTitle').textContent = tipo;
    document.getElementById('recDesc').textContent = desc;

    // Resumen
    const q = [
      { q: 'Objetivo principal', a: labels.q1[r.objetivo] || '—' },
      { q: 'Clientes objetivo', a: r.clientes.map(v => labels.q2[v]).join(', ') || '—' },
      { q: 'Número de productos', a: labels.q3[r.productos] || '—' },
      { q: 'Funciones deseadas', a: r.funciones.map(v => labels.q4[v]).join(', ') || '—' },
      { q: 'Frecuencia de actualización', a: labels.q5[r.actualizacion] || '—' },
      { q: 'Imagen de marca', a: labels.q6[r.imagen] || '—' },
    ];

    let html = '<h3>Resumen de respuestas</h3>';
    q.forEach(item => {
      html += `<div class="result-row"><span class="result-q">${item.q}</span><span class="result-a">${item.a}</span></div>`;
    });

    if (r.notas) {
      html += `<div style="margin-top:16px"><div class="result-q" style="font-weight:500;color:var(--walnut);margin-bottom:6px">Notas adicionales:</div><div style="font-size:13px;color:var(--walnut);line-height:1.7;font-weight:300">${r.notas}</div></div>`;
    }

    if (r.nombre) {
      html += `<div style="margin-top:16px;padding-top:12px;border-top:1px solid var(--linen);font-size:12px;color:var(--oak)">Respondido por: <strong>${r.nombre}</strong></div>`;
    }

    document.getElementById('resultSummary').innerHTML = html;

    // Ocultar pasos y mostrar resultados
    document.getElementById('step-7').classList.remove('active');
    document.getElementById('results').style.display = 'block';
    document.getElementById('progressBar').style.width = '100%';
    document.getElementById('progressLabel').textContent = '¡Completado!';
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  function reiniciar() {
    // Reset all inputs
    document.querySelectorAll('input[type=radio], input[type=checkbox]').forEach(el => el.checked = false);
    document.getElementById('q7').value = '';
    document.getElementById('nombre').value = '';
    document.getElementById('email').value = '';

    document.getElementById('results').style.display = 'none';
    document.getElementById('step-7').classList.remove('active');
    current = 1;
    document.getElementById('step-1').classList.add('active');
    updateProgress(1);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  updateProgress(1);
</script>
</body>
</html>