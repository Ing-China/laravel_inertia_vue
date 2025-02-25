<script setup></script>
<template>
    <Head :title="` | ${$page.component}`" />
    <h1>Hello {{ $page.props.auth.user }}</h1>
    <h1>{{ $page }}</h1>
</template>
