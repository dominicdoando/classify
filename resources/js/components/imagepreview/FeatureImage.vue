<template>
    <div>
        <input type="file" name="feature_image" @change="onFileChange"  class=""  accept="image/*"
        required="true"/>
        <div id="preview">
            <img v-if="url" :src="url" width="100" height="100" alt="" />
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                url:''
            }
        },
        methods:{
            onFileChange(e){
                const file = e.target.files[0];
                this.url = URL.createObjectURL(file);
            }
        }
    }
</script>
