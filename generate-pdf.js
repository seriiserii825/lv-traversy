const puppeteer = require('puppeteer');
import puppeteer from 'puppeteer-core';
const fs = require('fs');

(async () => {
  const html = fs.readFileSync(process.argv[2], 'utf8'); // read HTML path from CLI
  const outputPath = process.argv[3]; // output path

  const browser = await puppeteer.launch({
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox']
  });

  const page = await browser.newPage();
  await page.setContent(html, { waitUntil: 'load' });

  await page.pdf({
    path: outputPath,
    format: 'A4',
    printBackground: true,
  });

  await browser.close();
})();
