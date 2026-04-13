## FAQ (Frequently Asked Questions)

> 🇺🇸 English FAQ | [🇮🇳 FAQ हिंदी में](FAQ_IN.md) | [🇷🇺 ЧаВо на Русском](FAQ_RU.md) | [🇮🇹 FAQ in Italiano](FAQ_IT.md)

<details>
  <summary>Why isn’t my favicon showing up during local development?</summary>

- Open your terminal at `src/` and paste the following commands:

```bash
# This may cause use your device's password
sudo chmod 644 assets/favicon/*
sudo chmod 755 assets/favicon
```

</details>

<details>
  <summary>How do I remove <code>.DS_Store</code> files from all directories?</summary>

- First, verify the directory where `.DS_Store` files are exists:

```bash
# Delete all .DS_Store files
find . -type f -name ".DS_Store" -delete
```

```bash
# Verify if there are any leaflovers!
find . -name ".DS_Store"
```

</details>

<details>
  <summary>How do I convert PNG and JPG images to WebP?</summary>

- Make sure `ffmpeg` is installed, then run the commands from the directory containing your images.

```bash
# Convert all PNG files to WebP
  for f in *.png; do
  ffmpeg -i "$f" \
    -map_metadata -1 \
    -pix_fmt yuv444p \
    -c:v libwebp \
    -lossless 0 \
    -quality 98 \
    "${f%.png}.webp"
  done
```

```bash
# Convert all JPG files to WebP
  for f in *.jpg; do
  ffmpeg -i "$f" \
    -map_metadata -1 \
    -pix_fmt yuv444p \
    -c:v libwebp \
    -lossless 0 \
    -quality 98 \
    "${f%.jpg}.webp"
  done
```

</details>
