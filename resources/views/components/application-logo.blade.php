<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 100" width="300" height="100">
  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:#6a82fb;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#fc5c7d;stop-opacity:1" />
    </linearGradient>
  </defs>


  <image href="{{asset('img/ABY.png')}}" x="10" y="-30" width="270" height="150" />
</svg> -->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="50 40 200 50" width="400" height="200">
  <defs>
    <!-- ClipPath para recortar la imagen en un círculo más grande -->
    <clipPath id="clipCircle">
      <circle cx="200" cy="90" r="90" />
    </clipPath>
  </defs>

  <!-- Imagen recortada con el círculo -->
  <image 
    href="homeimg/LogoLaPapa.png" 
    x="90" 
    y="12" 
    width="120" 
    height="120" 
    clip-path="url(#clipCircle)" 
  />
</svg>
