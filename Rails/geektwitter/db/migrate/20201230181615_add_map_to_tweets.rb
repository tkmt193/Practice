class AddMapToTweets < ActiveRecord::Migration[6.0]
  def change
    add_column :tweets, :map, :string
  end
end
