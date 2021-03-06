<template>
  <v-navigation-drawer
    v-model="drawer"
    :absolute="isMobile"
    class="primary"
    clipped
    :expand-on-hover="expandOnHover"
    fixed
    floating
    :mini-variant.sync="mini"
    permanent
    :style="{ paddingTop: '64px' }"
    :width="400">
    <v-list nav>
      <v-list-item class="search-container">
        <!-- Search Container -->
        <v-list-item-icon>
          <custom-icon
            fill="#fff"
            :height="24"
            name="search"
            :width="24" />
        </v-list-item-icon>
        <v-list-item-title>
          <v-text-field
            background-color="#fff"
            clearable
            dense
            flat
            hide-details
            label="Search"
            placeholder="Search"
            solo-inverted
            :value="searchQuery"
            @click:append="clearSearch"
            @input="debounceSearchQuery" />
        </v-list-item-title>
      </v-list-item>
    </v-list>
    <v-divider color="white" />
    <v-list
      class="gear-container"
      nav>
      <!-- My Packs -->
      <v-list-item>
        <v-list-item-icon>
          <v-icon color="white">
            mdi-bag-personal
          </v-icon>
        </v-list-item-icon>
        <v-list-item-content>
          <div class="header">
            <div class="header-divider">
              <h6 class="text-h6 white--text">
                My Packs
              </h6>
              <v-tooltip
                max-width="300"
                right>
                <template #activator="{ on, attrs }">
                  <span
                    v-bind="attrs"
                    v-on="on">
                    <custom-icon
                      :fill="secondaryLight"
                      :height="20"
                      name="info-circle"
                      :width="20" />
                  </span>
                </template>
                <span>Create a new pack list or modify an existing one.</span>
              </v-tooltip>
            </div>
            <v-btn
              icon
              :ripple="false"
              @click="createPackModalOpen = true">
              <custom-icon
                fill="#fff"
                :height="35"
                name="plus-circle"
                :width="35" />
            </v-btn>
          </div>
          <v-list
            v-if="packs.length"
            class="packs-list">
            <transition-group
              mode="in-out"
              name="fade">
              <v-list-item
                v-for="pack in filteredPacks"
                :key="pack.id"
                :class="[{ selected: activeSelection(pack.id) }]"
                :ripple="false"
                @click="handleSelectedPack(pack)">
                <v-list-item-content>
                  <p class="mb-0 font-weight-medium white--text">
                    {{ pack.name }}
                  </p>
                </v-list-item-content>
              </v-list-item>
            </transition-group>
          </v-list>
          <p v-else>
            You haven't created any packs yet!
          </p>
        </v-list-item-content>
      </v-list-item>

      <!-- My Gear -->
      <v-list-item>
        <v-list-item-icon>
          <v-icon color="white">
            mdi-tent
          </v-icon>
        </v-list-item-icon>
        <v-list-item-content>
          <div class="header">
            <div class="header-divider">
              <h6 class="text-h6 white--text">
                My Gear
              </h6>
              <v-tooltip
                max-width="300"
                right>
                <template #activator="{ on, attrs }">
                  <span
                    v-bind="attrs"
                    v-on="on">
                    <custom-icon
                      :fill="secondaryLight"
                      :height="20"
                      name="info-circle"
                      :width="20" />
                  </span>
                </template>
                <span>Add a new piece of gear to your closet, or add one to the selected pack.</span>
              </v-tooltip>
            </div>
            <v-btn
              icon
              :ripple="false"
              @click="createItemModalOpen = true">
              <custom-icon
                fill="#fff"
                :height="35"
                name="plus-circle"
                :width="35" />
            </v-btn>
          </div>
          <v-list
            v-if="hasItems"
            class="gear-list">
            <v-list-item-group>
              <draggable
                class="drag-area list-group"
                :group="{ name: 'items', pull: 'clone', put: false}"
                handle=".gear-handle"
                :list="filteredItems"
                :sort="false"
                @change="log">
                <transition-group name="staggered-fade">
                  <v-list-item
                    v-for="(item, i) in filteredItems"
                    :key="item.id"
                    class="staggered-fade-item"
                    :data-index="i">
                    <custom-icon
                      custom-class="gear-handle mr-2"
                      :fill="secondaryLight"
                      :height="20"
                      name="grip-horizontal-line"
                      :width="20" />
                    <p class="mb-0 white--text">
                      {{ item.name }}
                    </p>
                    <v-btn
                      class="destroy-btn"
                      icon
                      @click="handleDeleteItem(item)">
                      <client-only>
                        <unicon
                          class="pointer"
                          fill="#ffffff"
                          height="20"
                          name="trash-alt"
                          width="20" />
                      </client-only>
                    </v-btn>
                  </v-list-item>
                </transition-group>
              </draggable>
            </v-list-item-group>
          </v-list>
          <p v-else>
            You haven't created any items yet!
          </p>
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
  import { debounce, sortBy } from 'lodash';
  import { mapState } from 'vuex';
  import draggable from 'vuedraggable';
  import currentUser from '~/mixins/currentUser';
  import CustomIcon from '~/components/icons/CustomIcon.vue';

  let idGlobal = 8;

  export default {
    mixins: [currentUser],

    props: {
      isMobile: {
        type: Boolean,
        default: true
      },
      packs: {
        type: Array,
        default: () => []
      },
      selectedPackId: {
        type: String,
        default: ''
      }
    },

    data: () => ({
      createItemModalOpen: false,
      createPackModalOpen: false,
      drawer: true,
      mini: true,
      searchQuery: '',
      secondaryLight: '',
      selected: null
    }),

    computed: {
      ...mapState({
        expandOnHover: state => state.closet.sidebarExpandOnHover
      }),
      categories () {
        const cats = [];
        if (this.packs.length) {
          this.packs.forEach(pack => {
            cats.push(pack.categories);
          });
        }
        return cats.flat();
      },
      filteredItems () {
        const filteredItems = [];
        this.categories.forEach(category => {
          if (this.searchQuery) {
            const text = this.searchQuery.toLowerCase();
            filteredItems.push(category.items.filter(item => {
              return item.name.toLowerCase().includes(text) || item.generic_type.toLowerCase().includes(text);
            }));
          } else {
            filteredItems.push(category.items);
          }
        });
        return filteredItems.flat();
      },
      filteredPacks () {
        let filteredPacks = [];
        if (this.searchQuery) {
          const text = this.searchQuery.toLowerCase();
          filteredPacks = this.packs.filter(pack => pack.name.toLowerCase().includes(text));
        } else {
          filteredPacks = this.packs;
        }
        return sortBy(filteredPacks, 'name');
      },
      hasItems () {
        let containsItems = false;
        this.categories.forEach(category => {
          if (category.items.length) {
            containsItems = true;
          }
        });
        return containsItems;
      }
    },

    methods: {
      activeSelection (id) {
        return id === this.selectedPackId;
      },
      clearSearch () {
        this.searchQuery = '';
      },
      cloneItem ({ id }) {
        console.log('cloneItem id: ', id);
        return {
          id: idGlobal++,
          name: `cat ${id}`
        };
      },
      debounceSearchQuery: debounce(function (e) {
        this.searchQuery = e;
      }, 1000),
      log (evt) {
        console.log('sidebar log: ', evt);
      },
      handleDeleteItem (item) {
        this.$emit('handle-delete-item', item);
      },
      handleSelectedPack (pack) {
        this.$emit('handle-selected-pack', pack);
      }
    },

    mounted () {
      this.secondaryLight = $nuxt.$vuetify.theme.themes.light.secondaryLight;
    },

    components: {
      CustomIcon,
      draggable
    }
  };
