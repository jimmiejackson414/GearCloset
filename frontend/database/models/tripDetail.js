import { Model } from '@vuex-orm/core';
import Trip from './trip';

export default class TripDetail extends Model {
  static entity = 'tripDetails';

  static fields () {
    return {
      id: this.attr(null),
      title: this.string('').nullable(),
      url: this.string('').nullable(),
      value: this.string('').nullable(),
      type: this.string(''),
      trip_id: this.attr(null),
      created_at: this.attr(null),
      updated_at: this.attr(null),

      // relationships
      trip: this.belongsTo(Trip, 'trip_id')
    };
  }
};
