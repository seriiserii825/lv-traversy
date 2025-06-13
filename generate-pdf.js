import puppeteer from "puppeteer";
import { readFile } from "fs/promises";

const [,, inputPath, outputPath] = process.argv;

const html = await readFile(inputPath, "utf-8");

const browser = await puppeteer.launch({
  headless: "new",
  executablePath: puppeteer.executablePath(), // ensures correct Chromium
  args: ["--no-sandbox", "--disable-setuid-sandbox"]
});

const page = await browser.newPage();
await page.setContent(html, { waitUntil: "networkidle0" });

await page.pdf({
  path: outputPath,
  format: "A4",
  printBackground: true
});

await browser.close();
