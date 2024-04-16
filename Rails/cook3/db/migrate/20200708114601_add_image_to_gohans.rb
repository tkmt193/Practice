class AddImageToGohans < ActiveRecord::Migration[6.0]
  def change
    add_column :gohans, :image, :string
  end
end
