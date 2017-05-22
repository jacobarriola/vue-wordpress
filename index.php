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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>
            }
        })
    </script>
</body>
</html>
