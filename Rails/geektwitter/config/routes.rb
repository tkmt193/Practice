Rails.application.routes.draw do
  get 'hello/design1' => 'hello#design1'
  get 'hello/design2' => 'hello#design2'
  get 'hello/design3' => 'hello#design3'
  get 'hello/index' => 'hello#index'
  # For details on the DSL available within this file, see https://guides.rubyonrails.org/routing.html
  resources :tweets do
    resources :comments, only: [:create, :destroy, :update, :edit]
  end
  resources :posts
  root 'hello#index'
  
end
