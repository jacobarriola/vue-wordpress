<?php
get_header(); ?>
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
