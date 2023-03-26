# Project_Android_CV
Projet basé sur le domaine de la recherche d'emploi avec interface d'accès .
Le projet sera subdivisé en 2 parties:
<li>La partie Back-End avec Spring Boot et IntelliJ</li>
<li> La partie Front-End avec Android Studio</li>


Première partie: la partie Back-End avec Spring Boot et IntelliJ

Notre base de données phpMyAdmin est nommée emploicvdb et est généré par Spring Boot
Elle comporte une table nommée appcv
![BD](https://user-images.githubusercontent.com/111537634/227775382-93fbcb7e-af2e-4c24-90d3-7217a83a1c0b.PNG)


cette table est coomposée des élements colonnes first_name, last_name,
age, adresse, email, telephone, specialite, niveauEtude, experienceProfessionnelle
![Table](https://user-images.githubusercontent.com/111537634/227775544-225b9cf5-edf4-4c1b-a012-51bedcd8ef07.PNG)


Nous pouvons ajouter un élément dans la table depuis le localhost par requête . Pour ce faire nous avons créer un dossier users dans lequel nous avons lister les webServices commme se connecter a la BD, ajouter, supprimer, mettre à jour,sélectionner
![image](https://user-images.githubusercontent.com/111537634/227776208-3c5a40aa-4ea7-4440-8b20-13e89285a122.png)

Fichier db_connect.php
![image](https://user-images.githubusercontent.com/111537634/227776370-0cfd94e0-692f-427f-8607-e1ca6b61ac32.png)

Fichier add.php
![image](https://user-images.githubusercontent.com/111537634/227776436-06188e53-9695-47ca-a3dc-47647d1aa11e.png)
![image](https://user-images.githubusercontent.com/111537634/227776570-04085a52-d433-4f1f-8087-0939dcbe1fbb.png)
![image](https://user-images.githubusercontent.com/111537634/227776609-e92aca35-f55a-4f9e-a65b-d0edc203fce0.png)
![image](https://user-images.githubusercontent.com/111537634/227776625-5bbaffcd-2690-44db-b6b1-4278d2628717.png)
 
 A l'exécution sur le localhost  le fichier se présente sous le format JSON
 ![image](https://user-images.githubusercontent.com/111537634/227777200-c8c6a802-89c2-4319-a263-ac1449e56fa8.png)
 Cela est valable pour les autres fichiers.
 
 Fichier all.php
 ![image](https://user-images.githubusercontent.com/111537634/227778254-3715bec8-67a6-4840-ac97-71e3aa92e449.png)
![image](https://user-images.githubusercontent.com/111537634/227778307-11428ffa-8f9e-404f-ba7a-7ee17088a54a.png)
![image](https://user-images.githubusercontent.com/111537634/227778336-5e17f630-077a-434f-8721-39aa9c88f9ea.png)

Si nous exécutons  sur le localhost  le fichier se présente sous le format JSON
![image](https://user-images.githubusercontent.com/111537634/227778589-921c4589-3cd2-4f98-9415-6bb38ba17bf5.png)


Fichier delete.php
![image](https://user-images.githubusercontent.com/111537634/227776738-dcbd9cb7-7188-474a-8112-789c130bceba.png)
![image](https://user-images.githubusercontent.com/111537634/227776791-b04a4e14-727d-469e-a2db-22120d6ac09b.png)






