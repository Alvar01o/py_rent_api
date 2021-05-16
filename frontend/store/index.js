export const state = () => ({
  theme: {
    NavMenuItems: [
      {
        text: 'Home',
        url: '#'
      },
      {
        text: 'Profile',
        url: '#'
      },
      {
        text: 'Blog',
        url: '#'
      },
      {
        text: 'Reviews',
        url: '#'
      },
    ],
    footer: {
      companyName: 'DevPortfolios',
      year: 2021
    }
  },
  data: {
    cards: [
      { title: 'Projects', content: 'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.', icon: '' },
    ]
  }

})

export const mutations = {}

export const getters = {
  getCards: (state) => {
    return state.data.cards;
  }
}
export const actions = {}
