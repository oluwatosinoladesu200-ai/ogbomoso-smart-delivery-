<?php
// Ogbomoso Smart Delivery — starter prototype.
// This first version runs without a live NIPOST API key. Live postcode validation
// is added in api/validate-postcode.php after you receive authorised credentials.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ogbomoso Smart Delivery</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="topbar">
    <a class="brand" href="#"><span class="brand-mark">OS</span><span>Ogbomoso <b>Smart Delivery</b></span></a>
    <span class="status"><span class="status-dot"></span> Ogbomoso pilot</span>
  </header>

  <main class="page">
    <section class="hero">
      <div class="hero-copy">
        <p class="eyebrow">LOCAL COMMERCE, BETTER CONNECTED</p>
        <h1>Deliver to the <span>right building.</span></h1>
        <p class="intro">A simpler way for customers, local businesses and dispatch riders to share accurate delivery locations using Nigeria's Digital Postcode.</p>
        <div class="hero-points">
          <span>✓ Clear address details</span><span>✓ Postcode confirmation</span><span>✓ Delivery status updates</span>
        </div>
      </div>
      <div class="hero-card">
        <div class="card-top"><span class="pin">⌖</span><span class="small-label">NEW DELIVERY</span><span class="pill">Step 1 of 2</span></div>
        <h2>Where should we deliver?</h2>
        <p class="muted">Enter the destination's official 11-character Digital Postcode and confirm the written address.</p>
        <form id="deliveryForm">
          <label for="postcode">Digital Postcode</label>
          <div class="postcode-row">
            <input id="postcode" name="postcode" maxlength="11" placeholder="e.g. FC02A09DB09" autocomplete="off" required>
            <button class="secondary-btn" type="button" id="checkBtn">Check</button>
          </div>
          <p class="hint">11 letters/numbers. Spaces are optional.</p>
          <div id="postcodeMessage" class="message" aria-live="polite"></div>

          <label for="address">Street address / building description</label>
          <input id="address" name="address" placeholder="House, street, area or landmark" required>

          <div class="two-cols">
            <div><label for="customerName">Customer name</label><input id="customerName" name="customerName" placeholder="Full name" required></div>
            <div><label for="phone">Phone number</label><input id="phone" name="phone" inputmode="tel" placeholder="Phone number" required></div>
          </div>
          <label for="notes">Extra directions (optional)</label>
          <textarea id="notes" name="notes" rows="2" placeholder="Gate colour, nearby landmark, delivery instructions"></textarea>
          <button class="primary-btn" type="submit">Create delivery request <span>→</span></button>
          <p class="privacy-note">Prototype only: do not enter sensitive personal information. Requests are not yet saved to a server.</p>
        </form>
      </div>
    </section>

    <section class="steps-section">
      <div><p class="eyebrow">HOW IT WORKS</p><h2>From postcode to doorstep</h2></div>
      <div class="steps">
        <article><span class="step-number">01</span><h3>Enter</h3><p>Customer provides the official postcode and written address.</p></article>
        <article><span class="step-number">02</span><h3>Confirm</h3><p>The live version will verify the postcode through the authorised NIPOST API.</p></article>
        <article><span class="step-number">03</span><h3>Deliver</h3><p>The business and rider use the confirmed destination and update delivery status.</p></article>
      </div>
    </section>

    <section class="preview-panel">
      <div><p class="eyebrow">PILOT DASHBOARD PREVIEW</p><h2>Designed for local delivery teams</h2><p class="muted">The next build stage adds a rider dashboard, order storage, and an admin view.</p></div>
      <div class="preview-stats"><div><strong>01</strong><span>Postcode lookup</span></div><div><strong>02</strong><span>Delivery request</span></div><div><strong>03</strong><span>Status tracking</span></div></div>
    </section>
    <footer>Ogbomoso Smart Delivery <span>Independent prototype • Not an official NIPOST product</span></footer>
  </main>
  <script src="app.js"></script>
</body>
</html>
