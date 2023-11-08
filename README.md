# php-oop-1
===

<!-- prima esercitazione -->
Ripassarre i primi concetti di classe, variabili e metodi d’istanza e creare un file `index.php` in cui:
 - è definita una **classe ‘Movie’**
   => all’interno della classe sono dichiarate delle **variabili d’istanza**
   => all’interno della classe è definito **un costruttore**
   => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà
**Bonus 1:**
Modificare la classe Movie in modo che accetti piú di un genere.
**Bonus 2:**
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

<!-- seconda esercitazione -->
Realizzare una classe Production che sia estesa dalla classe Movie e dalla classe TvSerie.
Attenzione #1
gli attributi comuni sia a Movie che a TvSerie dovrebbero trovarsi in Production così da essere ereditati correttamente! Qualcosa andrebbe spostato?
Attenzione #2
occhio ai costruttori! spostando un attributo nella classe genitore, dobbiamo passarlo al costruttore del genitore con parent::__construct(...);
Aggiungiamo anche degli attributi unici per le nuove classi. Per esempio:
per la classe Movie:
$published_year anno di pubblicazione
$running_timedurata in minuti
per la classe TvSerie:
$aired_from_year anno di messa in onda del primo episodio
$aired_to_year anno di messa in onda dell’ultimo episodio
$number_of_episodes numero di episodi
$number_of_seasons numero di stagioni
Bonus
Creare un array misto di oggetti Movie e TvSerie. Stamparli a schermo in delle cards.
NB: per gestire correttamente le stampe va gestito correttamente il polimorfismo delle classi, ossia la capacità di fare override dei metodi del genitore piuttosto che ereditarli.

<!-- terza esercitazione -->