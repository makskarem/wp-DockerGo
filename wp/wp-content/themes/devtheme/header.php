<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- WordPress вставляет сюда стили, скрипты и meta -->
    <?php wp_head() ?>
</head>
<body>
    <header>
        <h1>My first WordPress theme</h1>
    </header>
</body>
</html>


<!-- ОБЪЯСНЕНИЕ
wp_head()

Она позволяет WordPress вставлять:

CSS
JS
meta
плагины

Без неё плагины и стили не будут работать. -->