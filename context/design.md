# Guía de Diseño JCI 2026 para el Ecosistema de Google (Slides, Sites & Google Workspace)

Esta guía de diseño adapta las **Directrices de Marca de la JCI 2026** para su integración directa en las herramientas de Google (Google Slides, Google Sites, Google Docs y plantillas de diseño o "Stitch"). Al ser Plus Jakarta Sans, Readex Pro y Arvo tipografías nativas de Google Fonts, la implementación en este ecosistema es directa, limpia y altamente consistente.

---

## 1. Paleta de Colores Corporativos (JCI 2026)

Para asegurar la consistencia cromática, configura estos códigos de color en la paleta de tema personalizado de tu herramienta de Google:

### Colores Primarios (Base del Tema)
*   **JCI Blue (Color de Acentuación Principal):**
    *   **HEX:** `#0097D7`
    *   **RGB:** `0 / 151 / 251` (Nota: Usar la equivalencia HEX exacta en Google)
    *   **CMYK:** `77 / 25 / 0 / 0`
    *   **PMS:** `2925 C`
*   **JCI Black (Texto Principal y Fondos Oscuros):**
    *   **HEX:** `#130F2D`
    *   **RGB:** `19 / 15 / 45`
    *   **CMYK:** `100 / 98 / 47 / 66`
    *   **PMS:** `5395 C`
*   **JCI White (Fondos Claros y Espacio Negativo):**
    *   **HEX:** `#FFFFFF`
    *   **RGB:** `255 / 255 / 255`
    *   **CMYK:** `0 / 0 / 0 / 0`

### Colores Secundarios (Enfoque y Variación Visual)
*   **JCI Navy (Fondos Secundarios y Jerarquía Media):**
    *   **HEX:** `#1F4789`
    *   **RGB:** `31 / 71 / 137`
    *   **CMYK:** `96 / 76 / 15 / 3`
    *   **PMS:** `2728 C`
*   **JCI Teal (Apoyo y Elementos Interactivos):**
    *   **HEX:** `#57BCBC`
    *   **RGB:** `87 / 188 / 188`
    *   **CMYK:** `63 / 0 / 30 / 0`
    *   **PMS:** `3265 C`
*   **JCI Yellow (Acento Muy Limitado - Alertas o Puntos Clave):**
    *   **HEX:** `#EFC40F`
    *   **RGB:** `239 / 196 / 15`
    *   **CMYK:** `7 / 21 / 93 / 0`
    *   **PMS:** `142 C`

### Jerarquía de Color Recomendada en Google Slides/Sites:
1.  **60% Fondos:** Blanco (`#FFFFFF`) o JCI Black (`#130F2D`) para dar espacio y contraste.
2.  **30% Estructura y Texto:** JCI Black para lectura, JCI Blue como color dominante de marca en encabezados y botones.
3.  **10% Detalles:** JCI Teal o JCI Navy para separar secciones, y JCI Yellow exclusivamente para llamadas de atención muy puntuales.

---

## 2. Tipografía y Jerarquía Visual

Las fuentes oficiales de JCI están disponibles de forma gratuita en **Google Fonts**. Debes agregarlas a tu cuenta de Google Workspace desde el menú de fuentes ("Más fuentes").

### Tipografía Principal: Plus Jakarta Sans
Se utiliza para encabezados, subtítulos y el cuerpo del texto para reflejar profesionalismo y modernidad.

*   **Título Principal (Slide de Portada / Encabezado H1):**
    *   **Fuente:** Plus Jakarta Sans (Regular o Medium)
    *   **Tamaño recomendado:** `48pt`
    *   **Interlineado (Leading):** `120%`
*   **Subtítulo (H2):**
    *   **Fuente:** Plus Jakarta Sans (Regular)
    *   **Tamaño recomendado:** `24pt`
    *   **Interlineado:** `130%`
*   **Subencabezado de Sección (H3):**
    *   **Fuente:** Plus Jakarta Sans (SemiBold)
    *   **Tamaño recomendado:** `20pt`
    *   **Interlineado:** `140%`
