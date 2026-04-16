# Rediseño post de blog — Diseño

**Fecha:** 2026-04-16  
**Archivo afectado:** `template-parts/content-single.php`

## Objetivo

Modernizar el layout de las entradas del blog, sustituyendo el grid de dos columnas actual (imagen cuadrada + card blanca con título) por un diseño editorial más limpio y airoso.

## Layout hero (parte superior)

**Estilo B1 — Editorial Split:**

- Grid de dos columnas 50/50
- Columna izquierda: imagen destacada (`the_post_thumbnail`) a altura fija (~300–320px), sin overlay oscuro
- Columna derecha: metadatos del post verticalmente centrados

**Contenido de la columna derecha (de arriba a abajo):**
1. Píldora de categoría (primera categoría del post, colores del `$cat_palette` existente)
2. Título del post (`<h1>`) en negrita, tamaño grande
3. Chips de metadatos: fecha, tiempo de lectura, etiquetas (máx. 3)
4. Separador fino
5. Fila de autor: avatar circular con gradiente + nombre + rol "Productor · Animatek"

**Sin breadcrumb** — la píldora de categoría ya cumple esa función, el breadcrumb es redundante.

## Área de contenido (parte inferior)

- Columna abierta centrada sin card ni caja blanca
- Fondo de página directamente (`bg-slate-50`)
- Ancho máximo de lectura: ~680–720px centrado
- El contenido del post (`the_content()`) se renderiza directamente sobre el fondo
- Se mantiene la clase `.post-content` para estilos tipográficos existentes

## Navegación entre posts

- Grid de dos columnas al final del artículo
- Cards discretas con borde, bordes redondeados, sin sombra pesada
- Etiqueta "← Anterior" / "Siguiente →" en mayúsculas pequeñas
- Título del post adyacente en texto normal

## Lo que se elimina del diseño actual

- Overlay degradado oscuro sobre la imagen (`bg-gradient-to-b from-black/25 ... to-black/70`) — ya eliminado en commit anterior
- Card blanca con sombra que envuelve el hero (`bg-white rounded-3xl shadow-lg`)
- Breadcrumb "Blog · Categoría" encima del título
- Card blanca que envuelve el cuerpo del artículo

## Lo que se conserva

- Lógica de tiempo de lectura (`$reading_time`)
- Paleta de colores de categorías (`$cat_palette`)
- Tags con paleta de colores (`$tag_palette`) — se mueven al hero como chips
- Bloque `block-explora` al final del contenido
- Navegación entre posts (rediseñada visualmente)
- Clases tipográficas `.post-content`
