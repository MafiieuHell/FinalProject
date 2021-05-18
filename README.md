### Inscription

#### Affichage du formulaire

* Créer une classe *UserController* à l'aide de l'outil artisan dans le terminal
* Créer une route en GET /register qui appelle la méthode *register* du *UserController* (la route portera le nom register)
* Créer la méthode register qui va renvoyer la vue users.register
* Créer le template *users/register.blade.php* dans le dossier *ressources/views*
* Créer un formulaire d'authentification (name, email, password, password confirmation)
* Ne pas oublier la directive blade pour la faille csrf (@csrf à mettre dans le formulaire)
* Le formulaire sera en post et envoie les données vers une route *signup*

#### Enregistrement de l'utilisateur

* Créer une route /users en POST qui appelle la méthode *signup* du *UserController* (la route portera le nom signup)
* Créer la méthode *signup* dans le *UserController*
* Cette méthode va récupérer la requête et vérifier les données du formulaire
  * name : obligatoire
  * email : obligatoire et de type email
  * password : obligatoire, minimum 6 caractères, correspond au password_confirmation
  * password_confirmation : obligatoire
* Enregistrer l'utilisateur à l'aide l'ORM
* Rediriger vers la page de connexion (la route login)

### Connexion

#### Affichage du formulaire

* Créer la route /users/login qui appelle la méthode *login* du *UserController* (la route portera le nom login)
* Créer la méthode *login* qui renvoie la vue users.login
* Créer le template *users/login.blade.php*
* Créer un formulaire de connexion (email, password)
* Ne pas oublier la directive blade pour la faille csrf (@csrf à mettre dans le formulaire)
* Le formulaire sera en post et envoie les données vers une route *signin*

#### Authentifier l'utilisateur

* Créer une route /users en post qui appelle la méthode *signin* du *UserController*
* Créer la méthode *signin* qui contient le code suivant
    ```php
    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        
        return back()->withErrors([
            'credentials' => 'Les identifiants ne correspondent pas'
        ]);
    }
    ```
* Vous pouvez récupérer l'erreur d'authentification dans le template *login.blade.php* avec la variable $errors
    ```
    @if($errors->has('credentials'))
        <aside class="alert alert-danger">
            {{ $errors->first('credentials') }}
        </aside>
    @endif
    ```