<?php

$title = 'Εισαγωγή';
$description_html = <<<'EOT'

<h3>Με μια ματιά</h3>

<p>Το DV CMS είναι ένα απλό file-based framework για να φτιάχνεις sites.

Υποστηρίζει logging, routing, templating, στατικές σελίδες, βάση δεδομένων.


<h3>Ιστορική εξέλιξη</h3>

<p>Ξεκίνησα με το πολύ απλό site τριών σελίδων, αρχική, υπηρεσίες, επικοινωνία, με include τα header & footer.

Ας πούμε στο x-color.gr. Ολα ήταν καλά στις αρχικές 5 σελίδες. Οταν φτάσαμε στις 22 σελίδες και θέλαμε να βάλουμε κι άλλη γλώσσα, άστα να πάνε.

<p>Οπότε αποφάσισα να περάσω στο άλλο σχήμα, ένα κεντρικό index.php με παράμετρο την σελίδα, p=xxx, που στο μέλλον θα μπορεί να γίνει και controller/action.

Αρχικά ήταν οι στατικές σελίδες που τώρα φορτώνονται με load_page(). Αργότερα πρόσθεσα και βάση δεδομένων sqlite, ώστε όλο το site να μπορεί να μεταφέρεται με copy/paste αρχείων.

Στο τέλος προσέθεσα και τον router που αποτελεί ένα είδος συλλογή controllers/



<h2>Δυνατότητες</h2>
<ul>
	<li>Δεν είναι CMS, είναι Framework!
	<li>Ενσωμάτωση δεδομένων php σε templates, πολλών επιπέδων
	<li>Αυτόματη επίλυση γλώσσας σε pages, templates, urls.
	<li>Ανάκτηση και εμφάνιση δεδομένων από βάση sqlite.
	<li>Δήλωση και εκτέλεση απλών controllers ως routes
	<li>Τήρηση log σε επίπεδα: none, error, warning, info, debug, verbose.
	<li>Απόκρυψη ή εμφάνιση μηνυμάτων σφαλμάτων php με μία ρύθμιση
	<li>Φόρμα επικοινωνίας και αποστολή email μέσω κώδικα.
</ul>
<h2>Προς υλοποίηση</h2>
<ul>
	<li>Ασφαλές session (με διάφορους ελέγχους)
	<li>Scaffolding βάσης δεδομένων
	<li>Δημιουργία φορμών (για συλλογή δεδομένων ή αποστολή email)
</ul>


EOT;

