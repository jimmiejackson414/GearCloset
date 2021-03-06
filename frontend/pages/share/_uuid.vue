<template>
  <div class="page-wrapper">
    <loading-page v-if="isLoading" />

    <div
      v-else
      v-resize.quiet="onResize"
      class="share-styles">
      <div
        v-if="notFound"
        class="not-found text-center">
        <h1 class="text-h1">
          Not found!
        </h1>
        <p class="mt-4 mb-1">
          It appears that this pack was either deleted by the owner, or the URL is incorrect.
        </p>
        <p>Please check that the URL is correct, or <a href="mailto:contact@gearcloset.io">contact us</a> if you feel that you've reached this page in error.</p>
        <logo-icon height="50px" />
      </div>
      <div
        v-else
        class="content-wrapper">
        <v-row class="top">
          <v-col class="col-12 header text-center mt-8 mb-4">
            <avatar
              :size="75"
              :user="pack.user" />
            <div class="pack-and-user">
              <h4 class="page-title text-h4 mb-2">
                {{ pack.name }}
              </h4>
              <p class="font-weight-bold mb-0">
                {{ pack.user | prettyName }}
              </p>
            </div>
          </v-col>
          <v-col class="wrapper col-12 col-md-6 col-lg-7">
            <selected-pack-graph
              :chart-data="chartData"
              :is-mobile="isMobile"
              :styles="graphStyles"
              :theme="pack.theme" />
          </v-col>
          <v-col class="wrapper col-12 col-md-6 col-lg-5">
            <totals-table :selected-pack="pack" />
          </v-col>
        </v-row>
        <v-row class="bottom mt-10">
          <v-col class="col-12">
            <h2 class="text-h6">
              Pack Items
            </h2>
            <v-row
              v-for="(category, index) in pack.categories"
              :key="category.id"
              :class="['categories-container', pack.categories.length === index + 1 ? 'last' : '']">
              <v-lazy
                min-height="100"
                :options="{ threshold: .25 }"
                :style="{ width: '100%'}"
                transition="fade-transition"
                :value="false">
                <v-col cols="12">
                  <p class="body-1">
                    {{ category.name }}
                  </p>
                  <v-data-table
                    calculate-widths
                    class="items-table-container mb-10"
                    dense
                    disable-pagination
                    disable-sort
                    :headers="headers"
                    hide-default-footer
                    :items="category.items"
                    :mobile-breakpoint="0">
                    <template #body="{ items }">
                      <tbody>
                        <tr
                          v-for="(item, i) in items"
                          :key="item.id">
                          <!-- Generic Type -->
                          <td
                            :key="`${item.id}-type-${i}-${index}`"
                            class="px-0 py-1">
                            {{ item.generic_type }}
                          </td>

                          <!-- Name -->
                          <td
                            :key="`${item.id}-name-${i}-${index}`"
                            class="px-0 py-1">
                            {{ item.name }}
                          </td>

                          <!-- Consumable -->
                          <td
                            :key="`${item.id}-consumable-${i}-${index}`"
                            class="text-center px-0 py-1">
                            <span :class="[{ active: item.consumable }, 'consumable-btn']">
                              <client-only>
                                <unicon
                                  :fill="item.consumable ? '#fff' : '#9e9e9e'"
                                  height="20"
                                  name="utensils-alt"
                                  width="20" />
                              </client-only>
                            </span>
                          </td>

                          <!-- Worn -->
                          <td
                            :key="`${item.id}-worn-${i}-${index}`"
                            class="text-center px-0 py-1">
                            <span :class="[{ active: item.worn }, 'worn-btn']">
                              <client-only>
                                <unicon
                                  :fill="item.worn ? '#fff' : '#9e9e9e'"
                                  height="20"
                                  name="layer-group"
                                  width="20" />
                              </client-only>
                            </span>
                          </td>

                          <!-- Weight -->
                          <td
                            :key="`${item.id}-weight-${i}-${index}`"
                            class="px-0 py-1 text-center">
                            {{ item | displayWeight(item.unit ) }}
                            {{ item.unit }}
                          </td>

                          <!-- Price -->
                          <td
                            :key="`${item.id}-price-${i}-${index}`"
                            class="px-0 py-1 text-center">
                            <client-only>
                              <unicon
                                fill="#494f57"
                                height="14"
                                name="dollar-alt"
                                width="14" />
                              {{ item.price | displayPrice }}
                            </client-only>
                          </td>

                          <!-- Quantity -->
                          <td
                            :key="`${item.id}-quantity-${i}-${index}`"
                            class="px-0 py-1 text-center">
                            {{ item.quantity }}
                          </td>
                        </tr>

                        <!-- Totals -->
                        <tr class="totals cursor-default">
                          <td :colspan="1">
                            <span class="font-weight-bold px-3">Totals:</span>
                          </td>
                          <td :colspan="1"></td>
                          <td :colspan="1"></td>
                          <td :colspan="1"></td>

                          <!-- Weight Total -->
                          <td
                            class="text-center"
                            :colspan="1">
                            <span class="weight-column">
                              {{ category | displayCategoryWeight(category.unit) }}
                              {{ category.unit }}
                            </span>
                          </td>

                          <!-- Price Total -->
                          <td
                            class="text-center"
                            :colspan="1">
                            <span class="price-total">
                              <client-only>
                                <unicon
                                  fill="#494f57"
                                  height="14"
                                  name="dollar-alt"
                                  width="14" />
                              </client-only>
                              {{ priceTotal(items) }}
                              <!-- {{ item.price }} -->
                            </span>
                          </td>

                          <!-- Quantity Total -->
                          <td
                            class="text-center"
                            :colspan="1">
                            {{ quantityTotal(items) }}
                          </td>
                        </tr>
                        </t-body>
                      </tbody>
                    </template>
                  </v-data-table>
                </v-col>
              </v-lazy>
            </v-row>
          </v-col>
        </v-row>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
  import convert from 'convert-units';
  import Avatar from '~/components/Avatar.vue';
  import { calculateCategoryWeight, convertToDollars } from '~/helpers/functions';
  import isMobile from '~/mixins/isMobile';
  import LoadingPage from '~/components/LoadingPage.vue';
  import LogoIcon from '~/components/icons/LogoIcon.vue';
  import { packService } from '~/services';
  import SelectedPackGraph from '~/components/graphs/SelectedPackGraph.vue';
  import TotalsTable from '~/components/closet/TotalsTable.vue';

  export default {
    layout: 'public',

    name: 'SharePackList',

    mixins: [isMobile],

    async fetch () {
      const payload = { graphql: this.$graphql, variables: { uuid: this.$route.params.uuid } };
      const { packByUuid } = await packService.packByUuid(payload);

      if (!packByUuid) {
        this.notFound = true;
      } else {
        this.pack = packByUuid;
      }

      this.isLoading = false;
    },

    data: () => ({
      chartData: {
        labels: null,
        datasets: null
      },
      chartHeight: 300,
      chartWidth: 500,
      headers: [
        { text: 'Type', align: 'left', sortable: true, value: 'generic_type' },
        { text: 'Name', align: 'left', sortable: true, value: 'name' },
        { text: 'Consumable', align: 'center', sortable: true, value: 'consumable' },
        { text: 'Worn', align: 'center', sortable: true, value: 'worn' },
        { text: 'Weight', align: 'center', sortable: true, value: 'weight' },
        { text: 'Price', align: 'center', sortable: true, value: 'price' },
        { text: 'Quantity', align: 'center', sortable: true, value: 'quantity' }
      ],
      isLoading: true,
      notFound: false,
      pack: null,
      uuid: ''
    }),

    computed: {
      graphStyles () {
        return {
          height: `${this.chartHeight}px`,
          margin: '0 auto',
          position: 'relative',
          width: `${this.chartWidth}px`
        };
      }
    },

    methods: {
      onResize () {
        const width = window.innerWidth;
        if ((width < 560) || (width < 1264 && width > 959)) {
          this.chartWidth = 400;
          this.isMobile = true;
        } else {
          this.chartWidth = 500;
          this.isMobile = false;
        }
      },
      priceTotal (items) {
        const reduced = items.reduce((sum, elem) => sum + Number(elem.price), 0);
        return convertToDollars(reduced);
      },
      quantityTotal (items) {
        return items.reduce((sum, elem) => sum + elem.quantity, 0);
      },
      setChartData () {
        if (this.pack) {
          this.localTheme = this.pack.theme;
          this.chartData.labels = this.pack.categories.map(category => {
            return this.$options.filters.truncate(category.name, 20);
          });
          this.chartData.datasets = [{
            label: 'Selected Pack Graph',
            data: this.pack.categories.map(category => {
              return parseFloat(convert(calculateCategoryWeight(category)).from('g').to(category.unit)).toFixed(2);
            })
          }];
        }
      }
    },

    mounted () {
      this.uuid = this.$route.params.uuid;
    },

    watch: {
      pack (val) {
        if (val) {
          this.setChartData();
        }
      }
    },

    components: {
      Avatar,
      LoadingPage,
      LogoIcon,
      SelectedPackGraph,
      TotalsTable
    }
  };
