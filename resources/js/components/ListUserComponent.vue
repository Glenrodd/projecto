<template>	
	<tr>
    	<td>{{ user.id }}</td>
        <td>{{ user.email }}</td>
        <td>{{ user.password }}</td>
        <td>
        	<button class="btn btn-danger">Borrar</button>
        	<button class="btn btn-warning">Editar</button>
        </td>
    </tr>  	
</template>
<script>
    export default {
    	props: ['user'],
    	data() {
    		return {
    			
    		}
    	},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>