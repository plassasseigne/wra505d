<script setup>
import { ref } from 'vue'
import Cover from '@/components/Cover.vue'

const message = ref(' ')
const count = ref(0)

const name = ref('Vue.js')

function greet(name) {
  alert(`Hello ${name}!`)
}
</script>

<template>
    <Cover :title="'A propos'"></Cover>

    <input v-model.capitalize="message" placeholder="Insérer texte">
    <p>Message is: {{ message }}</p>
    <br />
    <button @click="count++">Add 1</button>
    <p>Count is : {{ count }}</p>
    <br />
    <button @click="greet('John')">Greet</button>
</template>