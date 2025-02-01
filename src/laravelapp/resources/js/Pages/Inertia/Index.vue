<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    blogs:Array
})
</script>

<template>
    <div v-if"$page.props.flash.message" class="bg-blue-300">
        {{ $page.props.flash.message }}
    </div>
    <ul>
        <li v-for="blog in blogs" :key="blog.id">
            【Sub】: <Link :href="route('inertia.show', { id: blog.id })">
                {{ blog.title }}
            </Link> 【内容】: {{ blog.content }}
            </li>
            <br>
    </ul>
    <br>
    名前付きパラメータ<br>
    route/webのuseでcontroller/routeにてコントローラを指定した名前付きから<br>
    コントローラーを作成そして、returnでvueファイルを指定する「Inertia/Index(.vue)」がかえさえれる<br>
    ルートパラメータ<br>
</template>
