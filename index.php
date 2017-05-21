<!DOCTYPE html>
<html>
<head><?php wp_head(); ?></head>
<body>
    <div id="app">{{ message }}</div>
    <?php
    wp_footer(); ?>
    <script>
        new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        })
    </script>
</body>
</html>