*   **Cuerpo de Texto (Párrafo):**
    *   **Fuente:** Plus Jakarta Sans (Light o Regular)
    *   **Tamaño recomendado:** `16pt` (mínimo `12pt` para lectura cómoda)
    *   **Interlineado:** `140%`

### Tipografía Secundaria: Arvo (Slab Serif)
Se utiliza **exclusivamente** para citas destacadas y textos de llamada (*callouts*) en diseños editoriales o diapositivas de transición.
*   **Cita / Destacado:**
    *   **Fuente:** Arvo (Regular)
    *   **Tamaño recomendado:** `24pt`
    *   **Interlineado:** `130%`

### Tipografía de Respaldo: Readex Pro
Usa esta fuente únicamente como fallback en entornos extremadamente limitados (como diseños básicos en Canva sin cuenta pro o herramientas secundarias).

---

## 3. Logotipo y Clearspace (Margen de Seguridad)

Para proteger la integridad del logo en tus presentaciones o sitios web de Google:

### Colocación Preferida
*   **Esquinas Superiores (Preferido):** Coloca el logo en la esquina **superior izquierda** o **superior derecha**. Estas posiciones coinciden con los patrones de lectura natural de la audiencia.
*   **Esquinas Inferiores (Opcional):** Inferior izquierda o inferior derecha si los títulos o imágenes bloquean las esquinas superiores.
*   **Centrado (Último recurso):** Solo para portadas de alto impacto visual.

### Espacio de Seguridad (Clearspace)
*   El logotipo debe estar rodeado de un espacio vacío equivalente a **la mitad del ancho del isotipo (escudo)** en todos sus lados. Ningún texto, línea divisoria o imagen debe invadir esta zona.
*   **Tamaño Mínimo Digital:** El logotipo no debe medir menos de `32px` de alto en pantallas digitales para mantener la legibilidad del isotipo y del texto.

### Variaciones de Color de Logo
*   **Fondo Blanco o Claro:** Usa la versión por defecto del logo.
*   **Fondo JCI Black o Azul Marino:** Usa la versión invertida (blanca/azul claro).
*   **Sobre Fotografías:** Usa la versión monocromática blanca (sobre fotos oscuras) o negra (sobre fotos muy claras).

---

## 4. Elementos Gráficos Especiales (Ripple / Onda)

El **efecto Ripple (onda de impacto)** es el elemento visual unificador de la JCI. Puedes recrearlo digitalmente en Google Slides o Google Sites siguiendo estas proporciones geométricas exactas:

1.  **Estructura:** Se compone de círculos concéntricos divididos en cuatro cuadrantes iguales.
2.  **Espaciado y Grosor:** El espacio vacío entre cada anillo debe ser idéntico al grosor del trazo del anillo.
3.  **Dinámica de Movimiento (Rotación):** Cada anillo concéntrico sucesivo debe rotarse **15 grados** con respecto al anillo anterior más pequeño. Esto genera una sensación orgánica de onda en expansión.
4.  **Uso Recomendado:** Empléalo en opacidades bajas (10% - 20%) como marca de agua en los fondos, o a escala completa en diapositivas de transición de sección para inyectar dinamismo.

---

## 5. Criterio para Fotografía e Imágenes en Google Sites/Slides

Cuando selecciones imágenes de apoyo para tus presentaciones o portales:
*   **Foco en la Gente:** Prioriza rostros reales, expresiones de entusiasmo e interacciones auténticas.
*   **Momentos Espontáneos:** Evita las fotos de stock excesivamente posadas o artificiales. Las capturas reales de proyectos locales transmiten mayor credibilidad y cercanía.
*   **Diversidad e Inclusión:** Muestra miembros de diferentes orígenes étnicos, géneros y regiones, reforzando la naturaleza global de la red de ciudadanos activos.
*   **Luz y Optimismo:** Prefiere composiciones brillantes con iluminación natural que proyecten una visión de futuro positiva y llena de energía.
