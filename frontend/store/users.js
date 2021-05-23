export const state = () => ({
	currentUser: {},
});

export const mutations = {
	setCurrentUser: (state, user) => (state.currentUser = user),
};

export const getters = {
	getsomething: (state) => {
		return state.something;
	},
};
export const actions = {
	async login({ commit }, user) {
		try {
			const userDataFromLogin = await this.$axios.$post("login", user);
			console.log(userDataFromLogin);
			commit("setCurrentUser", userDataFromLogin.data);
			return userDataFromLogin;
		} catch (error) {
			console.log("Error when login ", error);
			return false;
		}
	},
};
