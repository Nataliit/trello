<script>
    if(document.querySelector('#shelves-list')){
        const shelves_index = new Vue({
            el: '#shelves-list',
            data(){
                return{
                    shelves_list: [
                        {
                            id: 1,
                            name: "shelf 1",
                            desk_id: 1,
                            cards: [
                                {
                                    id: 1,
                                    name: "card 1"
                                },
                                {
                                    id: 2,
                                    name: "card 2"
                                }
                            ]
                        },
                        {
                            id: 2,
                            name: "shelf 2",
                            desk_id: 1,
                            cards: [
                                {
                                    id: 3,
                                    name: "card 3"
                                },
                                {
                                    id: 4,
                                    name: "card 4"
                                }
                            ]
                        },
                        {
                            id: 3,
                            name: "shelf 3",
                            desk_id: 1
                        }
                    ],
                    mouseClickX: null,
                    mouseClickY: null,
                    shelvesCoordinates: []
                }
            },
            mounted(){
                let self = this;
                // axios.get('/desks')
                //     .then(function (response) {
                //         self.desks_list = response.data;
                //     })
                //     .catch(function (error) {
                //         console.log(error);
                //     });
            },
            created(){
                console.log(document.querySelector(".shelf-wrap"));
            },
            methods:{
                onClickToCard: function(element){
                    console.log(element);
                }
            }
        });
    }
</script>