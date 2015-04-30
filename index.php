<!DOCTYPE html>
<html>
<body>

<h1>My first SVG</h1>

<svg width="600" height="300">
<?php


class Node {
   private $name;

   function __construct($name) {
      $this->$name = $name;
   }

   public function __toString() {
      return "<rect x=\"50\" y=\"20\" rx=\"20\" ry=\"20\" width=\"150\" height=\"150\" style=\"fill:green;fille-opacity:0.1;stroke:black;stroke-width:5;stroke-opacity:0.9\"/>";
   }
}




$node = new Node("Test");
echo $node;

?>
</svg>

</body>
</html>

