# Exercices

## phpmyadmin

Créer une table `societe` avec 3 colonnes :

- `id (INT) PRIMARY AUTO_INCREMENT`
- `name (VARCHAR 100) NOT NULL`
- `city (VARCHAR 100) DEFAULT NULL`

La remplir avec des exemples.

## PHP MVC

En vous inspirant de contact, créer 2 pages `societes-list.php` et `societes-show.php` en suivant l'architecture MVC

## Form

### Exercice Form 1

Ajouter un formulaire pour insérer des sociétés.
En vous inspirant de contacts-add

### Exercice Form 2

Créer un formulaire d'update pour les contacts
En réutilisant la fonction `get_contact_by_id`

## Failles

- XSS
- Injection SQL
- CSRF


## Session

Sur la page `contacts-add.php`, générer un identifiant unique avec la fonction `uniqid`

Stocker cette valeur en session à la clé `csrf_token`

Ajouter un champ caché dans le formulaire de contact (`<input name="csrf_token" type="hidden" value="VOTRE_TOKEN" />`)

Au moment de traiter le contenu du POST vérifier si le token du POST et le token de la session corresponde

Si oui faire l'insertion, si non afficher un message d'erreur.
