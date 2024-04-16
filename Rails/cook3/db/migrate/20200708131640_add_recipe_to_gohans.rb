class AddRecipeToGohans < ActiveRecord::Migration[6.0]
  def change
    add_column :gohans, :recipe, :text
  end
end
