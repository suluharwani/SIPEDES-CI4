<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="section-pad">
  <div class="container">
    <div class="eyebrow"><span class="eyebrow-line"></span> LAINNYA</div>
    <h2>Profil & Jelajah Desa</h2>
  </div>
</section>
<section class="section-pad" id="berita">
  <div class="container">
    <h3>Kabar dari Desa</h3>
    <?php if (!empty($berita)): ?>
    <div class="news-grid">
      <?php foreach ($berita as $b): ?>
        <article class="news-card">
          <div class="news-image"><img src="<?= base_url('assets/images/hero-village.svg') ?>" alt="<?= esc($b['title']) ?>"></div>
          <h3><?= esc($b['title']) ?></h3>
          <p><?= esc(substr($b['content'], 0, 100)) ?>...</p>
        </article>
      <?php endforeach; ?>
    </div>
    <?php else: ?>
    <p>Belum ada berita.</p>
    <?php endif; ?>
  </div>
</section>
<?= $this->endSection() ?>