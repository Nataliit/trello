<script>
    if(document.querySelector('#desks-list')){
        const desks_index = new Vue({
            el: '#desks-list',
            data(){
                return{
                    desks_list: []
                }
            },
            mounted(){
                let self = this;
                axios.get('/desks')
                    .then(function (response) {
                        self.desks_list = response.data;
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