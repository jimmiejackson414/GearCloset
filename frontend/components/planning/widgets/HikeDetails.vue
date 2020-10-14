<template>
  <div class="widget-wrapper">
    <div class="widget-header mb-0">
      <div class="text-h6">
        Hike Details
      </div>
      <plus-button @handle-click="hikeDetailsModalOpen = true" />
    </div>
    <div class="trip-details-wrapper">
      <div class="row">
        <div class="col-12 d-flex align-center">
          <h2>{{ hike.title }}</h2>
        </div>
      </div>
      <transition-group
        v-if="hike.details.length"
        class="trip-details"
        name="list"
        tag="ul">
        <li
          v-for="detail in hike.details"
          :key="detail.id"
          class="detail">
          <span class="font-weight-bold">{{ detail.title }}</span>
          <a
            class="value"
            :href="`${detail.url}`"
            rel="noopener noreferrer"
            target="_blank">{{ detail.url_title }}</a>
          <ellipsis-button
            class="ellipsis"
            :items="ellipsisItems"
            @delete-detail="openDelete(detail)"
            @update-detail="openUpdate(detail)" />
        </li>
      </transition-group>

      <p v-else>
        You haven't added any details yet!
      </p>
    </div>

    <hike-details-modal
      v-model="hikeDetailsModalOpen"
      :detail="selectedDetail"
      @handle-reset-modal="resetModal" />

    <delete-confirm-modal
      v-model="removeDetailModalOpen"
      item="detail"
      :selected-detail="selectedDetail"
      @handle-remove-item="removeDetail"
      @handle-reset-modal="resetModal" />
  </div>
</template>

<script>
  import DeleteConfirmModal from '~/components/modals/DeleteConfirmModal';
  import EllipsisButton from '~/components/icons/EllipsisButton';
  import HikeDetailsModal from '~/components/modals/HikeDetailsModal';
  import PlusButton from '~/components/icons/PlusButton';

  export default {
    data: () => ({
      hike: {
        title: 'John Muir Trail',
        details: [
          { id: 1, title: 'Miles', url: 'https://www.southwest.com', url_title: '211 Miles', created_at: '2020-03-09 17:08:21', updated_at: '2020-03-09 17:08:21' },
          { id: 2, title: 'Avg Time To Hike', url: 'https://www.southwest.com', url_title: '21 Days', created_at: '2020-03-09 17:08:21', updated_at: '2020-03-09 17:08:21' },
          { id: 3, title: 'Elevation Gain', url: 'https://www.avis.com', url_title: '164,200', created_at: '2020-03-09 17:08:21', updated_at: '2020-03-09 17:08:21' },
          { id: 4, title: 'Trail Type', url: 'https://www.standingbearhostel.com', url_title: 'End to End', created_at: '2020-03-09 17:08:21', updated_at: '2020-03-09 17:08:21' },
          { id: 5, title: 'Website', url: 'https://www.jmt.org', url_title: 'https://www.jmt.org', created_at: '2020-03-09 17:08:21', updated_at: '2020-03-09 17:08:21' }
        ]
      },
      ellipsisItems: [
        { title: 'Update', event: 'update-detail' },
        { title: 'Delete', event: 'delete-detail' }
      ],
      hikeDetailsModalOpen: false,
      removeDetailModalOpen: false,
      selectedDetail: null
    }),

    methods: {
      handleAddDetail () {
        console.log('addDetail');
      },
      openDelete (detail) {
        this.selectedDetail = detail;
        this.removeDetailModalOpen = true;
      },
      openUpdate (detail) {
        console.log('openUpdate', detail);
        this.selectedDetail = detail;
        this.hikeDetailsModalOpen = true;
      },
      removeDetail () {
        console.log('removeDetail');
      },
      resetModal () {
        this.selectedDetail = null;
      }
    },

    components: {
      DeleteConfirmModal,
      EllipsisButton,
      HikeDetailsModal,
      PlusButton
    }
  };
</script>

<style lang="scss" scoped>
  @import 'widget-styles';
  @import '~/css/list-transition';

  .trip-details-wrapper {
    .trip-details {
      display: grid;
      list-style-type: none;
      padding: 0;
      text-decoration: none;

      .detail {
        align-items: center;
        display: grid;
        grid-template-columns: 1fr repeat(2, auto);
        overflow: hidden;
        padding: 0.75rem 0 0;
        text-overflow: ellipsis;
        white-space: nowrap;
      }
    }
  }
</style>

<style lang="scss">
  .detail {
    .ellipsis {
      opacity: 0;
    }

    &:hover {
      .ellipsis {
        opacity: 1;
      }
    }
  }
</style>