# IsaacBordas-mpweb2017_18-de-GildedRose
Entregable 1

# ¿Qué hace el código a simple vista?
Se encarga de comprobar y ajustar la calidad de los productos de una tienda según una casuística dada.

# ¿Te parce un mal código?
A primera vista llama la atención la gran cantidad de condicionales 'if' en el código, lo que lo convierte en un código poco legible.

# Justifica por qué
Las siguientes líneas se hacen difíciles de leer y comprender:
```
    if ($item->name != 'Aged Brie' and $item->name != 'Backstage passes to a TAFKAL80ETC concert') {
        if ($item->quality > 0) {
            if ($item->name != 'Sulfuras, Hand of Ragnaros') {
                $item->quality = $item->quality - 1;
            }
        }
    } else {
    ....
```

# ¿Qué harías para mejorarlo?
Aplicaría el refactoring 'Replace Nested Conditional with Guard Clauses' para eliminar la identación excesiva y mejorar así la legibilidad.
Una vez comprobado el correcto funcionamiento se podría utilizar la técnica 'Consolidate Conditional Expression' para agrupar condicionales.
