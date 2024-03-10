<script setup>
import { ref } from 'vue'

const title = ref('Laravel')
</script>

<template>
    <h1 @mouseenter="title = 'Vue'" @mouseleave="title = 'Laravel'" v-text="title"/>
</template>

<style>
body {
    background: #14111b;
    font-family: sans-serif;
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: white;
}

h1 {
    background: linear-gradient(to right, #ff1f35 0, #fa54ff 100%);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    font-size: 48px;
}

.images {
    display: flex;
    gap: 5px;
}

img {
    width: 150px;
}
</style>
