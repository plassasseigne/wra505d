<script setup>
import { useRoute } from 'vue-router'

const route = useRoute()

const pays = route.params.pays
</script>

<template>
    <h1>{{ pays }}</h1>
</template>