</script>

<style lang="scss">
  .staggered-fade-item {
    transition-timing-function: cubic-bezier(0.57, 0.06, 0, 1.06);
    transition-duration: 500ms;
    transition-property: opacity, transform;
  }

  .staggered-fade-enter,
  .staggered-fade-leave-to {
    opacity: 0;
    transform: translateY(-30px);
  }

  .search-container {
    .v-input {
      &.v-input--is-focused {
        .v-input__slot {
          input {
            color: $grey8 !important;
          }
        }
      }
    }
  }

  .gear-container {
    .v-list-item {
      &__icon {
        &.v-list-group__header__append-icon {
          justify-content: flex-start !important;
        }
      }

      &__content {
        color: #fff;

        .header {
          display: grid;
          grid-template-columns: 1fr auto;
          width: 100%;;

          &-divider {
            align-items    : center;
            display        : flex;
            justify-content: flex-start;

            .text-h6 {
              margin-right: 0.5rem;
            }
          }
        }

        .packs-list, .gear-list {
         .v-list-item {
            &.selected {
              background-color: $primaryDark;
            }

            .gear-handle, .destroy-btn {
              opacity: 0;
              transition: 0.2s opacity $cubicBezier;
            }

            p {
              flex-grow: 1;
            }

            &:hover {
              .gear-handle {
                cursor: grab;
                opacity: 1;
              }

              .destroy-btn {
                cursor: pointer;
                opacity: 1;
              }
            }

            &__icon {
              i {
                color: $secondaryLight;
              }
            }
          }
        }
      }
    }
  }
</style>
