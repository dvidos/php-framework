<?php
	$title = 'Δομή καταλόγων';
	$description = <<<'EOT'
		Η δομή καταλόγων είναι ως εξής
EOT;

	$properties_table = array(
		'httpdocs'=>'Ριζικός κατάλογος, έχει μόνο το index.php',
		'. . assets'=>'Περιφεριακά αρχεία',
		'. . . . images'=>'Εικόνες',
		'. . . . css'=>'Αρχεία στυλ',
		'. . . . js'=>'Javascript',
		'. . . . xxx'=>'Λοιπά...',
		'. . cms'=>'Περιέχει το framework και το loader.php',
		'. . . . config'=>'Περιέχει το config.php',
		'. . . . data'=>'Πιθανά αρχεία βάσης δεδομένων sqlite',
		'. . . . docs'=>'Τεκμηρίωση (την διαβάζετε)',
		'. . . . lib'=>'Αρχεία βιβλιοθήκης για φόρτωμα (app.php, pages.php, κλπ)',
		'. . . . logs'=>'Περιέχει τα log της εφαρμογής, γράφουμε με την log_error(), log_info() κλπ',
		'. . . . pages'=>'Περιέχει αρχεία σελίδων για το load_page(). Μπορεί να έχει ελεύθερους υποκαταλόγους και υποκαταλόγους γλώσσας',
		'. . . . templates'=>'Περιέχει αρχεία προτύπων για το load_template(). Μπορεί να έχει ελεύθερους υποκαταλόγους και υποκαταλόγους γλώσσας',
	);