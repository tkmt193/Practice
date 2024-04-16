class Like < ApplicationRecord
  belongs_to :gohan
  belongs_to :user

  validates_uniqueness_of :gohan_id, scope: :user_id
end
