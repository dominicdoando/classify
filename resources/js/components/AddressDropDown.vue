<template>
<div class="row">
    <div class="col-md-4 mb-3">
    <div class="form-group">
        <label for=""></label>
        <select class="form-control" name="country_id" v-model="country" @change="getStates()">
            <option> Choose Country</option>
            <option v-for="data in countries" :value="data.id" :key="data.id">{{data.name}}</option>
        </select>
    </div>
</div>
<div class="col-md-4 mb-3">
    <div class="form-group">
        <label for=""></label>
        <select class="form-control" name="state_id" v-model="state" @change="getCities()">
            <option>Select States</option>
            <option v-for="data in states" :value="data.id" :key="data.id">{{data.name}}</option>
        </select>
    </div>
    </div>
    <div class="col-md-4 mb-3">
    <div class="form-group">
        <label for=""></label>
        <select class="form-control" name="city_id">
             <option>Select City</option>
            <option v-for="data in cities" :value="data.id" :key="data.id">{{data.name}}</option>
        </select>
    </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
    export default{
        data(){
            return {
                country:0,
                countries:[],
                state:0,
                states:0,
                cities:[],
            }
        },
        mounted(){
            this.getCountries();
        },
        methods:{
            getCountries(){
                axios.get('/api/country')
                .then(function( response ){
                    console.log(response.data);
                    this.countries = response.data;
                }.bind(this));
            },
            getStates(){
                 axios.get('/api/state', {params:{country_id:this.country}})
                .then(function( response ){
                   this.states = response.data
                }.bind(this));
            },
            getCities(){
                 axios.get('/api/city', {params:{state_id:this.state}})
                .then(function( response ){
                    console.log(this.state);
                   this.cities = response.data
                }.bind(this));
            }
        }
    }
</script>
