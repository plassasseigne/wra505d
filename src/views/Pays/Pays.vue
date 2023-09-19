<script setup>
const pays = [
    'france', 'espagne', 'allemagne', 'luxembourg', 'belgique', 'portugal', 'maroc', 'grece', 'chine', 'japon'
]
</script>

<template>
    <h1>Liste des pays</h1>
    <div class="list-pays">
        <div v-for="item in pays" class="pays">
            <h4>{{ item }}</h4>
            <Router-Link :to="'/fiche-pays/'+ item">
                <a class="link-more">Fiche complémentaire</a>
            </Router-Link>
        </div>
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