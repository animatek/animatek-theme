# Rediseño post de blog — Plan de implementación

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Reemplazar el layout actual del post (grid imagen+card) por un diseño editorial B1: imagen izquierda 50/50, metadatos a la derecha, contenido en columna abierta sin card.

**Architecture:** Un único archivo PHP modificado — `template-parts/content-single.php`. No se crean archivos nuevos. Las clases Tailwind existentes se reutilizan; no se añade CSS personalizado.

**Tech Stack:** PHP, Tailwind CSS v4, WordPress template tags

---

## Archivos afectados

- Modificar: `template-parts/content-single.php` (archivo completo reemplazado)

---

## Task 1: Hero editorial B1 — imagen izquierda + metadatos derecha

**Files:**
- Modify: `template-parts/content-single.php`

Sustituir el bloque `<article>` completo por el nuevo diseño. El hero pasa de `grid lg:grid-cols-2` con card blanca a derecha, a un grid 50/50 con imagen a la izquierda y metadatos directamente sobre fondo blanco a la derecha.

**Cambios en la columna izquierda (imagen):**
- Quitar `shadow-2xl` y reducir altura a `h-[300px] md:h-[360px]`
- Mantener `rounded-3xl`, `overflow-hidden`, `bg-slate-900`
- Sin overlay oscuro (ya eliminado)

**Cambios en la columna derecha (metadatos):**
- Quitar la card blanca (`bg-white rounded-3xl shadow-lg border`) — los metadatos van sobre el fondo de página directamente
- Orden: píldora de categoría → `<h1>` → chips (fecha, lectura, tags) → separador → fila de autor
- Categorías: solo la primera (no 2), píldora con `$cat_palette[0]`
- Chips de fecha y lectura: mantener los SVG actuales pero envolverlos en un chip con borde (`border border-slate-200 rounded-full px-3 py-1`)
- Tags: máx. 3, convertidos a chips inline (no enlaces separados con `border-t`)
- Fila de autor: avatar circular con gradiente (`bg-gradient-to-br from-primary to-emerald-400 rounded-full w-9 h-9`) + nombre del autor + "Productor · Animatek" en gris

- [ ] **Paso 1: Reemplazar el bloque `<article>` en `template-parts/content-single.php`**

Sustituir desde la línea 24 hasta la línea 107 (cierre del div de metadatos) con:

```php
<article id="post-<?php the_ID(); ?>" <?php post_class('relative'); ?>>

    {{-- HERO --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 bg-white rounded-3xl overflow-hidden shadow-lg border border-slate-200/80 mb-8">

        {{-- Imagen izquierda --}}
        <div class="relative bg-slate-900 h-[300px] lg:h-auto min-h-[300px]">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', [
                    'class'   => 'w-full h-full object-cover object-center block absolute inset-0',
                    'loading' => 'eager',
                ]); ?>
            <?php else : ?>
                <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-900 to-slate-800"></div>
            <?php endif; ?>
        </div>

        {{-- Metadatos derecha --}}
        <div class="flex flex-col justify-between p-7 md:p-8 gap-5">
            <div class="space-y-4">

                {{-- Píldora categoría --}}
                <?php if (!empty($categories)) :
                    $cat = $categories[0];
                    $cat_class = $cat_palette[0];
                ?>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-bold rounded-full border <?php echo esc_attr($cat_class); ?>">
                    #<?php echo esc_html($cat->name); ?>
                </span>
                <?php endif; ?>

                {{-- Título --}}
                <h1 class="text-3xl md:text-4xl font-extrabold leading-tight text-slate-900">
                    <?php the_title(); ?>
                </h1>

                {{-- Chips: fecha + lectura + tags --}}
                <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs text-slate-600 border border-slate-200 rounded-full bg-slate-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2"/>
                        </svg>
                        <?php echo esc_html(get_the_date('d M Y')); ?>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs text-slate-600 border border-slate-200 rounded-full bg-slate-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l3.5 2"/>
                            <circle cx="12" cy="12" r="9"/>
                        </svg>
                        <?php echo esc_html($reading_time); ?> min de lectura
                    </span>
                    <?php
                    $tags = get_the_tags();
                    if ($tags) :
                        $tag_palette = [
                            'bg-primary/10 text-primary border-primary/20',
                            'bg-amber-100 text-amber-800 border-amber-200',
                            'bg-emerald-100 text-emerald-800 border-emerald-200',
                        ];
                        $i = 0;
                        foreach (array_slice($tags, 0, 3) as $tag) :
                            $tc = $tag_palette[$i % count($tag_palette)];
                            $i++;
                    ?>
                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                       class="inline-flex items-center gap-1 px-3 py-1 rounded-full border <?php echo esc_attr($tc); ?> text-[11px] font-semibold uppercase tracking-[0.12em] hover:opacity-80 transition">
                        #<?php echo esc_html($tag->name); ?>
                    </a>
                    <?php endforeach; endif; ?>
                </div>
            </div>

            {{-- Autor --}}
            <div class="flex items-center gap-3 pt-5 border-t border-slate-100">
                <div class="w-9 h-9 rounded-full bg-gradient-to-br from-primary to-emerald-400 flex-shrink-0"></div>
                <div>
                    <div class="text-sm font-bold text-slate-800"><?php the_author(); ?></div>
                    <div class="text-xs text-slate-400">Productor · Animatek</div>
                </div>
            </div>
        </div>
    </div>
```

