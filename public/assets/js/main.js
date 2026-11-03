(() => {
  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('#primary-nav');

  if (toggle && nav) {
    const closeMenu = () => {
      toggle.setAttribute('aria-expanded', 'false');
      toggle.setAttribute('aria-label', 'Buka menu');
      nav.classList.remove('is-open');
    };

    toggle.addEventListener('click', () => {
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!isOpen));
      toggle.setAttribute('aria-label', isOpen ? 'Buka menu' : 'Tutup menu');
      nav.classList.toggle('is-open', !isOpen);
    });
    nav.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape' && nav.classList.contains('is-open')) {
        closeMenu();
        toggle.focus();
      }
    });
    window.addEventListener('resize', () => {
      if (window.innerWidth > 1040) closeMenu();
    });
  }

  const year = document.querySelector('[data-current-year]');
  if (year) year.textContent = String(new Date().getFullYear());

  const serviceDialog = document.querySelector('#service-dialog');
  const dialogTitle = document.querySelector('#service-dialog-title');
  const dialogCopy = document.querySelector('#service-dialog-copy');
  const dialogStatus = document.querySelector('#service-dialog-status');
  const serviceInformation = {
    surat: {
      title: 'Surat dan dokumen',
      copy: 'Bagian ini akan memuat jenis layanan, persyaratan, jam pelayanan, dan cara pengajuan yang telah dikonfirmasi oleh pemerintah desa.',
      status: 'Pengajuan online belum tersedia. Lengkapi informasi resmi sebelum layanan dipublikasikan.'
    },
    data: {
      title: 'Data dan informasi desa',
      copy: 'Profil, wilayah, demografi, dan potensi desa dapat ditampilkan di halaman ini setelah data resmi disiapkan.',
      status: 'Belum ada data resmi yang dimasukkan ke template.'
    },
    aspirasi: {
      title: 'Aspirasi warga',
      copy: 'Ruang ini direncanakan untuk menerima masukan warga melalui kanal yang dikelola pemerintah desa.',
      status: 'Form aspirasi belum terhubung ke server. Jangan kirim data pribadi melalui halaman ini.'
    },
    transparansi: {
      title: 'Anggaran dan kegiatan',
      copy: 'Informasi program dan dokumen anggaran dapat ditautkan di sini setelah dokumen resmi tersedia.',
      status: 'Dokumen dan angka anggaran belum dimuat.'
    }
  };

  document.querySelectorAll('[data-service]').forEach((button) => {
    button.addEventListener('click', () => {
      const information = serviceInformation[button.dataset.service];
      if (!information || !serviceDialog || typeof serviceDialog.showModal !== 'function') return;
      dialogTitle.textContent = information.title;
      dialogCopy.textContent = information.copy;
      dialogStatus.textContent = information.status;
      serviceDialog.showModal();
      serviceDialog.querySelector('.dialog-close').focus();
    });
  });

  if (serviceDialog) {
    serviceDialog.addEventListener('click', (event) => {
      if (event.target === serviceDialog) serviceDialog.close();
    });
    serviceDialog.addEventListener('close', () => {
      document.querySelector('[data-service]:focus')?.focus();
    });
  }

  const searchInput = document.querySelector('#news-search');
  const filterButtons = [...document.querySelectorAll('[data-news-filter]')];
  const newsCards = [...document.querySelectorAll('.news-card[data-category]')];
  const resultCount = document.querySelector('.news-result-count');
  const emptyMessage = document.querySelector('.news-empty');
  let selectedCategory = 'all';

  const filterNews = () => {
    if (!searchInput) return;
    const query = searchInput.value.trim().toLocaleLowerCase('id');
    let visibleCount = 0;
    newsCards.forEach((card) => {
      const categoryMatches = selectedCategory === 'all' || card.dataset.category === selectedCategory;
      const textMatches = card.textContent.toLocaleLowerCase('id').includes(query);
      const visible = categoryMatches && textMatches;
      card.hidden = !visible;
      if (visible) visibleCount += 1;
    });
    if (resultCount) resultCount.textContent = `${visibleCount} contoh berita ditampilkan`;
    if (emptyMessage) emptyMessage.hidden = visibleCount !== 0;
  };

  filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
      selectedCategory = button.dataset.newsFilter;
      filterButtons.forEach((item) => {
        const active = item === button;
        item.classList.toggle('is-active', active);
        item.setAttribute('aria-pressed', String(active));
      });
      filterNews();
    });
  });
  searchInput?.addEventListener('input', filterNews);
  filterNews();

  document.addEventListener('keydown', (event) => {
    if ((event.ctrlKey || event.metaKey) && event.key.toLowerCase() === 'k' && searchInput) {
      event.preventDefault();
      document.querySelector('#berita')?.scrollIntoView({ behavior: 'smooth' });
      searchInput.focus();
    }
  });
})();
