class AddUserIdToGohans < ActiveRecord::Migration[6.0]
  def change
    add_column :gohans, :user_id, :integer
  end
end
