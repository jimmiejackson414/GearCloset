import { gql } from 'graphql-request';
import { USER_FRAGMENT } from '~/apollo/fragments/user';

export const UPDATE_USER_MUTATION = gql`
  mutation UpdateUser(
    $id: ID!
    $address1: String
    $address2: String
    $city: String
    $country: String
    $email: String
    $first_name: String
    $has_onboarded: Boolean
    $last_name: String
    $measuring_system: String
    $pending_invite: Boolean
    $state: String
    $subscription_level: String
    $trail_name: String
  ) {
    updateUser(
      id: $id
      input: {
        address_1: $address1
        address_2: $address2
        city: $city
        country: $country
        email: $email
        first_name: $first_name
        has_onboarded: $has_onboarded
        last_name: $last_name
        measuring_system: $measuring_system
        pending_invite: $pending_invite
        state: $state
        subscription_level: $subscription_level
        trail_name: $trail_name
      }
    ) {
      ...user
    }
  }
  ${USER_FRAGMENT}
`;
