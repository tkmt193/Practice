class TweetsController < ApplicationController
  
  def index
    @posts = Post.all.order(suji: "ASC")
    @post = Post.new
   
    if params[:search] == nil
      @tweets = Tweet.all.sort {|a,b| a.body.length <=> b.body.length }
    elsif params[:search] == ''
      @tweets = Tweet.all.sort {|a,b| a.body.length <=> b.body.length }
    else
     
      keywords = params[:search].split(/[[:blank:]]+/).select(&:present?)
      @tweets = Tweet.all
      keywords.each do |keyword|
        @tweets = @tweets.where("body LIKE ?", "%#{keyword}%")
      end
    end

   end

  def new
    @tweet = Tweet.new
  end

  def create
    tweet = Tweet.new(tweet_params)
    if tweet.save
      redirect_to :action => "index"
    else
      redirect_to :action => "new"
    end
  end

  def show
    @tweet = Tweet.find(params[:id])
    @comments = @tweet.comments
    
    @comment = Comment.new

  
  end

  def edit
    @tweet = Tweet.find(params[:id])
  end

  def update
    tweet = Tweet.find(params[:id])
    if tweet.update(tweet_params)
      redirect_to :action => "show", :id => tweet.id
    else
      redirect_to :action => "new"
    end
  end


  def destroy
    tweet = Tweet.find(params[:id])
    tweet.destroy
    redirect_to action: :index
  end

  private
  def tweet_params
    params.require(:tweet).permit(:body,:title,:coler,:colerlavel,:map)
  end

  def comment_params
    params.require(:comment).permit(:content)
  end
  
end
