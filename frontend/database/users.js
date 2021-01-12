/* eslint-disable camelcase */
import User from './models/user';
import { userService } from '~/services';

/*
** State
*/
export const state = () => ({});

/*
** Mutations
*/
export const mutations = {
  updateAvatar (state, { id, avatar_url }) {
    User.update({
      where: id,
      data: {
        avatar_url
      }
    });
  }
};

/*
** Actions
*/
export const actions = {
  async login ({ commit }, payload) {
    payload.graphql = this.$graphql;
    const { login } = await userService.login(payload);
    this.$cookies.set('gc_token', login.access_token, {
      maxAge: 60 * 60 * 24 * 7
    });
    commit('setCurrentUser', login.user, { root: true });
    return {
      success: !!login.access_token
    };
  },

  logout ({ commit }) {
    this.$cookies.remove('gc_token');
    commit('logout', null, { root: true });
  },

  async register ({ commit }, payload) {
    payload.graphql = this.$graphql;
    const { register } = await userService.register(payload);
    this.$cookies.set('gc_token', register.tokens.access_token, {
      maxAge: 60 * 60 * 24 * 7
    });
    return {
      success: !!register.tokens.access_token
    };
  },

  async updateAvatar ({ commit }, payload) {
    payload.graphql = this.$graphql;
    payload.token = this.$cookies.get('gc_token');
    const { updateAvatar } = await userService.updateAvatar(payload);
    commit('updateAvatar', updateAvatar);

    return {
      success: !!updateAvatar?.avatar_url
    };
  },

  async updateUser ({ commit }, payload) {
    payload.graphql = this.$graphql;
    payload.token = this.$cookies.get('gc_token');
    const { updateUser } = await userService.update(payload);
    commit('setCurrentUser', updateUser, { root: true });

    return {
      success: !!updateUser
    };
  }

};