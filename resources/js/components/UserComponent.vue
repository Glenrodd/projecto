<template>
<div class="container">	
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>USUARIOS DEL SISTEMA</h1>
          </div>
        </div>
      </div>
    </section> 
    <section class="content">     
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><span class="text-left">Lista de Usuarios</span><span class="text-right"><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Nuevo</button></span></h3>                  
        </div>
        <div class="card-body">
        	<div class="row">
		        <div class="col col-md-12">
		        	<table class="table">
			          	<thead>
			          	<tr>
			          		<th>#</th>
                    <th>Usuario</th>
			          		<th>Email</th>
			          		<th>Password</th>
			          		<th>Opciones</th>
			          	</tr>
			          	</thead>
			          	<tbody>
			          	<list-user-component 
			          		v-for="(user, index) in users" 
			          		:key="user.id"
			          		:user="user"
                    @update="updateUser(index, ...arguments)"
			          		@delete="deleteUser(index)">          			
			          	</list-user-component>
			          	</tbody>          	
		        	</table>
		        </div>
		        <div class="col col-md-4">
		        	<create-user-component @new="addUser"></create-user-component>
		        </div>
        	</div>
        </div>        
        <div class="card-footer">
          Pié de página
        </div>
      </div>
    </section>
   </div>
</template>
<script>
    export default {
    	data() {
    		return {
    			users: []
    		}
    	},
        mounted() {
            axios.get('/users').then((response) => {
              console.log(response);
              this.users = response.data;
            });
        },
        methods: {
        	addUser(user) {
        		this.users.push(user); 
        	},
          updateUser(index, user){
            this.users[index] = user;
          },
          deleteUser(index) {
            this.users.splice(index, 1);
          }
        }
    }
</script>