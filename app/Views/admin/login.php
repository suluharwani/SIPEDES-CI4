<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Admin — SIPEDES</title>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body style="display:flex;align-items:center;justify-content:center;min-height:100vh;background:#f5f5f5;">
  <form method="post" action="<?= base_url('admin/login') ?>" style="background:#fff;padding:2rem;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,.1);width:320px;">
    <h2 style="margin-bottom:1rem;">Login Admin</h2>
    <?php if (session()->getFlashdata('error')): ?>
      <p style="color:red;margin-bottom:1rem;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <div style="margin-bottom:1rem;">
      <label>Username</label>
      <input type="text" name="username" style="width:100%;padding:.5rem;margin-top:.25rem;" required>
    </div>
    <div style="margin-bottom:1rem;">
      <label>Password</label>
      <input type="password" name="password" style="width:100%;padding:.5rem;margin-top:.25rem;" required>
    </div>
    <button type="submit" class="button button-primary" style="width:100%;">Login</button>
  </form>
</body>
</html>