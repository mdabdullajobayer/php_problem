<?php
$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
echo $f->format(5000);
