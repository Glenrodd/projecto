<template>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="" v-on:submit.prevent="newUser()">
					<div class="form-group">
						<label for="name">Usuario:</label>
						<input type="text" class="form-control" name="name" v-model="name">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" v-model="email">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" name="password" v-model="password">
					</div>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">
						Registrar
					</button>
				</form>
			</div>
		</div>
	  </div>       
    </div>
  </div>
</div>
	
      
      
</template>
<script>
	export default {
		data(){
			return {
				name: '',
				email: '',
				password: ''
			}
		},
		mounthed() {
			console.log("Component Mounted");
		},
		methods: {
			newUser() {
				const params = {
					name: this.name,
					email: this.email,
					password: this.password
				};
				this.name = '';
				this.email = '';
				this.password = '';
				axios.post('/users', params).then((responde)=> {
					const user = responde.data;
					this.$emit('new', user);
				});
			}
		}
	}
</script>