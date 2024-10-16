<?php
$note = <<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml = new SimpleXMLElement($note);
// añade un atributo a la etiqueta note
$xml->addAttribute("type", "private");
// añade un atributo a la etiqueta body
$xml->body->addAttribute("date", "2014-01-01");

echo $xml->asXML();
