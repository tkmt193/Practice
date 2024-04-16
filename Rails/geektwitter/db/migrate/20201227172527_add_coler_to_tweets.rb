class AddColerToTweets < ActiveRecord::Migration[6.0]
  def change
    add_column :tweets, :coler, :integer
  end
end
