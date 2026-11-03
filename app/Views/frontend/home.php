<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="hero" id="beranda">
  <div class="container hero-grid">
    <div class="hero-copy">
      <div class="eyebrow"><span class="eyebrow-line"></span> DESA PENGANTEN · KLAMBU · GROBOGAN</div>
      <h1>Penganten,<br><em>tumbuh bersama.</em></h1>
      <p class="hero-lede">Selamat datang di portal Desa Penganten, Kecamatan Klambu, Kabupaten Grobogan, Jawa Tengah.</p>
      <div class="hero-actions">
        <a class="button button-primary" href="<?= base_url('lainnya#keunggulan') ?>">Kenali keunggulan <span aria-hidden="true">→</span></a>
        <a class="text-link" href="<?= base_url('mitra#investasi') ?>">Jelajahi peluang <span aria-hidden="true">↗</span></a>
      </div>
    </div>
    <div class="hero-art">
      <div class="art-frame">
        <img src="<?= base_url('assets/images/hero-village.svg') ?>" alt="Ilustrasi lanskap Desa Penganten" fetchpriority="high">
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>