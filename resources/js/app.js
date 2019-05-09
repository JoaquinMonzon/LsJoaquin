new Vue({
    el: '#app',
    data:{
    	clientes:[], //lista de los clientes
    },

    mounted:function(){
    	this.cargacliente()
    },

    methods: {
    	cargacliente:function(){
    		axios.get('cliente')
    		.then(response=>{
    			this.clientes = response.data; //toma los clientes de 'cliente'
                console.log(this.clientes);
                alert('xxx');
    		});
    	},
    },
});
