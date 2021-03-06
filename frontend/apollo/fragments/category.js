import { gql } from 'graphql-request';

export const CATEGORY_FRAGMENT = gql`
  fragment category on Category {
    id
    name
    pack_id
    unit
    created_at
    updated_at
  }
`;
