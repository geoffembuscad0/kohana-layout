kohana-layout
=============

A layout module I develop for learning purposes and personal intentions only. Not for production. My aim in this work is to cut down time managing HTML codes.

Bootstrap
======================

In your Bootstrap, append this to your Kohana load modules:

// Code
'layout'=>MODPATH.'layout'

Controller
======================

In your controller, contruct the class.

// Code
$layout = new Layout();

set_head() function
======================

// controller
$presentation_tier->head = $layout->set_head("Home");

html_table() function
======================

// controller
$records = $this->getRecords(); // results of a multi dimensional array
$presentation_tier->table = $layout->html_table($records); // renders data in form of html table
