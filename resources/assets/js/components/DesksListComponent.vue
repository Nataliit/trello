<script>
    if(document.querySelector('#desks-list')){
        const services_index = new Vue({
            el: '#desks-list',
            data(){
                return{
                    desks-list: []
                }
            },
            mounted(){
                let self = this;

                axios.get('/uk/categories')
                    .then(function (response) {
                        console.log(response.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            methods:{

            }
        });
    }
</script>