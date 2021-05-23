<template>
	<div class="container">
		<h1>user information:</h1>
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input
					type="email"
					class="form-control"
					id="exampleInputEmail1"
					aria-describedby="emailHelp"
				/>
				<small id="emailHelp" class="form-text text-muted"
					>We'll never share your email with anyone else.</small
				>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input
					type="password"
					class="form-control"
					id="exampleInputPassword1"
				/>
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1" />
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<div>{{ user }}</div>
	</div>
</template>
<script>
import { mapActions } from "vuex";

export default {
	layout: "none",
	data() {
		return {
			user: {},
		};
	},
	methods: {
		...mapActions({
			login: "users/login",
		}),
	},
	async created() {
		const user = await this.login({
			email: "test@example.com",
			password: "password",
		});
		this.user = user;
	},
	head() {
		return { title: "Login" };
	},
};
</script>
