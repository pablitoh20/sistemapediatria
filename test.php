<?php
$tag='<p><strong>Aproximadamente, &iquest;cu&aacute;ntos huesos tiene el cuerpo humano?</strong></p>
<ol style="list-style-type: lower-alpha;">
<li>40</li>
<li>390</li>
<li>208</li>
</ol>
';


echo preg_replace("/\r\n|\r|\n/",'',$tag);
echo preg_replace("/<strong>/",'',$tag);
echo preg_replace("/<p>/",'',$tag);
