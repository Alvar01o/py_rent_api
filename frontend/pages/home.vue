<template>
<div>
    <div class="border row">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li v-for="(valor, index) in opciones" :key="index" class="nav-item">
                    <a href="#" class="nav-link">{{valor}}</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </div>

</div>
</template>

<script>
export default {
    layout: null,
    data(){
        return {
            opciones: [
                'Opcion1',
                'Opcion2',
                'Opcion3',
                'Opcion4',
                'Opcion5',
            ]
        }
    }
}
</script>

<style>

</style>