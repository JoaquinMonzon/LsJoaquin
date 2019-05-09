new Vue({
    el: '#app',
    data:{
    	clientes:[], //lista de los clientes
    },
    mouted:function(){
    	this.cargacliente()
    },
    methods: {
    	cargacliente:function(){
    		axios.get('cliente')
    		.then(response=>{
    			this.clientes = response.data; //toma los clientes de 'cliente'
    		});
    	},
    },
});
