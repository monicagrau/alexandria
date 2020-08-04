<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'mnet', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'Σχετικά με τον εξυπηρετητή σας';
$string['accesslevel'] = 'Επίπεδο πρόσβασης';
$string['addhost'] = 'Προσθήκη κεντρικού υπολογιστή';
$string['addnewhost'] = 'Προσθήκη νέου κεντρικού υπολογιστή';
$string['addtoacl'] = 'Προσθήκη στον έλεγχο πρόσβασης';
$string['allhosts'] = 'Όλοι οι κεντρικοί Η/Υ';
$string['allhosts_no_options'] = 'Δεν υπάρχουν διαθέσιμες επιλογές κατά την προβολή πολλών κεντρικών Η/Υ';
$string['allow'] = 'Επιτρέπεται';
$string['applicationtype'] = 'Τύπος αίτησης';
$string['authfail_nosessionexists'] = 'Αποτυχία εξουσιοδότησης: η συνεδρία mnet δεν υπάρχει.';
$string['authfail_sessiontimedout'] = 'Αποτυχία εξουσιοδότησης: η συνεδρία mnet έληξε.';
$string['authfail_usermismatch'] = 'Αποτυχία εξουσιοδότησης: ο χρήστης δεν ταιριάζει.';
$string['authmnetdisabled'] = 'Το πρόσθετο αυθεντικοποίησης MNet είναι <em>απενεργοποιημένο</em>.';
$string['badcert'] = 'Αυτό δεν είναι ένα έγκυρο πιστοποιητικό.';
$string['certdetails'] = 'Λεπτομέρειες πιστοποιητικού';
$string['configmnet'] = 'Η Δικτύωση Moodle επιτρέπει την επικοινωνία αυτού του εξυπηρετητή με άλλους εξυπηρετητές ή υπηρεσίες.';
$string['couldnotgetcert'] = 'Δεν βρέθηκε πιστοποιητικό στο <br />{$a}. <br />Ο κεντρικός υπολογιστής μπορεί να είναι εκτός λειτουργίας ή λανθασμένα ρυθμισμένος.';
$string['couldnotmatchcert'] = 'Αυτό δεν ταιριάζει με το πιστοποιητικό που έχει δημοσιευθεί αυτή τη στιγμή από τον εξυπηρετητή ιστού.';
$string['courses'] = 'μαθήματα';
$string['courseson'] = 'μαθήματα σε';
$string['currentkey'] = 'Τρέχον δημόσιο κλειδί';
$string['current_transport'] = 'Τρέχουσα μεταφορά';
$string['databaseerror'] = 'Δεν ήταν δυνατή η εγγραφή λεπτομερειών στη βάση δεδομένων.';
$string['deleteaserver'] = 'Διαγραφή ενός εξυπηρετητή...';
$string['deletedhostinfo'] = 'Αυτός ο κεντρικός υπολογιστής έχει διαγραφεί. Αν θέλετε να ακυρώσετε την διαγραφή, αλλάξτε την κατάσταση διαγραφής πίσω σε «Όχι».';
$string['deletedhosts'] = 'Διαγραμμένοι κεντρικοί υπολογιστές: {$a}';
$string['deletehost'] = 'Διαγραφή κεντρικού υπολογιστή';
$string['deletekeycheck'] = 'Είστε απόλυτα σίγουρος ότι θέλετε να διαγράψετε αυτό το κλειδί;';
$string['deleteoutoftime'] = 'Το χρονικό παράθυρο 60 δευτερολέπτων που είχατε για να διαγράψετε αυτό το κλειδί έληξε. Παρακαλούμε ξεκινήστε ξανά.';
$string['deleteuserrecord'] = 'SSO ACL: διαγραφή εγγραφής για τον χρήστη «{$a->user}» από τον Η/Υ {$a->host}.';
$string['deletewrongkeyvalue'] = 'Παρουσιάστηκε κάποιο σφάλμα. Εάν δεν προσπαθείτε να διαγράψετε το κλειδί SSL του εξυπηρετητή σας, είναι πιθανό ότι έχετε πέσει θύμα μιας κακόβουλης επίθεσης. Δεν πραγματοποιήθηκε καμία ενέργεια.';
$string['deny'] = 'Άρνηση';
$string['description'] = 'Περιγραφή';
$string['duplicate_usernames'] = 'Αποτυχία δημιουργίας ευρετηρίου στις στήλες «mnethostid» (αναγνωριστικό κεντρικού Η/Υ του Moodle.net) και «username» (όνομα χρήστη) στον πίνακα χρηστών σας.<br />Αυτό μπορεί να συμβεί όταν έχετε <a href="{$a}" target="_blank">διπλότυπα ονόματα χρήστη στον πίνακα χρηστών σας</a>.<br />Η αναβάθμιση σας θα πρέπει παρόλα αυτά να ολοκληρωθεί με επιτυχία. Κάντε κλικ στον παραπάνω σύνδεσμο, και θα εμφανιστούν σε νέο παράθυρο οδηγίες σχετικά με την διόρθωση αυτού του προβλήματος. Μπορείτε να το φροντίσετε στο τέλος της διαδικασίας αναβάθμισης.<br />';
$string['enabled_for_all'] = '(Αυτή η υπηρεσία έχει ενεργοποιηθεί για όλους τους κεντρικούς υπολογιστές).';
$string['enterausername'] = 'Παρακαλούμε εισάγετε ένα όνομα χρήστη, ή μια λίστα από ονόματα χρηστών χωρισμένα με κόμμα.';
$string['error7020'] = 'Αυτό το σφάλμα συμβαίνει συνήθως εάν ο απομακρυσμένος ιστότοπος έχει δημιουργήσει μια εγγραφή για εσάς με λάθος wwwroot, για παράδειγμα, https://yoursite.com αντί για https://www.yoursite.com. Παρακαλούμε, να επικοινωνήσετε με τον διαχειριστή του απομακρυσμένου ιστοτόπου, να του δώσετε το σωστό wwwroot (όπως ορίζεται στο αρχείο config.php) και να ζητήσετε να ενημερωθεί η εγγραφή για τον κεντρικό υπολογιστή σας.';
$string['error7022'] = 'Το μήνυμα που στείλατε στον απομακρυσμένο ιστότοπο κρυπτογραφήθηκε σωστά αλλά δεν υπογράφτηκε. Αυτό είναι τελείως αναπάντεχο· θα πρέπει πιθανώς να υποβάλλετε μια αναφορά σφάλματος εάν συμβεί αυτό (παρέχοντας όσο γίνεται περισσότερες πληροφορίες σχετικά με τις εκδόσεις των εφαρμογών που εμπλέκονται, κλπ).';
$string['error7023'] = 'Ο απομακρυσμένος ιστότοπος προσπάθησε να αποκρυπτογραφήσει το μήνυμά σας με όλα τα κλειδιά που έχει στην εγγραφή για τον ιστότοπό σας. Όλα απέτυχαν. Πιθανώς να μπορείτε να διορθώσετε αυτό το πρόβλημα ανταλλάσσοντας χειροκίνητα κλειδιά με τον απομακρυσμένο ιστότοπο. Αυτό είναι δύσκολο να συμβεί εκτός και αν δεν είχατε επικοινωνία με τον απομακρυσμένο ιστότοπο για κάποιους μήνες.';
$string['error7024'] = 'Στείλατε ένα μη κρυπτογραφημένο μήνυμα στον απομακρυσμένο ιστότοπο, αλλά ο απομακρυσμένος ιστότοπος δεν δέχεται μη κρυπτογραφημένη επικοινωνία από τον ιστότοπό σας. Αυτό είναι πολύ αναπάντεχο· θα πρέπει πιθανώς να υποβάλλετε μια αναφορά σφάλματος εάν αυτό συμβεί (παρέχοντας όσο γίνεται περισσότερες πληροφορίες σχετικά με την έκδοση του Moodle, κλπ).';
$string['error7026'] = 'Το κλειδί με το οποίο υπογράφτηκε το μήνυμα σας διαφέρει από το κλειδί το οποίο έχει ο απομακρυσμένος κεντρικός υπολογιστής έχει σε αρχείο για τον εξυπηρετητή σας. Επιπλέον, ο απομακρυσμένος κεντρικός υπολογιστής προσπάθησε να φέρει το τρέχον κλειδί σας και απέτυχε. Παρακαλούμε ανταλλάξτε χειροκίνητα κλειδιά με τον απομακρυσμένο κεντρικό υπολογιστή και δοκιμάστε ξανά.';
$string['error709'] = 'Ο απομακρυσμένος ιστότοπος απέτυχε να λάβει ένα κλειδί SSL από εσάς.';
$string['eventaccesscontrolcreated'] = 'Ο έλεγχος πρόσβασης δημιουργήθηκε';
$string['eventaccesscontrolupdated'] = 'Ο έλεγχος πρόσβασης ενημερώθηκε';
$string['expired'] = 'Αυτό το κλειδί έληξε στις';
$string['expires'] = 'Έγκυρο μέχρι';
$string['expireyourkey'] = 'Διαγραφή αυτού του κλειδιού';
$string['expireyourkeyexplain'] = 'Το Moodle αυτόματα ανανεώνει εκ περιτροπής τα κλειδιά σας κάθε 28 ημέρες (εξ\' ορισμού) αλλά έχετε την επιλογή να λήξετε αυτό κλειδί <em>χειροκίνητα</em> οποιαδήποτε στιγμή. Αυτό θα είναι χρήσιμο μόνο εάν πιστεύετε ότι αυτό το κλειδί έχει παραβιαστεί. Ένα κλειδί αντικατάστασης θα δημιουργηθεί αυτόματα.<br />Διαγράφοντας αυτό το κλειδί θα είναι αδύνατο να επικοινωνήσουν με εσάς άλλες εφαρμογές (Moodle), μέχρι να επικοινωνήσετε μόνοι σας με κάθε διαχειριστή παρέχοντάς του το νέο σας κλειδί.';
$string['exportfields'] = 'Πεδία προς εξαγωγή';
$string['failedaclwrite'] = 'Αποτυχία εγγραφής στην λίστα ελέγχου πρόσβασης MNet για τον χρήστη «{$a}».';
$string['findlogin'] = 'Βρείτε στοιχεία σύνδεσης';
$string['forbidden-function'] = 'Η συνάρτηση εκείνη δεν έχει ενεργοποιηθεί για το RPC.';
$string['forbidden-transport'] = 'Η μέθοδος μεταφοράς που προσπαθείτε να χρησιμοποιήσετε δεν επιτρέπεται.';
$string['forcesavechanges'] = 'Υποχρεωτική αποθήκευση αλλαγών';
$string['helpnetworksettings'] = 'Ρύθμιση της επικοινωνίας εσωτερικά στο MNet';
$string['hidelocal'] = 'Απόκρυψη τοπικών χρηστών';
$string['hideremote'] = 'Απόκρυψη απομακρυσμένων χρηστών';
$string['host'] = 'κεντρικός Η/Υ';
$string['hostcoursenotfound'] = 'Αδυναμία εύρεσης κεντρικού Η/Υ ή μαθήματος';
$string['hostdeleted'] = 'Ο κεντρικός Η/Υ διαγράφηκε';
$string['hostexists'] = 'Υπάρχει ήδη μια εγγραφή για έναν Η/Υ (host) με αυτό το όνομα Η/Υ (hostname) (ίσως διαγράφηκε). <a href="{$a}">Κάντε κλικ εδώ</a> για να επεξεργαστείτε αυτή την εγγραφή.';
$string['hostlist'] = 'Λίστα δικτυακών Η/Υ';
$string['hostname'] = 'Όνομα Η/Υ (hostname)';
$string['hostnamehelp'] = 'Το πλήρως-εγκεκριμένο όνομα τομέα του απομακρυσμένου κεντρικού υπολογιστή, π.χ. www.example.com';
$string['hostnotconfiguredforsso'] = 'Αυτός ο εξυπηρετητής δεν είναι ρυθμισμένος για απομακρυσμένη σύνδεση.';
$string['hostsettings'] = 'Ρυθμίσεις κεντρικού Η/Υ';
$string['http_self_signed_help'] = 'Να επιτρέπονται συνδέσεις με χρήση ενός αυτο-υπογεγραμμένου πιστοποιητικού DIY SSL στον απομακρυσμένο κεντρικό Η/Υ.';
$string['https_self_signed_help'] = 'Επέτρεψε τις συνδέσεις με χρήση ενός αυτο-υπογεγραμμένου πιστοποιητικού DIY SSL σε PHP στον απομακρυσμένο κεντρικό υπολογιστή πάνω από http.';
$string['https_verified_help'] = 'Να επιτρέπονται συνδέσεις με χρήση ενός επαληθευμένου πιστοποιητικού SSL στον απομακρυσμένο κεντρικό Η/Υ.';
$string['http_verified_help'] = 'Να επιτρέπονται συνδέσεις με χρήση ενός επαληθευμένου πιστοποιητικού SSL σε PHP στον απομακρυσμένο κεντρικό Η/Υ, αλλά με χρήση http (όχι https).';
$string['id'] = 'Αναγνωριστικό';
$string['idhelp'] = 'Αυτή η τιμή έχει ανατεθεί αυτόματα και δεν μπορεί να αλλάξει';
$string['importfields'] = 'Πεδία για εισαγωγή';
$string['inspect'] = 'Επιθεώρηση';
$string['installnosuchfunction'] = 'Σφάλμα κωδικοποίησης! Κάτι προσπαθεί να εγκαταστήσει μια συνάρτηση mnet xmlrpc ({$a->method}) από ένα αρχείο ({$a->file}) και δεν μπορεί να βρεθεί!';
$string['installnosuchmethod'] = 'Σφάλμα κωδικοποίησης! Κάτι προσπαθεί να εγκαταστήσει μια συνάρτηση mnet xmlrpc ({$a->method}) σε μια κλάση ({$a->class}) και δεν μπορεί να βρεθεί!';
$string['installreflectionclasserror'] = 'Σφάλμα κωδικοποίησης! Η ενδοσκόπηση MNet απέτυχε για τη μέθοδο «{$a->method}» στην κλάση «{$a->class}». Το αρχικό μήνυμα σφάλματος, σε περίπτωση που βοηθάει, είναι: «{$a->error}»';
$string['installreflectionfunctionerror'] = 'Σφάλμα κωδικοποίησης! Η ενδοσκόπηση MNet απέτυχε για τη συνάρτηση «{$a->method}» στο αρχείο «{$a->file}». Το αρχικό μήνυμα σφάλματος, σε περίπτωση που βοηθάει, είναι: «{$a->error}»';
$string['invalidaccessparam'] = 'Μη έγκυρες παράμετροι πρόσβασης.';
$string['invalidactionparam'] = 'Μη έγκυρη παράμετρος ενέργειας.';
$string['invalidhost'] = 'Πρέπει να παρέχετε ένα έγκυρο αναγνωριστικό κεντρικού Η/Υ';
$string['invalidpubkey'] = 'Το κλειδί δεν είναι ένα έγκυρο κλειδί SSL. ({$a})';
$string['invalidurl'] = 'Μη έγκυρες παράμετροι URL.';
$string['ipaddress'] = 'Διεύθυνση IP';
$string['is_in_range'] = 'Η διεύθυνση IP <code>{$a}</code> αναπαριστά έναν έγκυρο έμπιστο κεντρικό υπολογιστή.';
$string['ispublished'] = 'Ο/Η {$a} έχει ενεργοποιήσει αυτή την υπηρεσία για εσάς.';
$string['issubscribed'] = 'Ο/Η {$a} εγγράφεται σε αυτή την υπηρεσία στον κεντρικό Η/Υ σας.';
$string['keydeleted'] = 'Το κλειδί σας έχει διαγραφεί και αντικατασταθεί με επιτυχία.';
$string['keymismatch'] = 'Το δημόσιο κλειδί που έχετε για αυτό τον κεντρικό Η/Υ είναι διαφορετικό από το δημόσιο κλειδί που δημοσιεύεται αυτή την στιγμή. Το κλειδί που δημοσιεύεται αυτή τη στιγμή είναι:';
$string['last_connect_time'] = 'Χρόνος τελευταίας σύνδεσης';
$string['last_connect_time_help'] = 'Πότε συνδεθήκατε τελευταία σε αυτόν τον κεντρικό υπολογιστή.';
$string['last_transport_help'] = 'Η μεταφορά που χρησιμοποιήσατε στην τελευταία σύνδεση σε αυτό τον κεντρικό υπολογιστή.';
$string['leavedefault'] = 'Χρήση των προεπιλεγμένων ρυθμίσεων';
$string['listservices'] = 'Κατάλογος υπηρεσιών';
$string['loginlinkmnetuser'] = '<br />Εάν είστε ένας απομακρυσμένος χρήστης του δικτύου Moodle «MNet» και μπορείτε να <a href="{$a}">επιβεβαιώσετε την διεύθυνση ηλε.ταχυδρομείου σας εδώ</a>, τότε μπορείτε να ανακατευθυνθείτε στη σελίδα σύνδεσής σας.<br />';
$string['logs'] = 'καταγραφές';
$string['managemnetpeers'] = 'Διαχείριση ομότιμων';
$string['method'] = 'Μέθοδος';
$string['methodhelp'] = 'Βοήθεια μεθόδου για {$a}';
$string['methodsavailableonhost'] = 'Οι διαθέσιμες μέθοδοι στο {$a}';
$string['methodsavailableonhostinservice'] = 'Οι διαθέσιμες μέθοδοι για «{$a->service}» στο «{$a->host}»';
$string['methodsignature'] = 'Υπογραφή μεθόδου για «{$a}»';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Συνένωση (μέχρι) 3 συμβολοσειρών και επιστροφή του αποτελέσματος';
$string['mnetdisabled'] = 'Το MNet είναι <strong>απενεργοποιημένο</strong>.';
$string['mnetidprovider'] = 'Πάροχος αναγνωριστικού/ταυτότητας MNet';
$string['mnetidproviderdesc'] = 'Μπορείτε να χρησιμοποιήσετε αυτήν τη δυνατότητα για να ανακτήσετε έναν σύνδεσμο με τον οποίο μπορείτε να συνδεθείτε, αν μπορείτε να δώσετε τη σωστή διεύθυνση ηλε.ταχυδρομείου που να ταιριάζει με το όνομα χρήστη με το οποίο προσπαθήσατε προηγουμένως να συνδεθείτε.';
$string['mnetidprovidermsg'] = 'Θα πρέπει να μπορείτε να συνδεθείτε στον πάροχο «{$a}»';
$string['mnetidprovidernotfound'] = 'Λυπούμαστε, αλλά δεν βρέθηκαν περισσότερες πληροφορίες.';
$string['mnetpeers'] = 'Ομότιμοι';
$string['mnetservices'] = 'Υπηρεσίες';
$string['mnet_session_prohibited'] = 'Οι χρήστες από τον κεντρικό εξυπηρετητή σας δεν επιτρέπεται προς το παρόν να περιηγούνται στο {$a}.';
$string['mnetsettings'] = 'Ρυθμίσεις MNet';
$string['moodle_home_help'] = 'Το μονοπάτι προς την αρχική σελίδα της εφαρμογής MNet στον απομακρυσμένο κεντρικό Η/Υ, π.χ. /moodle/.';
$string['name'] = 'Όνομα';
$string['net'] = 'Δικτύωση';
$string['networksettings'] = 'Ρυθμίσεις Δικτύου';
$string['never'] = 'Ποτέ';
$string['noaclentries'] = 'Δεν υπάρχουν καταχωρήσεις στην λίστα ελέγχου πρόσβασης SSO';
$string['noaddressforhost'] = 'Λυπούμαστε, αλλά αυτό το όνομα Η/Υ (hostname) ({$a}) δεν ήταν δυνατό να επιλυθεί!';
$string['nocurl'] = 'Η βιβλιοθήκη cURL της PHP δεν είναι εγκατεστημένη';
$string['nolocaluser'] = 'Δεν υπάρχει τοπική εγγραφή για απομακρυσμένο χρήστη και δεν ήταν δυνατή η δημιουργία νέας, καθώς αυτός ο κεντρικός υπολογιστής δεν δημιουργεί αυτόματα χρήστες. Παρακαλούμε επικοινωνήστε με τον διαχειριστή σας!';
$string['nomodifyacl'] = 'Δεν έχετε δικαίωμα να τροποποιήσετε την λίστα ελέγχου πρόσβασης MNet.';
$string['nonmatchingcert'] = 'Το θέμα του πιστοποιητικού: <br /><em>{$a->subject}</em><br /> δεν αντιστοιχεί στον κεντρικό Η/Υ από όπου προήλθε:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Υπήρξε ένα πρόβλημα κατά την ανάκτηση του δημόσιου κλειδιού.<br />Ίσως ο κεντρικός Η/Υ δεν επιτρέπει το MNet ή το κλειδί δεν είναι έγκυρο.';
$string['nosite'] = 'Αποτυχία εύρεσης του μαθήματος επιπέδου ιστοτόπου';
$string['nosuchfile'] = 'Το αρχείο/συνάρτηση {$a} δεν υπάρχει.';
$string['nosuchfunction'] = 'Αδυναμία εντοπισμού συνάρτησης, ή η συνάρτηση απαγορεύεται για RPC.';
$string['nosuchmodule'] = 'Η συνάρτηση κλήθηκε λανθασμένα και δεν ήταν δυνατή η εύρεση της. Παρακαλούμε χρησιμοποιήστε το μορφότυπο άρθρωμα/όνομααρθρώματος/βιβλιοθ/όνομασυνάρτησης.';
$string['nosuchpublickey'] = 'Αδυναμία απόκτησης του δημόσιου κλειδιού για επαλήθευση υπογραφής.';
$string['nosuchservice'] = 'Η υπηρεσία RPC δεν τρέχει σε αυτόν τον κεντρικό υπολογιστή.';
$string['nosuchtransport'] = 'Δεν υπάρχει μεταφορά με αυτο το αναγνωριστικό.';
$string['notBASE64'] = 'Η συμβολοσειρά δεν είναι στην μορφή κωδικοποίησης Base64. Δεν μπορεί να είναι ένα έγκυρο κλειδί.';
$string['notenoughidpinfo'] = 'Ο πάροχος ταυτότητας δεν μας παρέχει αρκετές πληροφορίες για τη δημιουργία ή την ενημέρωση του λογαριασμού σας τοπικά. Λυπούμαστε!';
$string['not_in_range'] = 'Η διεύθυνση IP <code>{$a}</code> δεν αναπαριστά έναν έγκυρο έμπιστο κεντρικό υπολογιστή.';
$string['notinxmlrpcserver'] = 'Προσπαθήστε να αποκτήσετε πρόσβαση στον απομακρυσμένο υπολογιστή-πελάτη MNet, όχι κατά την εκτέλεση του εξυπηρετητή XMLRPC';
$string['notmoodleapplication'] = 'ΠΡΟΕΙΔΟΠΟΙΗΣΗ: Αυτή δεν είναι μια εφαρμογή Moodle, επομένως ορισμένες από τις μεθόδους ελέγχου ενδέχεται να μην λειτουργούν σωστά.';
$string['notPEM'] = 'Αυτό το κλειδί δεν είναι σε μορφότυπο PEM. Δεν θα δουλέψει.';
$string['notpermittedtojump'] = 'Δεν έχετε δικαίωμα να εκκινήσετε μια απομακρυσμένη σύνοδο από αυτόν τον εξυπηρετητή Moodle.';
$string['notpermittedtojumpas'] = 'Δεν μπορείτε να ξεκινήσετε μια απομακρυσμένη περίοδο σύνδεσης ενώ είστε συνδεδεμένοι ως άλλος χρήστης.';
$string['notpermittedtoland'] = 'Δεν έχετε δικαίωμα να εκκινήσετε μια απομακρυσμένη σύνοδο.';
$string['off'] = 'Εκτός λειτουργίας';
$string['on'] = 'Σε λειτουργία';
$string['options'] = 'Επιλογές';
$string['peerprofilefielddesc'] = 'Εδώ μπορείτε να παρακάμψετε τις γενικές ρυθμίσεις για το ποιά πεδία να αποσταλούν και να εισαχθούν όταν δημιουργούνται νέοι χρήστες';
$string['permittedtransports'] = 'Επιτρεπόμενες μεταφορές';
$string['phperror'] = 'Ένα εσωτερικό σφάλμα PHP εμπόδισε την ολοκλήρωση της αίτησης σας.';
$string['position'] = 'Θέση';
$string['postrequired'] = 'Η συνάρτηση διαγραφής απαιτεί μια αίτηση POST.';
$string['privacy:metadata'] = 'Το πρόσθετο MNet δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['profileexportfields'] = 'Πεδία για αποστολή';
$string['profilefielddesc'] = 'Εδώ μπορείτε να ρυθμίσετε τη λίστα με τα πεδία προφίλ που στέλνονται και λαμβάνονται μέσω MNet όταν οι λογαριασμοί χρηστών δημιουργούνται ή ενημερώνονται. Μπορείτε επίσης να παρακάμψετε αυτό για κάθε MΝet peer ξεχωριστά. Σημειώστε ότι τα ακόλουθα πεδία στέλνονται πάντα και δεν είναι προαιρετικά: {$a}';
$string['profilefields'] = 'Πεδία προφίλ';
$string['profileimportfields'] = 'Πεδία για εισαγωγή';
$string['promiscuous'] = 'Αδιάκριτα';
$string['publickey'] = 'Δημόσιο Κλειδί';
$string['publickey_help'] = 'Το δημόσιο κλειδί αποκτάται αυτόματα από τον απομακρυσμένο εξυπηρετητή.';
$string['publickeyrequired'] = 'Πρέπει να παρέχετε ένα δημόσιο κλειδί.';
$string['publish'] = 'Δημοσίευση';
$string['reallydeleteserver'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε τον εξυπηρετητή;';
$string['receivedwarnings'] = 'Ελήφθησαν οι παρακάτω προειδοποιήσεις';
$string['recordnoexists'] = 'Η εγγραφή δεν υπάρχει.';
$string['reenableserver'] = 'Όχι - επιλέξτε αυτή την επιλογή για να επανενεργοποιήσετε αυτό τον εξυπηρετητή.';
$string['registerallhosts'] = 'Καταχώρηση όλων των κεντρικών Η/Υ (Αδιάκριτη κατάσταση λειτουργίας)';
$string['registerallhostsexplain'] = 'Μπορείτε να επιλέξετε να καταγράψετε όλους τους κεντρικούς υπολογιστές που προσπαθούν να συνδεθούν σε εσάς αυτόματα. Αυτό σημαίνει ότι μια εγγραφή θα φαίνεται στην λίστα σας με τους κεντρικούς υπολογιστές για κάθε MNet ιστότοπο (Moodle ή Mahara) που συνδέεται σε σας και ζητάει το δημόσιο κλειδί σας.<br />Έχετε την επιλογή «Όλοι οι κεντρικοί υπολογιστές» παρακάτω για να ρυθμίσετε υπηρεσίες και ενεργοποιώντας κάποιες υπηρεσίες εκεί, έχετε την δυνατότητα να παρέχετε υπηρεσίες σε οποιονδήποτε απομακρυσμένο εξυπηρετητή χωρίς διάκριση.';
$string['registerhostsoff'] = 'Η καταχώρηση όλων των κεντρικών υπολογιστών είναι αυτή τη στιγμή <b>εκτός λειτουργίας</b>';
$string['registerhostson'] = 'Η καταχώρηση όλων των κεντρικών υπολογιστών είναι αυτή τη στιγμή <b>σε λειτουργία</b>';
$string['remotecourses'] = 'Απομακρυσμένα μαθήματα';
$string['remotehost'] = 'Απομακρυσμένος κεντρικός Η/Υ';
$string['remotehosts'] = 'Απομακρυσμένοι κεντρικοί υπολογιστές';
$string['remoteuser'] = 'Απομακρυσμένος χρήστης {$a->remotetype}';
$string['remoteuserinfo'] = 'Το προφίλ μεταφέρθηκε/προήλθε από <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Η Δικτύωση απαιτεί την επέκταση OpenSSL';
$string['restore'] = 'Επαναφορά';
$string['returnvalue'] = 'Τιμή επιστροφής';
$string['reviewhostdetails'] = 'Επισκόπηση λεπτομερειών κεντρικού Η/Υ';
$string['reviewhostservices'] = 'Επισκόπηση υπηρεσιών κεντρικού Η/Υ';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP χωρίς κρυπτογράφηση';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (αυτο-υπογεγραμμένο)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (αυτο-υπογεγραμμένο)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (υπογεγραμμένο)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (υπογεγραμμένο)';
$string['selectaccesslevel'] = 'Παρακαλούμε επιλέξτε ένα επίπεδο πρόσβασης από τη λίστα.';
$string['selectahost'] = 'Παρακαλούμε επιλέξτε έναν απομακρυσμένο κεντρικό Η/Υ.';
$string['service'] = 'Όνομα υπηρεσίας';
$string['serviceid'] = 'Αναγνωριστικό υπηρεσίας';
$string['servicesavailableonhost'] = 'Υπηρεσίες διαθέσιμες στο «{$a}»';
$string['serviceswepublish'] = 'Υπηρεσίες που δημοσιεύουμε στο {$a}.';
$string['serviceswesubscribeto'] = 'Υπηρεσίες στο {$a} στις οποίες έχουμε συνδρομή.';
$string['settings'] = 'Ρυθμίσεις';
$string['showlocal'] = 'Εμφάνιση τοπικών χρηστών';
$string['showremote'] = 'Εμφάνιση απομακρυσμένων χρηστών';
$string['ssl_acl_allow'] = 'SSO ACL: Επιτρέπεται ο/η χρήστης «{$a->user}» από τον Η/Υ «{$a->host}»';
$string['ssl_acl_deny'] = 'SSO ACL: Απαγορεύεται ο/η χρήστης «{$a->user}» από τον Η/Υ «{$a->host}»';
$string['sslverification'] = 'Επαλήθευση SSL';
$string['sslverification_help'] = 'Αυτή η επιλογή σάς επιτρέπει να ρυθμίσετε το επίπεδο ασφάλειας κατά τη σύνδεση με έναν ομότιμο συνομιλητή που χρησιμοποιεί το HTTPS.

* Καμία: κανένα επίπεδο ασφάλειας
* Επαλήθευση μόνο του κεντρικού υπολογιστή: επικύρωση του τομέα του πιστοποιητικού SSL
* Επαλήθευση του κεντρικού υπολογιστή και του ομότιμου (συνιστάται): επικυρώνει τον τομέα και τον εκδότη του πιστοποιητικού SSL';
$string['ssoaccesscontrol'] = 'Έλεγχος πρόσβασης SSO';
$string['ssoacldescr'] = 'Χρησιμοποιήστε αυτή τη σελίδα για να παραχωρείτε/απαγορεύετε την πρόσβαση σε συγκεκριμένους χρήστες από απομακρυσμένους κεντρικούς Η/Υ του δικτύου MNet. Αυτό είναι λειτουργικό όταν προσφέρετε υπηρεσίες SSO σε απομακρυσμένους χρήστες. Για να ελέγξετε την ικανότητα των <em>τοπικών</em> σας χρηστών να περιηγούνται σε άλλους κεντρικούς Η/Υ του δικτύου MNet, χρησιμοποιήστε το σύστημα ρόλων για να τους παραχωρήσετε την δυνατότητα <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Για να δουλέψει αυτή η λειτουργία, πρέπει να έχετε ανοιχτή τη Δικτύωση Moodle, καθώς και ενεργοποιημένο το πρόσθετο αυθεντικοποίησης MNet (με ενεργή την αυτόματη προσθήκη χρηστών).';
$string['strict'] = 'Αυστηρά';
$string['subscribe'] = 'Εγγραφή';
$string['system'] = 'Σύστημα';
$string['testclient'] = 'Πελάτης (λογισμικού) για έλεγχο του MNet';
$string['testtrustedhosts'] = 'Δοκιμή μιας διεύθυνσης';
$string['testtrustedhostsexplain'] = 'Εισάγεται μια διεύθυνση IP για να δείτε εάν είναι ένας έμπιστος κεντρικός υπολογιστής.';
$string['theypublish'] = 'Δημοσιεύουν';
$string['theysubscribe'] = 'Εγγράφονται';
$string['transport_help'] = 'Αυτές οι επιλογές είναι αμοιβαίες, οπότε μπορείτε να υποχρεώσετε έναν απομακρυσμένο κεντρικό υπολογιστή να χρησιμοποιεί ένα υπογεγραμμένο πιστοποιητικό SSL μόνο εάν o εξυπηρετητής σας έχει επίσης ένα υπογεγραμμένο πιστοποιητικό SSL (Secure Sockets Layer: πρωτόκολλο ασφαλούς σύνδεσης).';
$string['trustedhosts'] = 'Κεντρικοί Η/Υ XML-RPC';
$string['trustedhostsexplain'] = '<p>Ο μηχανισμός των έμπιστων κεντρικών υπολογιστών επιτρέπει σε συγκεκριμένους υπολογιστές να εκτελούν κλήσεις μέσω XML-RPC σε οποιοδήποτε τμήμα του Moodle API. Αυτό είναι διαθέσιμο σε σενάρια για να ελέγχουν την συμπεριφορά του Moodle και μπορεί να είναι μια πολύ επικίνδυνη επιλογή αν το ενεργοποιήσετε. Εάν έχετε αμφιβολίες, αφήστε το απενεργοποιημένο.</p>

<p>Αυτό <strong>δεν</strong> είναι απαραίτητο για τη Δικτύωση Moodle.</p>

<p>Για να το ενεργοποιήσετε, εισάγετε μια λίστα από διευθύνσεις IP ή δίκτυα, ένα σε κάθε γραμμή. Κάποια παραδείγματα:</p>

Ο τοπικός σας κεντρικός υπολογιστής:<br />
127.0.0.1<br />

Ο τοπικός σας κεντρικός υπολογιστής (με ένα μπλοκ δικτύου):<br />
127.0.0.1/32<br />

Μόνο ο κεντρικός υπολογιστής με διεύθυνση IP 192.168.0.7:<br />
192.168.0.7/32<br />

Οποιοσδήποτε κεντρικός υπολογιστής με διεύθυνση IP μεταξύ 192.168.0.1 και 192.168.0.255:<br />
192.168.0.0/24<br />

Οποιοσδήποτε κεντρικός υπολογιστής:<br /> 192.168.0.0/0<br />

Προφανώς το τελευταίο παράδειγμα είναι μια <strong>μη</strong> συνιστώμενη ρύθμιση.';
$string['turnitoff'] = 'Απενεργοποίηση';
$string['turniton'] = 'Ενεργοποίηση';
$string['type'] = 'Τύπος';
$string['unknown'] = 'Άγνωστο';
$string['unknownerror'] = 'Συνέβη ένα άγνωστο σφάλμα κατά την διαπραγμάτευση.';
$string['usercannotchangepassword'] = 'Δεν μπορείτε να αλλάξετε τον κωδικό πρόσβασής σας εδώ καθώς είστε ένας απομακρυσμένος χρήστης.';
$string['userchangepasswordlink'] = '<br /> Μπορεί να έχετε την δυνατότητα να αλλάξετε τον κωδικό πρόσβασής σας στον δικό σας <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> πάροχο.';
$string['usernotfullysetup'] = 'Ο λογαριασμός χρήστη σας είναι ανολοκλήρωτος. Πρέπει να μεταβείτε <a href="{$a}">πίσω στον πάροχό σας</a> και να διασφαλίσετε ότι το προφίλ σας έχει ολοκληρωθεί εκεί. Μπορεί να χρειαστεί να αποσυνδεθείτε και να συνδεθείτε πάλι για να ισχύσει αυτό.';
$string['usersareonline'] = 'Προειδοποίηση: {$a} χρήστες από αυτόν τον εξυπηρετητή είναι προς το παρόν συνδεδεμένοι στον ιστότοπό σας.';
$string['validated_by'] = 'Επικυρώνεται από το δίκτυο: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Επαληθεύστε τον κεντρικό Η/Υ και τον ομότιμο';
$string['verifyhostonly'] = 'Επαληθεύστε τον κεντρικό Η/Υ μόνο';
$string['verifysignature-error'] = 'Η επαλήθευση της υπογραφής απέτυχε. Παρουσιάστηκε κάποιο σφάλμα.';
$string['verifysignature-invalid'] = 'Η επαλήθευση της υπογραφής απέτυχε. Φαίνεται ότι αυτά τα δεδομένα δεν ήταν υπογεγραμμένα από εσάς.';
$string['version'] = 'Έκδοση';
$string['warning'] = 'Προειδοποίηση';
$string['wrong-ip'] = 'Η IP διεύθυνσή σας δεν είναι ίδια με αυτή που έχουμε καταχωρημένη.';
$string['xmlrpc-missing'] = 'Πρέπει να έχετε εγκατεστημένο το XML-RPC στην PHP για να μπορέσετε να χρησιμοποιήσετε αυτό το χαρακτηριστικό.';
$string['yourhost'] = 'Ο κεντρικός Η/Υ σας';
$string['yourpeers'] = 'Οι ομότιμοί σας';
