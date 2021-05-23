export const state = () => ({
	theme: {
		NavMenuItems: [
			{
				text: "Inicio",
				url: "#",
			},
			{
				text: "Sobre Nosotros",
				url: "#",
			},
			{
				text: "Contactanos",
				url: "#",
			},
			{
				text: "Login",
				url: "/login",
			},
		],
		footer: {
			companyName: "DevPortfolios",
			year: 2021,
		},
	},
	data: {
		cards: [
			{
				title: "Projects",
				content:
					"Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.",
				icon: "",
			},
		],
	},
});

export const mutations = {};

export const getters = {
	getNavMenuItems: (state) => {
		return state.theme.NavMenuItems;
	},
	getCards: (state) => {
		return state.data.cards;
	},
};
export const actions = {};
