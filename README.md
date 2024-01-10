# revisions-poo
Notions of Object Oriented Programming in PHP.

Révisions POO

Introduction du sujet

Après avoir acquis beaucoup de compétences sur le front, vous voilà prêts à reprendre
des projets backend et à vous frotter à des notions avancées pour donner plus de vie à
vos applications.
Nous allons commencer par revoir des notions de Programmation Orientée Objet en
PHP. Ces notions sont des notions fondamentales pour certaines, et pour d’autres sont
des notions un peu plus avancées, mais très intéressantes à connaître avant d’aller
plus loin.
Dans le dossier de votre projet, créez un dossier job-XX pour chacun des jobs où XX
correspond au numéro de chaque job. Pensez à faire des commits réguliers et à
respecter les consignes dans le sujet.
Pour chacun des Jobs, pensez à récupérer le code du job précédent et à le copier dans
celui du job en cours afin d’éviter de tout réécrire à chaque fois.

Job 01

Nous allons prendre un exemple réaliste afin de coller au mieux à ce que vous pourriez
rencontrer dans une application. Pour cela, nous allons commencer par créer une
classe Product, permettant de représenter par exemple un produit dans une boutique.
Cette classe aura les propriétés privées suivantes :
- id : un entier naturel
- name : une chaîne de caractères
- photos : un tableau de chaînes de caractères
- price : un entier naturel
- description : une chaîne de caractères
- quantity : un entier naturel
- createdAt : une instance d’un objet DateTime
- updatedAt : une instance d’un objet DateTime
Créez ensuite les getters et les setters associés à cette classe. Pour rappel, les getters
d’une classe permettent d’accéder à des propriétés privées en dehors de la classe et les
setters permettent de modifier les valeurs de ces propriétés.
Faites en sorte d’initialiser les propriétés de votre classe avec le constructeur de
celle-ci. Par exemple :

Une fois votre classe instanciée, vous pouvez récupérer les propriétés grâce à vos
getters, vérifier leurs valeurs, et les modifier avec vos setters. Utiliser la fonction
var_dump() pour faire vos tests, par exemple dans un fichier index.php.

Job 02
Évidemment, dans une boutique en ligne, nous n’avons pas que des produits. Il y a aussi
des catégories auxquels sont associés ces produits.

Créez une classe Category, avec les propriétés privées suivantes et les getters et
setters associés :
- id : un entier naturel
- name : une chaine de caractère
- description : une chaine de caractère
- createdAt : une instance d’un objet DateTime
- updatedAt : une instance d’un objet DateTime
Ajoutez maintenant dans votre class Product un champ category_id, permettant de
stocker un id de la classe Category, avec les setters et getters associés. Comme pour
les produits, les propriétés des catégories doivent pouvoir être initialisées via le
constructeur à l’instanciation de la classe.

Job 03

Il est temps de les représenter dans votre base de données. Faites un MCD rapide afin
de vous rendre compte de la structure de vos tables en base de données et de la
relation entre elles. Maintenant que vous avez votre MCD, créez une base de données
nommée draft-shop. Dans cette base de données, faites une table ‘product’ avec les
colonnes permettant de représenter ce qui se trouve dans votre code PHP, ainsi qu’une
table ‘category’.
Faites des insertions dans votre base de données directement via phpMyAdmin ou via
des requêtes dans votre code afin d’avoir plusieurs éléments dans votre base de
données.

Job 03.1

Il n’est pas toujours pratique de devoir remplir tous les paramètres d’un constructeur
lorsqu’on instancie un nouvel objet pour pouvoir accéder aux méthodes de celui-ci.
Pour contourner ce problème, rendez tous les paramètres de votre constructeur
optionnel. Les deux façons suivantes d’instancier une classe devraient fonctionner :

Job 04

Une fois que vous avez des lignes dans votre base de données, créez un fichier
index.php si vous ne l’avez pas déjà fait. À l’intérieur de votre fichier, faites une requête
auprès de votre base de données afin de récupérer le produit avec l’id 7, sous forme
d’un tableau associatif.
Créez une nouvelle instance de la classe Product, et à l’aide des données présentes à
l’intérieur du tableau associatif, hydratez votre instance avec ces données.
Félicitations, vous venez de créer votre première instance de classe avec des données
de base de données ! Maintenant, essayons d’aller un peu plus loin...

