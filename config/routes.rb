Pathway::Application.routes.draw do
  # root :to => "home#index"
  root :to => redirect('http://pathway.berkeley.edu/synthesizer')
  match '/synthesizer' => redirect('http://pathway.berkeley.edu/synthesizer')
  match '/hiring' =>'home#hiring'
  match '/act' =>'home#act'
  match '/talks' =>'home#talks'
  match '/papers' =>'home#papers'
  match '/people' =>'home#people'
end
