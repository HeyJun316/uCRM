<script setup>
import { Link } from '@inertiajs/vue3';
import {ref} from 'vue';

const newTitle = ref('');
const newContent = ref('');
// import { Link } from '@inertiajs/inertiajs-vue3';

</script>


<!-- writable HTML -->
<template>
Inertia Test desu <br>
<a href="/">vie a tag</a><br>
<Link href="/">via Link tag</Link><br>
<Link :href="route('inertia.index')">Inertia test</Link><br>
<Link :href="route('inertia.show', { id: 1 })"> show </Link> <br>

<div class="mb-8"></div>
<input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}
<br>
<input type="text" name="newContent" v-model="newContent">{{ newContent }}
<br>
<Link as="button" method="post" :href="route('inertia.store')" :data="{ title: newTitle, content: newContent }"> DB store Test </Link>
</template>
