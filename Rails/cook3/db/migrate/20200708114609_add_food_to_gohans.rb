class AddFoodToGohans < ActiveRecord::Migration[6.0]
  def change
    add_column :gohans, :food, :text
  end
end
