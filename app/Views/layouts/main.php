<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#123f35">
<meta name="description" content="Portal Desa Penganten: informasi layanan, pertanian, kemasyarakatan, mitra, UMKM, dan potensi desa.">
<title><?= esc($title ?? 'SIPEDES Desa Penganten') ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
<a class="skip-link" href="#main">Lewati ke konten</a>
<div class="announcement">
  <div class="container announcement-inner">
    <span class="live-dot"></span>
    <span>Portal informasi Desa Penganten</span>
    <a href="https://aduan.grobogan.go.id/" target="_blank" rel="noopener noreferrer">Aduan tingkat kabupaten: LAPORBUP <span aria-hidden="true">↗</span></a>
  </div>
</div>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="<?= base_url() ?>" aria-label="SIPEDES, beranda">
      <span class="brand-mark" aria-hidden="true">
        <svg viewBox="0 0 40 40"><path d="M5 19.5 20 7l15 12.5v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2z"/><path d="M15 35V22h10v13M3 19l17-14 17 14"/><path d="M9 17h22"/></svg>
      </span>
      <span class="brand-copy"><strong>SIPEDES</strong><small>Portal Desa Digital</small></span>
    </a>
    <button class="menu-toggle" aria-expanded="false" aria-controls="primary-nav" aria-label="Buka menu"><span></span><span></span></button>
    <nav id="primary-nav" class="primary-nav" aria-label="Navigasi utama">
      <a class="nav-link<?= ($active ?? '') === 'home' ? ' active' : '' ?>" href="<?= base_url() ?>" <?= ($active ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Beranda</a>
      <a class="nav-link<?= ($active ?? '') === 'pertanian' ? ' active' : '' ?>" href="<?= base_url('pertanian') ?>">Pertanian</a>
      <a class="nav-link<?= ($active ?? '') === 'kemasyarakatan' ? ' active' : '' ?>" href="<?= base_url('kemasyarakatan') ?>">Kegiatan aktif</a>
      <a class="nav-link<?= ($active ?? '') === 'layanan' ? ' active' : '' ?>" href="<?= base_url('layanan') ?>">Layanan</a>
      <a class="nav-link<?= ($active ?? '') === 'mitra' ? ' active' : '' ?>" href="<?= base_url('mitra') ?>">Mitra</a>
      <a class="nav-link<?= ($active ?? '') === 'umkm' ? ' active' : '' ?>" href="<?= base_url('umkm') ?>">UMKM</a>
      <a class="nav-link<?= ($active ?? '') === 'lainnya' ? ' active' : '' ?>" href="<?= base_url('lainnya') ?>">Lainnya</a>
    </nav>
  </div>
</header>
<main id="main">
  <?= $this->renderSection('content') ?>
</main>
<footer class="site-footer">
  <div class="container footer-main">
    <a class="brand" href="<?= base_url() ?>" aria-label="SIPEDES, beranda">
      <span class="brand-mark" aria-hidden="true"><svg viewBox="0 0 40 40"><path d="M5 19.5 20 7l15 12.5v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2z"/><path d="M15 35V22h10v13M3 19l17-14 17 14"/><path d="M9 17h22"/></svg></span>
      <span class="brand-copy"><strong>SIPEDES</strong><small>Portal Desa Digital</small></span>
    </a>
    <p class="footer-motto">Berakar pada kebersamaan.<br>Bertumbuh untuk masa depan.</p>
    <div class="footer-links">
      <a href="<?= base_url() ?>">Beranda</a>
      <a href="<?= base_url('pertanian') ?>">Pertanian</a>
      <a href="<?= base_url('kemasyarakatan') ?>">Kegiatan aktif</a>
      <a href="<?= base_url('layanan') ?>">Layanan</a>
      <a href="<?= base_url('mitra') ?>">Mitra</a>
      <a href="<?= base_url('umkm') ?>">UMKM</a>
      <a href="<?= base_url('lainnya') ?>">Lainnya</a>
    </div>
    <div class="footer-address" id="alamat-kantor">
      <span>PEMERINTAH DESA PENGANTEN</span>
      <p>Kecamatan Klambu<br>Kabupaten Grobogan, Jawa Tengah</p>
    </div>
  </div>
  <div class="container footer-bottom">
    <span>© <span data-current-year>2026</span> SIPEDES · Portal Desa Penganten</span>
    <a href="<?= base_url() ?>#beranda">Kembali ke beranda ↑</a>
  </div>
</footer>
<script src="<?= base_url('assets/js/main.js') ?>" defer></script>
</body>
</html>