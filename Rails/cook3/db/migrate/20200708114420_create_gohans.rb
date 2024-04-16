class CreateGohans < ActiveRecord::Migration[6.0]
  def change
    create_table :gohans do |t|

      t.timestamps
    end
  end
end
