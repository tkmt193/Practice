class AddColerlavelToTweets < ActiveRecord::Migration[6.0]
  def change
    add_column :tweets, :colerlavel, :string
  end
end
