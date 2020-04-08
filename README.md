# Big Brain: your database
von Felix Greifenhagen, 12g

<p align="center"><img src="http://t3n.de/news/wp-content/uploads/2010/07/symbolbild-datenbank.jpg"> </p>

Big Brain ist eine Website, auf der man seinen eigenen Account anlegt um seine Bilder dort sicher abspeichern zu können.

## Inhaltsverzeichnis

### Programme
-Sublime Text<br>
-Xampp<br>
-phpMyAdmin<br>

### Datenbankmanagementsystem

### Datenbank
-accounts<br>
-bilder<br>

### Registrierung
-Überprüfung<br>
-Einfügen<br>

### Login
-Überrüfung<br>
-Weiterleitung<br>

### Account
-Log out<br>

### Kontaktformular
-Versenden<br>

### Fazit

### Quellen

# Programme

## Sublime Text 
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/a4ba9277e9f2c70202a92c638de20d98-full.png"></p>

Sublime Text ist ein Text-Editor zum Progammieren, welcher viele Befehle von Html und Php in seiner Datenbank gespeichert hat. Deswegen kann man für die Grundbefehle Auto-Fill benutzen. Sublime habe ich für alle Dateien benutzt da es erst einmal einen guten Überblick schafft, darunter die Html Dateien, die Css Stylesheets und die php Dokumente.

## Xampp
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/bc7d01f991b084ad90e3c3975caabb54-full.png"></p>

Xampp ist ein Programm mit dem man verschiedener lokale Server starten, um mit diesen zu arbeiten. Hier wurde das Apache Modul benutzt sowie das Mysql Modul, weil man hier mit einer Datenbank arbeitet. Durch das Apache modul ist es möglich Php Dokumente mit dem Browser öffnen zu können. Das wichtig um sehen zu können ob die Änderungen des Dokuments funktionieren. Das Mysql Modul hingegen stellt die Verbindung zur Datenbank her, welche mit Mysql programmiert wird.

## phpMyAdmin
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/b783390e80bee8e20ec6d436c05f73d7-full.png"></p>

PhpMyAdmin ist Programm, um Datenbanken zu erstellen, zu bearbeiten und zu erweitern. Bei der Datenbankerstellung ist es sehr vorteilhaft, weil es viele genauere definitionen der Tabellenspalten anzeigt und somit dem Benutzer hilft, da er die Basics nur auszuwählen hat. Im Projekt wurde es benutzt um in der Datenbank Test die Tabellen "accounts" und "bilder" zu erstellen.

# Datenbank

## accounts
Die  "accounts" ist für die Speicherung der Anmeldedaten zuständig. Sie besteht aus sechs Spalten, Id, email, username, password, created_at und updated_at. Jeder Wert muss existieren, weil alle Spalten einen Null-Wert ablehnen.<br> 

<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/921e77cd9e5a4a6fca3d7908f87ee086-full.png"></p>

Die Id ist das wichtigste in dieser Tabelle, weil sie der Primärschlüssel ist weswegen sie das Extra auto_increment bekommt wodurch man diesen Wert beim Einfügen in die Datenbank nicht einfügen muss, da er sich automatisch um 1 erhöht. Damit verhindert man, dass mehrere Benutzer die selbe Id haben, das ist wichtig weil der Primärschlüssel zur Unterscheidung der Benutzer genutzt wird. Die drei Spalten darunter sind relativ, es nämlich varchar, das bedeutet sie enthalten alle möglichen Zeichen, sind durch die 225 auf 225Zeichen begrenzt und sind flexibel, also nicht bindend. Die untersten zwei Spalten sind als Zeitpunkt definiert, welcher den Zeitpunkt des Einfügens festhält, bei updated_at wird der später den Zeitpunkt der Änderung ersetzt. 

## bilder
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/44b1cc9ed69da8a10b0c1b1fa76087a8-full.png"></p>

Die Tabelle "bilder" ist für die spätere Speicherung der Bilder zuständig und besteht aus vier Spalten, nämlich Id, name Bild und created_at. Die Id hat in dieser Tabelle wieder die selbe Funktion und wird daher auch genauso definiert, gleiches gilt für created_at, welches als der Zeitpunkt des Einfügens in die Datenbank definiert ist. Die Spalte name steht für den Namen des Bildes und wird durch ein varchar definiert und ist ebenfalls auf 225Zeichen begrenzt. Die übrige Spalte Bild ist für die Speicherung des Links zuständig, sie hat den Typ blob, der für Bild-, Audio- und Videodateien verwendet wird.

# Registrierung
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/b1770d7e0f54140532ed66f838c2ff04-full.png"></p>

## Überprüfung 
Die Überprüfung ist der erste Schritt der Registrierung, dabei werden die eingegebenen Daten mit den schon in der Datenbank vorliegenden Werten verglichen. Dabei muss darauf geachtet werden, das kein Benutzername und keine Email-Addresse schon vergeben ist das Fall wird der Benutzer auf der Website darüber informiert was schon vergeben ist. Das wird mit den Funktionen prepare, bindParam und execute umgesetzt. Mit prepare wird der Mysql-Befehl Select from im Php-Code eingebaut, mit bindParam werden die zu vergleichenden Werte des Benutzers definiert und mit execute wird der Mysql-Behfehl ausgeführt. Dann werden in einem if die beiden Passwörter miteinander verglichen und wenn beide identisch sind wird der nächste Schritt ausgeführt. 

## Einfügen
Im zweiten Schritt wird mit prepare, bindParam und execute wieder ein Mysql-Befehl ausgeführt, diesmal ist es der Insert Into Befehl mit dem die Daten in die Datenbank eingefügt werden. Wichtig zu beachten ist, dass alle Werte eingegeben wurden, denn sonst wird die Datenbank nicht mit den Daten gefüllt. Dabei werden alle Werte erwähnt, welche in Datenbank als Spalten definiert sind und darunter werden alle Werte mit bindParam definiert. Hier sind das die Email der Benutzername und das Passwort, die anderen drei werden nicht benötigt, weil sie sich selber Werte zu ordnen, das sind Id, created_at und updated_at. Als Letztes wird man durch einen echo über die erfolgreiche Registrierung informiert.

# Login
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/e0e5b0df4cbd4248985ceeb64ddf6c22-full.png"></p>
## Überprüfung



## Weiterleitung

# Accountseite
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/665ca49ea6a8ad921121bc309ca249c6-full.png"></p>
## Logout

# Kontaktformular
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/7b348ca52ada16446a577518658485f6-full.png"></p>
## Versenden

Beim Versenden der Mail, ist es wichtig alle eingegebenen Werte im php zu definieren und sie dann in einer Funktion namens mail zu einer Email zusammen zubauen, man benutzt dafür Variabeln. H

# Fazit

# Quellen(zum Verständnis)

## <p><a href="https://www.youtube.com/playlist?list=PL_pqkvxZ6ho1dn7jRkTfoYBXhw5c9jll0">-Datenbanken und SQL (Programmieren und starten)</a></p>

## <p><a href="https://www.youtube.com/watch?v=4q0gYjAVonI&t=150s">-58: How to Create A PHP Contact Form | PHP Tutorial | Learn PHP Programming | HTML Contact Form (mmtuts)</a></p>

## <p><a href="https://www.youtube.com/watch?v=VKiGDzsCnnE&t=11s">-PHP Login System programmieren (mit Datenbank),(Tutorialwork)</a></p>
