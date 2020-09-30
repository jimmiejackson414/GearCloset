<template>
  <div class="page-wrapper mt-10">
    <div class="container text-left">
      <div class="page-title text-h4">
        Profile
      </div>
      <v-tabs
        class="mt-4"
        vertical>
        <v-tab
          v-for="(tab, i) in tabs"
          :key="i"
          class="justify-start">
          <custom-icon
            class="mr-3"
            :color="iconColor"
            height="25px"
            :name="tab.icon"
            width="25px" />
          {{ tab.title }}
        </v-tab>

        <!-- User Settings -->
        <v-tab-item
          reverse-transition="fade-transition"
          transition="fade-transition">
          <v-card flat>
            <v-card-text class="py-0">
              <user-settings
                :current-user="currentUser"
                @handle-submit="handleSubmit" />
            </v-card-text>
          </v-card>
        </v-tab-item>

        <!-- Account Settings -->
        <v-tab-item
          reverse-transition="fade-transition"
          transition="fade-transition">
          <v-card flat>
            <v-card-text>
              <account-settings
                :current-user="currentUser"
                @handle-submit="handleSubmit" />
            </v-card-text>
          </v-card>
        </v-tab-item>

        <!-- Subscription Settings -->
        <v-tab-item
          reverse-transition="fade-transition"
          transition="fade-transition">
          <v-card flat>
            <v-card-text>
              <subscription-settings
                :current-user="currentUser"
                @handle-submit="handleSubmit" />
            </v-card-text>
          </v-card>
        </v-tab-item>
      </v-tabs>
    </div>
  </div>
</template>

<script>
  import AccountSettings from '~/components/profile/forms/AccountSettings';
  import CustomIcon from '~/components/icons/CustomIcon';
  import SubscriptionSettings from '~/components/profile/forms/SubscriptionSettings';
  import UserSettings from '~/components/profile/forms/UserSettings';

  export default {
    name: 'Profile',

    data () {
      return {
        confirm_password: '',
        currentUser: {
          avatar_url: null,
          country: 'United States',
          email: 'jimmiejackson414@gmail.com',
          first_name: 'Jimmie',
          last_name: 'Jackson',
          password: 'password',
          subscription_level: 'annual member',
          system: 'Imperial',
          trail_name: 'Walk and Eat'
        },
        iconColor: '',

        submitting: false,
        tabs: [
          { title: 'User Settings', icon: 'user-circle' },
          { title: 'Account Settings', icon: 'setting' },
          { title: 'Subscription', icon: 'file-landscape-alt' }
        ]
      };
    },

    methods: {
      handleSubmit () {
        this.submitting = true;
        console.log('handleSubmit');

        setTimeout(() => {
          this.submitting = false;
        }, 3000);
      }
    },

    mounted () {
      this.iconColor = $nuxt.$vuetify.theme.themes.light['dark-grey'];
    },

    components: {
      AccountSettings,
      CustomIcon,
      SubscriptionSettings,
      UserSettings
    }
  };
</script>

<style lang="scss" scoped>

</style>