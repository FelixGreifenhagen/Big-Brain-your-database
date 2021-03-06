# Big Brain: your database
von Felix Greifenhagen, 12g

<p align="center"><img src="http://t3n.de/news/wp-content/uploads/2010/07/symbolbild-datenbank.jpg"> </p>

Big Brain ist eine Website, auf der man seinen eigenen Account anlegt, um seine Bilder dort sicher abspeichern zu können.

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
-Überprüfung<br>
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

Sublime Text ist ein Text-Editor zum Progammieren, welcher viele Befehle von Html und Php in seiner Datenbank gespeichert hat, weswegen man ihn für die Grundbefehle benutzen kann. Sublime habe ich für alle Dateien benutzt, darunter die Html Dateien, die Css Stylesheets und die php Dokumente, da das Programm erst einmal einen guten Überblick schafft.

## Xampp
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/bc7d01f991b084ad90e3c3975caabb54-full.png"></p>

Xampp ist ein Programm mit dem man verschiedene lokale Server starten kann, um mit diesen zu arbeiten. Hier wurde das Apache Modul benutzt sowie das Mysql Modul, weil man hier mit einer Datenbank arbeitet. Durch das Apache Modul ist es möglich, Php Dokumente mit dem Browser öffnen zu können. Das ist wichtig um sehen zu können, ob die Änderungen des Dokuments funktionieren. Das Mysql Modul hingegen stellt die Verbindung zur Datenbank her, welche mit Mysql programmiert wird.

## phpMyAdmin
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/b783390e80bee8e20ec6d436c05f73d7-full.png"></p>

PhpMyAdmin ist ein Programm, um Datenbanken zu erstellen, zu bearbeiten und zu erweitern. Bei der Datenbankerstellung ist es sehr vorteilhaft, weil es viele genauere Definitionen der Tabellenspalten anzeigt und somit dem Benutzer hilft, da er die Basics nur auszuwählen hat. Im Projekt wurde es benutzt um in der Datenbank "test" die Tabellen "accounts" und "bilder" zu erstellen.

# Datenbank

## accounts
Die Tabelle "accounts" ist für die Speicherung der Anmeldedaten zuständig. Sie besteht aus sechs Spalten, Id, email, username, password, created_at und updated_at. Jeder Wert muss existieren, weil alle Spalten einen Null-Wert ablehnen.<br> 

<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/921e77cd9e5a4a6fca3d7908f87ee086-full.png"></p>

Die Id ist das Wichtigste in dieser Tabelle, weil sie der Primärschlüssel ist, weswegen sie das Extra auto_increment bekommt. Deshalb muss man diesen Wert beim Einfügen in die Datenbank nicht einfügen, da er sich automatisch um 1 erhöht. Damit verhindert man, dass mehrere Benutzer dieselbe Id haben, was ist wichtig, weil der Primärschlüssel zur Unterscheidung der Benutzer genutzt wird. Die drei Spalten darunter sind relativ simpel, es handelt sich nämlich um varchars, das bedeutet, sie enthalten alle möglichen Zeichen, sind durch die Zahl 225 auf 225 Zeichen begrenzt und sind flexibel, also nicht bindend. Die untersten zwei Spalten werden mit einem Zeitpunkt definiert, welcher der Zeitpunkt des Einfügens ist. Bei der Spalte  updated_at wird dieser später durch den Zeitpunkt der Änderung ersetzt. 

## bilder
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/44b1cc9ed69da8a10b0c1b1fa76087a8-full.png"></p>

Die Tabelle "bilder" ist für die spätere Speicherung der Bilder zuständig und besteht aus vier Spalten, nämlich Id, name, Bild und created_at. Die Id hat in dieser Tabelle wieder dieselbe Funktion und wird daher auch genauso definiert, gleiches gilt für created_at, welches als der Zeitpunkt des Einfügens in die Datenbank definiert ist. Die Spalte name steht für den Namen des Bildes und wird durch ein varchar definiert und ist ebenfalls auf 225 Zeichen begrenzt. Die übrige Spalte Bild ist für die Speicherung des Links zuständig, sie hat den Typ blob, der für Bild-, Audio- und Videodateien verwendet wird.

# Registrierung
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/b1770d7e0f54140532ed66f838c2ff04-full.png"></p>

## Überprüfung 
Die Überprüfung ist der erste Schritt der Registrierung, dabei werden die eingegebenen Daten mit den schon in der Datenbank vorliegenden Werten verglichen. Es muss darauf geachtet werden, das kein Benutzername und keine Email-Addresse schon vergeben ist. Ist das Fall, wird der Benutzer auf der Website darüber informiert, was von beidem schon vergeben ist. Das wird mit den Funktionen prepare, bindParam und execute umgesetzt. Mit prepare wird der Mysql-Befehl Select from im Php-Code eingebaut, mit bindParam werden die zu vergleichenden Werte des Benutzers definiert und mit execute wird der Mysql-Behfehl ausgeführt. Dann werden in einem if die beiden Passwörter miteinander verglichen und wenn beide identisch sind, wird der nächste Schritt ausgeführt. 

