certaines sources de données ne fournissent que du json,

pour accéder à ces données depuis une page html, on a besoin
d'un service jsonp

les données à http://data.irisnetlab.be/data/levels_of_service/json/
sont intéressantes parce que les mises à jour sont fréquentes,
et le service ne fournit que du json

Brussels.html donne accès à ces données, par l'intermédiaire d'un script
sur mon serveur

jsonTOjsonp.php est la source de ce script à placer sur un serveur
perso

Brussels.html crée une liste (accumulation) d'observations
(toutes les deux minutes, fréquence de mise à jour du site),
chacune d'elle reprenant :
la liste des longueurs des élémentes de trafic (vert, orange, rouge),
le cumul en mètres de ces éléments,
le nombre d'éléments rapportés,
et un time tag

en option, on peut stocker les résultats (pour faire un replay?)

