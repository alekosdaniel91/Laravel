<template>
    <div class="row">
            <spinner v-show="loading"></spinner>

            <div class="col-sm" v-for="objeto in objetos">
                <div class="card text-center" style="width: 18rem; margin-top: 5px" >
                    <img style="height:100px;width:100px;margin:20px; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block" 
                    src="/images" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{objeto.id}}</h5>
                      <p class="card-text">{{objeto.name}}</p>
                      <a href="/trainer" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>        
        </div>

</template>
<script>
    export default {
        data(){
            return{
                objetos:[],
                loading: true
            }
        },
        mounted() {
            axios
            .get('http://127.0.0.1:8000/prueba')
            .then(res=>{
                this.objetos=res.data
                this.loading=false
                })
        }
    }
</script>
