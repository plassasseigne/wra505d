<script setup>
defineProps(['title'])
</script>

<template>
    <div class="card">
        <h4>{{ title }}</h4>
        <Router-Link :to="'/fiche-pays/' + title">
            <a class="link-more">Fiche complémentaire</a>
        </Router-Link>
    </div>
</template>