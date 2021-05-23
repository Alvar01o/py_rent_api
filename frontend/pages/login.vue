<template>
	<div>
		<h1>user information:</h1>
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
