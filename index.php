<!DOCTYPE html>
<html>
  <head>
    <title>Hakkımda</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <header>
      <h1>Serhat Kemal Portfolio</h1>
    </header>

    <nav>
      <ul>
        <li><a href="#hakkinda">About Me</a></li>
        <li><a href="#egitimler">Education</a></li>
        <li><a href="#deneyimler">Experiences</a></li>
        <li><a href="#iletisim">Contact</a></li>
      </ul>
    </nav>

    <main>
      <section id="banner">
        <div id="black"></div>

        <div id="icerik">
          <h2>Serhat Kemal</h2>
          <hr width="300" align="left">
          <p>
            Hello, my name is Serhat Kemal, and I am a second-year computer engineering student. I have been immersed in technology for a long time, and for over a year now, I have been involved in web development. I am considering continuing my career as a Fullstack Developer. I enjoy working with technologies such as Node.js, Express.js, and React.js when programming in my projects. Additionally, I have experience with databases such as MySQL, PostgreSQL, MongoDB, and Redis, as well as keeping up with the latest web technologies.
          </p>
        </div>
      </section>

      <section id="hakkinda">
        <h2>About Me</h2>
        <p>
          I graduated from Atakum Bahçeşehir High School. After that, I started studying Computer Engineering at Bandırma 17 Eylül University. In the middle of my second year, I began working as a Back-end Developer Intern at PATH Software and Development House. After about 4 months, I started working as a Freelancer. I am still learning new things every day. I am eager to start working as a developer in the industry.
        </p>
      </section>

      <section id="egitimler">
        <h2>Education</h2>
        <p>Atakum Bahçeşehir High School</p>
        <p>Bandırma 17 Eylül University Computer Engineering</p>
      </section>

      <section id="deneyimler">
        <h2>Experiences</h2>
        <p>January 2023 - June 2023</p>
        <p>Back-End Developer Intern (PATH Software And Development House)</p>
      </section>

      <section id="iletisim">
        <h2>Contact</h2>
        <p>
          TODO: BURASI DOLDURULACAK
        </p>
      </section>

      <section id="yorumlar">
        <h2>Comments</h2>
        <div id="yorumlar-listesi">
          <?php
            // Yorumları sorgula ve görüntüle
            include 'yorumlari_goster.php';
          ?>
        </div>

        <form id="yorum-ekle-form" action="yorum_ekle.php" method="POST">
          <h3>Leave a Comment</h3>
          <div>
            <label for="isim">Name:</label>
            <input
              type="text"
              id="isim"
              name="isim"
              placeholder="İsminiz"
              required
              class="form-control"
            />
          </div>
          <div>
            <label for="mesaj">Mesajınız:</label>
            <textarea
              name="mesaj"
              id=""
              cols="20"
              placeholder="Mesajınızı yazın"
              required
              class="form-control"
            ></textarea>
          </div>
          <button type="submit" class="btn">Gönder</button>
        </form>
      </section>
    </main>

    <footer>
      <p>&copy; 2023 Serhat Kemal</p>
    </footer>
  </body>
</html>