## Einfügen
Im zweiten Schritt wird mit prepare, bindParam und execute wieder ein Mysql-Befehl ausgeführt, diesmal ist es der Insert Into Befehl mit dem die Daten in die Datenbank eingefügt werden. Wichtig zu beachten ist, dass alle Werte eingegeben wurden, denn sonst wird die Datenbank nicht mit den Daten gefüllt. Dabei werden alle Werte erwähnt, welche in der Datenbank als Spalten definiert sind und darunter werden alle Werte mit bindParam definiert. Hier sind das die Spalten Email, Benutzername und Passwort, die anderen drei Spalten werden nicht benötigt, weil sie sich selber Werte zuordnen, das sind Id, created_at und updated_at. Als Letztes wird man durch einen echo Befehl über die erfolgreiche Registrierung informiert.

# Login
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/e0e5b0df4cbd4248985ceeb64ddf6c22-full.png"></p>

## Überprüfung
Bei der Überprüfung, dem ersten Schritt des Login, wird mit den Funktionen der vorherigen Überprüfung gearbeitet (prepare, bindParam und execute). Nur dieses Mal setzten wir den row count auf eins, weil wir herausfinden möchten, ob der Account existiert. Wir wollen sicherstellen, dass er existiert. Damit wird der Benutzername überprüft, wenn er existiert, wird in derselben Zeile nach dem eingegebenen Passwort gesucht, das wird mit der Funktion fetch umgesetzt, die unseren Mysql-Befehl in einen Zugriff umsetzt. Mit diesem wird das Passwort mit dem in der Datenbank verglichen, dazu nutzt man die Funktion password_verify.

## Weiterleitung
Wenn die Passwörter identisch sind, wird die Weiterleitung ausgeführt, welche den Benutzer auf die Accountseite leitet. Dafür beginnt man einen Prozess mit der Funktion session_start, definiert die Session Variabel als den Benutzernamen der Tabellenzeile und leitet den Benutzer mit der header Funktion auf die Accountseite. Daraufhin wird im Code der Accountseite wieder ein Prozess mit session_start begonnen, dort wird man sofort zum Login zurückgeleitet, wenn die Benutzernamen nicht übereinstimmen, die Passwörter aber schon. Das wird mit der Variabel Session umgesetzt, indem man mit if und einem ! arbeitet, das ! besagt, dass diese Bedingung nicht erfüllt ist.

# Accountseite
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/665ca49ea6a8ad921121bc309ca249c6-full.png"></p>

## Log out
Der Log out ist dafür zuständig, die Benutzer aus dem Account auszuloggen und wieder auf die Loginseite zu leiten. Das wird mit drei Funktionen realisiert, zuerst session_start, mit welcher ein Prozess zum laufen gebracht wird. Daraufhin wird dieser durch session_destroy wieder beendet, somit würde eine weiße Seite angezeigt werden. Da wir das aber nicht wollen, benutzen wir die Funktion header, mit der der Benutzer auf die Loginseite weitergeleitet wird.

# Kontaktformular
<p><img src="https://cdn1.imggmi.com/uploads/2020/4/8/7b348ca52ada16446a577518658485f6-full.png"></p>

## Versenden
Beim Versenden der Mail ist es wichtig, alle eingegebenen Werte im php zu definieren und sie dann in einer Funktion namens mail zu einer Email zusammenzubauen, man benutzt dafür Variabeln. Zuerst sind die Variabeln definiert worden, von den auf der Website eingegebenen Daten, wie den Namen, die Email-Addresse, das Herkunftsland, das Thema und die Nachricht an sich. In der mail Funktion sind die vier Variabeln "$mailTo", "$subject", "$txt" und "$headers" eingetragen. "$mailTo" ist als die Email-Addresse des Seiteninhabers definiert, bei "$subject"  als das Thema, in "$txt" ist der Name sowie auch die Nachricht definiert und bei "$headers" ist die Email-Addresse des Benutzers definiert. Wichtig ist im Html Dokument das "action" Attribut mit dem Namen des externen Php Dokuments zu versehen.

# Fazit
Während der Bearbeitungszeit hat sich meine Website um einiges weiterentwickelt, von ein paar Seiten Html und Css Code zu einer lebendigen Seite, die mit einer Datenbank interagiert, das realisiert durch Php und Mysql. Jedoch ein Ziel dieses Projektes konnte ich in der Zeit noch nicht umsetzen und das liegt in der Accountseite, dort habe ich zwei Tools als Link vorbereitet, welche ich jedoch aufgrund des kleinen Zeitmangels nicht mehr Programmieren konnte. Trotzdessen bin ich froh  darüber dieses Mal die Qualität meines Projektes, vor allem in der Dokumention um einiges verbessert zu haben. 
 

# Quellen(zum Verständnis)

### <p><a href="https://www.youtube.com/playlist?list=PL_pqkvxZ6ho1dn7jRkTfoYBXhw5c9jll0">-Datenbanken und SQL (Programmieren und starten)</a></p>

### <p><a href="https://www.youtube.com/watch?v=4q0gYjAVonI&t=150s">-58: How to Create A PHP Contact Form | PHP Tutorial | Learn PHP Programming | HTML Contact Form (mmtuts)</a></p>

### <p><a href="https://www.youtube.com/watch?v=VKiGDzsCnnE&t=11s">-PHP Login System programmieren (mit Datenbank),(Tutorialwork)</a></p>
