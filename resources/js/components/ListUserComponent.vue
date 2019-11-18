<template>	
	<tr>
    	<td>{{ user.id }}</td>
        <td>
            <input v-if="editMode" type="text" name="" v-model="user.name" class="form-control">
            <p v-else>{{ user.name }}</p> 
        </td>
        <td>
            <input v-if="editMode" type="text" name="" v-model="user.email" class="form-control">
            <p v-else>{{ user.email }}</p>        
        </td>
        <td>
            <input v-if="editMode" type="text" name="" v-model="user.password" class="form-control">
            <p v-else>{{ user.password }}</p>             
        </td>
        <td>
            <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Guardar</button>
            <button v-else class="btn btn-warning" v-on:click="onClickEdit()">Editar</button>
        	<button class="btn btn-danger" v-on:click="onClickDelete()">Borrar</button>
        </td>
    </tr>  	
</template>
<script>
    export default {
    	props: ['user'],
    	data() {
    		return {
    			editMode: false
    		}
    	},
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onClickDelete(){
                axios.delete(`/users/${this.user.id}`).then(()=>{
                    this.$emit('delete');
                });                
            },
            onClickEdit(){
                this.editMode = true;
            },
            onClickUpdate(){
                const params = {
                    name: this.user.name,
                    email: this.user.email,
                    password: this.user.password
                };
                axios.put(`/users/${this.user.id}`, params).then((response)=>{
                    this.editMode = false;
                    const user = response.data;
                    this.$emit('update', user);    
                });                
            }
        }
    }
</script>