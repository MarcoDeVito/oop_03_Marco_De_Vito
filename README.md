# Traccia 1
Crea un file chiamato **class.php** e crea una **classe astratta** di tipo **Category** , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
Category
```
-- Attualita' 
-- Sport
-- Gossip
-- Storia
```


Tutte le classi dovranno avere un **metodo astratto** chiamato: **getMyCategory()** che mostri a schermo il valore relativo (il nome della categoria).

# Traccia 2
- Crea un nuovo file chiamato **index.php** e, importando la classe appena creata, crea una **classe Post** con i seguenti **attributi**:
- **Titolo** 
- **Categoria** 
- **Tag**


- Crea delle **istanze** di classe Post, **iniettando la dipendenza Category** all’interno dell’attributo dedicato. Crea anche dei **metodi** per visualizzare gli articoli completi.


# Traccia 3
- Crea i tuoi Avengers seguendo il modello visto a lezione, con i seguenti punti:
- metti ogni **classe** (abstract o no) in un file diverso, utilizzando nel file principale il costrutto **require()**
- crea un esercito random di supereroi
- aggiungi un contatore di quanti supereroi hai creato


# Traccia 4
Crea un **trait** chiamato **“Calculator“** definendo le seguenti operazioni tra numeri:
```
public function sum($a, $b) { 
   return $a + $b;
}

public function sub($a, $b) { 
   return $a - $b;
}

public function mul($a, $b) {
   return $a * $b;
}

public function div($a, $b) {
   return $a / $b;
}

public function sqr($a){
   return sqrt($numero);
}
```


- Crea quindi una classe **Rettangolo** con i seguenti attributi: 
- **Base (b);**
- **Altezza (h);**
- Il tuo compito sarà quello di creare 3 **metodi** che andranno a calcolare:
- **Area** → b * h
- **Perimetro** → 2 * b + 2 * h
- **Diagonale** → √ hˆ2 + bˆ2 (Tutto sotto radice)
- Tutte queste operazioni pero' dovranno essere **richiamate dal trait** Calculator
