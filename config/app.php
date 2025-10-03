<?php
/**
 * config/app.php
 * ---------------
 * Configuración global y helpers de rutas.
 *
 * - Si tu sitio cuelga de una subcarpeta (p.ej. /WebNueva), pon BASE_URL = '/WebNueva'.
 * - Si está en la raíz del dominio, deja BASE_URL = ''.
 */

declare(strict_types=1);

// === Base del sitio ===
define('BASE_URL', ''); // p.ej. '/WebNueva' si la web cuelga de una subcarpeta

// === Enlaces externos (ajusta a los definitivos) ===
define('APPINSPECTOR_URL', 'https://clientes.visualtechnologies.eu');
define('INSTAGRAM_URL', 'https://www.instagram.com/inspectorcaza/');

// === Helpers ===

/**
 * Genera una URL interna respetando BASE_URL.
 * - No toca URLs absolutas, anchors (#), mailto:, tel:, etc.
 * - Para rutas internas, normaliza para evitar dobles barras.
 */
function url($path = ''): string {
    // Si no hay path, devuelve la base limpia
    if ($path === '' || $path === null) {
        return rtrim((string)BASE_URL, '/') ?: '/';
    }

    // Mantener intactas: absolutas, protocolo-agnóstico, anclas y esquemas especiales
    if (preg_match('~^(https?:)?//|^(mailto:|tel:|#)~i', (string)$path)) {
        return (string)$path;
    }

    $base = rtrim((string)BASE_URL, '/');
    $path = ltrim((string)$path, '/');

    return ($base ? $base . '/' : '/') . $path;
}

/**
 * Alias para assets (por si en el futuro quieres versionado/cdn).
 */
function asset_url(string $path): string {
    return url($path);
}

/**
 * Devuelve ' active' si la sección actual coincide (útil para el navbar).
 */
function is_active(?string $current, string $expected): string {
    return $current === $expected ? ' active' : '';
}

// === Valores por defecto para vistas ===
if (!isset($page_title)) { $page_title = 'Visual Technologies'; }
if (!isset($page_css) || !is_array($page_css)) { $page_css = []; }
