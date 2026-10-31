<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="color-scheme" content="light dark" />
    <link rel="icon" href="data:," />
    <title>VIP Trading Signals — Sinyal Forex &amp; Crypto + Bot Auto Trading</title>
    <meta name="description" content="Sinyal VIP Forex dan Crypto berbayar dengan entry, stop loss, dan take profit yang jelas, plus bot auto trading khusus member. Edukasi saja, bukan saran keuangan." />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700;800&family=IBM+Plex+Mono:wght@400;500;600&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <style>
      :root {
        color-scheme: light dark;
        --bg: #f4f6f3;
        --bg-2: #e9ede6;
        --surface: #ffffff;
        --surface-2: #eef1ec;
        --ink: #131a16;
        --ink-2: #45524a;
        --ink-3: #71806f;
        --line: #d5dcd2;
        --up: #0e9f6e;
        --up-soft: rgba(14, 159, 110, 0.12);
        --down: #d64545;
        --down-soft: rgba(214, 69, 69, 0.1);
        --accent: #b97e10;
        --accent-strong: #96660a;
        --accent-soft: rgba(185, 126, 16, 0.14);
        --warn-bg: #fdf3e0;
        --warn-line: #e3c98a;
        --warn-ink: #6b5310;
        --shadow: 0 10px 30px rgba(19, 26, 22, 0.08);
        --radius: 14px;
      }
      @media (prefers-color-scheme: dark) {
        :root {
          --bg: #0b100d;
          --bg-2: #0e1511;
          --surface: #121a15;
          --surface-2: #17211b;
          --ink: #e8efe9;
          --ink-2: #a9b8ad;
          --ink-3: #71806f;
          --line: #243028;
          --up: #2fce8f;
          --up-soft: rgba(47, 206, 143, 0.12);
          --down: #f06464;
          --down-soft: rgba(240, 100, 100, 0.12);
          --accent: #e3a81c;
          --accent-strong: #f2bc33;
          --accent-soft: rgba(227, 168, 28, 0.14);
          --warn-bg: #241c0c;
          --warn-line: #57451a;
          --warn-ink: #e8cd8a;
          --shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
        }
      }
      * { box-sizing: border-box; }
      html { scroll-behavior: smooth; }
      body {
        margin: 0;
        background: var(--bg);
        color: var(--ink);
        font-family: "Manrope", system-ui, sans-serif;
        font-size: 16px;
        line-height: 1.6;
        -webkit-font-smoothing: antialiased;
      }
      h1, h2, h3 { font-family: "Archivo", "Manrope", sans-serif; line-height: 1.15; margin: 0; letter-spacing: -0.01em; }
      p { margin: 0; }
      .mono { font-family: "IBM Plex Mono", ui-monospace, monospace; font-variant-numeric: tabular-nums; }
      .wrap { max-width: 1120px; margin: 0 auto; padding: 0 20px; }
      section { padding: 64px 0; }
      section + section { border-top: 1px solid var(--line); }

      /* ---------- Nav ---------- */
      .nav {
        position: sticky; top: 0; z-index: 50;
        background: color-mix(in srgb, var(--bg) 88%, transparent);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid var(--line);
      }
      .nav-inner { display: flex; align-items: center; gap: 22px; height: 58px; }
      .brand { font-family: "Archivo", sans-serif; font-weight: 800; font-size: 17px; white-space: nowrap; }
      .brand span { color: var(--accent); }
      .nav-links { display: flex; gap: 20px; margin-left: auto; font-size: 14.5px; font-weight: 600; }
      .nav-links a { color: var(--ink-2); text-decoration: none; }
      .nav-links a:hover { color: var(--ink); }
      .nav-cta {
        margin-left: 4px; background: var(--accent); color: #161006; font-weight: 700;
        padding: 8px 16px; border-radius: 9px; text-decoration: none; font-size: 14.5px; white-space: nowrap;
      }
      .nav-cta:hover { background: var(--accent-strong); }
      @media (max-width: 720px) { .nav-links a:not(:last-child) { display: none; } }

      /* ---------- Hero ---------- */
      .hero { padding: 56px 0 0; }
      .hero-grid { display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 40px; align-items: start; }
      @media (max-width: 880px) { .hero-grid { grid-template-columns: 1fr; } }
      .hero h1 { font-size: clamp(32px, 4.6vw, 50px); font-weight: 800; }
      .hero h1 em { font-style: normal; color: var(--up); }
      .hero .lead { margin-top: 18px; font-size: 18px; color: var(--ink-2); max-width: 34em; }
      .hero-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 28px; }
      .btn {
        display: inline-flex; align-items: center; gap: 8px; cursor: pointer;
        font: 700 15.5px "Manrope", sans-serif; text-decoration: none;
        padding: 13px 22px; border-radius: 11px; border: 1px solid transparent;
      }
      .btn-primary { background: var(--accent); color: #161006; }
      .btn-primary:hover { background: var(--accent-strong); }
      .btn-ghost { background: var(--surface); color: var(--ink); border-color: var(--line); }
      .btn-ghost:hover { border-color: var(--ink-3); }
      .hero-points { margin-top: 26px; display: grid; gap: 10px; color: var(--ink-2); font-size: 15px; }
      .hero-points li { list-style: none; display: flex; gap: 10px; }
      .hero-points ul { margin: 0; padding: 0; display: grid; gap: 10px; }
      .hero-points .tick { color: var(--up); font-weight: 800; }

      /* terminal panel */
      .terminal {
        background: var(--surface); border: 1px solid var(--line); border-radius: var(--radius);
        box-shadow: var(--shadow); overflow: hidden;
      }
      .terminal-head {
        display: flex; align-items: center; gap: 8px; padding: 11px 16px;
        border-bottom: 1px solid var(--line); background: var(--surface-2);
        font-size: 13px; font-weight: 700; color: var(--ink-2);
      }
      .dot { width: 10px; height: 10px; border-radius: 50%; }
      .terminal-head .live { margin-left: auto; color: var(--up); font-family: "IBM Plex Mono", monospace; font-size: 12px; }
      .terminal canvas { display: block; width: 100%; height: 240px; }
      .terminal-foot {
        display: grid; grid-template-columns: repeat(3, 1fr); border-top: 1px solid var(--line);
      }
      .terminal-foot div { padding: 12px 16px; }
      .terminal-foot div + div { border-left: 1px solid var(--line); }
      .terminal-foot .k { font-size: 11.5px; color: var(--ink-3); font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; }
      .terminal-foot .v { font-family: "IBM Plex Mono", monospace; font-size: 17px; font-weight: 600; margin-top: 2px; }

      /* ticker */
      .ticker {
        margin-top: 44px; border-top: 1px solid var(--line); border-bottom: 1px solid var(--line);
        background: var(--bg-2); overflow: hidden;
      }
      .ticker-track { display: flex; gap: 0; width: max-content; animation: tick 36s linear infinite; }
      .ticker:hover .ticker-track { animation-play-state: paused; }
      @keyframes tick { to { transform: translateX(-50%); } }
      @media (prefers-reduced-motion: reduce) { .ticker-track { animation: none; } html { scroll-behavior: auto; } }
      .tick-item { display: flex; gap: 10px; align-items: baseline; padding: 10px 22px; font-family: "IBM Plex Mono", monospace; font-size: 13.5px; white-space: nowrap; }
      .tick-item .sym { font-weight: 600; color: var(--ink); }
      .up { color: var(--up); } .down { color: var(--down); }
      .ticker-note { text-align: center; font-size: 12px; color: var(--ink-3); padding: 6px 0 10px; }

      /* ---------- Sections ---------- */
      .sec-head { max-width: 44em; margin-bottom: 34px; }
      .sec-head h2 { font-size: clamp(26px, 3.4vw, 36px); font-weight: 800; }
      .sec-head p { margin-top: 12px; color: var(--ink-2); font-size: 16.5px; }

      /* signal cards */
      .sig-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
      @media (max-width: 920px) { .sig-grid { grid-template-columns: 1fr; } }
      .sig-card { background: var(--surface); border: 1px solid var(--line); border-radius: var(--radius); padding: 22px; }
      .sig-top { display: flex; align-items: center; gap: 10px; }
      .sig-pair { font-family: "Archivo", sans-serif; font-weight: 800; font-size: 19px; }
      .badge { font-size: 12px; font-weight: 800; padding: 4px 10px; border-radius: 999px; letter-spacing: 0.04em; }
      .badge-long { background: var(--up-soft); color: var(--up); }
      .badge-short { background: var(--down-soft); color: var(--down); }
      .badge-done { background: var(--surface-2); color: var(--ink-2); margin-left: auto; }
      .sig-rows { margin-top: 16px; display: grid; gap: 0; font-family: "IBM Plex Mono", monospace; font-size: 14.5px; }
      .sig-rows .row { display: flex; justify-content: space-between; padding: 8px 0; border-top: 1px dashed var(--line); }
      .sig-rows .row:first-child { border-top: none; }
      .sig-rows .k { color: var(--ink-3); font-family: "Manrope", sans-serif; font-size: 13.5px; font-weight: 600; }
      .sig-note { margin-top: 14px; font-size: 14px; color: var(--ink-2); }
      .rr-bar { display: flex; height: 8px; border-radius: 99px; overflow: hidden; margin-top: 14px; background: var(--surface-2); }
      .rr-bar .risk { background: var(--down); }
      .rr-bar .reward { background: var(--up); }
      .rr-cap { font-size: 12.5px; color: var(--ink-3); margin-top: 6px; font-family: "IBM Plex Mono", monospace; }

      .how-read { margin-top: 30px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
      @media (max-width: 920px) { .how-read { grid-template-columns: repeat(2, 1fr); } }
      @media (max-width: 520px) { .how-read { grid-template-columns: 1fr; } }
      .how-read div { border-top: 3px solid var(--accent); padding-top: 12px; }
      .how-read h3 { font-size: 16px; margin-bottom: 6px; }
      .how-read p { font-size: 14.5px; color: var(--ink-2); }

      /* pricing */
      .price-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; align-items: stretch; }
      @media (max-width: 920px) { .price-grid { grid-template-columns: 1fr; } }
      .price-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
      @media (max-width: 1080px) { .price-grid { grid-template-columns: repeat(2, 1fr); } }
      @media (max-width: 640px) { .price-grid { grid-template-columns: 1fr; } }
      .price-card { background: var(--surface); border: 1px solid var(--line); border-radius: var(--radius); padding: 26px; display: flex; flex-direction: column; }
      .price-card.featured { border: 2px solid var(--accent); position: relative; }
      .price-card .plan { font-family: "Archivo", sans-serif; font-weight: 800; font-size: 19px; }
      .price-card .for { color: var(--ink-2); font-size: 14px; margin-top: 4px; min-height: 42px; }
      .price-amount { margin: 18px 0 6px; font-family: "IBM Plex Mono", monospace; font-size: 28px; color: var(--ink); font-weight: 700; line-height: 1; }
      .price-amount span { font-size: 14px; color: var(--ink-3); font-weight: 500; font-family: "Manrope", sans-serif; }
      .price-tag { margin: 0 0 12px; font-family: "IBM Plex Mono", monospace; font-size: 13.5px; color: var(--accent-strong); font-weight: 600; }
      .price-card ul { margin: 12px 0 24px; padding: 0; display: grid; gap: 9px; font-size: 14.5px; color: var(--ink-2); }
      .price-card li { list-style: none; display: flex; gap: 9px; }
      .price-card li::before { content: "✓"; color: var(--up); font-weight: 800; }
      .checkout-btn {
        margin-top: auto; text-align: center; padding: 13px; border-radius: 11px; font-weight: 700; font-size: 15px;
        background: var(--accent); color: #161006; border: none; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 8px;
        transition: transform 0.15s ease, background 0.15s ease;
      }
      .checkout-btn:hover { background: var(--accent-strong); transform: translateY(-1px); }
      .checkout-note { font-size: 12.5px; color: var(--ink-3); text-align: center; margin-top: 10px; }
      .soon-tag { align-self: flex-start; font-size: 11px; font-weight: 800; letter-spacing: 0.05em; background: var(--accent-soft); color: var(--accent-strong); padding: 4px 10px; border-radius: 999px; margin-bottom: 12px; }

      /* ---------- FAQ / waitlist / disclaimer ---------- */
      .faq { display: grid; gap: 0; border-top: 1px solid var(--line); }
      .faq details { border-bottom: 1px solid var(--line); padding: 18px 0; }
      .faq summary { font-family: "Archivo", sans-serif; font-weight: 700; font-size: 17px; cursor: pointer; }
      .faq p { margin-top: 8px; color: var(--ink-2); max-width: 46em; }
      .waitlist { background: var(--surface); border: 1px solid var(--line); border-radius: var(--radius); padding: 28px; box-shadow: var(--shadow); }
      .waitlist form { display: grid; grid-template-columns: 1fr 1fr auto; gap: 12px; margin-top: 18px; }
      @media (max-width: 760px) { .waitlist form { grid-template-columns: 1fr; } }
      .waitlist input, .waitlist select {
        padding: 12px 14px; border-radius: 10px; border: 1px solid var(--line);
        background: var(--bg); color: var(--ink); font: 600 15px "Manrope", sans-serif; width: 100%;
      }
      .wl-result { margin-top: 18px; display: none; border: 1px solid var(--line); border-radius: 11px; padding: 16px; background: var(--surface-2); }
      .wl-result.show { display: block; }
      .wl-result pre { margin: 10px 0 0; white-space: pre-wrap; font-family: "IBM Plex Mono", monospace; font-size: 13.5px; }
      .wl-actions { display: flex; gap: 10px; margin-top: 12px; flex-wrap: wrap; }
      .btn-small { padding: 9px 16px; font-size: 14px; border-radius: 9px; }
      .disclaimer {
        background: var(--warn-bg); border: 1px solid var(--warn-line); color: var(--warn-ink);
        border-radius: var(--radius); padding: 26px 28px;
      }
      .disclaimer h2 { font-size: 20px; margin-bottom: 10px; }
      .disclaimer p { font-size: 14.5px; }
      .disclaimer p + p { margin-top: 8px; }
      footer { padding: 34px 0 44px; color: var(--ink-3); font-size: 13.5px; }
      footer .wrap { display: flex; flex-wrap: wrap; gap: 8px 26px; justify-content: space-between; }
    </style>
  </head>
  <body>
    <nav class="nav">
      <div class="wrap nav-inner">
        <div class="brand">VIP<span>·</span> SIGNALS</div>
        <div class="nav-links">
          <a href="#sinyal">Contoh Sinyal</a>
          <a href="#paket">Paket VIP</a>
          <a href="#faq">FAQ</a>
          <a href="https://t.me/+ZmLQ2kf8TmVmZDY1" target="_blank" rel="noopener noreferrer">Telegram VIP</a>
        </div>
        <a class="nav-cta" href="https://t.me/+ZmLQ2kf8TmVmZDY1" target="_blank" rel="noopener noreferrer">Gabung Telegram</a>
      </div>
    </nav>

    <!-- ================= HERO ================= -->
    <header class="hero">
      <div class="wrap hero-grid">
        <div>
          <h1>Sinyal Forex &amp; Crypto dengan rencana yang <em>jelas sejak awal</em>.</h1>
          <p class="lead">Setiap sinyal VIP dilengkapi entry, stop loss, take profit, dan risk-reward ratio — bukan sekadar tebakan arah. Paket Bundle juga mencakup bot auto trading, khusus untuk member berbayar.</p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="#paket">Lihat Paket &amp; Harga</a>
            <a class="btn btn-ghost" href="https://t.me/+ZmLQ2kf8TmVmZDY1" target="_blank" rel="noopener noreferrer">Grup Telegram VIP</a>
          </div>
          <div class="hero-points">
            <ul>
              <li><span class="tick">✓</span> Sinyal terstruktur: entry, SL, TP1–TP2, dan RR di setiap sinyal</li>
              <li><span class="tick">✓</span> Bot auto trading termasuk dalam paket Bundle — akses khusus member</li>
              <li><span class="tick">✓</span> Jujur soal risiko: tidak ada janji profit, tidak ada klaim winrate ajaib</li>
            </ul>
          </div>
        </div>
        <div class="terminal" aria-label="Pratinjau grafik contoh">
          <div class="terminal-head">
            <span class="dot" style="background:#d64545"></span>
            <span class="dot" style="background:#e3a81c"></span>
            <span class="dot" style="background:#0e9f6e"></span>
            &nbsp;BTC/USDT · H1 · Ilustrasi
            <span class="live">● CONTOH</span>
          </div>
          <canvas id="heroChart" width="640" height="240"></canvas>
          <div class="terminal-foot">
            <div><div class="k">Entry</div><div class="v">67.420</div></div>
            <div><div class="k">Stop Loss</div><div class="v" style="color:var(--down)">66.580</div></div>
            <div><div class="k">Take Profit</div><div class="v" style="color:var(--up)">69.100</div></div>
          </div>
        </div>
      </div>
      <div class="ticker" aria-hidden="true">
        <div class="ticker-track" id="tickerTrack"></div>
        <div class="ticker-note">Harga di strip ini adalah data simulasi untuk tampilan — bukan kuotasi pasar live.</div>
      </div>
    </header>

    <!-- ================= CONTOH SINYAL ================= -->
    <section id="sinyal">
      <div class="wrap">
        <div class="sec-head">
          <h2>Contoh format sinyal VIP</h2>
          <p>Tiga contoh di bawah memakai format persis seperti yang diterima member VIP. Ini contoh edukatif dari skenario yang sudah selesai — bukan sinyal live dan bukan ajakan membuka posisi sekarang.</p>
        </div>
        <div class="sig-grid">
          <article class="sig-card">
            <div class="sig-top">
              <span class="sig-pair">XAU/USD</span>
              <span class="badge badge-long">BUY</span>
              <span class="badge badge-done">TP2 TERCAPAI ✓</span>
            </div>
            <div class="sig-rows">
              <div class="row"><span class="k">Entry</span><span>2.612,40</span></div>
              <div class="row"><span class="k">Stop Loss</span><span style="color:var(--down)">2.598,00</span></div>
              <div class="row"><span class="k">Take Profit 1</span><span style="color:var(--up)">2.633,60</span></div>
              <div class="row"><span class="k">Take Profit 2</span><span style="color:var(--up)">2.654,80</span></div>
              <div class="row"><span class="k">Risk : Reward (TP2)</span><span>1 : 2,9</span></div>
            </div>
            <div class="rr-bar"><div class="risk" style="width:25.6%"></div><div class="reward" style="width:74.4%"></div></div>
            <div class="rr-cap">Risiko 14,4 poin vs potensi reward 42,4 poin</div>
            <p class="sig-note">Setup: breakout &amp; retest area resistance harian, dikonfirmasi momentum bullish di H1. TP1 untuk amankan sebagian posisi, sisanya dibiarkan ke TP2.</p>
          </article>

          <article class="sig-card">
            <div class="sig-top">
              <span class="sig-pair">BTC/USDT</span>
              <span class="badge badge-long">BUY</span>
              <span class="badge badge-done">TP1 TERCAPAI ✓</span>
            </div>
            <div class="sig-rows">
              <div class="row"><span class="k">Entry</span><span>97.850</span></div>
              <div class="row"><span class="k">Stop Loss</span><span style="color:var(--down)">95.900</span></div>
              <div class="row"><span class="k">Take Profit 1</span><span style="color:var(--up)">100.750</span></div>
              <div class="row"><span class="k">Take Profit 2</span><span style="color:var(--up)">103.700</span></div>
              <div class="row"><span class="k">Risk : Reward (TP2)</span><span>1 : 3,0</span></div>
            </div>
            <div class="rr-bar"><div class="risk" style="width:25%"></div><div class="reward" style="width:75%"></div></div>
            <div class="rr-cap">Risiko 1.950 poin vs potensi reward 5.850 poin</div>
            <p class="sig-note">Setup: pantulan dari zona demand H4 setelah sweep likuiditas. Sinyal dibatalkan otomatis bila candle H4 ditutup di bawah stop loss sebelum entry tersentuh.</p>
          </article>

          <article class="sig-card">
            <div class="sig-top">
              <span class="sig-pair">EUR/USD</span>
              <span class="badge badge-short">SELL</span>
              <span class="badge badge-done">STOP LOSS ✕</span>
            </div>
            <div class="sig-rows">
              <div class="row"><span class="k">Entry</span><span>1,08420</span></div>
              <div class="row"><span class="k">Stop Loss</span><span style="color:var(--down)">1,08700</span></div>
              <div class="row"><span class="k">Take Profit 1</span><span style="color:var(--up)">1,07980</span></div>
              <div class="row"><span class="k">Take Profit 2</span><span style="color:var(--up)">1,07560</span></div>
              <div class="row"><span class="k">Risk : Reward (TP2)</span><span>1 : 3,1</span></div>
            </div>
            <div class="rr-bar"><div class="risk" style="width:24.5%"></div><div class="reward" style="width:75.5%"></div></div>
            <div class="rr-cap">Risiko 28 pip vs potensi reward 86 pip</div>
            <p class="sig-note">Contoh sinyal yang gagal — dan memang ditampilkan apa adanya. Dengan risiko 1% per trade, kerugian seperti ini terkendali dan merupakan bagian normal dari trading.</p>
          </article>
        </div>

        <div class="how-read">
          <div>
            <h3>Entry</h3>
            <p>Harga tempat posisi dibuka. Sinyal selalu menyebut harga spesifik, bukan “buy now” tanpa level.</p>
          </div>
          <div>
            <h3>Stop Loss (SL)</h3>
            <p>Batas kerugian yang ditentukan sebelum masuk. Jika harga menyentuh SL, posisi ditutup — tanpa negosiasi.</p>
          </div>
          <div>
            <h3>Take Profit (TP)</h3>
            <p>Target keuntungan bertahap (TP1, TP2) supaya profit diamankan sebagian sebelum target penuh.</p>
          </div>
          <div>
            <h3>Risk : Reward</h3>
            <p>Perbandingan risiko vs potensi hasil. Dengan RR 1:3, cukup menang ±25% dari waktu untuk impas secara matematis.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= PAKET VIP ================= -->
    <section id="paket">
      <div class="wrap">
        <div class="sec-head">
          <h2>Paket VIP &amp; Membership</h2>
          <p>Pilih sesuai kebutuhan trading kamu. Tersedia keanggotaan VIP sinyal, edukasi, hingga bot auto trading resmi berlisensi.</p>
        </div>
        <div class="price-grid">
          <!-- 1. PREMIUM MEMBERSHIP 2 -->
          <article class="price-card">
            <span class="soon-tag">VIP TIER 2</span>
            <div class="plan">PREMIUM MEMBERSHIP 2</div>
            <p class="for">Akses grup VIP prioritas tier 2 dengan analisis pasar komprehensif</p>
            <div class="price-amount">$102.00 <span>/ akun</span></div>
            <div class="price-tag">Qty: 1 • None</div>
            <ul>
              <li>Semua sinyal harian VIP Forex &amp; Crypto</li>
              <li>Setup teknikal lengkap (Entry, SL, TP1–TP3)</li>
              <li>Akses langsung ke grup VIP Telegram</li>
              <li>Analisis live market updates &amp; sentimen</li>
              <li>Prioritas mentoring &amp; tanya jawab</li>
            </ul>
            <a class="checkout-btn" href="https://t.me/+ZmLQ2kf8TmVmZDY1" target="_blank" rel="noopener noreferrer">Gabung Telegram VIP</a>
            <p class="checkout-note">Akses instan via Telegram resmi setelah konfirmasi</p>
          </article>

          <!-- 2. PREMIUM MEMBER -->
          <article class="price-card">
            <span class="soon-tag">POPULAR</span>
            <div class="plan">PREMIUM MEMBER</div>
            <p class="for">Keanggotaan VIP standar untuk sinyal harian &amp; komunitas trader</p>
            <div class="price-amount">$30.00 <span>/ akun</span></div>
            <div class="price-tag">Qty: 1 • None</div>
            <ul>
              <li>Sinyal harian pair mayor Forex &amp; Crypto</li>
              <li>Format sinyal terstruktur dengan risk management</li>
              <li>Akses ruang diskusi member Telegram</li>
              <li>Update mingguan market overview</li>
            </ul>
            <a class="checkout-btn" href="https://t.me/+ZmLQ2kf8TmVmZDY1" target="_blank" rel="noopener noreferrer">Gabung Telegram VIP</a>
            <p class="checkout-note">Akses instan via Telegram resmi</p>
          </article>

          <!-- 3. Auto Trading Bot - Software Licence -->
          <article class="price-card featured">
            <span class="soon-tag">AUTOMATION BOT</span>
            <div class="plan">Auto Trading Bot</div>
            <p class="for">Software Licence resmi bot auto trading berkinerja tinggi</p>
            <div class="price-amount">$299.00 <span>/ year</span></div>
            <div class="price-tag"><span style="text-decoration:line-through; color:var(--ink-3)">$299.00</span> Promo $0.00 (Slot Terbatas)</div>
            <ul>
              <li>Lisensi Software Auto Trading Bot 1 Tahun</li>
              <li>Strategi multi-indikator otomatis (Trend, RSI, MA)</li>
              <li>Risk control otomatis: Max daily drawdown &amp; SL terintegrasi</li>
              <li>Support API koneksi broker/exchange terpercaya</li>
              <li>Panduan instalasi &amp; konsultasi setting bot</li>
            </ul>
            <a class="checkout-btn" href="https://t.me/+ZmLQ2kf8TmVmZDY1" target="_blank" rel="noopener noreferrer">Klaim Lisensi Bot</a>
            <p class="checkout-note">Hubungi admin untuk aktivasi lisensi software</p>
          </article>

          <!-- 4. VIP Trading Signals - Education Membership -->
          <article class="price-card">
            <span class="soon-tag">EDUCATION &amp; SIGNALS</span>
            <div class="plan">VIP Trading Signals</div>
            <p class="for">Education Membership &amp; sinyal edukatif intensif bulanan</p>
            <div class="price-amount">$99.00 <span>/ month</span></div>
            <div class="price-tag">Membership Bulanan</div>
            <ul>
              <li>Edukasi live &amp; webinar strategi mingguan</li>
              <li>Sinyal edukatif Forex &amp; Crypto harian</li>
              <li>Bedah chart real-time &amp; price action logic</li>
              <li>Manajemen psikologi &amp; money management</li>
              <li>Grup privat Telegram interaktif</li>
            </ul>
            <a class="checkout-btn" href="https://t.me/+ZmLQ2kf8TmVmZDY1" target="_blank" rel="noopener noreferrer">Daftar Membership</a>
            <p class="checkout-note">Akses langsung ke channel materi &amp; diskusi</p>
          </article>
        </div>
        <p style="margin-top:24px; color:var(--ink-2); font-size:15px; text-align:center;">
          📨 <strong>Channel / Grup Telegram Resmi:</strong> 
          <a href="https://t.me/+ZmLQ2kf8TmVmZDY1" target="_blank" rel="noopener noreferrer" class="mono" style="color:var(--accent-strong); font-weight:700; text-decoration:underline;">https://t.me/+ZmLQ2kf8TmVmZDY1</a>
        </p>
      </div>
    </section>

    <!-- ================= FAQ ================= -->
    <section id="faq">
      <div class="wrap">
        <div class="sec-head">
          <h2>Pertanyaan umum</h2>
        </div>
        <div class="faq">
          <details>
            <summary>Apakah sinyal VIP menjamin profit?</summary>
            <p>Tidak. Tidak ada sinyal, bot, atau trader yang bisa menjamin profit. Trading Forex dan Crypto berisiko tinggi dan kamu bisa kehilangan sebagian atau seluruh modal. Sinyal kami adalah rencana trading terstruktur dengan manajemen risiko — keputusan dan risikonya tetap di tanganmu.</p>
          </details>
          <details>
            <summary>Bagaimana cara berlangganan paket VIP?</summary>
            <p>Pembayaran akan diproses lewat Whop. Saat produk Whop selesai dibuat, tombol checkout di bagian paket akan mengarah langsung ke halaman pembayaran resmi. Sampai saat itu, kamu bisa masuk daftar tunggu agar diberi tahu pertama kali saat penjualan dibuka.</p>
          </details>
          <details>
            <summary>Bot versi penuh nanti terhubung ke akun saya bagaimana?</summary>
            <p>Bot versi member memakai koneksi resmi yang disediakan broker/exchange lewat API trade-only (tanpa izin withdraw), dengan batas risiko yang kamu atur sendiri. Detail teknisnya diumumkan saat produk diterbitkan di Whop — halaman ini tidak meminta kredensial akun apa pun.</p>
          </details>
          <details>
            <summary>Modal berapa yang cocok untuk mengikuti sinyal?</summary>
            <p>Gunakan hanya uang yang sanggup kamu relakan hilang seluruhnya, dan risikokan maksimal 1–2% modal per trade seperti contoh di halaman ini. Jika ragu, pahami dulu format sinyal dan manajemen risikonya sebelum berlangganan.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- ================= DAFTAR TUNGGU ================= -->
    <section id="daftar">
      <div class="wrap">
        <div class="waitlist">
          <h2 style="font-size:26px">Daftar tunggu peluncuran</h2>
          <p style="color:var(--ink-2); margin-top:8px; max-width:44em">Isi nama panggilan dan paket yang kamu minati. Formulir ini membuat ringkasan pendaftaran yang bisa kamu salin atau unduh sebagai bukti minatmu — simpan dan tunjukkan saat checkout Whop dibuka untuk prioritas antrean rilis.</p>
          <form id="wlForm">
            <input type="text" id="wlName" placeholder="Nama panggilan" maxlength="40" required aria-label="Nama panggilan" />
            <select id="wlPlan" aria-label="Paket yang diminati">
              <option value="PREMIUM MEMBERSHIP 2 ($102.00)">PREMIUM MEMBERSHIP 2 ($102.00)</option>
              <option value="PREMIUM MEMBER ($30.00)">PREMIUM MEMBER ($30.00)</option>
              <option value="Auto Trading Bot - Software Licence ($299.00 / year - Promo $0.00)">Auto Trading Bot - Software Licence ($299.00 / year - Promo $0.00)</option>
              <option value="VIP Trading Signals - Education Membership ($99.00 / month)">VIP Trading Signals - Education Membership ($99.00 / month)</option>
            </select>
            <button class="btn btn-primary" type="submit">Buat Ringkasan Pendaftaran</button>
          </form>
          <div class="wl-result" id="wlResult">
            <strong>Ringkasan pendaftaranmu:</strong>
            <pre id="wlText"></pre>
            <div class="wl-actions">
              <button class="btn btn-ghost btn-small" type="button" id="wlCopy">Salin Ringkasan</button>
              <button class="btn btn-ghost btn-small" type="button" id="wlDownload">Unduh .txt</button>
            </div>
            <p class="hint" style="font-size:12.5px; color:var(--ink-3); margin-top:10px" id="wlCopyMsg"></p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= DISCLAIMER ================= -->
    <section>
      <div class="wrap">
        <div class="disclaimer">
          <h2>⚠ Disclaimer Risiko — Baca Sebelum Trading</h2>
          <p><strong>Trading Forex dan Crypto sangat berisiko.</strong> Kamu dapat kehilangan sebagian atau seluruh modalmu. Jangan pernah trading memakai uang kebutuhan hidup, uang pinjaman, atau dana yang tidak sanggup kamu relakan hilang.</p>
          <p><strong>Tidak ada jaminan profit.</strong> Sinyal, analisis, dan bot di layanan ini bersifat edukatif dan informatif, bukan nasihat keuangan. Hasil masa lalu — termasuk contoh sinyal di halaman ini — <strong>bukan jaminan hasil di masa depan</strong>.</p>
          <p><strong>Keputusan trading sepenuhnya tanggung jawabmu sendiri.</strong> Pertimbangkan untuk berkonsultasi dengan penasihat keuangan berlisensi sebelum mengambil keputusan.</p>
        </div>
      </div>
    </section>

    <footer>
      <div class="wrap">
        <span>VIP Signals — sinyal Forex &amp; Crypto edukatif dengan manajemen risiko.</span>
        <span>Checkout resmi hanya melalui Whop (segera). Halaman ini tidak meminta password, API key, atau seed phrase — waspada penipuan yang mengatasnamakan kami.</span>
      </div>
    </footer>

    <script>
      "use strict";

      /* ============ Utilities: seeded RNG ============ */
      function hashSeed(str) {
        var h = 2166136261;
        for (var i = 0; i < str.length; i++) { h ^= str.charCodeAt(i); h = Math.imul(h, 16777619); }
        return h >>> 0;
      }
      function mulberry32(seed) {
        var a = seed >>> 0;
        return function () {
          a |= 0; a = (a + 0x6D2B79F5) | 0;
          var t = Math.imul(a ^ (a >>> 15), 1 | a);
          t = (t + Math.imul(t ^ (t >>> 7), 61 | t)) ^ t;
          return ((t ^ (t >>> 14)) >>> 0) / 4294967296;
        };
      }
      function fmt(n, dec) {
        return n.toLocaleString("en-US", { minimumFractionDigits: dec, maximumFractionDigits: dec });
      }
      function fmtUSD(n) {
        var s = n < 0 ? "-$" : "$";
        return s + fmt(Math.abs(n), 2);
      }
      function cssVar(name) { return getComputedStyle(document.documentElement).getPropertyValue(name).trim(); }

      var PAIRS = {
        BTCUSDT: { label: "BTC/USDT", start: 67400, vol: 0.006, dec: 0 },
        ETHUSDT: { label: "ETH/USDT", start: 3520, vol: 0.0075, dec: 1 },
        SOLUSDT: { label: "SOL/USDT", start: 162, vol: 0.011, dec: 2 },
        XAUUSD:  { label: "XAU/USD", start: 2612, vol: 0.0035, dec: 2 },
        EURUSD:  { label: "EUR/USD", start: 1.0842, vol: 0.0016, dec: 5 },
        GBPUSD:  { label: "GBP/USD", start: 1.2715, vol: 0.002, dec: 5 }
      };

      function genCandles(seedStr, cfg, count) {
        var rnd = mulberry32(hashSeed(seedStr));
        var candles = [];
        var price = cfg.start;
        var driftPhase = rnd() * Math.PI * 2;
        for (var i = 0; i < count; i++) {
          var drift = Math.sin(i / 38 + driftPhase) * cfg.vol * 0.55;
          var shock = (rnd() + rnd() + rnd() - 1.5) / 1.5 * cfg.vol * 2.1;
          var open = price;
          var close = open * (1 + drift + shock);
          var hi = Math.max(open, close) * (1 + rnd() * cfg.vol * 0.8);
          var lo = Math.min(open, close) * (1 - rnd() * cfg.vol * 0.8);
          candles.push({ o: open, h: hi, l: lo, c: close });
          price = close;
        }
        return candles;
      }

      function emaSeries(values, period) {
        var k = 2 / (period + 1), out = [], prev = values[0];
        for (var i = 0; i < values.length; i++) { prev = i === 0 ? values[0] : values[i] * k + prev * (1 - k); out.push(prev); }
        return out;
      }
      function smaSeries(values, period) {
        var out = [];
        for (var i = 0; i < values.length; i++) {
          if (i < period - 1) { out.push(null); continue; }
          var s = 0; for (var j = i - period + 1; j <= i; j++) s += values[j];
          out.push(s / period);
        }
        return out;
      }
      function rsiSeries(values, period) {
        var out = new Array(values.length).fill(null);
        var gains = 0, losses = 0;
        for (var i = 1; i < values.length; i++) {
          var d = values[i] - values[i - 1];
          var g = Math.max(d, 0), l = Math.max(-d, 0);
          if (i <= period) {
            gains += g / period; losses += l / period;
            if (i === period) out[i] = losses === 0 ? 100 : 100 - 100 / (1 + gains / losses);
          } else {
            gains = (gains * (period - 1) + g) / period;
            losses = (losses * (period - 1) + l) / period;
            out[i] = losses === 0 ? 100 : 100 - 100 / (1 + gains / losses);
          }
        }
        return out;
      }

      /* ============ Canvas helpers ============ */
      function setupCanvas(canvas, cssHeight) {
        var dpr = window.devicePixelRatio || 1;
        var w = canvas.clientWidth;
        canvas.width = Math.round(w * dpr);
        canvas.height = Math.round(cssHeight * dpr);
        var ctx = canvas.getContext("2d");
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
        return { ctx: ctx, w: w, h: cssHeight };
      }
      function drawCandles(canvas, cssHeight, candles, markers, lineSeries) {
        var s = setupCanvas(canvas, cssHeight), ctx = s.ctx, W = s.w, H = s.h;
        var up = cssVar("--up"), down = cssVar("--down"), line = cssVar("--line"), ink3 = cssVar("--ink-3"), accent = cssVar("--accent");
        ctx.clearRect(0, 0, W, H);
        var min = Infinity, max = -Infinity, i;
        for (i = 0; i < candles.length; i++) { min = Math.min(min, candles[i].l); max = Math.max(max, candles[i].h); }
        if (lineSeries) for (i = 0; i < lineSeries.length; i++) if (lineSeries[i] != null) { min = Math.min(min, lineSeries[i]); max = Math.max(max, lineSeries[i]); }
        var pad = (max - min) * 0.08 || 1; min -= pad; max += pad;
        var y = function (p) { return H - ((p - min) / (max - min)) * H; };
        ctx.strokeStyle = line; ctx.lineWidth = 1; ctx.beginPath();
        for (var g = 1; g <= 4; g++) { var gy = (H / 5) * g; ctx.moveTo(0, gy); ctx.lineTo(W, gy); }
        ctx.stroke();
        var step = W / candles.length, bw = Math.max(1.5, step * 0.62);
        for (i = 0; i < candles.length; i++) {
          var c = candles[i], x = i * step + step / 2, col = c.c >= c.o ? up : down;
          ctx.strokeStyle = col; ctx.fillStyle = col; ctx.lineWidth = 1;
          ctx.beginPath(); ctx.moveTo(x, y(c.h)); ctx.lineTo(x, y(c.l)); ctx.stroke();
          var t = Math.min(y(c.o), y(c.c)), bh = Math.max(1.4, Math.abs(y(c.o) - y(c.c)));
          ctx.fillRect(x - bw / 2, t, bw, bh);
        }
        if (lineSeries) {
          ctx.strokeStyle = accent; ctx.lineWidth = 1.4; ctx.beginPath();
          var started = false;
          for (i = 0; i < lineSeries.length; i++) {
            if (lineSeries[i] == null) continue;
            var lx = i * step + step / 2, ly = y(lineSeries[i]);
            if (!started) { ctx.moveTo(lx, ly); started = true; } else ctx.lineTo(lx, ly);
          }
          ctx.stroke();
        }
        if (markers) {
          ctx.font = "11px sans-serif"; ctx.textAlign = "center";
          for (i = 0; i < markers.length; i++) {
            var m = markers[i], mx = m.i * step + step / 2;
            ctx.fillStyle = m.type === "long" ? up : m.type === "short" ? down : ink3;
            if (m.type === "long") { ctx.beginPath(); ctx.moveTo(mx, y(m.price) + 14); ctx.lineTo(mx - 5, y(m.price) + 23); ctx.lineTo(mx + 5, y(m.price) + 23); ctx.fill(); }
            else if (m.type === "short") { ctx.beginPath(); ctx.moveTo(mx, y(m.price) - 14); ctx.lineTo(mx - 5, y(m.price) - 23); ctx.lineTo(mx + 5, y(m.price) - 23); ctx.fill(); }
            else ctx.fillText("✕", mx, y(m.price) - 8);
          }
        }
      }
      function drawEquity(canvas, cssHeight, points, startEq) {
        var s = setupCanvas(canvas, cssHeight), ctx = s.ctx, W = s.w, H = s.h;
        var up = cssVar("--up"), down = cssVar("--down"), line = cssVar("--line");
        ctx.clearRect(0, 0, W, H);
        if (!points.length) return;
        var min = Math.min.apply(null, points.concat([startEq])), max = Math.max.apply(null, points.concat([startEq]));
        var pad = (max - min) * 0.15 || 1; min -= pad; max += pad;
        var y = function (p) { return H - ((p - min) / (max - min)) * H; };
        ctx.strokeStyle = line; ctx.setLineDash([4, 4]); ctx.beginPath();
        ctx.moveTo(0, y(startEq)); ctx.lineTo(W, y(startEq)); ctx.stroke(); ctx.setLineDash([]);
        var finalUp = points[points.length - 1] >= startEq;
        ctx.strokeStyle = finalUp ? up : down; ctx.lineWidth = 1.8; ctx.beginPath();
        for (var i = 0; i < points.length; i++) {
          var x = (i / (points.length - 1)) * W;
          if (i === 0) ctx.moveTo(x, y(points[i])); else ctx.lineTo(x, y(points[i]));
        }
        ctx.stroke();
      }

      /* ============ Hero mini chart (illustration) ============ */
      (function () {
        var c = document.getElementById("heroChart");
        var cfg = PAIRS.BTCUSDT;
        var candles = genCandles("hero-illustration", { start: 64200, vol: cfg.vol, dec: 0 }, 72);
        var closes = candles.map(function (x) { return x.c; });
        drawCandles(c, 240, candles, null, emaSeries(closes, 14));
      })();

      /* ============ Ticker (simulated) ============ */
      (function () {
        var items = [
          ["BTC/USDT", 97412.50, 2.34], ["ETH/USDT", 3418.22, 1.87], ["SOL/USDT", 214.65, -0.92],
          ["XAU/USD", 2618.40, 0.64], ["EUR/USD", 1.0842, -0.12], ["GBP/USD", 1.2715, 0.28],
          ["USD/JPY", 154.320, -0.35], ["BNB/USDT", 692.14, 3.05]
        ];
        var html = "";
        for (var r = 0; r < 2; r++) {
          for (var i = 0; i < items.length; i++) {
            var it = items[i], cls = it[2] >= 0 ? "up" : "down", arrow = it[2] >= 0 ? "▲" : "▼";
            html += '<div class="tick-item"><span class="sym">' + it[0] + '</span><span>' + fmt(it[1], it[1] < 10 ? 4 : 2) + '</span><span class="' + cls + '">' + arrow + " " + fmt(Math.abs(it[2]), 2) + "%</span></div>";
          }
        }
        document.getElementById("tickerTrack").innerHTML = html;
      })();

      /* redraw charts on resize (keeps last sim visible where possible) */
      var resizeTimer = null;
      window.addEventListener("resize", function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
          var c = document.getElementById("heroChart");
          var candles = genCandles("hero-illustration", { start: 64200, vol: PAIRS.BTCUSDT.vol, dec: 0 }, 72);
          drawCandles(c, 240, candles, null, emaSeries(candles.map(function (x) { return x.c; }), 14));
        }, 200);
      });

      /* ============ Waitlist ============ */
      document.getElementById("wlForm").addEventListener("submit", function (e) {
        e.preventDefault();
        var name = document.getElementById("wlName").value.trim() || "Tanpa nama";
        var plan = document.getElementById("wlPlan").value;
        var now = new Date();
        var code = "WL-" + (hashSeed(name + plan) % 9000 + 1000);
        var text =
          "PENDAFTARAN DAFTAR TUNGGU — VIP SIGNALS\n" +
          "Nama        : " + name + "\n" +
          "Paket minat : " + plan + "\n" +
          "Tanggal     : " + now.toLocaleDateString("id-ID", { day: "numeric", month: "long", year: "numeric" }) + "\n" +
          "Kode antrean: " + code + "\n\n" +
          "Tunjukkan ringkasan ini saat checkout Whop dibuka untuk prioritas antrean rilis.\n" +
          "Ingat: trading berisiko, tidak ada jaminan profit.";
        document.getElementById("wlText").textContent = text;
        document.getElementById("wlResult").classList.add("show");
        document.getElementById("wlCopyMsg").textContent = "";
        document.getElementById("wlResult").scrollIntoView({ behavior: "smooth", block: "nearest" });
      });
      document.getElementById("wlCopy").addEventListener("click", function () {
        var text = document.getElementById("wlText").textContent;
        var msg = document.getElementById("wlCopyMsg");
        if (navigator.clipboard && navigator.clipboard.writeText) {
          navigator.clipboard.writeText(text).then(function () { msg.textContent = "Ringkasan tersalin ke clipboard."; }, function () { msg.textContent = "Gagal menyalin otomatis — salin teks di atas secara manual."; });
        } else { msg.textContent = "Clipboard tidak tersedia — salin teks di atas secara manual."; }
      });
      document.getElementById("wlDownload").addEventListener("click", function () {
        var text = document.getElementById("wlText").textContent;
        var blob = new Blob([text], { type: "text/plain;charset=utf-8" });
        var a = document.createElement("a");
        a.href = URL.createObjectURL(blob);
        a.download = "daftar-tunggu-vip-signals.txt";
        document.body.appendChild(a); a.click(); document.body.removeChild(a);
        setTimeout(function () { URL.revokeObjectURL(a.href); }, 1000);
      });
    </script>
  </body>
</html>
