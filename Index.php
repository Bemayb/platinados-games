<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Platinados Games</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Doto:wght@614&family=Kode+Mono:wght@400..700&family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <link href="CSS/Style1.css" rel="stylesheet" />
  </head>
  <body>
    <header>
      <div class="nav-container">
        <div class="logo-search">
          <div class="logo-img">
            <img
              src="Imagenes/platinados-logo.png"
              alt="Platinados Logo"
              class="logo-img"
            />
          </div>
          <h1 class="letrakode-h1">Platinados Games</h1>
          <div class="search-box">
            <input type="text" placeholder="Buscar Juego" />
          </div>
        </div>
        <div class="auth-buttons">
    <?php if(isset($_SESSION['user_name'])): ?>
        <div class="user-info">
            <span>Bienvenido, <?php echo $_SESSION['user_name']; ?></span>
            <a href="PHP/logout.php"class="logout-btn">Cerrar Sesión</a>
        </div>
    <?php else: ?>
        <button onclick="window.location.href='registro.html'">Registro</button>
        <button onclick="window.location.href='login.html'">Iniciar Sesión</button>
    <?php endif; ?>
</div>
        
      </div>

      <nav class="games-nav">
        <a href="LoL.html">LoL</a>
        <a href="Valorant.html">Valorant</a>
        <a href="Counter.html">Counter Strike</a>
        <a href="R6.html">R6</a>
        <a href="FIFA.html">FIFA</a>
        <a href="gears.html">Gears</a>
        <a href="halo.html">Halo</a>

      </nav>
    </header>

    <section class="hero">
      <h2 class="letrakode_nuevo-h1">
        Unete a nuestro programa mensual, para asesoría y tutorías E-sports
      </h2>

      <div class="slider">
        <div class="slides">
          <input type="radio" name="radio-btn" id="radio1" checked />
          <input type="radio" name="radio-btn" id="radio2" />
          <input type="radio" name="radio-btn" id="radio3" />
          <input type="radio" name="radio-btn" id="radio4" />
          <input type="radio" name="radio-btn" id="radio5" />

          <div class="slide first">
            <img
              src="Imagenes/Juanes_Sickly_Valorant_Col.webp"
              alt="Gaming 1"
            />
          </div>
          <div class="slide">
            <img src="Imagenes/Jugadores_Speed_Col.jpeg" alt="Gaming 2" />
          </div>
          <div class="slide">
            <img src="Imagenes/Roster_Fem_Free.webp" alt="Gaming 3" />
          </div>
          <div class="slide">
            <img src="Imagenes/SantiagoD_Jugador_Lol.jpg" alt="Gaming 4" />
          </div>
          <div class="slide">
            <img src="Imagenes/Seleccion_Efifa_Col.webp" alt="Gaming 5" />
          </div>
        </div>
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
          <label for="radio5" class="manual-btn"></label>
        </div>
      </div>
    </section>
    <main class="content-section">
      <section class="tutors">
        <h2 class="letrakode_nuevo-h1">Nuestros tutores</h2>
        <div class="tutors-grid">
          <div class="tutor-card">
            <div class="tutor-img">
              <img src="Imagenes/Tutor1.jpeg" alt="Tutor 1" />
            </div>
            <div class="tutor-info">
              <h3>Mitzi Cruz</h3>
              <p class="nickname">@madameporo</p>
              <p class="specialty">Especialista en Indies</p>
              <p class="specialty">Juego más jugado: Don's Starve</p>
              <div class="social-links">
                <a href="https://www.instagram.com/madameporo/"
                  ><img src="Imagenes/Logo_Instagram.png" alt="Instagram"/> Instagram</a>
                <a href="https://www.twitch.tv/madameporo"
                  ><img src="Imagenes/LogoTwitch.png" alt="Twitch"/>Twitch</a>
              </div>
            </div>
          </div>
          <div class="tutor-card">
            <div class="tutor-img">
              <img src="Imagenes/Tutor4.jpg" alt="Tutor 2" />
            </div>
            <div class="tutor-info">
              <h3>Vampy Saenz</h3>
              <p class="nickname">@LordVampy</p>
              <p class="specialty">Especialista en Halo 2 & MMORPG</p>
              <p class="specialty">Juego más jugado: Overwatch</p>
              <div class="social-links">
                <a href="https://twitter.com/LordVampy"
                  ><img src="Imagenes/Logotwitterx.png" alt="Twitter"/>Twitter</a>
                <a href="https://www.instagram.com/vampysaenz/"
                  ><img src="Imagenes/Logo_Instagram.png" alt="Instagram"/>Instagram</a>
              </div>
            </div>
          </div>
          <div class="tutor-card">
            <div class="tutor-img">
              <img src="Imagenes/Tutor3.jpeg" alt="Tutor 3" />
            </div>
            <div class="tutor-info">
              <h3>Santiago Galvis</h3>
              <p class="nickname">@dvkeii</p>
              <p class="specialty">Especialista en Shooters</p>
              <p class="specialty">Juego más jugado: Gears</p>
              <div class="social-links">
                <a href="https://twitter.com/llDvke"
                  ><img src="Imagenes/Logotwitterx.png" alt="Twitter"/> Twitter</a>
                <a href="https://www.twitch.tv/dvkezzz"
                  ><img src="Imagenes/LogoTwitch.png" alt="Twitch"/>Twitch</a>
                <a href="https://www.instagram.com/dvkeii/"
                  ><img src="Imagenes/Logo_Instagram.png" alt="Instagram"/>Instagram</a>
              </div>
            </div>
          </div>
          <div class="tutor-card">
            <div class="tutor-img">
              <img src="Imagenes/Tutor4.png" alt="Tutor 4" />
            </div>
            <div class="tutor-info">
              <h3>Mosley</h3>
              <p class="nickname">@imosleey</p>
              <p class="specialty">Especialista en Supervivencia & Shooters</p>
              <p class="specialty">Juego más jugado: Halo</p>
              <div class="social-links">
                <a href="https://twitter.com/imosleey"
                  ><img src="Imagenes/Logotwitterx.png" alt="Twitter"/>Twitter</a>
                <a href="https://www.twitch.tv/imosleey"
                  ><img src="Imagenes/LogoTwitch.png" alt="Twitch"/> Twitch</a>
                <a href="https://www.instagram.com/imosleey/"
                  ><img src="Imagenes/Logo_Instagram.png" alt="Instagram"/>Instagram</a>
              </div>
            </div>
          </div>
        </div>
      </section>
        <section class="mashup">
          <h2 class="letrakode_nuevo-h1">Próximos Eventos</h2>
          <div class="eventos-grid">
              <div class="evento-card">
                  <a href="https://latam.battlegrounds.pubg.com/es/" target="_blank">
                      <img src="Imagenes/pubg-tournament.png" alt="PUBG Tournament">
                      <h3>PUBG Tournament LATAM</h3>
                      <p>Torneo oficial de PUBG</p>
                  </a>
              </div>
      
              <div class="evento-card">
                  <a href="https://lolesports.com/" target="_blank">
                      <img src="Imagenes/lol-championship.svg" alt="LoL Championship">
                      <h3>League of Legends Championship</h3>
                      <p>Campeonato Mundial de LoL</p>
                  </a>
              </div>
      
              <div class="evento-card">
                  <a href="https://www.eslgaming.com/" target="_blank">
                      <img src="Imagenes/esl-tournament.svg" alt="ESL Tournament">
                      <h3>ESL Pro League</h3>
                      <p>Torneos profesionales de CS:GO</p>
                  </a>
              </div>
          </div>
        </section>
        <section class="sitios">
          <h2 class="letrakode_nuevo-h1">Sitios presenciales</h2>
          <div class="eventos-grid">
              <div>                                   
                  <iframe 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.545256924251!2d-74.05579392622145!3d4.674844041883674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a8d2e347201%3A0x1d905632792a6cd3!2sETB%20Gaming%20Center%20Chico!5e0!3m2!1ses!2sco!4v1734179285980!5m2!1ses!2sco">
                  </iframe>
                      <h3 class ="h3">ETB CENTER GAMING</h3>
                      <p class ="h3">Chico Norte</p>
                  </a>
              </div>
      
              <div>
                                   
                  <iframe 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.601798695852!2d-74.0656167262215!3d4.664870741969617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bf4cc5a7e63%3A0x434614b361560d1b!2sMovistar%20GameClub%20by%20SGG!5e0!3m2!1ses!2sco!4v1734179474715!5m2!1ses!2sco">

                  </iframe>
                      <h3 class ="h3">MOVISTAR CENTER GAMING</h3>
                  </a>
              </div>
              </div>
          </div>
        </section>
      </div>
    </main>
  </body>
</html>
