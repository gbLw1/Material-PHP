<?php

/*

Implementação do Leaf (Composite Pattern)

Leaf -> elemento básico de uma árvore que não tem sub-elementos.

A clase abaixo será utilizada como um componente
que através do método display() irá exibir o texto
criando um título para página com a tag html <h1>

*/

class TitleComponent implements Component
{
    private string $text = "";

    public function display()
    {
        echo "<h1>" . $this->text . "</h1>";
    }

    public function addText(string $text)
    {
        $this->text = $text;
    }
}