</script>

<style lang="scss" scoped>
  .page-wrapper {
    height: 100%;

    .share-styles {
      height: 100%;

      .not-found {
        height: 100%;
        margin-top: 5rem;
      }

      .content-wrapper {
        .header {
          align-items: center;
          display: flex;
          justify-content: center;

          .pack-and-user {
            margin-left: 2rem;
            text-align: left;
          }
        }
      }
    }

    .categories-container {
      .items-table-container {
        table {
          thead {
            th:first-of-type {
              padding-left: 0;
            }
          }

          tbody {
            td {
              padding: 4px 0;
            }
          }
        }

        .consumable-btn {
          align-items: center;
          border-radius: 50%;
          display: inline-flex;
          flex: 0 0 auto;
          height: 36px;
          justify-content: center;
          letter-spacing: 0.0892857143em;
          width: 36px;

          &.active {
            background-color: darken($secondaryLight, 10%);

            svg {
              fill: white;
            }
          }
        }

        .worn-btn {
          align-items: center;
          border-radius: 50%;
          display: inline-flex;
          flex: 0 0 auto;
          height: 36px;
          justify-content: center;
          letter-spacing: 0.0892857143em;
          width: 36px;

          &.active {
            background-color: $accentDarkest;

            svg {
              fill: white;
            }
          }
        }
      }
    }
  }
</style>
