/**
 * tiktok_puppeteer_loop.js
 * Usage: node tiktok_puppeteer_loop.js
 *
 * IMPORTANT: Use only on sites you own or have explicit permission to test.
 */

const puppeteer = require("puppeteer");

// -------------------- CONFIG --------------------
const pixelCode = "D1K2K3RC77U2K3H7GIS0"; // your pixel id

const userAgents = [
  "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121 Safari/537.36",
  "Mozilla/5.0 (iPhone; CPU iPhone OS 17_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Mobile/15E148 Safari/604.1",
  "Mozilla/5.0 (Linux; Android 14; SM-S918B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123 Mobile Safari/537.36",
];

const proxies = [
  // Example formats:
  // "http://123.45.67.89:8080",
  // "http://user:pass@123.45.67.89:8080"
  // Leave empty array to not use proxies
];

const targetUrl = "https://example.com"; // replace with the page you want to test (must be allowed)
const loops = 10;          // how many iterations
const delayBetweenLoops = 3000; // ms

// -------------------- HELPERS --------------------
function randomCookieValue() {
  return "sess_" + Math.random().toString(36).slice(2, 12);
}
function sleep(ms) {
  return new Promise((res) => setTimeout(res, ms));
}
function parseProxy(proxyStr) {
  // returns { server, auth } or null
  if (!proxyStr) return null;
  try {
    const u = new URL(proxyStr);
    const server = `${u.protocol}//${u.hostname}:${u.port}`;
    const auth = u.username ? { username: decodeURIComponent(u.username), password: decodeURIComponent(u.password) } : null;
    // return string format for --proxy-server (no credentials)
    const proxyArg = `${u.hostname}:${u.port}`;
    return { proxyArg, auth };
  } catch (e) {
    return null;
  }
}

// -------------------- PIXEL INJECTOR --------------------
function buildPixelSnippet(pixelId) {
  // This wraps the exact pixel snippet you provided and injects the pixel id dynamically.
  // We keep it simple and synchronous inside the page.
  return `
    (function (w, d, t) {
      w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
      ttq.load('${pixelId}');
      ttq.page();
    }(window, document, 'ttq'));



  `;
}

// -------------------- MAIN --------------------
(async () => {
  console.log("Starting Puppeteer loop for TikTok Pixel (testing only).");

  for (let i = 0; i < loops; i++) {
    const ua = userAgents[i % userAgents.length];
    const cookieVal = randomCookieValue();
    const proxyStr = proxies.length ? proxies[i % proxies.length] : null;
    const parsed = proxyStr ? parseProxy(proxyStr) : null;

    console.log(`\n--- Iteration ${i + 1} ---`);
    console.log("User-Agent:", ua);
    console.log("Cookie:", cookieVal);
    console.log("Proxy:", proxyStr || "none");

    // Launch browser (use proxy if provided)
    const launchArgs = [];
    if (parsed) {
      launchArgs.push(`--proxy-server=${parsed.proxyArg}`);
    }

    const browser = await puppeteer.launch({
      headless: false, // set true if you don't need to see the browser (for debugging use false)
      args: launchArgs,
    });

    try {
      const page = await browser.newPage();

      // set UA and viewport
      await page.setUserAgent(ua);
      await page.setViewport({ width: 1200 + Math.floor(Math.random() * 400), height: 800 + Math.floor(Math.random() * 300) });

      // Optional: authenticate proxy if credentials provided
      if (parsed && parsed.auth) {
        await page.authenticate(parsed.auth);
      }

      // Set a cookie (domain must match target domain, so we navigate first or use .setCookie with domain)
      // We'll navigate first then set cookie for the current domain.
      await page.goto(targetUrl, { waitUntil: "networkidle2", timeout: 60000 });

      // set cookie for the current origin
      const urlObj = new URL(page.url());
      await page.setCookie({
        name: "session_id",
        value: cookieVal,
        domain: urlObj.hostname,
        path: "/",
        httpOnly: false,
        secure: false,
      });

      // Inject the pixel snippet
      const snippet = buildPixelSnippet(pixelCode);
      await page.evaluate(snippet);

      // Wait a little for the pixel script to load
      await page.waitForTimeout(2000);

      // Trigger events. We call ttq.page() (already called in snippet) and then fire CompleteRegistration
      try {
        await page.evaluate(() => {
          if (window.ttq && typeof window.ttq.track === "function") {
            // send a CompleteRegistration event with some example properties
            window.ttq.track("CompleteRegistration", { value: 0, currency: "USD" });
          } else {
            console.warn("ttq not ready yet");
          }
        });
        console.log("Sent ttq.track('CompleteRegistration').");
      } catch (e) {
        console.warn("Error sending track event:", e.message || e);
      }

      // Optionally capture a screenshot for your testing logs
      // await page.screenshot({ path: `screenshot_loop_${i+1}.png`, fullPage: false });

      // Wait so Pixel has time to send network calls
      await page.waitForTimeout(2000 + Math.floor(Math.random() * 2000));

    } catch (err) {
      console.error("Iteration error:", err);
    } finally {
      await browser.close();
    }

    // delay between loops
    await sleep(delayBetweenLoops);
  }

  console.log("\nAll iterations finished. Remember: use only for testing on allowed sites.");
  process.exit(0);
})();
