@extends('_layout.layout')
@section('menu')
@include('_partials.navbar')
@endsection
@section('content')
<section id="homepage">
    @{{text}}
</section>
<!-- <script src="js/app.js"></script> -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        let app = new Vue({
            el: '#homepage',
            data: {
                text: 'Hello word 123'
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
@endsection