Job 05

Avec votre nouvelle instance de la classe, vous avez récupéré l’id de la category, mais
vous n’avez pas accès à l’entièreté de ses informations (ce qui, il faut se l’avouer, n’est
pas très pratique).
Dans votre classe Product, faites une méthode publique getCategory(). Cette méthode
ne prend aucun paramètre, et devra retourner une instance de la catégorie associée au
produit en utilisant l’id_category en propriété de la classe.
Une fois la méthode fonctionnelle, dans votre fichier index.php, récupérer la catégorie
associée au produit avec l’id 7.

Job 06

Maintenant que vous pouvez récupérer une catégorie en fonction d’un produit, faites de
même avec les produits d’une catégorie en particulier.
Dans la classe Category, faite une méthode publique getProducts() afin de récupérer
tous les produits d’une catégorie en base de données. Cette méthode ne prend pas de
paramètre et devra retourner un tableau contenant uniquement des instances de la
classe Product. S’il n’y a pas de produit lié à la catégorie, le tableau retournée sera vide.

Job 07

Dans votre classe Product, faites une méthode publique findOneById(int $id). Cette
méthode prendra en paramètre un id qui sera un entier et qui retournera l’instance en
cours de la classe Product hydratée avec les informations correspondantes dans le
cas où la ligne dans la base de donnée existe. Si la ligne avec l’id passé en paramètre de
la fonction n’existe pas, alors la fonction devra retourner false.

Job 08

Nous avons de quoi récupérer une instance de notre classe Product, il pourrait être
intéressant de toutes les récupérer d’un coup non ? Pour cela, faites une méthode
publique findAll() dans la classe Product qui récupère toutes les données de la table
Product et qui créer une instance de la classe Product pour chaque ligne de la table
Product.
Cette méthode retournera un tableau d’instance de la classe Product, et ne prendra
aucun paramètre.

Job 09

Nous avons de quoi récupérer tous nos produits et même un produit de manière
spécifique. Il est temps maintenant de faire une méthode pour insérer des produits dans
notre base de données.
Pour ce faire, faites une méthode publique create() dans la classe Product, qui ne
prendra aucun paramètre et qui récupérera toutes les propriétés de l’instance en cours
de la classe Product afin d’insérer les données en base de données.
Cette méthode devra retourner l’instance de Product avec l’id nouvellement créée si
l’insertion réussie, sinon retourner false.

Job 10

Faites une méthode publique update pour votre classe Product. Cette méthode ne
prend aucun paramètre et doit mettre à jour une ligne de la classe product,
correspondant à l’id de l’instance en cours de la classe product.

Job 11

Nous avons de quoi récupérer des catégories et des produits, mais il est tout de même
rare que des produits aient les mêmes propriétés, peu importe le type de produit. Nous
allons donc faire deux classes héritant de la classe Product.
La première sera une classe Clothing, permettant de renseigner les informations liées à
un vêtement sur notre boutique :
- size : string
- color : string
- type : string
- material_fee : int

La seconde sera une classe Electronic, permettant de renseigner des informations liées
à un produit électronique dans notre boutique :
- brand : string
- waranty_fee : int
Concernant la représentation en base de données de ces classes, je vous recommande
d’utiliser la méthode avec laquelle vous serez le plus à l’aise. Une possibilité
intéressante pour représenter cette notion d’héritage en base de données serait
d’utiliser la clé étrangère product_id comme clé primaire de ces tables.

Job 12

Vous savez maintenant faire de l’héritage entre vos différentes classes. Il pourrait être
intéressant de faire en sorte de changer le comportement de certaines méthodes de
nos classes enfants. En effet, si l’on veut que nos méthodes findOneById, findAll, et
create, update fonctionnent à nouveau, il va falloir les réécrire dans nos classes
enfants Clothing et Electronic.
Par exemple, dans la classe Clothing, la méthode findOneById doit donc renvoyer une
instance de la classe Clothing ou false, la méthode findAll doit donc renvoyer un
tableau d’instance de la classe Clothing, etc.

