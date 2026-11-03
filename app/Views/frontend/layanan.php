<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="section-pad" id="layanan">
  <div class="container">
    <div class="eyebrow"><span class="eyebrow-line"></span> LAYANAN</div>
    <h2>Dokumen & Layanan Desa</h2>
    <?php if (!empty($layanan)): ?>
    <ul>
      <?php foreach ($layanan as $l): ?>
        <li><strong><?= esc($l['judul']) ?></strong> — <?= esc($l['deskripsi']) ?></li>
      <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <p>Belum ada data layanan.</p>
    <?php endif; ?>
  </div>
</section>
<?= $this->endSection() ?>