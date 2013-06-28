Pathway::Application.routes.draw do
  # root :to => "home#index"
  root :to => redirect('http://act.berkeley.edu/synthesizer')

  match '/home' => 'home#index'
  match '/synthesizer' => redirect('http://act.berkeley.edu/synthesizer')
  match '/hiring' =>'home#hiring'
  match '/act' =>'home#act'
  match '/talks' =>'home#talks'
  match '/papers' =>'home#papers'
  match '/people' =>'home#people'
end