Job 13

Maintenant que nous avons un moyen de représenter nos différents types de produits
dans notre application, notre classe Product ne devrait à priori pas être instanciée
puisqu’elle est étendue dans nos types de produits (Clothing et Electronic).
Afin de verrouiller ce comportement pour de bon, nous pouvons transformer notre
classe Product en classe abstraite AbstractProduct.
Transformer ainsi certaines méthodes de la classe Product en méthodes abstraites.

Job 14

Vous avez deux classes qui vous permettent de représenter des produits dans votre
application. Il vous manque en revanche un moyen de gérer les stocks de chacun de vos
articles.
Créez une SockableInterface avec les méthodes addStocks(int $stock): self et
removeStocks(int $stock): self. Implémentez ensuite cette interface dans vos classes
Clothing et Electronic.

Job 15

Vous avez commencé à manipuler des notions avancées sur les classes, vous
commencez à avoir de plus en plus de fichiers. Vous commencez à vous rendre compte
qu’il y a de plus en plus de classes dans votre projet, et que vos ‘require’ commencent à
un peu trop s’enchaîner dans votre code.
Dans le dossier job-15, reprenez vos classes et placez-les dans un dossier src. Dans ce
dossier src placez y les classes Clothing et Electronic. Placez ensuite dans le dossier
src/Abstract la classe AbstractProduct puis StockableInterface dans src/Interface.
Initialiser composer dans votre dossier job 15, et ajoutez l’autoloader de composer en
liant le dossier src au namespace racine App. Ajoutez ensuite les différents
namespaces dans vos classes afin de simplement require vendor/autoload.php dans
votre fichier index.php.

Aller plus loin
Job 01
Vous avez la possibilité de créer et de mettre à jour des produits dans votre base de
données via deux méthodes create et update. En soi, la grande différence entre les deux
est le fait que dans la création l’ID n’existe pas.
Ajouter une méthode save qui permet de créer ou mettre à jour le produit s’il existe
déjà.
Job 02
Nous n’avons pas d’interface pour représenter toutes les entités. Cela pourrait être
problématique si nous venons à ajouter des entités dans notre application et que nous
souhaitons qu’elles suivent toutes le même squelette.
Nous allons donc créer une EntityInterface afin de donner une base pour représenter
toutes les entités de notre application.
Cette EntityInterface comprendra :
- Une propriété $id
- Une méthode getId()
- Une méthode setId($id)
Une fois que votre entité est créée, implémentez-la dans les classes Clothing et
Electronic.

Job 03
Pour l’instant, le seul moyen que vous avez de gérer la liste des produits liés à une
catégorie est via un tableau. Souvent, dans les frameworks modernes, nous avons la
possibilité de gérer ça avec des classes et des méthodes qui permettent de faciliter la
manipulation des relations.

Pour ce faire, vous allez devoir créer une classe permettant de gérer une liste d’entités,
que l’on va nommer EntityCollection. Dans notre classe EntityCollection, il y aura
plusieurs méthodes :
- La méthode add(EntityInterface $entity): self permettant d’ajouter une nouvelle
entité à la collection
- La méthode remove(EntityInterface $entity): self permettant de retirer une entité
présente dans la collection
- La méthode retrieve(EntityInterface $entity): self permettant de récupérer toutes
les entités de la collection liées à l’entité de base (récupérer tous les produits liés
à une catégorie lors de l’instanciation du produit)

Job 04
Maintenant que vous avez une base pour gérer vos entités, vous pouvez faire un
refactoring de votre classe Category pour y ajouter une propriété products qui sera une
EntityCollection. Cela implique aussi de faire un refactoring de la méthode
getProducts() etc.

Compétences visées

- Programmation orientée objet
- PHP

Rendu

Le projet est à rendre sur https://github.com/prenom-nom/revisions-poo.
Les éléments devant figurer dans votre projet sont :
- Votre code
- Un export de votre base de données
Pensez à mettre votre projet en public ! Une fois celui-ci évalué, vous pourrez le mettre
en privé si vous le souhaitez.
