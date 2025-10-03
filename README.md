# PHP + GHCR + CapRover (Use Image)

1) Crea repo en GitHub (minúsculas).
2) Copia estos archivos junto a tu código y haz push a `main`.
3) En Actions se publicará `ghcr.io/<owner>/<repo>:latest`.
4) Haz el package **Public** (o añade registry `ghcr.io` en CapRover con PAT `read:packages`).
5) En CapRover → Deployment → **Use Image**: `ghcr.io/<owner>/<repo>:latest`
6) HTTP Settings → **Container HTTP Port = 80**, conecta dominio y **Enable HTTPS**.
