<template>
    <div>
    <div v-if="tables==false">Login here!!</div>
    <div v-else>
        <li v-for="table in tables">
               {{ table }}
        </li>
    </div>
    </div>
    
</template>

<script>

import axios from 'axios';

export default {
    name : 'Login',
    data(){
        return {
            tables : false,
            url : 'http://localhost:8000/',
            csrf : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    mounted() {
            axios
            .post( this.url + 'api/tables', { _token :this.csrf})
            .then( response => (this.tables = response.tables) )

    }
}
</script>
