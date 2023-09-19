<script setup>
import CardPays from '../Pays/CardPays.vue'
import { onMounted, ref } from 'vue'
import axios from 'axios'

let data = ref('')

onMounted(async () => {
  const response = await axios.get('https://restcountries.com/v3.1/all')
  data.value = response.data
})
</script>

<template>
    <h1>Liste des pays</h1>
    <div class="list-pays">
        <CardPays v-for="pays in data" :title="pays.name.common"></CardPays>
    </div>
</template>

<style>
    .list-pays {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .pays {
        width: 100px;
    }
</style>