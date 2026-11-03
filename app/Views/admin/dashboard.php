<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard Admin — SIPEDES</title>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body style="padding:2rem;">
  <h1>Dashboard Admin</h1>
  <p>Selamat datang, <?= esc(session()->get('user')['username']) ?></p>
  <nav>
    <a href="<?= base_url('admin/berita') ?>">Berita</a> |
    <a href="<?= base_url('admin/kegiatan') ?>">Kegiatan</a> |
    <a href="<?= base_url('admin/umkm') ?>">UMKM</a> |
    <a href="<?= base_url('admin/layanan') ?>">Layanan</a> |
    <a href="<?= base_url('admin/logout') ?>">Logout</a>
  </nav>
</body>
</html>