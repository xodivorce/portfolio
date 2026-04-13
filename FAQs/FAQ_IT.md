## FAQ (Domande frequenti)

> [🇺🇸 FAQ in English](FAQ_EN.md) | [🇮🇳 FAQ हिंदी में](FAQ_IN.md) | [🇷🇺 ЧаВо на Русском](FAQ_RU.md) | 🇮🇹 Italiano FAQ

<details>
  <summary>Perché la mia favicon non viene visualizzata durante lo sviluppo locale?</summary>

- Apri il terminale nella directory `src/` e incolla i seguenti comandi:

```bash
# Potrebbe essere richiesta la password del tuo dispositivo
sudo chmod 644 assets/favicon/*
sudo chmod 755 assets/favicon
```

</details>

<details>
  <summary>Come rimuovere i file <code>.DS_Store</code> da tutte le directory?</summary>

- Per prima cosa, verifica nelle directory dove esistono i file `.DS_Store`:

```bash
# Elimina tutti i file .DS_Store
find . -type f -name ".DS_Store" -delete
```

```bash
# Verifica se sono rimasti dei file indesiderati
find . -name ".DS_Store"
```

</details>

<details>
  <summary>Come convertire immagini PNG e JPG in WebP?</summary>

- Assicurati che `ffmpeg` sia installato, poi esegui i comandi dal terminale nella directory che contiene le immagini.

```bash
# Converti tutti i file PNG in WebP
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
# Converti tutti i file JPG in WebP
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
