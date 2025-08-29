<?php
// Template for Webnary Mobile Header.
?>
<div id="webnary-mobile-nav" class="wn-scope" role="region" aria-label="Mobil menü">
  <input type="checkbox" id="wn-nav-toggle" class="wn-toggle" aria-hidden="true" />

  <header class="wn-header" role="banner">
    <div class="wn-left">
      <a href="https://webnary.net" class="wn-brand" aria-label="Webnary Ana Sayfa">
        <img src="https://webnary.net/wp-content/uploads/2025/08/webnary-yatay-scaled.png" alt="Webnary Logosu" loading="lazy" />
      </a>
    </div>
    <div class="wn-right">
      <label for="wn-nav-toggle" class="wn-icon-btn" aria-label="Menüyü aç" role="button" aria-controls="wn-drawer" aria-expanded="false">
        <svg viewBox="0 0 24 24" width="24" height="24"><path d="M3 6h18v2H3zM3 11h18v2H3zM3 16h18v2H3z"/></svg>
      </label>
    </div>
  </header>

  <label for="wn-nav-toggle" class="wn-backdrop" aria-hidden="true"></label>

  <aside id="wn-drawer" class="wn-drawer" role="dialog" aria-modal="true" aria-label="Mobil menü">
    <div class="wn-drawer-top">
      <a href="https://webnary.net" class="wn-brand-drawer" aria-label="Webnary Ana Sayfa">
        <img src="https://webnary.net/wp-content/uploads/2025/08/webnary-yatay-scaled.png" alt="Webnary Logosu" loading="lazy" />
      </a>
      <label for="wn-nav-toggle" class="wn-icon-btn wn-close" aria-label="Menüyü kapat" role="button" aria-controls="wn-drawer" aria-expanded="true">
        <svg viewBox="0 0 24 24" width="24" height="24"><path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="#fff"/></svg>
      </label>
    </div>

    <nav class="wn-mega" role="navigation">
      <details name="wn-accordion" class="wn-accordion">
        <summary class="wn-accordion-header">
          <span class="wn-ico"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg></span>
          <span>Kurumsal</span>
          <span class="wn-chevron"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
        </summary>
        <div class="wn-accordion-body"><ul>
          <li><a href="https://webnary.net/hakkimizda/"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg><span>Hakkımızda</span></a></li>
          <li><a href="https://webnary.net/ekibimiz/"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><span>Ekibimiz</span></a></li>
          <li><a href="https://webnary.net/nasil-calisiyoruz/"><svg viewBox="0 0 24 24"><path d="M12 20v-4M12 4v4M4 12h4M16 12h4M17.66 6.34l-2.83-2.83M6.34 17.66l-2.83-2.83M17.66 17.66l-2.83 2.83M6.34 6.34l-2.83 2.83"></path><circle cx="12" cy="12" r="2"></circle></svg><span>Nasıl Çalışıyoruz?</span></a></li>
          <li><a href="https://webnary.net/kariyer/"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg><span>Kariyer</span></a></li>
          <li><a href="https://webnary.net/teknolojilerimiz/"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg><span>Teknolojilerimiz</span></a></li>
          <li><a href="https://webnary.net/nedeb-webnary/"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg><span>Neden Webnary?</span></a></li>
          <li><a href="http://webnary.net//planlar"><svg viewBox="0 0 24 24"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg><span>Fiyatlar & Planlar</span></a></li>
          <li><a href="http://webnary.net//kvkk"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg><span>KVKK & Yasal Sözleşmeler</span></a></li>
        </ul></div>
      </details>

      <details name="wn-accordion" class="wn-accordion">
        <summary class="wn-accordion-header">
          <span class="wn-ico"><svg viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></span>
          <span>Hizmetlerimiz</span>
          <span class="wn-chevron"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
        </summary>
        <div class="wn-accordion-body"><ul>
          <li><a href="https://webnary.net/service/web-tasarim/"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg><span>Web Tasarım</span></a></li>
          <li><a href="https://webnary.net/service/grafik-tasarim/"><svg viewBox="0 0 24 24"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg><span>Grafik Tasarım</span></a></li>
          <li><a href="https://webnary.net/service/urun-gelistirme/"><svg viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg><span>Ürün Geliştirme</span></a></li>
          <li><a href="https://webnary.net/service/qr-menu-interaktif-hizmetler/"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect><line x1="14" y1="14" x2="21" y2="14"></line><line x1="14" y1="17" x2="18" y2="17"></line><line x1="14" y1="21" x2="16" y2="21"></line></svg><span>QR Menü & Interaktif</span></a></li>
          <li><a href="https://webnary.net/service/sosyal-medya-yonetimi/"><svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg><span>Sosyal Medya Yönetimi</span></a></li>
          <li><a href="https://webnary.net/service/dijital-reklam/"><svg viewBox="0 0 24 24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg><span>Dijital Reklam</span></a></li>
        </ul></div>
      </details>

      <details name="wn-accordion" class="wn-accordion">
        <summary class="wn-accordion-header">
          <span class="wn-ico"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg></span>
          <span>Referans ve Bilgi</span>
          <span class="wn-chevron"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
        </summary>
        <div class="wn-accordion-body"><ul>
          <li><a href="https://webnary.net/referanslarimiz/"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><span>Referanslarımız</span></a></li>
          <li><a href="https://webnary.net/blog/"><svg viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg><span>weBlog</span></a></li>
          <li><a href="http://webnary.net//sss"><svg viewBox="0 0 24 24"><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="17" x2="12.01" y2="17"></line></svg><span>S.S.S.</span></a></li>
        </ul></div>
      </details>
    </nav>

    <div class="wn-drawer-footer">
      <div class="wn-static-links">
        <a href="https://webnary.net/iletisim/" class="wn-btn-cta">
          <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          <span>İletişim</span>
        </a>
        <a href="https://webnary.net/appointment/" class="wn-btn-cta wn-cta-primary">
          <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
          <span>Randevu Alın</span>
        </a>
      </div>
      <footer class="wn-footer">
        <a href="mailto:info@webnary.net" class="wn-foot-link">info@webnary.net</a>
        <a href="https://wa.me/90" class="wn-foot-link">WhatsApp</a>
      </footer>
    </div>
  </aside>
</div>

