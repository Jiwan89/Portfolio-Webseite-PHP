<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
} else {
    $name = $email = $message = "";
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jiwan Osman – Portfolio</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>
<body>

<header>
  <h1>Jiwan Osman</h1>
  <p>💻 Softwareentwickler aus Berlin – spezialisiert auf C#, Python & Web</p>
  <div class="image-container">
    <img src="/Bilder/Bild.png" alt="Jiwan Osman Portrait">
  </div>
</header>

<nav>
  <a href="#ueber">Über mich</a>
  <a href="#beruf">Beruf</a>
  <a href="#weiterbildung">IT & Weiterbildung</a>
  <a href="#sprachen">Sprachen</a>
  <a href="#kontakt">Kontakt</a>
</nav>

<main>

  <section id="ueber">
    <h2>👤 Über mich</h2>
    <div class="grid">
      <div><strong>Geburtsdatum:</strong><br>28.01.1989, Amouda (Syrien)</div>
      <div><strong>Adresse:</strong><br>Onkel-Tom-Straße 103, 14169 Berlin</div>
      <div><strong>Telefon:</strong><br>+49 177 692 3124</div>
      <div><strong>E-Mail:</strong><br>Jwano45@gmail.com</div>
    </div>
  </section>

  <section id="beruf">
    <h2>🏗️ Berufserfahrung</h2>
    <ul>
      <li>05/2022–10/2023: Sabbatical / Private Familienunterstützung</li>
      <li>09/2021–05/2022: Projektmanagement Bau – KVL Bauconsult GmbH</li>
      <li>06/2021–08/2021: Zeichner – Scarraplan Architecture Firm</li>
      <li>06/2020–01/2021: Zeichner – Architekturatelier Romy Hornschuh</li>
      <li>08/2017–06/2020: Bauzeichner – R&P Ruffert Ingenieurbüro</li>
    </ul>
  </section>

  <section id="weiterbildung">
    <h2>🎓 IT-Kenntnisse & Weiterbildungen</h2>
    <ul>
      <li>02/2025: C# Zertifizierung – IBB</li>
      <li>10/2024: Python (PCAP) – Comcave</li>
      <li>08/2024: Python (PCEP) – Comcave</li>
      <li>06/2024: Java Developer (Oracle) – Comcave</li>
      <li>02/2024: PHP I & II – Comcave</li>
      <li>12/2023: HTML & CSS – Comcave</li>
    </ul>
    <p><strong>Tools & Sprachen:</strong> HTML, CSS, PHP, Java, Python, C#, AutoCAD, Allplan, MS Office</p>
  </section>

  <section id="sprachen">
    <h2>🌍 Sprachen</h2>
    <div class="grid">
      <div>🇩🇪 Deutsch – C1</div>
      <div>🇬🇧 Englisch – gut</div>
      <div>🇸🇾 Arabisch – Muttersprache</div>
      <div>🇹🇷 Türkisch – Mittelstufe</div>
      <div>🇰🇷 Kurdisch – Muttersprache</div>
    </div>
  </section>

  <section id="kontakt">
    <h2>Kontaktformular</h2>
    <form action="CV.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>

      <label for="email">E-Mail:</label>
      <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

      <label for="message">Nachricht:</label>
      <textarea id="message" name="message" required><?php echo $message; ?></textarea>

      <button type="submit">Absenden</button>
    </form>
  </section>

  <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <section class="result-section">
      <h2>Formulardaten:</h2>
      <p><strong>Name:</strong> <?php echo $name; ?></p>
      <p><strong>E-Mail:</strong> <?php echo $email; ?></p>
      <p><strong>Nachricht:</strong> <?php echo nl2br($message); ?></p>
    </section>
  <?php endif; ?>

</main>

<footer>
  &copy; 2025 Jiwan Osman – Mit ❤️ gemacht in HTML & CSS
</footer>

</body>
</html>
