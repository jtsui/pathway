Pathway::Application.routes.draw do
  root :to => "home#index"
  match '/hiring' =>'home#hiring'
  match '/act' =>'home#act'
  match '/talks' =>'home#talks'
  match '/papers' =>'home#papers'
  match '/people' =>'home#people'
end
