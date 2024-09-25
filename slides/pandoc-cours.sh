#!/bin/sh
docker run --rm -v "./:/data" -u `id -u`:`id -g` pandoc/latex cours.md -o index.html -t revealjs -s -V revealjs-url=https://unpkg.com/reveal.js --highlight-style theme/highlight.theme -V theme=dracula -V maxScale=1
