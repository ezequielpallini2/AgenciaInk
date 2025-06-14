# 🌐 Landing Lader - Tema WordPress personalizado

Este es un tema de WordPress liviano y personalizado para crear landing pages modernas, especialmente diseñado para agencias de marketing.

## 📦 Estructura del tema

```
landing-lader/
├── footer.php
├── functions.php
├── header.php
├── index.php
├── style.css
```

## 🚀 ¿Cómo instalar?

1. Descargá el archivo `.zip` del tema o cloná este repositorio.
2. Copiá la carpeta `landing-lader/` dentro del directorio `/wp-content/themes/` de tu instalación WordPress.
3. Desde el panel de WordPress, andá a **Apariencia > Temas** y activá el tema “Landing Lader”.

## 📝 Contenido inicial incluido

- **Header** con texto de bienvenida y formulario (requiere Contact Form 7).
- **Sección de servicios** con íconos/textos.
- **Sección de beneficios** con características destacadas.
- **Botones** de WhatsApp y cotización.
- Estilos básicos para estructura limpia y editable.

## 🛠️ Personalización

- Editá el contenido desde `index.php`.
- Personalizá estilos desde `style.css`.
- Podés agregar Bootstrap, Tailwind u otro framework desde `functions.php` si lo deseás.

## ✉️ Formularios de contacto

Este tema está preparado para usar con [Contact Form 7](https://es.wordpress.org/plugins/contact-form-7/). Asegurate de:
- Instalar y activar el plugin.
- Crear un formulario.
- Reemplazar el shortcode de ejemplo en `index.php` por el tuyo:

```php
<?php echo do_shortcode('[contact-form-7 id="TU_ID" title="Nombre del formulario"]'); ?>
```

## 📱 Botones de WhatsApp

Para que los botones funcionen correctamente, reemplazá los enlaces de ejemplo por el número real de tu cliente:

```html
<a href="https://wa.me/1234567890" class="btn">WhatsApp</a>
```

## 📷 Vista previa

Podés agregar un archivo `screenshot.png` (880x660 px recomendado) dentro de la carpeta del tema para que aparezca una miniatura en el admin de WordPress.

## 🧑‍💻 Autor

Desarrollado por Ezequiel Pallini para uso interno de agencia de marketing.

---

¿Preguntas o sugerencias? ¡Estoy disponible para ayudarte!
