<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import Label from '@/Components/InputLabel.vue'
import Input from '@/Components/TextInput.vue'
const emitTest = e => {
    // console.log(e);
}
</script>

<template>
<GuestLayout>
    <Label value="valueに書いた文字が表示される">
        タイトル
    </Label>
    <Input
    modelValue="初期値"
    @update:modelValue="emitTest">
    </Input>
</GuestLayout>
</template>
