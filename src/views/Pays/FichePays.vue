<script setup>
    import { useRoute } from 'vue-router'

    import { onMounted, ref } from 'vue'
    import axios from 'axios'

    const route = useRoute()
    const id = route.params.id
    const data = ref()

    onMounted(async () => {
        const response = await axios.get('https://restcountries.com/v3.1/name/' + id )
        data.value = response.data[0]
    })
</script>

<template>
    <div v-if="data" class="pays-infos">
        <h1>{{ id }}</h1>
        <p>Capitale du pays : {{ data.capital[0] }}</p>
        <div class="pays-flag">
            <p>Drapeau du pays : </p>
            <img :src="data.flags.png" :alt="data.flags.alt">
        </div>
        <div class="pays-languages">
            <p>Langues parlées : </p>
            <ul v-for="lang in data.languages">
                <li>{{ lang }}</li>
            </ul>
        </div>
        <div class="pays-currencies">
            <p>Monnaie : </p>
            <ul v-for="currency in data.currencies">
                <li>{{ currency.name }} {{ currency.symbol }}</li>
            </ul>
        </div>
        <p>Population : {{ data.population }} habitants</p>
        <p>Continent : {{ data.continents[0] }}</p>
        <p>Superficie : {{ data.area }} km/2</p>
    </div>
</template>

<style scoped>

</style>