<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/web/index.css">
    <title>Document</title>
</head>

<body>
    <div id="homepage">
        <span class="text">@{{text}}</span>
    </div>
</body>

</html>

<script src="js/app.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        let app = new Vue({
            el: '#homepage',
            data: {
                text: 'Hello word'
            },
            created() {

            },
            mounted() {

            },
            methods: {

            },

        })
    });
</script>
