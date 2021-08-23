<template>
<div class="row">
    <div class="col-md-4 mb-3">
    <div class="form-group">
        <label for=""></label>
        <select class="form-control" name="category_id" v-model="category" @change="getSubCategories()">
            <option> Select Category</option>
            <option v-for="data in categories" :value="data.id" :key="data.id">{{data.name}}</option>
        </select>
    </div>
</div>
<div class="col-md-4 mb-3">
    <div class="form-group">
        <label for=""></label>
        <select class="form-control" name="subcategory_id" v-model="subcategory" @change="getChildCategories()">
        <option>Select Subcategory</option>
        <option v-for="data in subcategories" :value="data.id" :key="data.id">{{data.name}}</option>
        </select>
    </div>
    </div>
    <div class="col-md-4 mb-3">
    <div class="form-group">
        <label for=""></label>
        <select class="form-control" name="childcategory_id">
        <option v-for="data in childcategories" :value="data.id" :key="data.id">{{data.name}}</option>
        </select>
    </div>
    </div>
</div>
</template>

<script>
    export default{
        data(){
            return {
                category:0,
                categories:[],
                subcategory:0,
                subcategories:0,
                childcategory:0,
                childcategories:[],
            }
        },
        mounted(){
            this.getCategories();
        },
        methods:{
            getCategories(){
                axios.get('/api/category')
                .then(function( response ){
                    this.categories = response.data;
                }.bind(this));
            },
            getSubCategories(){
                 axios.get('/api/subcategory', {params:{category_id:this.category}})
                .then(function( response ){
                    console.log(this.category);
                   this.subcategories = response.data
                }.bind(this));
            },
            getChildCategories(){
                 axios.get('/api/childcategory', {params:{subcategory_id:this.subcategory}})
                .then(function( response ){
                    console.log(this.category);
                   this.childcategories = response.data
                }.bind(this));
            }
        }
    }
</script>
