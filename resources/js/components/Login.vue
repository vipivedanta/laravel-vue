<template>
    <div>
    <div v-if="tables==false">Login here!!</div>
    <div v-else class="col-md-4 table-menu">
        <ul class="list-group">
        <li v-for="table in tables" class="list-group-item">
               {{ table }}
        </li>
        </ul>
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
            .then( response => ( this.tables = response.data.tables)  )

    }
}
</script>

<style>
.table-menu{
    height:500px;
    overflow-y: scroll;
}
</style>
