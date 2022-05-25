const app = new Vue({
    el: "#app",
    data:{
        albumList: [],
    },
    mounted(){
        axios.get("server.php").then((res)=>{
            this.albumList = res.data;
        })
    }
})