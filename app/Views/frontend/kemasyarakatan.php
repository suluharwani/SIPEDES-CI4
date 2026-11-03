<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="section-pad" id="transparansi">
  <div class="container">
    <div class="eyebrow"><span class="eyebrow-line"></span> TRANSPARANSI KEGIATAN</div>
    <h2>Kegiatan Aktif Desa Penganten</h2>
    <?php if (!empty($kegiatan)): ?>
    <table class="activity-table">
      <thead><tr><th>Kegiatan</th><th>PJ</th><th>Waktu</th><th>Lokasi</th><th>Status</th></tr></thead>
      <tbody>
      <?php foreach ($kegiatan as $k): ?>
        <tr>
          <td><?= esc($k['title']) ?></td>
          <td><?= esc($k['pj']) ?></td>
          <td><?= esc($k['waktu']) ?></td>
          <td><?= esc($k['lokasi']) ?></td>
          <td><?= esc($k['status']) ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <?php else: ?>
    <p>Belum ada data kegiatan.</p>
    <?php endif; ?>
  </div>
</section>
<?= $this->endSection() ?>