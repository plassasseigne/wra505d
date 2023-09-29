<script setup>
defineProps(['title', 'img', 'capitale', 'flag'])

</script>

<template>
    <div class="card">
        <h4>{{ title }}</h4>
        <span v-if="capitale">{{ capitale[0] }}</span>
        <figure v-if="flag">
            <img :src="'/src/flags/' + flag + '.png'" :alt="'Drapeau du pays ' + title">
        </figure>
        <Router-Link :to="'/fiche-pays/' + title">Fiche complémentaire</Router-Link>
    </div>  
</template>

<style>
.card {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
</style>