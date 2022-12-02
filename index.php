<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site permettant de chercher des stades de foot autour du monde">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>BeachFootball</title>
    
</head>
<body>
    <section>
      <header>
          <img src="./assets/logo.png" alt="Logo de BeachFootball">
          <ul>
              <li><a href="#">Discover</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">How it works</a></li>
          </ul>
          <div id="boutonlogin"><a href="">Log In</a></div>
        </header>
        <div id="partietexte">
            <h2>Make New Friends Over</h2>
            <h1>Beach Football</h1>
            <p>Challenge your friends and play together a game of Beach Football at your nearest beach.</p>
            <form>
                <select title="choixarene" name="users" onchange="showUser(this.value)">
                    <option value="">Select an Arena:</option>
                    <option value="1">Costa del Sol - El Salvador</option>
                    <option value="2">Nazaré - Portugal</option>
                    <option value="3">Figueira da Foz - Portugal</option>
                    <option value="4">Alajuela - Costa Rica</option>
                    <option value="5">Saly - Sénégal</option>
                    <option value="6">Virginia Beach - USA</option>
                    <option value="7">Rio de Janeiro - Brésil</option>
                    <option value="8">Chisinau - Moldavie</option>
                    <option value="9">Dubaï - UAE</option>
                </select>
            </form>
            <div id="txtHint"></div>
            <div id="textarenepopulaires">
                <span>Popular Beach Arenas: Virginia Beach - USA</span>
            </div> 
        </div>
        
        <img id="palmier" src="assets/tree.png" alt="Dessin d'un palmier">
        
    </section>
    <script src="./script.js"></script>
</body>
</html>