> Nota: los comentarios `{{-- ... --}}` son solo para este plan. En el archivo PHP real usar `<?php // ... ?>` o eliminarlos.

- [ ] **Paso 2: Verificar en el navegador** — abrir una entrada del blog en `http://animatek.test` y comprobar que el hero muestra imagen izquierda, metadatos a la derecha, sin card flotante ni breadcrumb.

- [ ] **Paso 3: Commit**

```bash
git add template-parts/content-single.php
git commit -m "feat: hero editorial B1 en post de blog"
```

---

## Task 2: Área de contenido — columna abierta sin card

**Files:**
- Modify: `template-parts/content-single.php`

Reemplazar el div con `bg-white rounded-3xl shadow-lg border` que envuelve el contenido del artículo por una columna abierta centrada sobre el fondo de página (`bg-slate-50`).

- [ ] **Paso 1: Reemplazar el bloque de contenido** (líneas 109–125 del archivo original)

Sustituir:
```php
<div class="mt-8">
    <div class="bg-white rounded-3xl shadow-lg border border-slate-200/80 p-6 md:p-8">
        <div class="post-content text-[15px] md:text-base text-slate-800 leading-relaxed space-y-6">
            <?php
            the_content();
            wp_link_pages([...]);
            ?>
        </div>
        <?php get_template_part('template-parts/block-explora'); ?>
    </div>
</div>
```

Por:
```php
<div class="max-w-[720px] mx-auto">
    <div class="post-content text-[15px] md:text-base text-slate-800 leading-relaxed space-y-6">
        <?php
        the_content();

        wp_link_pages([
            'before' => '<div class="mt-6 text-sm text-slate-500">Páginas: ',
            'after'  => '</div>',
        ]);
        ?>
    </div>
    <?php get_template_part('template-parts/block-explora'); ?>
</div>
```

- [ ] **Paso 2: Verificar** — el texto del artículo aparece centrado sobre el fondo gris claro, sin caja blanca alrededor.

- [ ] **Paso 3: Commit**

```bash
git add template-parts/content-single.php
git commit -m "feat: contenido del post en columna abierta sin card"
```

---

## Task 3: Navegación entre posts — cards sin sombra

**Files:**
- Modify: `template-parts/content-single.php`

El `<nav>` actual ya usa cards discretas con `bg-white border rounded-2xl`. Solo quitar `shadow-sm` y alinear con el ancho máximo del contenido.

- [ ] **Paso 1: Actualizar el nav** (líneas 127–142 del archivo original)

Reemplazar:
```php
<nav class="mt-10 pb-6">
    <div class="grid gap-4 md:grid-cols-2">
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-4 hover:-translate-y-0.5 transition">
            <?php previous_post_link(
                '<span class="block text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-500 mb-1">Anterior</span><span class="block text-slate-800 hover:text-primary">%link</span>',
                '%title'
            ); ?>
        </div>
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-4 hover:-translate-y-0.5 transition text-left md:text-right">
            <?php next_post_link(
                '<span class="block text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-500 mb-1">Siguiente</span><span class="block text-slate-800 hover:text-primary">%link</span>',
                '%title'
            ); ?>
        </div>
    </div>
</nav>
```

Por:
```php
<nav class="mt-8 pb-8 max-w-[720px] mx-auto">
    <div class="grid gap-3 md:grid-cols-2">
        <div class="bg-white border border-slate-200 rounded-2xl p-4 hover:-translate-y-0.5 transition">
            <?php previous_post_link(
                '<span class="block text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400 mb-1">← Anterior</span><span class="block text-sm font-semibold text-slate-700 hover:text-primary transition">%link</span>',
                '%title'
            ); ?>
        </div>
        <div class="bg-white border border-slate-200 rounded-2xl p-4 hover:-translate-y-0.5 transition text-left md:text-right">
            <?php next_post_link(
                '<span class="block text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400 mb-1">Siguiente →</span><span class="block text-sm font-semibold text-slate-700 hover:text-primary transition">%link</span>',
                '%title'
            ); ?>
        </div>
    </div>
</nav>
```

- [ ] **Paso 2: Verificar** — la navegación entre posts aparece al final del artículo, alineada con la columna de contenido, sin sombra.

- [ ] **Paso 3: Commit final**

```bash
git add template-parts/content-single.php
git commit -m "feat: nav entre posts alineada con columna de contenido"
```
