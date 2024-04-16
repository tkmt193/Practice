class GohansController < ApplicationController
  def index
    if params[:search] != nil && params[:search] != ''
      #部分検索かつ複数検索
      @gohans = Gohan.where("title LIKE ? ", "%" + params[:search] + "%").or(Gohan.where("food LIKE ? ", "%" + params[:search] + "%"))
    else
      @gohans = Gohan.all
    end
  end

  def new
    @gohan = Gohan.new
  end

  def show
    @gohan = Gohan.find(params[:id])
    @like = Like.new
    @comments = @gohan.comments
    @comment = @gohan.comments.build
  end

  def edit
    @gohan = Gohan.find(params[:id])
  end

  def create
    @gohan = Gohan.new(gohan_params)
    @gohan.user_id = current_user.id
    if @gohan.save
      redirect_to :action => "index"
    else
      redirect_to :action => "new"
    end
  end

  def update
    @gohan = Gohan.find(params[:id])
    if @gohan.update(gohan_params)
      redirect_to :action => "show", :id => @gohan.id
    else
      redirect_to :action => "new"
    end
  end

  def destroy
    Gohan.find(params[:id]).destroy
  redirect_to action: :index
  end

  private
  def gohan_params
    params.require(:gohan).permit(:title,:image,:food,:recipe)
  end

end
