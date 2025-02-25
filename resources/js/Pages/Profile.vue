<script setup>
defineProps({
    name: String,
});
</script>
<template>
    <Head title="| Profile Page" />

    <h1>Hello from profile page</h1>
    <h1>My name is {{ name }}</h1>
</template>
