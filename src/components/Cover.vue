<script setup>
defineProps(['title'])
</script>

<template>
<section class="cover">
    <h1>{{ title }}</h1>
</section>
</template>

<style>
.cover {
    width: 100%;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>