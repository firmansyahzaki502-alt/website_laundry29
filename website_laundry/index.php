<?php
// ============================================================
// UBAH BARIS INI SAJA:
// isi dengan lokasi halaman login dari sekolahmu (relatif dari folder ini)
// Contoh: 'login.php'  |  'login/index.php'  |  '../laundry_sekolah/login.php'
// ============================================================
$login_url = '../laundry/login.php';
$nama_usaha = 'Flash Laundry';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($nama_usaha) ?> – Cuci, Setrika, Antar</title>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">
<style>
:root{--ink:#10304a;--foam:#f5fbfd;--aqua:#22b2c2;--aqua-d:#0e8a99;--sun:#ffc93c;--mist:#dcf1f5;--line:#c7e3ea}
*{box-sizing:border-box;margin:0}
html{scroll-behavior:smooth;scroll-padding-top:76px}
body{font-family:Figtree,system-ui,sans-serif;color:var(--ink);background:var(--foam);line-height:1.6}
h1,h2,h3{font-family:'Bricolage Grotesque',system-ui,sans-serif;line-height:1.1}
a{color:inherit}
:focus-visible{outline:3px solid var(--sun);outline-offset:2px}
.wrap{max-width:1080px;margin:auto;padding:0 20px}
section{padding:72px 0}
h2{font-size:clamp(1.8rem,4vw,2.6rem);margin-bottom:12px}
.lead{max-width:56ch;margin-bottom:36px;color:#3b5a70}

/* navbar */
nav{position:sticky;top:0;z-index:10;background:rgba(245,251,253,.92);backdrop-filter:blur(8px);border-bottom:1px solid var(--line)}
.nav{display:flex;align-items:center;justify-content:space-between;height:64px}
.logo{font:800 1.3rem 'Bricolage Grotesque',sans-serif;text-decoration:none;display:flex;gap:8px;align-items:center}
.logo i{width:26px;height:26px;border-radius:50%;background:radial-gradient(circle at 35% 30%,#fff 0 12%,var(--aqua) 13%);border:2px solid var(--ink)}
.menu{display:flex;gap:26px;align-items:center;list-style:none;padding:0}
.menu a{text-decoration:none;font-weight:500}
.menu a:hover{color:var(--aqua-d)}
.btn{display:inline-block;padding:11px 22px;border-radius:999px;border:2px solid var(--ink);background:var(--sun);font-weight:600;text-decoration:none;cursor:pointer;font-family:inherit;font-size:1rem;color:var(--ink)}
.btn:hover{background:#ffd76a}
.btn.alt{background:transparent}
#burger{display:none;background:none;border:2px solid var(--ink);border-radius:8px;padding:6px 10px;font-size:1.1rem;cursor:pointer}

/* hero */
.hero{display:grid;grid-template-columns:1.1fr .9fr;gap:40px;align-items:center;padding:64px 0}
.hero h1{font-size:clamp(2.4rem,6vw,4.2rem);font-weight:800;letter-spacing:-.02em}
.hero p{margin:18px 0 26px;max-width:46ch;font-size:1.1rem}
.hero .cta{display:flex;gap:12px;flex-wrap:wrap}
.calc{background:#fff;border:2px solid var(--ink);border-radius:22px;padding:26px;box-shadow:8px 8px 0 var(--aqua)}
.calc h3{margin-bottom:16px;font-size:1.4rem}
.calc label{display:block;font-weight:600;font-size:.95rem;margin:14px 0 6px}
.calc select,.calc input,.track input{width:100%;padding:11px 12px;border:2px solid var(--line);border-radius:10px;font:inherit;background:var(--foam);color:var(--ink)}
.total{margin-top:20px;padding:16px;border-radius:14px;background:var(--mist);display:flex;justify-content:space-between;align-items:baseline}
.total b{font:800 1.9rem 'Bricolage Grotesque',sans-serif}

/* layanan */
.grid3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.card{background:#fff;border:2px solid var(--line);border-radius:18px;padding:26px}
.card:nth-child(2){border-radius:40px 18px 40px 18px}
.card:nth-child(3){border-radius:18px 40px 18px 40px}
.card .ic{font-size:2rem}
.card h3{margin:10px 0 6px;font-size:1.3rem}
.price{margin-top:12px;font-weight:600;color:var(--aqua-d)}

/* cara kerja */
.steps{background:var(--ink);color:#fff}
.steps .lead{color:#bcd6e4}
.steps ol{list-style:none;padding:0;display:grid;grid-template-columns:repeat(4,1fr);gap:20px;counter-reset:s}
.steps li{counter-increment:s;border-top:3px solid var(--sun);padding-top:14px}
.steps li::before{content:counter(s);font:800 2.2rem 'Bricolage Grotesque',sans-serif;color:var(--sun);display:block}
.steps li b{display:block;margin-bottom:4px}

/* cek status */
.track{display:grid;grid-template-columns:1fr 1fr;gap:36px;align-items:start}
.track form{display:flex;gap:10px}
.track form input{flex:1}
.progress{list-style:none;padding:0;margin-top:22px}
.progress li{padding:10px 0 10px 34px;position:relative;color:#7b95a6}
.progress li::before{content:"";position:absolute;left:4px;top:15px;width:14px;height:14px;border-radius:50%;border:2px solid #b5ccd8;background:#fff}
.progress li.done{color:var(--ink);font-weight:600}
.progress li.done::before{background:var(--aqua);border-color:var(--aqua-d)}
#msg{margin-top:14px;font-weight:500}

/* testimoni + faq */
.quote{background:#fff;border-left:6px solid var(--sun);border-radius:8px 18px 18px 8px;padding:22px}
.quote p{margin-bottom:10px}
.quote small{color:#587589}
details{background:#fff;border:2px solid var(--line);border-radius:14px;padding:16px 20px;margin-bottom:10px}
summary{cursor:pointer;font-weight:600}
details p{margin-top:8px}

footer{background:var(--ink);color:#bcd6e4;padding:36px 0;text-align:center}
footer b{color:#fff}

@media(max-width:820px){
 #burger{display:block}
 .menu{display:none;position:absolute;top:64px;left:0;right:0;flex-direction:column;background:var(--foam);padding:18px 20px;border-bottom:1px solid var(--line);align-items:flex-start}
 .menu.open{display:flex}
 .hero,.track,.grid3,.steps ol{grid-template-columns:1fr}
 section{padding:52px 0}
}
@media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}}
</style>
</head>
<body>

<nav>
 <div class="wrap nav">
  <a class="logo" href="#top"><i></i><?= htmlspecialchars($nama_usaha) ?></a>
  <button id="burger" aria-label="Buka menu" aria-expanded="false">☰</button>
  <ul class="menu" id="menu">
   <li><a href="#layanan">Layanan</a></li>
   <li><a href="#carakerja">Cara Kerja</a></li>
   <li><a href="#status">Cek Pesanan</a></li>
   <li><a href="#testimoni">Testimoni</a></li>
   <li><a href="#faq">FAQ</a></li>
   <li><a class="btn" href="<?= htmlspecialchars($login_url) ?>">Sign In</a></li>
  </ul>
 </div>
</nav>

<main id="top">
<div class="wrap hero">
 <div>
  <h1>Baju bersih, kamu tinggal santai.</h1>
  <p>Kami jemput cucianmu, cuci sampai wangi, setrika rapi, lalu antar kembali ke rumah. Mulai dari Rp6.000 per kilo.</p>
  <div class="cta">
   <a class="btn" href="#hitung">Hitung Biaya</a>
   <a class="btn alt" href="#status">Cek Pesanan</a>
  </div>
 </div>
 <div class="calc" id="hitung">
  <h3>Hitung biaya cucianmu</h3>
  <label for="kg">Berat cucian (kg)</label>
  <input type="number" id="kg" min="1" max="100" value="3">
  <label for="jenis">Jenis layanan</label>
  <select id="jenis">
   <option value="6000">Cuci + lipat – Rp6.000/kg</option>
   <option value="8000" selected>Cuci + setrika – Rp8.000/kg</option>
   <option value="12000">Cuci + setrika premium – Rp12.000/kg</option>
  </select>
  <label for="speed">Kecepatan</label>
  <select id="speed">
   <option value="1">Reguler (2 hari)</option>
   <option value="1.5">Kilat (6 jam) – tambah 50%</option>
  </select>
  <label style="display:flex;gap:8px;align-items:center;font-weight:500"><input type="checkbox" id="antar" checked style="width:auto"> Antar-jemput (Rp5.000)</label>
  <div class="total"><span>Perkiraan total</span><b id="total">Rp0</b></div>
 </div>
</div>

<section id="layanan">
 <div class="wrap">
  <h2>Pilih cara cucianmu diurus</h2>
  <p class="lead">Tiga layanan untuk kebutuhan yang berbeda. Harga sudah termasuk deterjen dan pewangi.</p>
  <div class="grid3">
   <div class="card"><div class="ic">🧺</div><h3>Kiloan</h3><p>Pakaian harian dicuci, dikeringkan, dan dilipat rapi.</p><div class="price">Mulai Rp6.000/kg</div></div>
   <div class="card"><div class="ic">👔</div><h3>Setrika &amp; premium</h3><p>Kemeja, seragam, dan baju kerja dicuci lembut lalu disetrika licin.</p><div class="price">Mulai Rp8.000/kg</div></div>
   <div class="card"><div class="ic">🛏️</div><h3>Satuan</h3><p>Selimut, bedcover, boneka, dan jaket tebal dicuci terpisah.</p><div class="price">Mulai Rp15.000/item</div></div>
  </div>
 </div>
</section>

<section class="steps" id="carakerja">
 <div class="wrap">
  <h2>Empat langkah sampai bersih</h2>
  <p class="lead">Kamu tidak perlu keluar rumah.</p>
  <ol>
   <li><b>Pesan</b>Hubungi kami lewat WhatsApp atau datang langsung.</li>
   <li><b>Jemput</b>Kurir mengambil cucian dan menimbangnya di depanmu.</li>
   <li><b>Cuci</b>Dicuci sesuai jenis kain, dikeringkan, dan disetrika.</li>
   <li><b>Antar</b>Cucian kembali dalam plastik bersih dan wangi.</li>
  </ol>
 </div>
</section>

<section id="status">
 <div class="wrap track">
  <div>
   <h2>Cek status pesanan</h2>
   <p class="lead">Masukkan kode pada nota. Untuk mencoba, ketik <b>LDR-001</b>, <b>LDR-002</b>, atau <b>LDR-003</b>.</p>
   <form id="cek">
    <input id="kode" placeholder="Contoh: LDR-001" aria-label="Kode pesanan">
    <button class="btn" type="submit">Cek</button>
   </form>
   <div id="msg" aria-live="polite"></div>
  </div>
  <ul class="progress" id="prog">
   <li>Cucian diterima</li><li>Sedang dicuci</li><li>Disetrika &amp; dilipat</li><li>Siap diantar</li>
  </ul>
 </div>
</section>

<section id="testimoni" style="background:var(--mist)">
 <div class="wrap">
  <h2>Kata pelanggan kami</h2>
  <div class="grid3" style="margin-top:28px">
   <div class="quote"><p>Kemeja kerja saya selalu licin dan tidak bau apek. Antar tepat waktu.</p><small>Rina, karyawan bank</small></div>
   <div class="quote"><p>Layanan kilat 6 jam menyelamatkan saya sebelum wawancara.</p><small>Dimas, fresh graduate</small></div>
   <div class="quote"><p>Bedcover besar akhirnya bersih tanpa harus saya jemur berhari-hari.</p><small>Bu Sari, ibu rumah tangga</small></div>
  </div>
 </div>
</section>

<section id="faq">
 <div class="wrap" style="max-width:760px">
  <h2>Pertanyaan yang sering ditanyakan</h2>
  <div style="margin-top:24px">
   <details><summary>Berapa lama cucian selesai?</summary><p>Reguler 2 hari, kilat 6 jam untuk pesanan yang masuk sebelum pukul 12.00.</p></details>
   <details><summary>Bagaimana jika ada pakaian rusak atau hilang?</summary><p>Setiap cucian dicatat saat ditimbang. Jika ada masalah, kami ganti sesuai kesepakatan di nota.</p></details>
   <details><summary>Apakah bisa dipisah antara baju putih dan berwarna?</summary><p>Bisa. Kami pisahkan otomatis tanpa biaya tambahan.</p></details>
   <details><summary>Untuk apa tombol Sign In?</summary><p>Masuk sebagai pelanggan atau admin untuk mengelola pesanan.</p></details>
  </div>
 </div>
</section>
</main>

<footer>
 <div class="wrap">
  <p><b><?= htmlspecialchars($nama_usaha) ?></b> · Buka setiap hari 07.00–20.00</p>
  <p>© <?= date('Y') ?> Semua hak dilindungi.</p>
 </div>
</footer>

<script>
// menu mobile
const burger=document.getElementById('burger'),menu=document.getElementById('menu');
burger.onclick=()=>{const o=menu.classList.toggle('open');burger.setAttribute('aria-expanded',o)};
menu.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>menu.classList.remove('open')));

// kalkulator
const $=id=>document.getElementById(id);
function hitung(){
  const kg=Math.max(0,parseFloat($('kg').value)||0);
  let t=kg*$('jenis').value*$('speed').value+($('antar').checked?5000:0);
  $('total').textContent='Rp'+Math.round(t).toLocaleString('id-ID');
}
['kg','jenis','speed','antar'].forEach(i=>$(i).addEventListener('input',hitung));
hitung();

// cek status (data contoh)
const data={'LDR-001':1,'LDR-002':3,'LDR-003':4};
$('cek').addEventListener('submit',e=>{
  e.preventDefault();
  const k=$('kode').value.trim().toUpperCase(),s=data[k];
  const li=document.querySelectorAll('#prog li');
  li.forEach((x,i)=>x.classList.toggle('done',s&&i<s));
  $('msg').textContent=s?'Pesanan '+k+' ditemukan.':'Kode tidak ditemukan. Periksa lagi kode pada nota.';
});
</script>
</body>
</html>
