<template>
    <div class="flex flex-wrap justify-center">
        <div class="w-1/5 h-auto overflow-hidden m-3 text-center">
            <a :href="`https://www.youtube.com/watch?v=${data[0].videoId}`" target="_blank">
                <img 
                class="rounded-lg"
                :src="data[0].thumbnail"
                >
                <span class="text-sm text-gray-800">{{data[0].title}}</span>
            </a>
        </div>
        <div class="w-1/5 h-auto overflow-hidden m-3 text-center">
            <a :href="`https://www.youtube.com/watch?v=${data[1].videoId}`" target="_blank">
                <img 
                class="rounded-lg"
                :src="data[1].thumbnail"
                >
                <span class="text-sm text-gray-800">{{data[1].title}}</span>
            </a>
        </div>
        <div class="w-1/5 h-auto overflow-hidden m-3 text-center">
            <a :href="`https://www.youtube.com/watch?v=${data[2].videoId}`" target="_blank">
                <img 
                class="rounded-lg"
                :src="data[2].thumbnail"
                >
                <span class="text-sm text-gray-800">{{data[2].title}}</span>
            </a>
        </div>
        <div class="w-1/5 h-auto overflow-hidden m-3 text-center">
            <a :href="`https://www.youtube.com/watch?v=${data[3].videoId}`" target="_blank">
                <img 
                class="rounded-lg"
                :src="data[3].thumbnail"
                >
                <span class="text-sm text-gray-800">{{data[3].title}}</span>
            </a>
        </div>
        <div class="w-1/5 h-auto overflow-hidden m-3 text-center">
            <a :href="`https://www.youtube.com/watch?v=${data[4].videoId}`" target="_blank">
                <img 
                class="rounded-lg"
                :src="data[4].thumbnail"
                >
                <span class="text-sm text-gray-800">{{data[4].title}}</span>
            </a>
        </div>
        <div class="w-1/5 h-auto overflow-hidden m-3 text-center">
            <a :href="`https://www.youtube.com/watch?v=${data[5].videoId}`" target="_blank">
                <img 
                class="rounded-lg"
                :src="data[5].thumbnail"
                >
                <span class="text-sm text-gray-800">{{data[5].title}}</span>
            </a>
        </div>
        <div class="w-1/5 h-auto overflow-hidden m-3 text-center">
            <a :href="`https://www.youtube.com/watch?v=${data[6].videoId}`" target="_blank">
                <img 
                class="rounded-lg"
                :src="data[6].thumbnail"
                >
                <span class="text-sm text-gray-800">{{data[6].title}}</span>
            </a>
        </div>
        <div class="w-1/5 h-auto overflow-hidden m-3 text-center">
            <a :href="`https://www.youtube.com/watch?v=${data[7].videoId}`" target="_blank">
                <img 
                class="rounded-lg"
                :src="data[7].thumbnail"
                >
                <span class="text-sm text-gray-800">{{data[7].title}}</span>
            </a>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data () {
            return {
                data: [],
            }
        },
        methods: {
            getApi () {
            axios.get(`http://127.0.0.1:8000/api/python`)
                .then(response => (this.data = response.data))
            },
        },
        created() {
            this.getApi()
        }
    }
</script>