<template>
  <v-dialog
    v-model="show"
    class="test"
    max-width="750"
    :persistent="submitting">
    <v-card>
      <v-card-title>Update {{ detailType }} Detail</v-card-title>
      <v-card-text>
        <v-container>
          <v-row>
            <v-col cols="12">
              <v-text-field
                v-model="details.title"
                color="primary"
                dense
                :disabled="submitting"
                hide-details
                label="Title"
                outlined
                placeholder="Elevation Gain"
                required />
            </v-col>
            <v-col cols="12">
              <v-text-field
                v-model="details.value"
                color="primary"
                dense
                :disabled="submitting"
                hide-details
                label="Value"
                outlined
                placeholder="5400 ft."
                required />
            </v-col>
            <v-col cols="12">
              <v-checkbox
                class="mt-0"
                color="primary"
                :false-value="false"
                hide-details
                label="Link to external URL?"
                :ripple="false"
                :true-value="true"
                :value="hasUrl"
                @click="handleCheckbox" />
            </v-col>
            <v-col
              v-if="hasUrl"
              cols="12">
              <v-text-field
                v-model="details.url"
                color="primary"
                dense
                :disabled="submitting"
                hide-details
                label="URL"
                outlined
                placeholder="https://www.southwest.com"
                required />
            </v-col>
          </v-row>
        </v-container>
      </v-card-text>
      <v-card-actions class="justify-space-between">
        <v-btn
          class="grey7--text"
          :disabled="submitting"
          :ripple="false"
          text
          @click="closeModal">
          Cancel
        </v-btn>
        <v-btn
          color="primary"
          depressed
          :disabled="submitting"
          :ripple="false"
          @click="handleUpdate">
          <loading
            v-if="submitting"
            color="#fff"
            height="30px"
            width="30px" />
          <span v-else>Update</span>
        </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>
  import { capitalize } from '~/helpers/functions';
  import Loading from '~/components/Loading.vue';
  import { tripDetailService } from '~/services/planning/trip_detail.service';

  export default {
    props: {
      detail: {
        type: Object,
        required: false,
        default: () => {}
      },
      trip: {
        type: Object,
        default: () => {}
      },
      value: {
        type: Boolean,
        default: false
      }
    },

    data: () => ({
      hasUrl: false,
      submitting: false
    }),

    computed: {
      details () {
        if (this.detail) {
          return { ...this.detail };
        }
        return { title: '', url: '', value: '' };
      },
      detailType () {
        return this.detail ? capitalize(this.detail?.type) : '';
      },
      show: {
        get () {
          return this.value;
        },
        set (value) {
          this.$emit('input', value);
        }
      }
    },

    methods: {
      closeModal () {
        this.show = false;
        this.$emit('handle-reset-modal');
      },
      handleCheckbox () {
        this.hasUrl = !this.hasUrl;
      },
      async handleUpdate () {
        this.submitting = true;

        const payload = { data: { ...this.details, trip: this.trip.id }, apollo: this.$apollo };
        await tripDetailService.updateTripDetail(payload);
        this.submitting = false;
        this.$emit('handle-reset-modal');
      }
    },

    watch: {
      detail () {
        this.hasUrl = !!this.detail?.url;
      }
    },

    components: {
      Loading
    }
  };
</script>

<style lang="scss" scoped>
  .v-card {
    border-top: 5px solid $primary;
  }
</style>