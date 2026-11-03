<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="section-pad">
  <div class="container">
    <div class="eyebrow"><span class="eyebrow-line"></span> UMKM</div>
    <h2>Direktori UMKM Desa Penganten</h2>
    <?php if (!empty($umkm)): ?>
    <div class="umkm-grid">
      <?php foreach ($umkm as $u): ?>
        <div class="umkm-card">
          <h3><?= esc($u['nama']) ?></h3>
          <p><?= esc($u['deskripsi']) ?></p>
          <small><?= esc($u['kontak']) ?></small>
        </div>
      <?php endforeach; ?>
    </div>
    <?php else: ?>
    <p>Belum ada data UMKM.</p>
    <?php endif; ?>
  </div>
</section>
<?= $this->endSection() ?>