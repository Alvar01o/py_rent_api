<template>
	<nav class="navbar navbar-expand-lg letra fixed-top">
		<div class="container">
			<div class="row col-md-12">
				<a class="navbar-brand col-md-3 float-left" href="">
					<img src="\logo.png" class="logo-brand" alt="logo"
				/></a>
				<div
					class="collapse navbar-collapse col-md-8"
					id="navbarSupportedContent"
				>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item" v-for="(item, index) in items" :key="index">
							<a class="nav-link" href="#" id="home">{{ item.text }}</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</template>
<script>
import { mapGetters } from "vuex";
export default {
	name: "NavBar",
	computed: {
		...mapGetters({
			items: "getNavMenuItems",
		}),
	},
};
</script>

<style scoped>
.navbar {
	background-color: rgb(20, 13, 13);
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.05);
	min-height: 55px;
	font-size: 20px;
}
.nav-link {
	color: #ffffff;
}
.nav-link:hover {
	color: #1bac91;
	font-weight: 700;

	text-decoration-line: underline;
	text-decoration-style: solid;
	text-decoration-color: rgb(2, 85, 78);
	transition: 0.5s;
}
</style>
