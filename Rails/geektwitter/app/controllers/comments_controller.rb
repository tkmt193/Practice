class CommentsController < ApplicationController
 
def edit
    tweet = Tweet.find(params[:tweet_id])
    @comment = tweet.comments.find(params[:id])
end

    def create
      tweet = Tweet.find(params[:tweet_id])
      comment = tweet.comments.build(comment_params) #buildを使い、contentとtweet_idの二つを同時に代入
   
      if comment.save
        flash[:success] = "コメントしました"
        redirect_back(fallback_location: root_path)
      else
        flash[:success] = "コメントできませんでした"
        redirect_back(fallback_location: root_path)
      end
    end

    def destroy
        @tweet = Tweet.find(params[:tweet_id])
        @comment = Comment.find(params[:id])
        @comment.destroy
        redirect_to request.referer
      end

      def update
        @tweet = Tweet.find(params[:tweet_id])
        @comment = Comment.find(params[:id])
        if @comment.update(comment_params)
          redirect_to request.referer
        else
          redirect_to request.referer
        end
      end
  
    private
  
      def comment_params
        params.require(:comment).permit(:content)
      end
end
