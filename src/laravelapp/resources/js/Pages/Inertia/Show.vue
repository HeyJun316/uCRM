<script setup>
import { Inertia } from '@inertiajs/inertia'

defineProps({
    id : String,
    // blog: Array
    blog: Object
})
const deleteConfirm = id => {
    // console.log(id)
    Inertia.delete(`/inertia/${id}`, {
        onBefore: () => confirm('are u sure to delete?')
    })
}
</script>



<template>
{{ id }}<br>
{{ blog.title }}<br>
<button @click="deleteConfirm(blog.id)">削除</button>
</template>
