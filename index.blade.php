<?php
// public/chegou.php
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Chegou aqui</title>
  <style>
    :root { --bg:#0f1220; --ink:#e9ecf1; --accent:#7aa2ff; --cape:#161a2e; }
    * { box-sizing: border-box; }
    body {
      margin: 0; min-height: 100svh; display: grid; place-items: center;
      background: radial-gradient(1000px 600px at 60% 20%, #1a1f3d 0, var(--bg) 70%);
      color: var(--ink); font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
    }
    .card {
      width: min(920px, 92vw);
      background: #12152a; border: 1px solid #1f2546;
      border-radius: 20px; padding: 28px; box-shadow: 0 10px 30px rgba(0,0,0,.35);
    }
    h1 { margin: 0 0 16px; font-size: clamp(28px, 4.5vw, 44px); letter-spacing: .5px; }
    p { margin: 0 0 18px; color: #b9c2e2 }
    .art { width: 100%; display: block; margin-top: 8px; background: linear-gradient(#0e1226, #0b0f21); border-radius: 16px; }
    .hint { margin-top: 10px; font-size: 13px; color: #9aa7d1 }
    a { color: var(--accent); text-decoration: none; }
    a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <main class="card">
    <h1>chegou aqui</h1>
    <p>Se você está vendo isto, o servidor já está servindo arquivos de <code>public/</code>.</p>

    <!-- Ilustração SVG de um herói genérico “homem-morcego” -->
    <svg class="art" viewBox="0 0 1200 600" role="img" aria-label="Herói genérico estilo homem-morcego">
      <defs>
        <radialGradient id="moon" cx="75%" cy="20%" r="18%">
          <stop offset="0%" stop-color="#eaf0ff"/>
          <stop offset="70%" stop-color="#cfd9ff"/>
          <stop offset="100%" stop-color="#9fb1ff"/>
        </radialGradient>
        <linearGradient id="capeGrad" x1="0" x2="0" y1="0" y2="1">
          <stop offset="0%" stop-color="#1b2040"/>
          <stop offset="100%" stop-color="#0c1026"/>
        </linearGradient>
      </defs>

      <!-- Céu e lua -->
      <rect width="1200" height="600" fill="url(#capeGrad)"/>
      <circle cx="930" cy="120" r="90" fill="url(#moon)" opacity=".9"/>

      <!-- Silhueta da cidade -->
      <g fill="#0a0e20">
        <rect x="0" y="470" width="1200" height="130"/>
        <rect x="90" y="400" width="90" height="200"/>
        <rect x="200" y="430" width="130" height="170"/>
        <rect x="380" y="410" width="110" height="190"/>
        <rect x="540" y="435" width="85" height="165"/>
        <rect x="680" y="420" width="95" height="180"/>
        <rect x="820" y="440" width="120" height="160"/>
      </g>

      <!-- Herói (silhueta) -->
      <g transform="translate(300,120) scale(1.1)">
        <!-- capa -->
        <path d="M140,230
                 C 40,260 10,340 0,410
                 C 90,360 120,390 170,420
                 C 220,390 250,360 340,410
                 C 330,340 300,260 200,230 Z"
              fill="url(#capeGrad)"/>

        <!-- corpo -->
        <path d="M160,130 h80 v150 a40,40 0 0 1 -80,0 z" fill="#11162b"/>

        <!-- cabeça + orelhas -->
        <path d="M180,110 l15,-22 l15,22 a38,38 0 1 1 -30,0 z" fill="#0f1430"/>

        <!-- olhos -->
        <path d="M188,150 q8,-6 16,0 q-8,6 -16,0 Z" fill="#f7fbff" opacity=".9"/>

        <!-- símbolo simples no peito (morcego estilizado) -->
        <g transform="translate(200,210) scale(0.9)">
          <path d="M0,0
                   c 28,-20 44,-10 60,0
                   c -10,4 -16,10 -28,18
                   c -12,-8 -18,-14 -32,-18 z"
                fill="#7aa2ff"/>
        </g>
      </g>
    </svg>

    <p class="hint">
      Dica: para usar como página inicial temporária no Azure, coloque este arquivo em <code>public/index.php</code>
      (ou acesse <code>/chegou.php</code> diretamente).
    </p>
  </main>
</body>
</html>
