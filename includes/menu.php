<div class="userlogado1">
    <p>Siscart</p>
</div>
<div class="userlogado2">
    <p>Siscart</p>
</div>
<nav class="menu">
    <ul>
        <li accesskey="S" class="menu menu-link" data-load-page="desvincular_daje_page.php"><a><i class="fas fa-file-export"></i> De<u>s</u>vincular Daje</a></li>
        <li accesskey="C" class="menu menu-link" data-load-page="consulta_daje_page.php"><a><i class="fas fa-file-import"></i> <u>C</u>onsultar Daje</a></li>
        <li accesskey="R" class="menu menu-link" data-load-page="reenviar_daje_page.php"><a><i class="fas fa-file-upload"></i> <u>R</u>eenviar Daje</a></li>
        <li class="menu menu-link" id="codretorno" data-load-page="cods_retorno_page.php"><a><i class="fas fa-project-diagram"></i></a></li>
        <label class="theme-toggle-container">
        <input name="theme" type="checkbox" class="hidden animating">
        <span class="theme-toggle"></span>
        <strong class="hidden">Alterar tema do site</strong>
      </label>
        <div class="tools">
            <span data-tooltip4="Sair do sistema"><a accesskey="q" href="javascript: abrir2();"><button type="sair" class="btnsair">✖️</button></a></span>
            <div class="circleoff" style="animation-delay: 0s"></div>
            <div class="circleoff" style="animation-delay: 0.8s"></div>
            <div class="circleoff" style="animation-delay: 1.8s"></div>
            <div class="circleon" style="animation-delay: 0s"></div>
            <div class="circleon" style="animation-delay: 0.8s"></div>
            <div class="circleon" style="animation-delay: 1.8s"></div>
            <span data-tooltip2="Parâmetros do servidor">
                <div class="tooltip">
                    <span class="tooltiptext">Parametrizar configurações: ⚙️
                </div><a accesskey="g" href="javascript: abrir();"><button class="gear">⚙️</button></a>
            </span>
            </span>
        </div>
        </div>
    </ul>
</nav>

<!-- 
<script>
 return (
    <div className={darkMode ? "dark-mode" : "light-mode"}>
      <nav>
        <div className="toggle-container">
          <span style={{ color: darkMode ? "grey" : "yellow" }}>☀︎</span>
          <span className="toggle">
            <input
              checked={darkMode}
              onChange={() => setDarkMode(prevMode => !prevMode)}
              id="checkbox"
              className="checkbox"
              type="checkbox"
            />
            <label htmlFor="checkbox" />
          </span>
          <span style={{ color: darkMode ? "slateblue" : "grey" }}>☾</span>
          {/* <button onClick={() => setDarkMode(prevMode => !prevMode)}>
          Toggle
        </button> */}
        </div>
      </nav>
      <main>
        <h1>{darkMode ? "Dark Mode" : "Light Mode"}</h1>
        <h2>Toggle the switch to see some magic happen!</h2>
      </main>
    </div>
  );
    </script> -->