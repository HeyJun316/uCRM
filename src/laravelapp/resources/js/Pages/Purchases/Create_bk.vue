<script setup>
import { getToday } from '@/common' // 別ファイルをインポート
import { onMounted, reactive, ref, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia'

const props = defineProps({
    customers : Array,
    items : Array,
})

const itemList = ref([])
const quantity = [1,2,3,4,5,6,7,8,9]
const form = reactive({
    date: null,
    customer_id: null,
    status : true,
    items: []
})

onMounted(() => { // ページ読み込み後 即座に実行
    form.date = getToday()
    props.items.forEach(item => {
        itemList.value.push({
            id: item.id,
            name: item.name,
            price: item.price,
            quantity: 0
        })
    })
})

const totalPrice = computed(()=> {
    let total = 0
    itemList.value.forEach( item => {
    total += item.price * item.quantity
    })
    return total
})

const storePurchase = () => {
  itemList.value.forEach( item => {
    if( item.quantity > 0 ){
      form.items.push({
        id: item.id,
        quantity: item.quantity
      })
    }
  })
  Inertia.post(route('purchases.store'), form )
}

</script>
<template>
    <form @submit.prevent="storePurchase">
        日付<br>
        <input type="date" name="date" v-model="form.date"><br>
        会員名<br>
        <select name="customer" v-model="form.customer_id">
            <option v-for="customer in
            customers" :value="customer.id" :key="customer.id">
            {{ customer.id }} : {{ customer.name }}
            </option>
        </select>
        <br><br>
        商品・サービス<br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品名</th>
                    <th>金額</th>
                    <th>数量</th>
                    <th>小計</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in itemList" >
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.price }}</td>
                <td>
                    <select name="quantity" v-model="item.quantity">
                        <option v-for="q in quantity" :value="q">{{ q }}</option>
                    </select>
                </td>
                    <td>
                    {{ item.price * item.quantity }}
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        合計：{{ totalPrice }}円<br>
        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録する</button>
    </form>
</template>
