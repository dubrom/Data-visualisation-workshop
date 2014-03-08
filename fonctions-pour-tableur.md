# Formules utiles dans un tableur
===============================

Testées sur Google Spreadsheets.

## Compter le nombre de ... qui ... .: COUNTIF
**Syntaxe**: `=countif('NOM-DE-LONGLET'!COLONNE:COLONNE,"=VALEUR")`

**Exemple**: 
pour obtenir le nombre d'étudiants de sexe Féminin du feuillet 12-13:
`=countif('12-13'!E:E,"=F")`

## plusieurs critères: COUNTIFS
pour obtenir les étudiants féminines de 2ème DWM en 2006-2007.
Syntaxe: `=COUNTIFS('06-07'!D:D,"=2TID*", '06-07'!E:E,"=F")`

## générer toutes les valeurs uniques d'une colonne.
**Exemple**: afficher toutes les classes d'une année. `=UNIQUE('06-07'!D:D)`


## requêtes complexes: =QUERY()
Query vous permet de faire des requêtes dans une syntaxe proche du SQL. (SQL est un langage permettant de faire des requêtes à une base de données. [Apprendre le SQL](http://sqlzoo.net/wiki/Main_Page))
 
 **Syntaxe**: `=QUERY(RANGE,DATAQUERY)`
 **Exemple**: pour sélectionner la colonne A du feuillet "12-13" : 
`=QUERY("12-13"!A1:K118,"Select A")`

**Exemple**: pour sélectionner les colonne A,B,C du feuillet "12-13" : 
`=QUERY("12-13"!A1:K118,"Select A,B,C")`

**Exemple**: pour sélectionner uniquement les étudiantes féminines de l'année "12-13" : 
`=QUERY('12-13'!A:Z,"Select B,C,D,E where E='F'")`


## En savoir plus
[Liste de toutes les fonctions disponibles](https://support.google.com/drive/table/25273?hl=en)
[QUERY() Documentation](https://support.google.com/drive/answer/3093343?hl=en&ref_topic=3105411)
## source
[Using google Spreadsheet like a database ](http://blog.ouseful.info/2010/01/19/using-google-spreadsheets-like-a-database-the-query-formula/)

