class AddTitleToGohans < ActiveRecord::Migration[6.0]
  def change
    add_column :gohans, :title, :string
  end
end
