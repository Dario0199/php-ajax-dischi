const app = new Vue({
    el: '#app',
    data: {
        albumList: null,
    },
    created(){
        this.getAlbumList()
    },
    methods: {
        getAlbumList(){
            axios.get('http://localhost/php-ajax-dischi/php-ajax-dischi/file%20html,js,php/partials/data.php')
            .then(response => {
                this.albumList = response.data;
            })
            .catch(error =>{
                console.log(error);
            })
        }
    }
})