<?php
	$title = 'Request παράμετροι';
	$description = <<<'EOT'
		Παράμετροι που μπορεί να βρεθούν στο url μας.
EOT;

	$properties = array(
		'p'=>'Το path της σελίδας που θέλουμε να φορτώσουμε. Αν λείπει, θεωρούμε το index.php',
		'locale'=>'Το locale της γλώσσας που θα εμφανιστεί. Γενικά οι σελίδες με locale βρίσκονται σε υποκαταλόγους με όνομα το ίδιο το locale',
		'page'=>'Πιθανά αριθμός σελίδας από το pagination.',
	);