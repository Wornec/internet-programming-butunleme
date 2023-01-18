<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ATLETİZİM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

      <header>
          <a href="javascript:void(0);" onclick="ac();" id="acdgm">☰</a>
          <a href="javascript:void(0);" onclick="kapat();" id="kapatdgm">☰</a>
      </header>

      <aside id="menu">
        <h1>ATLETİZİM<br>TR</h1>
        <ul>
          <li><a href="#anasayfa">Ana Sayfa</a></li>
          <li><a href="#hakkimizda">Hakkımızda</a></li>
          <li><a href="#hizmetlerimiz">Hizmetlerimiz</a></li>
          <li><a href="#projelerimiz">Projelerimiz</a></li>
          <li><a href="#iletisim">İletişim</a></li>
        </ul>
      </aside>

      <main id="icerik">
        <section id="anasayfa">
          <h1>ATLETİZİM</h1>
          
        
          
          
          
        
        <section id="hakkimizda">
          <h2>Hakkımızda.</h2>
          <hr>
          <div class="temizle"></div>
          
          <p>Türkiye Atletizm Federasyonu, atletizm sporunun Türkiye'deki yönetim teşkilatı olan spor federasyonu. 1922'de Türkiye İdman Cemiyetleri İttifakı bünyesinde kurulan Türkiye Atletizm Federasyonu, aynı yıl Uluslararası Atletizm Federasyonları Birliği üyeliğine</p>
        </section>

        <section id="hizmetlerimiz">
          <h2>Hizmetlerimiz.</h2>
          <hr>
          <div class="temizle"></div>
          
          <ul>
            <li>ATLETİZM VE BRANŞLARI

Atletizm, koşular, atmalar, atlamalar, çoklu branşlar, kır koşuları (kros), dağ ve yamaç koşularından oluşan temel bir spor dalıdır. Modern atletizmde yer alan branşlar şu şekildedir:</li>
            <li>KOŞULAR
Kendi içinde sprint, orta mesafeler, yol koşuları, yürüyüş, uzun mesafeler, engelli koşular ve bayrak yarışmaları olarak kategorilere ayrılır. Stadyumlardaki sekiz kulvarlı standart pistte gerçekleşen bu yarışmalar şunlardır:</li>
            <li>Sprint ve engelli koşular: 100 metre, 200 metre, 400 metre, 110 metre engelli (erkekler), 100 metre engelli (kadınlar), 400 metre engelli</li>
            <li>Orta mesafeler: 800 metre, 1500 metre, 1 mil</li>
            <li>Uzun mesafeler:  3000 metre, 5000 metre, 10,000 metre, 3000 metre su engelli</li>
            <li>Bayrak yarışmaları: 4×100 metre, 4×400 metre. Ayrıca Olimpik olmayan 4×200 metre, 4×800 metre, 4×1500 metre ve 100-200-300-400 metre karışımından oluşan İsveç bayrak</li>
            <li>Yol koşuları: Maraton (42.195 metre), Yarı Maraton (21.097 metre), 10 km, 15 km.</li>
            <li>YÜRÜYÜŞ:
Yolda ve stadyumda yapılabilir. Büyük şampiyonalarda yürüyüş müsabakaları asfaltta yapılmaktadır. Disiplinler: 5 kilometre, 10 kilometre, 20 kilometre, 50 kilometre, 5000 metre pist, 10,000 metre pist, 20,000 metre pist.</li>
            <li>ATLAMALAR:
Atletizmde dört temel atlama branşı vardır. Üç adım atlama, uzun atlama, sırıkla atlama ve yüksek atlama. Atlama yarışmalarının yüksek sürat koşu içeren ikisinde (üç adım ve uzun), tıpkı sprint yarışmalarındaki gibi rüzgar ölçümü gerçekleştirilir.</li>
            <li>ÇOKLU BRANŞLAR:
Açık havada erkeklerin dekatlon (onlu yarışma), kadınların ise heptatlon (yedili yarışma) olarak mücadele verdiği branş. Salonda erkekler heptatlon (yedili), kadınlar ise pentatlon (beşli) yarışmaya katılır. Açık hava yarışmaları ve salondaki heptatlon iki gün sürer, kadınlar pentatlon ise tek günde tamamlanır.</li>
          </ul>
        </section>

        <section id="projelerimiz">
          <h2>Projelerimiz.</h2>
          <hr>
          <div class="temizle"></div>
         
          <p>Türkiye'deki en popüler spor dallarından atletizmde 2016 itibariyle yaklaşık bin kulüp, 160 bin lisanslı sporcu bulunmaktadır. TAF takviminde dokuz ayrı lig yarışması ve onlarca yurt dışı teması olmak üzere her yıl 200'den fazla faaliyet gerçekleştirilmektedir.</p>
        </section>

        <section id="iletisim">
          <h2>İletişim.</h2>
          <hr>
          <div class="temizle"></div>
          <form method="post" action="">
            <label for="adsoyad">Ad Soyad</label>
            <input type="text" name="adsoyad" id="adsoyad" required>

            <label for="telefon">Telefon</label>
            <input type="tel" name="telefon" id="telefon">

            <label for="eposta">E-posta</label>
            <input type="email" name="eposta" id="eposta">

            <label for="mesaj">Mesaj</label>
            <textarea name="mesaj" id="mesaj"></textarea>

            <button type="submit">Mesaj Gönder</button>
          </form>
        </section>
        
    
        
      </main>

      <script src="js/jquery-1.4.3.min.js"></script>
      <script src="js/jquery.fancybox-1.3.4.js"></script>
    <script>
        $("a.resimler").fancybox();

        function ac() {
            document.getElementById("menu").style.display = "block";
            document.getElementById("icerik").style.paddingLeft = "350px";
            document.getElementById("acdgm").style.display = "none";
            document.getElementById("kapatdgm").style.display = "block";
        }

        function kapat() {
            document.getElementById("menu").style.display = "none";
            document.getElementById("icerik").style.paddingLeft = "50px";
            document.getElementById("acdgm").style.display = "block";
            document.getElementById("kapatdgm").style.display = "none";
        }
    </script>  

    </body>
</html>