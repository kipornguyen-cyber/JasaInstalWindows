<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jasa Install Windows & Rakit PC — Cepat, Aman, Bergaransi</title>
<meta name="description" content="Laptop/PC lemot, error, atau virus? Jasa install Windows & rakit PC profesional, datang ke tempat, garansi pengerjaan. Chat WhatsApp sekarang!">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --bg:#0b0f1a; --card:#121829; --card2:#161d33;
  --accent:#25d366; --accent2:#3b82f6; --text:#e8ecf5; --muted:#94a3b8;
}
body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--bg);color:var(--text);line-height:1.6;overflow-x:hidden}
.container{max-width:1100px;margin:0 auto;padding:0 20px}
section{padding:72px 0}

/* NAV */
nav{position:sticky;top:0;background:rgba(11,15,26,.9);backdrop-filter:blur(10px);z-index:100;border-bottom:1px solid #1e2a44}
.nav-inner{display:flex;justify-content:space-between;align-items:center;padding:14px 20px;max-width:1100px;margin:0 auto}
.logo{font-weight:800;font-size:1.2rem}
.logo span{color:var(--accent)}
.nav-cta{background:var(--accent);color:#04220f;padding:9px 18px;border-radius:10px;font-weight:700;text-decoration:none;font-size:.9rem}

/* HERO */
.hero{text-align:center;padding:90px 0 70px;position:relative}
.hero::before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 50% -10%,rgba(59,130,246,.18),transparent 60%)}
.badge{display:inline-block;background:#1a2540;color:var(--accent);border:1px solid #234;padding:6px 16px;border-radius:999px;font-size:.85rem;font-weight:600;margin-bottom:22px}
.hero h1{font-size:clamp(2rem,5vw,3.2rem);font-weight:800;line-height:1.15;max-width:800px;margin:0 auto 18px}
.hero h1 span{color:var(--accent)}
.hero p.sub{color:var(--muted);max-width:640px;margin:0 auto 32px;font-size:1.1rem}
.btn-wa{display:inline-block;background:var(--accent);color:#04220f;font-weight:800;font-size:1.1rem;padding:16px 34px;border-radius:14px;text-decoration:none;box-shadow:0 8px 30px rgba(37,211,102,.35);transition:transform .2s}
.btn-wa:hover{transform:translateY(-3px)}
.hero .note{color:var(--muted);font-size:.85rem;margin-top:14px}
.hero-stats{display:flex;justify-content:center;gap:40px;margin-top:48px;flex-wrap:wrap}
.hero-stats div strong{display:block;font-size:1.8rem;color:var(--accent2)}
.hero-stats div small{color:var(--muted)}

/* PROBLEM */
.problem h2, .services h2, .why h2, .faq h2, .location h2{font-size:clamp(1.6rem,3.5vw,2.2rem);font-weight:800;text-align:center;margin-bottom:14px}
.problem .sub, .services .sub{text-align:center;color:var(--muted);max-width:600px;margin:0 auto 44px}
.pain-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px}
.pain{background:var(--card);border:1px dashed #334155;border-radius:14px;padding:22px;font-size:.98rem}
.pain b{color:#f87171}
.pain span{color:var(--muted);font-size:.88rem;display:block;margin-top:6px}
.tease{text-align:center;margin-top:34px;font-size:1.15rem;font-weight:700}
.tease span{color:var(--accent)}

/* SERVICES */
.service-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:20px}
.card{background:var(--card);border:1px solid #1e2a44;border-radius:16px;padding:28px;transition:.25s}
.card:hover{background:var(--card2);transform:translateY(-4px)}
.card .icon{font-size:2rem}
.card h3{margin:10px 0 8px;font-size:1.15rem}
.card p{color:var(--muted);font-size:.94rem}
.card .price{display:inline-block;margin-top:14px;font-weight:800;color:var(--accent);font-size:1.05rem}

/* WHY */
.why{background:var(--card)}
.why-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:18px;margin-top:40px}
.why-item h3{font-size:1.05rem;margin-bottom:6px}
.why-item h3::before{content:"✔ ";color:var(--accent)}
.why-item p{color:var(--muted);font-size:.92rem}

/* STEPS */
.steps-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;counter-reset:step}
.step{background:var(--card);border-radius:16px;padding:26px;position:relative}
.step::before{counter-increment:step;content:counter(step);background:var(--accent2);color:#fff;font-weight:800;width:34px;height:34px;border-radius:10px;display:grid;place-items:center;margin-bottom:14px}
.step h3{font-size:1.05rem;margin-bottom:6px}
.step p{color:var(--muted);font-size:.92rem}

/* FAQ */
.faq-item{background:var(--card);border-radius:14px;margin-bottom:14px;overflow:hidden}
.faq-item summary{cursor:pointer;padding:20px;font-weight:700;list-style:none}
.faq-item summary::-webkit-details-marker{display:none}
.faq-item summary::after{content:"+";float:right;color:var(--accent);font-size:1.3rem}
.faq-item[open] summary::after{content:"–"}
.faq-item p{padding:0 20px 20px;color:var(--muted);font-size:.95rem}

/* LOCATION */
.map-wrap{margin-top:30px;border-radius:16px;overflow:hidden;border:1px solid #1e2a44;background:var(--card);min-height:200px;display:grid;place-items:center;text-align:center;padding:30px}
.map-wrap iframe{width:100%;height:400px;border:0;display:block}

/* CTA FINAL */
.final{text-align:center;background:linear-gradient(135deg,#12310f,#0b2a3d);padding:80px 0}
.final h2{font-size:clamp(1.8rem,4vw,2.6rem);font-weight:800;margin-bottom:14px}
.final p{color:var(--muted);max-width:520px;margin:0 auto 30px}

footer{text-align:center;padding:30px;color:#64748b;font-size:.85rem;border-top:1px solid #1e2a44}

/* FLOATING WA */
.wa-float{position:fixed;bottom:24px;right:24px;z-index:99;width:60px;height:60px;border-radius:50%;background:var(--accent);display:grid;place-items:center;box-shadow:0 6px 24px rgba(37,211,102,.5);transition:.2s}
.wa-float:hover{transform:scale(1.1)}
.wa-float svg{width:32px;height:32px;fill:#04220f}

@media(max-width:600px){section{padding:52px 0}.hero-stats{gap:22px}}
</style>
</head>
<body>

<nav>
  <div class="nav-inner">
    <div class="logo">JasaInstall<span>Windows</span></div>
    <a class="nav-cta" href="https://wa.me/6285156054801?text=Halo%2C%20gua%20mau%20tanya-tanya%20dulu%20soal%20jasa%20install%20Windows%20%2F%20rakit%20PC%20dong" target="_blank" rel="noopener">Chat WhatsApp</a>
  </div>
</nav>

<header class="hero">
  <div class="container">
    <span class="badge">⚡ Respon cepat • Garansi pengerjaan • Bisa datang ke tempat</span>
    <h1>PC Lu Lemot, Error, atau Mau Dirakit Baru?<br><span>Biar Kami yang Beresin Sekalian.</span></h1>
    <p class="sub">Jasa install Windows & rakit PC mulai Rp 100rb — data lu dijamin aman, driver terpasang rapi, langsung siap pakai. Selesai hari itu juga, bisa datang ke tempat lu.</p>
    <a class="btn-wa" href="https://wa.me/6285156054801?text=Halo%20bro%2C%20gua%20mau%20install%20Windows%20nih%2C%20buat%20laptop%2FPC%20gua" target="_blank" rel="noopener">💬 Chat WhatsApp Sekarang — Konsultasi GRATIS</a>
    <p class="note">Masih ragu? Tanya-tanya dulu aja, gratis kok. 😎</p>
    <div class="hero-stats">
      <div><strong>1.500+</strong><small>PC & Laptop Tertangani</small></div>
      <div><strong>4.9/5</strong><small>Rating Kepuasan Pelanggan</small></div>
      <div><strong>&lt; 2 Jam</strong><small>Rata-rata Pengerjaan</small></div>
      <div><strong>Garansi</strong><small>7 Hari Pengerjaan</small></div>
    </div>
  </div>
</header>

<section class="problem">
  <div class="container">
    <h2 style="color:#fca5a5">Sadarkah Lu?… 🥲</h2>
    <h2>Website Ini Baca Satu Aja, Lu Pasti Kenal</h2>
    <p class="sub">Tanda-tanda PC/laptop lu udah minta "diselamatkan" secepatnya.</p>
    <div class="pain-grid">
      <div class="pain"><b>🐢 Nyalain Lama Banget</b><span>Menyalakan PC 5 menit, buka Chrome 10 tab langsung not responding.</span></div>
      <div class="pain"><b>🚨 Error Beruntun</b><span>Blue screen, warning aneh, aplikasi crash — sampai trauma Ctrl+Alt+Del.</span></div>
      <div class="pain"><b>🦠 Virusan Beranak-pinak</b><span>Pop up iklan nongol terus, ada file aneh yang selalu muncul lagi meski sudah dihapus.</span></div>
      <div class="pain"><b>💾 Storage Penuh Misterius</b><span>Drive C merah padahal gak download apa-apa. Ada "penumpang gelap".</span></div>
      <div class="pain"><b>🔧 Windows Kena Update Rutin</b><span>Restart tiap saat sibuk, komputer jadi gak bisa diandelin.</span></div>
      <div class="pain"><b>🎮 Gaming & Kerja Terganjal</b><span>Frame drop saat main game, rendering kelamaan, semua serba lemot.</span></div>
    </div>
    <p class="tease">Kalau minimal 2 dari 6 itu lu alami… <span>PC lu bukan cuma lemot — dia minta diselamatkan. 😅</span></p>
  </div>
</section>

<section class="services">
  <div class="container">
    <h2>Ada Layanan Apa Aja?</h2>
    <p class="sub">Semua pengerjaan lengkap: update BIOS, partisi, driver, antivirus, sampai software esensial. Gak ada biaya tersembunyi.</p>
    <div class="service-grid">
      <div class="card">
        <div class="icon">🪟</div>
        <h3>Install Windows 10 / 11</h3>
        <p>Install ulang menyeluruh: backup data dulu, driver komplit, Office & sofware wajib, tuning biar gacor lagi.</p>
        <span class="price">Mulai Rp 100rb</span>
      </div>
      <div class="card">
        <div class="icon">🛠️</div>
        <h3>Rakit PC Sesuai Budget</h3>
        <p>Saran spesifikasi sesuai budget + kebutuhan (gaming/editing/kerja), rakit rapi dengan cable management. Gratis konsultasi spek!</p>
        <span class="price">Jasa rakit mulai Rp 150rb</span>
      </div>
      <div class="card">
        <div class="icon">⚙️</div>
        <h3>Upgrade & Optimasi</h3>
        <p>Pasang SSD/RAM, pindah data ke drive baru, clean install tanpa data hilang, PC jadi ngebut 10x lipat.</p>
        <span class="price">Konsultasi Gratis</span>
      </div>
      <div class="card">
        <div class="icon">🩺</div>
        <h3>Troubleshooting</h3>
        <p>Laptop gak mau booting? Blue screen misterius? Diagnosa dulu, dianalisis biar solusinya tepat sasaran.</p>
        <span class="price">Cek kondisi Gratis</span>
      </div>
      <div class="card">
        <div class="icon">🧹</div>
        <h3>Cleaning & Maintenance</h3>
        <p>Bersihkan debu + thermal paste ulang. Suhu turun, fan gak melesu, umur komponen kian panjang.</p>
        <span class="price">Mulai Rp 80rb</span>
      </div>
      <div class="card">
        <div class="icon">🚗</div>
        <h3>Layanan Datang ke Tempat</h3>
        <p>Area sekitar? Bisa home service! Gak usah antar-jemput; duduk manis, PC lu kami yang beresin.</p>
        <span class="price">Cek area coverage</span>
      </div>
    </div>
  </div>
</section>

<section class="why">
  <div class="container">
    <h2>Kenapa Harus Kita? (Bukan Cuma Soal Harga)</h2>
    <div class="why-grid">
      <div class="why-item"><h3>Data 100% Aman</h3><p>Backup dulu sebelum install. Foto, skripsi, kerjaan — gak ada yang hilang. Ini yang paling sering bikin nangis kalau di tempat asal.</p></div>
      <div class="why-item"><h3>Driver Komplet & Rapi</h3><p>Bukan install asal jadi. Semua driver, update, aktivasi, sampai setting terbaik — langsung nyala dengan sopan.</p></div>
      <div class="why-item"><h3>Garansi Pengerjaan</h3><p>7 hari itu, kalau masih ada error karena pengerjaan, diperbaiki ulang gratis. Tanpa drama.</p></div>
      <div class="why-item"><h3>Transparan</h3><p>Ditanya-tanya dulu sebelum eksekusi. Harga jelas di awal, gak ada biaya siluman.</p></div>
      <div class="why-item"><h3>Fast Turnaround</h3><p>Rata-rata selesai 1-2 jam. Bisa nunggu di tempat atau diantar lagi sesuai janjian.</p></div>
      <div class="why-item"><h3>After-Service</h3><p>Masih bisa tanya-tanya soal PC lu pasca pengerjaan. Gak cuek abis transaksi.</p></div>
    </div>
  </div>
</section>

<section class="steps-section">
  <div class="container">
    <h2 style="text-align:center;font-size:clamp(1.6rem,3.5vw,2.2rem);font-weight:800;margin-bottom:44px">Prosesnya Semudah Order Gojek 🛵</h2>
    <div class="steps-grid">
      <div class="step"><h3>Chat WhatsApp</h3><p>Ceritain keluhan atau spek yang diinginkan. Konsultasi gratis, gak dipaksa.</p></div>
      <div class="step"><h3>Deal & Jadwal</h3><p>Harga & waktu disepakati. Bisa antar ke tempat, atau home service.</p></div>
      <div class="step"><h3>Kami Beresin</h3><p>Dikerjakan rapi & pro, ada update progress biar lu tenang.</p></div>
      <div class="step"><h3>Pakai dengan Lega</h3><p>Tes bareng sebelum pulang. PC jadi baru, mulai hidup baru! 🎉</p></div>
    </div>
  </div>
</section>

<section class="faq">
  <div class="container">
    <h2>Pertanyaan yang Paling Sering Nongol 👀</h2>
    <p class="sub">Jawabannya pasti bikin lu makin yakin.</p>
    <details class="faq-item"><summary>Gak bakalan hilang data gua dong?</summary><p>Data di-backup dulu sebelum install ulang — dan lu akan kita konfirmasi mana yang penting. Kecuali HDD/SSD-nya sudah rusak fisik (ini diberitahu sejak awal), datanya aman. Ini standar kerja kami, bukan bonus.</p></details>
    <details class="faq-item"><summary>Berapa lama prosesnya?</summary><p>Install Windows normal sekitar 1-2 jam. Rakit PC butuh 2-3 jam. Kalau ada data yang banyak, bisa agak lebih lama tapi tetap dalam sehari.</p></details>
    <details class="faq-item"><summary>Windows-nya legal/gak?</summary><p>Kami pasang versi original dari Microsoft atau versi yang terbaik sesuai budget & kebutuhan lu, dengan penjelasan transparan pakai yang mana. Tenang, jelas dikasih tau.</p></details>
    <details class="faq-item"><summary>PC gua jadul banget, masih bisa dibenerin?</summary><p>Big chance masih bisa! Biasanya yang bikin lemot cuma HDD lama. Ganti SSD aja seringkali efeknya sihir. Konsultasi dulu deh, gratis kok.</p></details>
    <details class="faq-item"><summary>Untuk rakit PC, gua belum tau harus komponen apa. Bisa dibantu?</summary><p>Justru ini keahlian kami! Kasih tau budget & rencana pemakaian lu (gaming/editing/kerja), kami bikinin build list paling optimal — gak ada biaya siluman yang gak perlu.</p></details>
    <details class="faq-item"><summary>Bisa datang ke rumah?</summary><p>Bisa! Home service tersedia di area sekitar. Chat aja dan sebutkan lokasi lu, nanti diberitau coverage & biaya transport (biasanya gratis kalau deket).</p></details>
  </div>
</section>

<!-- ═══════════════ LOCATION / GMAPS ═══════════════
     Cara pasang Google Maps (edit di VS Code):
     1. Buka Google Maps → cari lokasi lu
     2. Klik "Bagikan" → tab "Sematkan peta" → Copy HTML
     3. Paste REPLACE bagian <div class="map-placeholder"> di bawah ini
     URL langsung juga bisa: https://www.google.com/maps?q=ALAMAT_LU&output=embed
-->
<section class="location">
  <div class="container">
    <h2>Lokasi Kami 📍</h2>
    <p class="sub">Mampir langsung, atau chat dulu buat home service.</p>
    <div class="map-wrap">
      <!-- ===== GMAPS EMBED ===== -->
      <iframe src="https://www.google.com/maps?q=-6.2441501,106.7093503&z=17&hl=id&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen title="Lokasi Jasa Install Windows & Rakit PC"></iframe>
      <!-- ===== SELESAI — JANGAN UBAH DI BAWAH INI ===== -->
    </div>
    <p style="text-align:center;color:var(--muted);margin-top:18px;font-size:.95rem">🗺️ Area: <strong>Jabodetabek (dan sekitarnya)</strong> · 📌 Jl. Kh. Yusuf No.28, RT.01/RW.09, Paninggilan Selatan, Kec. Ciledug, Kota Tangerang, Banten 15153</p>
    <!-- Kalau mau ganti lokasi peta: tinggal edit koordinat di src iframe di atas -->
  </div>
</section>

<section class="final">
  <div class="container">
    <h2>PC Lemot Itu Penyakit, Nggak Perlu Ditunda 🩺</h2>
    <p>Makin lama ditunda, makin bahaya buat data lu. Chat sekarang — konsultasi & cek kondisi GRATIS, gak ada ruginya tanya. 😎</p>
    <a class="btn-wa" href="https://wa.me/6285156054801?text=Halo%20bro%2C%20gua%20mau%20tanya%20soal%20jasa%20install%20Windows%20%2F%20rakit%20PC.%20Boleh%20konsultasi%20dulu%3F" target="_blank" rel="noopener">💬 Chat Sekarang, Gratis!</a>
    <p style="margin-top:16px;font-size:.9rem">📞 WhatsApp: <strong>0851-5605-4801</strong></p>
  </div>
</section>

<footer>
  <div class="container">© 2026 Jasa Install Windows & Rakit PC — Perbaikan cepat, harga bersahabat, garansi rasa. 🚀</div>
</footer>

<a class="wa-float" href="https://wa.me/6285156054801?text=Halo%2C%20gua%20mau%20tanya-tanya%20soal%20jasa%20nya" target="_blank" rel="noopener" aria-label="Chat WhatsApp">
  <svg viewBox="0 0 32 32"><path d="M16 3C9.4 3 4 8.3 4 14.9c0 2.6.8 5 2.3 7L4 29l7.3-2.3c1.9 1 4 1.6 6.2 1.6h.1c6.6 0 12-5.3 12-11.9S22.6 3 16 3zm5.9 16.9c-.3.8-1.5 1.5-2.1 1.6-.5.1-1.2.1-1.9-.1-.4-.1-1-.3-1.9-.7-3.3-1.4-5.4-4.7-5.6-4.9-.2-.2-1.3-1.8-1.3-3.4s.9-2.4 1.2-2.7c.3-.3.6-.4.9-.4h.6c.2 0 .5-.1.7.5.3.7.9 2.3 1 2.4.1.2.2.4 0 .6-.1.3-.2.4-.4.6l-.5.6c-.2.2-.3.3-.1.6.1.3.7 1.2 1.5 1.9 1 .9 1.9 1.2 2.2 1.3.3.1.5.1.7-.1.2-.2.7-.8.9-1.1.2-.3.4-.2.7-.1.3.1 1.9.9 2.2 1.1.3.2.5.3.6.4.1.2.1.9-.2 1.7z"/></svg>
</a>

</body>
</html>
